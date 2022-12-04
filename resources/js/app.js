import './bootstrap';

const menu = document.querySelector("#menu");
const contenedor = document.querySelector("#contenedor");

if(window.screen.width > 768){
    menu.classList.add("hidden");
    contenedor.classList.remove("hidden");
}else{
    menu.classList.remove("hidden");
    contenedor.classList.add("hidden");
}

window.addEventListener("resize",()=>{
    if(window.screen.width > 768){
        menu.classList.add("hidden");
        contenedor.classList.remove("hidden");
    }else{
        menu.classList.remove("hidden");
        contenedor.classList.add("hidden");
    }
});

menu.addEventListener("click", mostrarContenedor);

function mostrarContenedor(){

    if(contenedor.classList.contains("hidden")){
        contenedor.classList.remove("hidden");
    }else{
        contenedor.classList.add("hidden");
    }

}

