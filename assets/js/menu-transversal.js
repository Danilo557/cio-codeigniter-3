const  _width= 400;
const  _height=250 ;
function menu(){

    var links=[
        {
            href:"#nuestro-sistema",
            name:"Nuestro Sistema",
            img:"/img/menu_main/documentos.png"
        },
        {
            href:"#en-linea",
            name:"En Línea",
            img:"img/menu_main/documentos.png"
        },
        {
            href:"#ahorra-tiempo",
            name:"Ahorra Tiempo",
            img:"img/menu_main/documentos.png"
        },
        {
            href:"#opciones",
            name:"Opiniones",
            img:"img/menu_main/documentos.png"
        },
        {
            href:"#planes",
            name:"Planes",
            img:"img/menu_main/documentos.png"
        },
        {
            href:"#contacto",
            name:"Contácto",
            img:"img/menu_main/documentos.png"
        }
    ];


    $links=links.reverse();

    const x=[];
    const y=[];
    const frec=links.length;
    const tam=100/( frec-1);
    for (let index = 0; index < frec; index++) {
        _x=(_width-((_width/100)*index)*tam);
        _y=_height-((_height/100)*index)*tam ;
        x.push(_x);
        y.push(_y);
    }

    let lienzo= $('#menu-tranversal')

    for (let index = 0; index < x.length; index++) {
        
        $div=`
        <div class="conten" style="top:${y[index]}px; right:${x[index]}px;">
            <a href="${links[index].href}" class="text-point">
                ${links[index].name}
            </a>
            <div class="d-flex justify-content-center align-items-center">
                <div class="point d-flex justify-content-center align-items-center">
                        <img class="lazy" data-src="${links[index].img}" height="100px" width="100px" alt="${links[index].name}">
                </div>
            </div>
        </div>`;
        lienzo.append($div)
    }
   
    lineaTransversal(_width,_height);

}


function lineaTransversal(width,height){
    const frec=1000;
    x=[];
    y=[];
    for (let index = 0; index < frec; index++) {
        _x=width-((width/frec)*index)*1;
        _y=height-((height/frec)*index)*1;
        x.push(_x);
        y.push(_y);
    }

    let lienzo= $('#menu-tranversal')
    for (let index = 0; index < x.length; index++) {
         
        lienzo.append(`<div class="point_l" style="top:${y[index]}px; right:${x[index]}px;"></div>`)
    }
    

     
}

menu();