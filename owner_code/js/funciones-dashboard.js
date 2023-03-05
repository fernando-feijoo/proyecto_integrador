function displayTime() {
  var currentTime = new Date();
  var hours = currentTime.getHours();
  var minutes = currentTime.getMinutes();
  var seconds = currentTime.getSeconds();
  var ampm = hours >= 12 ? "pm" : "am";
  hours = hours % 12;
  hours = hours ? hours : 12;
  var timeString =
    (hours < 10 ? "0" + hours : hours) +
    ":" +
    (minutes < 10 ? "0" + minutes : minutes) +
    ":" +
    (seconds < 10 ? "0" + seconds : seconds) +
    " " +
    ampm;
  document.getElementById("clock").innerHTML = timeString;
}
setInterval(displayTime, 1000);

function displayDate() {
  var currentDate = new Date();
  var day = currentDate.getDate();
  var month = currentDate.getMonth() + 1;
  var year = currentDate.getFullYear();
  var dateString =
    (day < 10 ? "0" + day : day) +
    "/" +
    (month < 10 ? "0" + month : month) +
    "/" +
    year;
  document.getElementById("date").innerHTML = dateString;
}
setInterval(displayDate, 1000);

const botonRegistro = document.querySelectorAll("#boton-registrar-contenedor");
botonRegistro.forEach((boton) => {
  boton.addEventListener("click", function (event) {
    event.preventDefault();
    Swal.fire({
      title: "¿Desea inspeccionar el contenedor?",
      text: "Antes de continuar, verifique el correcto",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#0d6efd",
      cancelButtonColor: "#9b9b9b",
      confirmButtonText: "Hacer Inspección",
    }).then((result) => {
      if (result.value) {
        window.location.href = boton.href;
      }
    });
  });
});

// FUNCION PARA EL GRUPO 3 EL ROL DE GRUPO 3 BY Fernando F. Feijoo

var id = "<?php echo $_GET['id_regis']; ?>";
var numCont = "<?php echo $_GET['numCont']; ?>";
const botonesSeleccionar = document.querySelectorAll(
  "#boton-seleccionar-contenedor"
);
botonesSeleccionar.forEach((boton) => {
  boton.addEventListener("click", (event) => {
    event.preventDefault();
    if (!boton.href.includes(`?id_regis=${id}&&numCont=${numCont}`)) {
      Swal.fire({
        title: "Acceso denegado",
        text: "Seleccione un contenedor.",
        icon: "error",
      }).then(() => {
        window.location.href = "./vista_contenedores_g3.php";
      });
    }
  });
});

// FUNCION PARA EL GRUPO 2 EL ROL DE GRUPO 2 BY Fernando F. Feijoo

var id = "<?php echo $_GET['g2_h']; ?>";
const botonesSeleccionarG2 = document.querySelectorAll(
  "#boton-ingresar-control"
);
botonesSeleccionarG2.forEach((boton) => {
  boton.addEventListener("click", (event) => {
    event.preventDefault();
    if (!boton.href.includes(`?g2_h=${id}`)) {
      Swal.fire({
        title: "Acceso denegado",
        text: "Ingrese datos de control.",
        icon: "error",
      }).then(() => {
        window.location.href = "./vista_control_calidad_g2.php";
      });
    }
  });
});
