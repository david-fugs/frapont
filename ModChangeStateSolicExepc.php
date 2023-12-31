<!DOCTYPE html>
<html>

    <?php
    include 'autoloader.php';
    $dto = new AdminApiImpl();
    $lng = 0;
    session_start();
    if(isset($_SESSION["ididioma"])) $lng = $_SESSION["ididioma"];
    $idexcep = $_GET["1"];
    $Typeopen = $_GET["2"];
    $MSJobligatori = "'".$dto->__($lng,"La observacion es obligatoria")."'";
  
    ?>




<style>
        input[type="date"],
        input[type="text"] {
        display: inline-block;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 250px;
        margin-bottom: 10px;
        }

        input[type="date"]:read-only,
        input[type="text"]:read-only {
        background-color: #ddd;
        }




      /* Estilo para el fondo del modal */
      .modal-content.glassmorphism {
          background: rgba(255, 255, 255, 0.2); /* Color de fondo con transparencia */
          backdrop-filter: blur(10px); /* Efecto de desenfoque */
          border: 1px solid rgba(255, 255, 255, 0.125); /* Borde con transparencia */
          border-radius: 10px; /* Borde redondeado */
      }

      /* Estilo para el cuerpo del modal */
      .modal-body {
          background: rgba(255, 255, 255, 0.1); /* Color de fondo con transparencia */
          padding: 20px; /* Espaciado interior */
      }

      /* Estilo para los botones dentro del modal */
      .btn_modal {
          background-color: rgba(72, 90, 255, 0.9); /* Color de fondo con transparencia */
          border: none; /* Sin borde */
          color: white; /* Color del texto */
          border-radius: 5px; /* Borde redondeado */
          margin-right: 10px; /* Espaciado entre botones */
      }

      /* Estilo para los botones cuando están en hover */
      .btn_modal:hover {
          background-color: rgba(81, 209, 246, 0.7); /* Cambia el color de fondo durante el hover */
          color: white; /* Cambia el color del texto durante el hover */
      }


      /* Estilo para el título del modal */
      .modal-body h3 {
          color: white; /* Color del texto del título */
          text-align: center; /* Alineación del texto del título */
      }


      /* Estilo para el select */
      .mi-select {
          width: 100%; /* Ancho del select, puedes ajustarlo según tus necesidades */
          padding: 10px; /* Espaciado interno */
          font-size: 16px; /* Tamaño de fuente */
          border: 1px solid #ccc; /* Borde del select */
          border-radius: 10px; /* Borde redondeado */
          background-color: #fff; /* Color de fondo */
          color: #333; /* Color del texto */
      }

      /* Estilo para el select cuando está en hover (opcional) */
      .mi-select:hover {
          border-color: #007bff; /* Cambia el color del borde al pasar el mouse sobre él */
      }

      /* Estilo para el select cuando está enfocado (opcional) */
      .mi-select:focus {
          border-color: #007bff; /* Cambia el color del borde cuando el select está enfocado */
          outline: none; /* Elimina el contorno predeterminado al hacer clic en el select */
          box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Agrega una sombra suave cuando el select está enfocado */
      }


</style>



    <center>
    <div class="modal-dialog">
        <div class="modal-content glassmorphism">
        <div class="glassmorphism">
        <?php 
            if ($Typeopen == '1') {
                echo '<h3 style="color:white">'.$dto->__($lng,"Aprobar Periodo").'</h3>';
            }else{
                echo '<h3 style="color:white">'.$dto->__($lng,"Denegar Periodo").'</h3>';
            }

            ?>
        </div>
          <div class="modal-body">

              <form name="changestatesoltper">
              <label><?php echo $dto->__($lng,"Observaciones");?>:</label><input type="text" id="obs" name="obsN" required>

             </form>
              <br>
          </div>
        <div class="">
        <button type="button" class="btn_modal" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> <?php echo $dto->__($lng,"Cancel·lar");?></button>
        <button type="button" class="btn_modal" data-toggle="modal" onclick="CahngeStateSolcExepct(obs,<?php echo $idexcep;?>,<?php echo $Typeopen;?>,<?php echo $MSJobligatori;?>);"><span class="glyphicon glyphicon-ok"></span>
        </div>
        </div>
      </div>
    </center>
</html>
