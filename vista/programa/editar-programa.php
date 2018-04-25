<?php
  ob_start();
  
?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col s12 offset-m1 m10 offset-l2 l8">
        <div class="card-panel grey lighten-3 z-depth-3">
            <form method="post" action="controlador/servicios/programa/serv_actualizarPrograma.php" role="form">
               <div class="row">
                   <?php
                      $mvc = new MvcController();
                      $mvc -> updateProgramaController();
                    ?>
                    <div class="input-field col s12 m6">
                        <select name="facultad_id" id="facultad_id" required>
                            <?php
                                $mvc -> selectFacultadSeleccionado();
                            ?>
                        </select>
                    </div>
               </div>
               
               <br>
                <center>
                    <button type="submit" name="submit" value="submit" class="btn waves-effect waves-light">Actualizar</button>
                </center>
            </form>
        


<?php
  ob_end_flush();
?>