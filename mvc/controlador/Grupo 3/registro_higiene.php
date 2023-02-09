<?php

include_once("./../modelo/conexion_bd.php");

public function enviarGuardarHigieneContenedor()
 {
    $maxDato;
    // La idea es traer el 8 por directo y luego el id contenedor x 8, ya que tiene que se multiplo y se le resta 8 para empezar conteo. (BigInt necesario a futuro)
    $maxDato = (($this->idContenedor * 8) - 8);
    echo "idC: " . $this->modeloHeContenedor->id . " , codigoConte> " . $this->modeloHeContenedor->codigo_Contenedor . " , OBSER: " . $this->observacionHigCont;
    // #PROBAR SACAANDO LOS VALORES REDUNDANTES AFERA DEL CASE.
    for ($i = 1; $i < 9; $i++) {
      $this->modeloHigCont->id_contenedor = $this->idContenedor;
      $this->modeloHigCont->id = $maxDato + $i;
      $this->modeloHigCont->id_limpieza_contenedor = $i;
      switch ($i) {
        case 1:
          $this->modeloHigCont->opcion = $this->opcionUno;
          break;
        case 2:
          $this->modeloHigCont->opcion = $this->opcionDos;
          break;
        case 3:
          $this->modeloHigCont->opcion = $this->opcionTres;
          break;
        case 4:
          $this->modeloHigCont->opcion = $this->opcionCuatro;
          break;
        case 5:
          $this->modeloHigCont->opcion = $this->opcionCinco;
          break;
        case 6:
          $this->modeloHigCont->opcion = $this->opcionSeis;
          break;
        case 7:
          $this->modeloHigCont->opcion = $this->opcionSiete;
          break;
        case 8:
          $this->modeloHigCont->opcion = $this->opcionOcho;
          break;
      }
      $this->modeloHigCont->pruebaGuardado();
      $this->modeloHigCont->guardarActualizar_DatosLlegada();
    }
  }


?>