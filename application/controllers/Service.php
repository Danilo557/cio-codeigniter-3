<?php
defined('BASEPATH') or exit('No direct script access allowed');

// https://testing.cionline.mx/contacto-rests
// https://testing.cionline.mx/contacto-rest/enviar-mail
// https://testing.cionline.mx/contacto-rest/enviar-mail-compra
// https://testing.cionline.mx/auth/authorize
// https://testing.cionline.mx/auth/accesstoken
// https://testing.cionline.mx/general_api/prospecto-externo/create

use GuzzleHttp\Client;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;
 

class Service extends CI_Controller
{
    private $client;

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['Guzzle', 'session']);
        $this->load->helper(['api', 'metadata']);

        $this->client = new Client([
            'base_uri' => apiUrl(),
        ]);
    }



    public function enviar_mail_compra()
    {

        $data = [
            'compra-rfc' => $this->input->post('compra-rfc'),
            'compra-razon_social' => $this->input->post('compra-razon_social'),
            'compra-correo_electronico' => $this->input->post('compra-correo_electronico'),
            'compra-telefono' => $this->input->post('compra-telefono'),
            'tipo-paquete' => $this->input->post('tipo-paquete'),
            'codigo-postal' => $this->input->post('codigo-postal'),
            'inner_mails' => [
                [
                    'address' => 'cobe6@xpd.mx',
                    'name' => 'Desarrollo'
                ]
            ],
        ];

        $res = $this->client->request('POST', '/contacto-rest/enviar-mail-compra', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode($data)
        ]);


        return $res;
    }

    public function formulario_plan()
    {
        $recapcha = $this->recapcha($this->input->post('g-recapcha-response'));
        if ($recapcha === true) {
            $email = $this->enviar_mail_compra();
            $email = json_decode($email->getBody()->getContents(), true);
            return $email;
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode([
                    'status' => '400',
                    'message' => 'No supero la prueba del robot',
                ]));
        }
    }

    public function formulario_contacto()
    {
        $recapcha = $this->recapcha($this->input->post('g-recapcha-response'));

        if ($recapcha == true) {
            $contact = $this->contacto_rests();
            $email = $this->contacto_enviar_mail();
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'status' => $email["status"],
                'message' => isset($email["data"]["msj"]) ? $email["data"]["msj"] : $email["data"]["message"] ,
            ]));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode([
                    'status' => '400',
                    'message' => 'No supero la prueba del robot',
                ]));
        }
    }

    public function contacto_enviar_mail()
    {

        try {
            $res = $this->client->request('POST', '/contacto-rest/enviar-mail', [
                'form_params' => [
                    'nombre_completo' => $this->input->post('nombre_completo'),
                    'telefono' => $this->input->post('telefono'),
                    'correo_electronico' => $this->input->post('correo_electronico'),
                    'estado' => $this->input->post('estado'),
                    'nombre_empresa' => $this->input->post('Nombre_empresa'),
                    'codigo_postal' => $this->input->post('codigo_postal'),
                    'mensaje' => $this->input->post('mensaje'),
                    'inner_mails' => [
                        [
                            'address' => 'cobe6@xpd.mx',
                            'name' => 'cobe6'
                        ]

                    ],
                ]
            ]);

            $res = json_decode($res->getBody()->getContents(), true);
            return $res;
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $responseBodyAsString = json_decode($responseBodyAsString, TRUE);
            return $responseBodyAsString;
        }
    }

    public function contacto_rests()
    {

        try {
            $res = $this->client->request('POST', '/contacto-rests', [
                'form_params' => [
                    'nombre_completo' => $this->input->post('nombre_completo'),
                    'telefono' => $this->input->post('telefono'),
                    'correo_electronico' => $this->input->post('correo_electronico'),
                    'estado' => $this->input->post('estado'),
                    'nombre_empresa' => $this->input->post('Nombre_empresa'),
                    'codigo_postal' => $this->input->post('codigo_postal'),
                    'mensaje' => $this->input->post('mensaje'),
                ]
            ]);

            $res = json_decode($res->getBody()->getContents(), true);
            return $res;
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $responseBodyAsString = json_decode($responseBodyAsString, TRUE);
            return $responseBodyAsString;
        }

        return $res;
    }

    public function recapcha($token)
    {
        $googleApi = new GuzzleHttp\Client();

        $res = $googleApi->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => secret_key(),
                'response' => $token,
            ]
        ]);

        $res = json_decode($res->getBody()->getContents(), true);

        if ($res["success"] === TRUE && $res["score"] > 0.7) {
            return TRUE;
        }
        return FALSE;
    }


    public function auth_authorize()
    {
        $res = $this->client->request('GET', '/auth/authorize', [
            'form_params' => credentials()
        ]);

        $this->session->set_userdata('api_authorize', json_decode($res->getBody()->getContents(), TRUE));
    }


    public function auth_accesstoken()
    {
        $api_authorize = $this->session->userdata('api_authorize');
        $res = $this->client->request('GET', '/auth/accesstoken', [
            'form_params' => [
                'authorization_code' => $api_authorize["data"]["authorization_code"],
                'passphrase' => '99800b85d3383e3a2fb45eb7d0066a4879a9dad0'
            ]
        ]);

        $this->session->set_userdata('api_accesstoken', json_decode($res->getBody()->getContents(), TRUE));
    }


    public function formulario_prueba_gratis()
    {
        $recapcha = $this->recapcha($this->input->post('g-recapcha-response'));

        if ($recapcha == true) {
            $this->validate_token_lifecycle();
            $prospecto = $this->prospecto_create();

            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'status' => $prospecto["status"],
                    'message' => $prospecto["message"],
                ]));
        } else {
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(400)
                ->set_output(json_encode([
                    'status' => '400',
                    'message' => 'No supero la prueba del robot',
                ]));
        }
    }

    public function prospecto_create()
    {


        $api_accesstoken = $this->session->userdata('api_accesstoken');
        $access_token = $api_accesstoken["data"]["access_token"];

        $headers = [
            'Authorization' => 'Bearer ' . $access_token,
            'Accept'        => 'application/json',
        ];

        $data = [
            'rfc' => $this->input->post('rfc'),
            'razon_social' => $this->input->post('razon_social'),
            'correo_electronico' => $this->input->post('correo_electronico'),
            'telefono' => $this->input->post('telefono'),
            'vigencia' =>  $this->input->post('vigencia'),
            'codigo-postal' => $this->input->post('codigo-postal'),
            'vigencia' => date('Y-m-d', strtotime("+30 days")),
            'inner_mails' => [
                [
                    'address' => 'cobe6@xpd.mx',
                    'name' => 'Desarrollo'
                ]
            ],
        ];


        try {
            $res = $this->client->request('POST', '/general_api/prospecto-externo/create', [
                'headers' => $headers,
                'form_params' => $data
            ]);

            $res = json_decode($res->getBody()->getContents(), true);
            return $res;
        } catch (GuzzleHttp\Exception\ClientException $e) {

            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $responseBodyAsString = json_decode($responseBodyAsString, TRUE);
            return $responseBodyAsString;
        }
    }


    public function validate_token_lifecycle()
    {

        $fecha_actual = (int) time();
        if (!$this->session->has_userdata('api_authorize')) {
            $this->auth_authorize();
        }

        $api_authorize = $this->session->userdata('api_authorize');
        $expires_at_authorize = (int)  $api_authorize["data"]["expires_at"];
        $fecha_expirada = $fecha_actual > $expires_at_authorize;


        if ($fecha_expirada) {
            $this->auth_authorize();
        }


        //refresh
        $api_authorize = $this->session->userdata('api_authorize');



        if ($api_authorize["status"] == 200) {

            if (!$this->session->has_userdata('api_accesstoken')) {
                $this->auth_accesstoken();
            }

            $api_accesstoken = $this->session->userdata('api_accesstoken');
            $expires_at_accesstoken = (int) $api_accesstoken["data"]["expires_at"];

            $fecha_expirada = $fecha_actual > $expires_at_accesstoken + 1800;


            if ($fecha_expirada) {
                $this->auth_accesstoken();
            }
        }
    }
}
