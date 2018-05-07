
$.ajax({
  url: "cargar_estados.php"   
})
  .done(function( msg ) {

    $("#estado").html(msg);
    
  });


  $.ajax({
   url: "cargar_ciudades.php"   
})
  .done(function( msg ) {

    $("#ciudad").html(msg);
    
  });

    $.ajax({
    url: "cargar_municipios.php"   
})
  .done(function( msg ) {

    $("#municipio").html(msg);
    
  });


//Cargo las ciudades//
function cargarCaracas(){



$.ajax({
url: 'cargar_caracas.php'
 
})
.done(function(resp) {
  
$("#ciudad").html(resp); 
 

});


}

function cargarFalcon(){



$.ajax({
url: 'cargar_coro.php'
 
})
.done(function(resp) {
  
$("#ciudad").html(resp); 
 

});


}




//Hago el cambio y habilito los select de ciudad ymunicipio//
function irCiudad(){


  $("#ciudad").prop('disabled',false);
  $("#municipio").prop('disabled',false);

  var tipo = $('#estado').val();

if (tipo==1) {

  cargarCaracas();
}

if (tipo==2) {
   cargarFalcon();
  } 
    
    
}




//Cargo los municipios//

function cargarMCaracas(){



$.ajax({
  url: 'combo_joinCaracas.php'
 
})
.done(function(resp) {
  
  $("#municipio").html(resp);




  });
}

function cargarMFalcon(){



$.ajax({
  url: 'combo_joinFalcon.php'
 
})
.done(function(resp) {
  
  $("#municipio").html(resp);




  });
}

//Hago el cambio de municipios//
function irMunicipio(){ 

  var tipo = $('#ciudad').val();

if (tipo==1) {

  cargarMCaracas();
}

if (tipo==2) {
   cargarMFalcon();
  } 
    
    


}







