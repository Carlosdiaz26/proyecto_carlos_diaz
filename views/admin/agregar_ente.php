<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <div class="row">
    <div class="col-lg-5">
            <center><h3>Crear Nuevo Ente Centralizado</h3></center>
              <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                  <?php include('../alertas/alert.php'); ?>
                  <form method="POST" action="../../controllers/registro/registro_ente.php">
                    <label><b>Nombre del Nuevo Ente</b></label>
                    <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                    <input type="text" name="ente" class="form-control" required="">
                    <hr><button type="submit" class="btn btn-primary">Guardar Datos</button>
                    <button type="reset" class="btn btn-danger">Borrar Todo</button>
                  </form>
                </div>
              </div>
    </div>

    <div class="col-lg-7">
      <center><h3>Entes Centralizados Registrados</h3></center>
        <div class="card mb-4 py-3 border-bottom-primary">
          <div class="card-body">
            <table class="table table-responsive" width="100%">
              <tr bgcolor="#e74a3b">
                <th width="90%"><font color="#FFFFFF">Nombre de la Oficina</font></th>
                <th width="10%"><font color="#FFFFFF">Acciones</font></th>
              </tr>
                <?php
                   $sql = ("SELECT * FROM ente"); 
                   $result=mysqli_query(conexion::con(), $sql);
                   echo "<b>Entes Registrados:</b>";
                   echo "&nbsp";
                   echo "<span class='badge badge-success'>";
                   echo $num = $result->num_rows;
                   echo "</span>";
                   foreach ($result as $key) {
                ?>
              
              <tr>
                <td><?php echo $key['ente']; ?></td>
                <td><a href="ente.php?id_ente=<?php echo $key['id_ente']; ?>"  type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
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
       