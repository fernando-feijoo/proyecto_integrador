// Modelo queda funcional haciendo consultas dinamicas con ajax
$(document).ready(function () {
  var id = $("#inputGroupSelect03").val(); // obtenemos el valor seleccionado
  $.ajax({
    url: "./../modelo/Grupo 3/ajax/consulta_chofer_cedula.php", // url del archivo PHP
    method: "post",
    data: { id: id }, // enviamos el id seleccionado
    success: function (response) {
      // actualizamos el valor del campo "C.I"
      $("input[name='cedula']").val(response);
    },
  });
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

$(document).ready(function () {
  var id = $("#inputGroupSelect02").val(); // obtenemos el valor seleccionado
  $.ajax({
    url: "./../modelo/Grupo 3/ajax/consulta_marca_vehiculo.php", // url del archivo PHP
    method: "post",
    data: { id: id }, // enviamos el id seleccionado
    success: function (response) {
      // actualizamos el valor del campo "C.I"
      $("input[name='marca']").val(response);
    },
  });
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

setTimeout(function () {
  document.getElementById("alertas").style.display = "none";
}, 3000);

const botonesEliminar = document.querySelectorAll("#boton-eliminar-garita");
botonesEliminar.forEach(boton => {
  boton.addEventListener("click", function(event) {
    event.preventDefault();
    Swal.fire({
      title: '¿Desea eliminar el registro?',
      text: "Esta acción no se puede deshacer",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#9b9b9b',
      confirmButtonText: 'Eliminar'
    }).then((result) => {
      if (result.value) {
        window.location.href = boton.href;
      }
    });
  });
});