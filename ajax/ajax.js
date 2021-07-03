$(document).ready(function(){
    $("#enviar").on('click',function(e){
        e.preventDefault();
    //aca cogemos la opcion del radio seleccionada
    let opcion=$('input[name=opcion]:checked', '#radios').val();
    let fila=  $("#fila").val();
    let puesto =$("#puesto").val();
    alert(opcion);
    let errores=[];
    if(opcion==undefined){
     errores.push("Debe seleccionar una opcion");
 }

 if(fila==""){
    errores.push("Debe digitar una fila");
}
if(puesto==""){
    errores.push("Debe digitar una puesto");
}
if(errores.length>0){
    for(let i=0;i<errores.length;i++){
      $("#errores").html(errores[i]);
  }
}else{
    //si no hay erores dejamos erroes limpio y hacemos la peticion ajax
    $("#errores").html(""); 
}

if(opcion=="Comprar"){
    $ruta_compra="http://localhost/reserva_teatro/Logica_asignacion/ocupacion.php";
    let datos= $('#formulario').serialize();
    $.ajax({
        type:"POST",
        url:$ruta_compra,
        data:datos,
        success:function(respuestaservidor){
            if(respuestaservidor=="si"){
                base_url="http://localhost/reserva_teatro";
                $('#cargarPagina').load(base_url);
            }else{
                alert('No es posible realizar la operacion puesto vendido');
            }


        }
    })

}else if(opcion=="Reservar"){
    $ruta_reserva="http://localhost/reserva_teatro/Logica_asignacion/reservacion.php";
    let datos= $('#formulario').serialize();
    $.ajax({
        type:"POST",
        url:$ruta_reserva,
        data:datos,
        success:function(respuestaservidor){
           if(respuestaservidor=="si"){
            base_url="http://localhost/reserva_teatro";
            $('#cargarPagina').load(base_url);
        }else{
            alert('No es posible realizar la operacion puesto vendido');
        }

        

    }
})
}else if(opcion=="Liberar"){
  $ruta_liberacion="http://localhost/reserva_teatro/Logica_asignacion/liberacion.php";
  let datos= $('#formulario').serialize();
  $.ajax({
    type:"POST",
    url:$ruta_liberacion,
    data:datos,
    success:function(respuestaservidor){
       if(respuestaservidor=="si"){
        base_url="http://localhost/reserva_teatro";
        $('#cargarPagina').load(base_url);
    }else{
        alert('No es posible realizar la operacion puesto vendido');
    }

    

}
})
}

})

    $("#borrar").on('click',function(e){
        e.preventDefault();
        $("#borrar").on('click',function(e){
            e.preventDefault();
            $("#fila").val("");
            $("#puesto").val("");
        })

    })

});