<?php
  ob_start();
  
?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col s12 offset-m1 m10 offset-l2 l8">
        <div class="card-panel grey lighten-3 z-depth-3">
            <form method="post" action="controlador/servicios/serv_actualizarUsuario.php" role="form">
               <div class="row">
                   <?php
                      $mvc = new MvcController();
                      $mvc -> updateUsuarioController();
                    ?>
                    <div class="input-field col s12 m6">
                        <select name="rol_id" id="rol_id" required>
                            <?php
                                $mvc -> selectRolSeleccionado();
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s12 m6">
                        <select name="mesa_id" id="mesa_id" required>
                            <?php
                                $mvc -> selectMesaSeleccionado();
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s12 m6">
                        <select name="programa_id" id="programa_id" required>
                            <?php
                                $mvc -> selectProgramaSeleccionado();
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