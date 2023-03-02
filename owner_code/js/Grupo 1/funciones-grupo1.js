  setTimeout(function () {
    document.getElementById("alertas").style.display = "none";
  }, 3000);
  
  const botonesEliminar = document.querySelectorAll("#boton-eliminar-eva");
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
  
  const botonGuardar = document.querySelectorAll("#boton-guardar-eva");
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
  
  const botonActualizar = document.querySelectorAll("#boton-actualizar-eva");
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