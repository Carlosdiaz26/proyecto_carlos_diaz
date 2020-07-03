<?php include("nabvar.php"); ?>
<?php 
   $email =  $_SESSION["email"];
   $sql = ("SELECT * FROM usuario INNER JOIN registro ON registro.id_registro = usuario.id_registro WHERE usuario.email = '$email'"); 
   //die($sql);
   $result=mysqli_query(conexion::con(), $sql);
   foreach ($result as $reg) {
?>


<br>

<div class="container">
  <div class="row">
     <div class="col-lg-4">
      <center><h3>Cambiar Contraseña</h3></center>
      <?php include('../alertas/alert.php'); ?>
      <div class="card mb-4 py-3 border-bottom-danger">
          <div class="card-body">
              <form id="reg-form" method="POST" action="../../controllers/registro/controllers_cambio_password.php" autocomplete="off">
                  <label>Contraseña Actual</label>
                  <input type="hidden" name="email" value="<?php echo $email; ?>">
                  <input type="password" name="password_actual" class="form-control input-md" required="">
                  <span id="result"></span><p>
                  <label>Nueva Contraseña</label>
                  <input type="password" name="nuevo_password" minlength="8" id="pass_1" class="form-control input-md" required>
                  <label>Confirmar la Nueva Constraseña</label>
                  <input type="password" name="repita_password" minlength="8" id="pass_2"  class="form-control input-md" required>
                  <br>
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                  <button type="reset" class="btn btn-inverse">Cancelar</button>

              </form>
          </div>
      </div>
     </div>
  </div>
</div>
<?php } ?>


<?php include("footer.php"); ?>