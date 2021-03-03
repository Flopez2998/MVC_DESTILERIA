const formulariosAjax = document.querySelectorAll(".FormularioAjax");

function enviarFormularioAjax(e){
    e.preventDefault();
    
    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let encabezados = new Headers();

    let config = {
        method: method,
        headers: encabezados,
        mode:'cors',
        cache:'no-cache',
        body: data
    }

    let textoAlerta;

    if(tipo==="save"){
       textoAlerta="Los datos quedaran guardados en el sistema"; 
    }else if(tipo==="delete"){
        textoAlerta="Los datos seran eliminados de manera permanente en el sistema";
        
    }else if(tipo==="update"){
        textoAlerta="Los datos del sistema seran actualizados ";

    }else if(tipo==="search"){
        textoAlerta="Se eliminaran los datos del sistema";

    }else if(tipo==="loans"){
        textoAlerta="Quieres remover los datos seleccionados para cotizaciones";
    }else{
        textoAlerta="Quieres realizar la operacion solicitada";
    }

    Swal.fire({
        title: '¿Estás Seguro?',
        text: textoAlerta,
        type: 'question',
        showCancelButton:true,
        cancelButtonColor:'#d33',
        confirmButtonColor: '#19909A',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            fetch(action,config)
            .then(respuesta => respuesta.json())
            .then(respuesta =>{
                return alertasAjax(respuesta);
            });      
        }
    });
    
}

formulariosAjax.forEach(formularios =>{
  formularios.addEventListener("submit", enviarFormularioAjax);  
});

function alertasAjax(alerta){
    if(alerta.Alerta==="simple"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
        });
    }else if(alerta.Alerta==="recargar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
        }).then((result)=>{
            if(result.value){
                location.reload();        
            }
        });
    }else if(alerta.Alerta==="limpiar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
        }).then((result)=>{
            if(result.value){
                document.querySelector(".FormularioAjax").reset();        
            }
        });
    }else if(alerta.Alerta==="redireccionar"){
        window.location.href=alerta.URL;
    }




}