// ***** Se tiene que modificar ya que daria datos erroneos con cada vez que se cargue la pantalla. *****
// window.onload = function () {
//   var fecha = new Date(); //Fecha actual
//   var mes = fecha.getMonth() + 1; //obteniendo mes
//   var dia = fecha.getDate(); //obteniendo dia
//   var year = fecha.getFullYear(); //obteniendo año
//   var week = moment(fecha).isoWeek();
//   if (dia < 10) dia = "0" + dia; //agrega cero si el menor de 10
//   if (mes < 10) mes = "0" + mes; //agrega cero si el menor de 10
//   document.getElementById("fechaActual").value = year + "-" + mes + "-" + dia;
//   document
//     .getElementById("semanaActual")
//     .setAttribute("value", week.toString().padStart(2, "0"));

//   var fecha = new Date(); //Fecha actual
//   var hora = fecha.getHours(); //obteniendo hora
//   var minutos = fecha.getMinutes(); //obteniendo minutos

//   if (hora < 10) hora = "0" + hora; //agrega cero si el menor de 10
//   if (minutos < 10) minutos = "0" + minutos; //agrega cero si el menor de 10

//   document
//     .getElementById("horaLlegada")
//     .setAttribute("value", hora + ":" + minutos);
// };

// Modelo queda funcional haciendo consultas dinamicas con ajax
$(document).ready(function () {
  $("#inputGroupSelect03").change(function () {
    var id = $(this).val(); // obtenemos el valor seleccionado

    $.ajax({
      url: "./../modelo/Grupo 3/ajax/consulta_chofer_cedula.php", // url del archivo PHP
      method: "post",
      data: { id: id }, // enviamos el id seleccionado
      success: function (response) {
        // actualizamos el valor del campo "C.I"
        $("input[name='cedula']").val(response);
      },
    });
  });
});

// Modelo queda funcional haciendo consultas dinamicas con ajax
$(document).ready(function () {
  $("#inputGroupSelect02").change(function () {
    var id = $(this).val(); // obtenemos el valor seleccionado

    $.ajax({
      url: "./../modelo/Grupo 3/ajax/consulta_marca_vehiculo.php", // url del archivo PHP
      method: "post",
      data: { id: id }, // enviamos el id seleccionado
      success: function (response) {
        // actualizamos el valor del campo "C.I"
        $("input[name='marca']").val(response);
      },
    });
  });
});

// document.addEventListener("DOMContentLoaded", function () {
//     //Guardar la ruta actual
//     let rutaActual = window.location.href;
  
//     let botonGuardarGarita = document.getElementById("boton-guardar-garita");
//     let botonActualizarGarita = document.getElementById(
//       "boton-actualizar-garita"
//     );
  
//     //Comprobar la ruta actual
//     if (rutaActual === "/vista_llegada_g3.php") {
//       botonGuardarGarita.classList.remove("d-none");
//       botonActualizarGarita.classList.add("d-none");
//     } else if (rutaActual === "./vista_listado_garita_g3.php") {
//       botonGuardarGarita.classList.add("d-none");
//       botonActualizarGarita.classList.remove("d-none");
//     }
//   });

// document.getElementById("registro-llegada").addEventListener("click", function () {
//     document.getElementById("boton-guardar-garita").classList.remove("d-none");
//     document.getElementById("boton-actualizar-garita").classList.add("d-none");
//   });

// document.getElementById("boton-editar-garita").addEventListener("click", function () {
//   document.getElementById("boton-guardar-garita").classList.add("d-none");
//   document.getElementById("boton-actualizar-garita").classList.remove("d-none");
// });

setTimeout(function () {
  document.getElementById("alerta-guardado-garita").style.display = "none";
}, 3000);

setTimeout(function () {
  document.getElementById("error-guardado-garita").style.display = "none";
}, 3000);

setTimeout(function () {
  document.getElementById("registro-incompleto").style.display = "none";
}, 3000);