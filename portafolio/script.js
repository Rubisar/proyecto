document.getElementById("btnMenu").addEventListener("click",

function () {
    let elemento = document.getElementById("navbar");
    if (elemento.classList.contains("navbar")) {
   elemento.classList.remove("navbar");
   elemento.classList.add("no_navbar");
      } else {
        elemento.classList.remove("no_navbar");
        elemento.classList.add("navbar");
      }
  
    });const nombre = document.querySelector("#nombre");
    const Telefono = document.querySelector("#tel");
    const Email = document.querySelector("#Email");
    const Mensaje = document.querySelector("#Men");
    const formulario = document.querySelector(".formulario");
    formulario.addEventListener('submit', validarformulario);
    
    
function validarformulario(e){
 e.preventDefault();
    if (nombre.value ==="" || Telefono.value ==="" || Mensaje.value ==="" || correo.value === "") {
     mostrarerror('todos los campos son obligatorios')
     return;
    }


    alert('hemos recibido su datos,pronto nos pondremos en contacto')
    e.target.submit();
}

function mostrarError(Mensaje) {
    const alert = document.createElement('p');
    alert.textContent = Mensaje;
    alert.style.background= "red";
    alert.style.color="while"
    
    formulario.appendChild(alert);

    setTimeout(() => {
    alert.remove();
    }, 5000);
}
