<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <div class="row">
    <div class="col-lg-5">
            <center><h3>Agregar Oficina</h3></center>
              <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                  <?php include('../alertas/alert.php'); ?>
                  <form method="POST" action="../../controllers/registro/registro_oficina.php">
                    <label><b>Nombre de la Oficina</b></label>
                    <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                    <input type="text" name="oficina" class="form-control" required="">
                    <hr><button type="submit" class="btn btn-primary">Guardar Datos</button>
                    <button type="reset" class="btn btn-danger">Borrar Todo</button>
                  </form>
                </div>
              </div>
    </div>

    <div class="col-lg-7">
      <center><h3>Oficinas Registradas</h3></center>
        <div class="card mb-4 py-3 border-bottom-primary">
          <div class="card-body">
            <table class="table table-responsive" width="100%">
              <tr bgcolor="#e74a3b">
                <th width="90%"><font color="#FFFFFF">Nombre de la Oficina</font></th>
                <th width="10%"><font color="#FFFFFF">Acciones</font></th>
              </tr>
                <?php
                   $sql = ("SELECT * FROM oficina"); 
                   $result=mysqli_query(conexion::con(), $sql);
                   echo "<b>Usuarios Registrados:</b>";
                   echo "&nbsp";
                   echo "<span class='badge badge-success'>";
                   echo $num = $result->num_rows;
                   echo "</span>";
                   foreach ($result as $key) {
                ?>
              
              <tr>
                <td><?php echo $key['oficina']; ?></td>
                <td><a href="oficina.php?id_oficina=<?php echo $key['id_oficina']; ?>"  type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
              </tr>
                <?php } ?>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
    

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       