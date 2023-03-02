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
}, 4000);

const botonesEliminar = document.querySelectorAll("#boton-eliminar-garita");
botonesEliminar.forEach((boton) => {
  boton.addEventListener("click", function (event) {
    event.preventDefault();
    Swal.fire({
      title: "¿Desea eliminar el registro?",
      text: "Esta acción no se puede deshacer",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#9b9b9b",
      confirmButtonText: "Eliminar",
    }).then((result) => {
      if (result.value) {
        window.location.href = boton.href;
      }
    });
  });
});

const botonGuardar = document.querySelectorAll("#boton-guardar-garita");
botonGuardar.forEach((boton) => {
  boton.addEventListener("click", function (event) {
    event.preventDefault();
    Swal.fire({
      title: "¿Desea guardar el registro?",
      text: "Antes de guardar verifique los datos",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#0d6efd",
      cancelButtonColor: "#9b9b9b",
      confirmButtonText: "Guardar",
    }).then((result) => {
      if (result.value) {
        document.querySelector("form").submit();
      }
    });
  });
});

const botonActualizar = document.querySelectorAll("#boton-actualizar-garita");
botonActualizar.forEach((boton) => {
  boton.addEventListener("click", function (event) {
    event.preventDefault();
    Swal.fire({
      title: "¿Desea actualizar el registro?",
      text: "Antes de actualizar verifique los datos",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#0dcaf0",
      cancelButtonColor: "#9b9b9b",
      confirmButtonText: "Actualizar",
    }).then((result) => {
      if (result.value) {
        document.querySelector("form").submit();
      }
    });
  });
});

const botonGuardarCont = document.querySelectorAll("#btn-guardar-general-cont");
botonGuardarCont.forEach((boton) => {
  boton.addEventListener("click", function (event) {
    event.preventDefault();
    Swal.fire({
      title: "¿Desea guardar el registro?",
      text: "Antes de guardar verifique los datos",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#0d6efd",
      cancelButtonColor: "#9b9b9b",
      confirmButtonText: "Guardar",
    }).then((result) => {
      if (result.value) {
        document.querySelector("form").submit();
      }
    });
  });
});

const botonActualizarCont = document.querySelectorAll(
  "#btn-actualizar-general-cont"
);
botonActualizarCont.forEach((boton) => {
  boton.addEventListener("click", function (event) {
    event.preventDefault();
    Swal.fire({
      title: "¿Desea actualizar el registro?",
      text: "Antes de actualizar verifique los datos",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#0dcaf0",
      cancelButtonColor: "#9b9b9b",
      confirmButtonText: "Actualizar",
    }).then((result) => {
      if (result.value) {
        document.querySelector("form").submit();
      }
    });
  });
});
