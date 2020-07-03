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
            <center><h3>Actualizar Perfil</h3></center>
              <div class="card mb-4 py-3 border-bottom-danger">
                <div class="card-body">
                  <?php include('../alertas/alert.php'); ?>
                  <form method="POST" action="../../controllers/actualizar/actualizar_perfil.php">
                    <label><b>Nombre Completo</b></label>
                    <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                    <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>" class="form-control">
                    <label><b>Cedula</b></label>
                    <input type="text" value="<?php echo $reg['cedula']; ?>" class="form-control" disabled>
                    <label><b>Correo</b></label>
                    <input type="email" value="<?php echo $reg['email']; ?>" class="form-control" disabled>
                    <label><b>Pertecene al Ente</b></label>
                    <input type="text" value="<?php echo $reg['ente']; ?>" class="form-control" disabled>
                    <hr><button type="submit" class="btn btn-primary">Guardar Datos</button>
                  </form>
                </div>
              </div>
    </div>
  </div>
</div>
<?php } ?>


<?php include("footer.php"); ?>