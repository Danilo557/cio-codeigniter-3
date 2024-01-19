<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['metadata','activeroute']);
	}

	public function index()
	{
		$view = 'index';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}

	public function plan_anual()
	{
		$view = 'planes/plan-anual';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}

	public function plan_mensual()
	{
		$view = 'planes/plan-mensual';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}

	public function probar_gratis()
	{
		$view = 'planes/probar-gratis';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}


	public function que_es_cionline()
	{
		$view = 'que-es-cionline';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}

	public function integracion_a_portal_xpd()
	{
		$view = 'integracion-a-portal-xpd';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}

	public function caracteristicas()
	{
		
		$view = 'caracteristicas';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}

	public function soporte()
	{
		$view = 'soporte';
		$data = getMetadataPages($view);
		//$this->output->cache(1);
		$this->layout($view, $data);
	}


	 


	function layout($view, $data = [])
	{
		$data['content'] = $this->load->view($view, '', true);
		
		if(isset($data['critical_path'])){
			if(!empty($data['critical_path'])){
				$data['css_path'] = $this->load->view($data["critical_path"], '', true);
			}
				
		}
		
		$this->load->view('layouts/default', $data);
	}

	 

	public function sendMail()
	{

		$this->email->from('desmercadotecnia@basalcapital.mx', 'desmercadotecnia@basalcapital.mx');
		$this->email->to('cobe6@xpd.mx');
		$this->email->subject('Email Test');
		$template='Hola';
		$this->email->message($template);
		$this->email->send();
	}

	public function clear_cache()
	{
		$this->output->delete_cache('/');
		$this->output->delete_cache('integracion-a-portal-xpd');
		$this->output->delete_cache('caracteristicas');
		$this->output->delete_cache('que-es-cionline');
		$this->output->delete_cache('soporte');
		$this->output->delete_cache('plan-anual');
		$this->output->delete_cache('plan-mensual');
		$this->output->delete_cache('probar-gratis');
		 
		 
	}
}
