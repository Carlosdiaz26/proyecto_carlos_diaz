<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
            <center><h3>Registro de Usuarios</h3></center>
              <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                  <?php include('../alertas/alert.php'); ?>
                  <?php
                     $id_usuario = $_GET['id_usuario'];
                     require_once("../../models/consulta/consulta_user_id.php");
                     foreach ($result as $key) {
                  ?>
                  <form method="POST" action="../../controllers/actualizar/actualizar_usuario.php">
                    <label><b>Nombre Completo</b></label>
                    <input type="hidden" name="id_registro" value="<?php echo $key['id_registro']; ?>">
                    <input type="text" name="nombre" class="form-control" value="<?php echo $key['nombre']; ?>" required="">
                    <label><b>Correo</b></label>
                    <input type="email" name="email" value="<?php echo $key['email']; ?>" class="form-control" required="">
                    <label><b>Ente al Cual Pertecene</b></label>
                    <select class="form-control" name="ente" required="">
                      <option value="<?php echo $key['ente']; ?>"><?php echo $key['ente']; ?></option>
                    <?php
                     $sql = ("SELECT * FROM ente"); 
                     $result=mysqli_query(conexion::con(), $sql);
                     foreach ($result as $ke) {
                    ?>
                      <option value="<?php echo $ke['ente']; ?>"><?php echo $ke['ente']; ?></option>
                    <?php } ?>
                    </select>
                    <label>Tipo</label>
                    <select name="tipo" class="form-control" required="">
                      <option value="<?php echo $key['tipo']; ?>">
                        <?php if ($key['tipo'] =='1') {
                          echo "Admin";
                        }elseif ($key['tipo'] == '2') {
                          echo "Ente";
                        }elseif ($key['tipo'] == '3') {
                          echo "Informatica";
                        }elseif ($key['tipo'] == '4') {
                          echo "Bienes";
                        } ?>
                      </option>
                      <option value="1">Admin</option>
                      <option value="2">Ente Centralizado</option>
                      <option value="3">Informatica</option>
                      <option value="4">Bienes</option>
                    </select>
                    <label>Status</label>
                    <select name="estatus" class="form-control" required="">
                      <option value="<?php echo $key['estatus']; ?>">
                        <?php echo $key['estatus'];?>
                      </option>
                      <option value="ACTIVO">Activo</option>
                      <option value="BLOQUEADO">Bloquear</option>
                    </select>
                    <hr><button type="submit" class="btn btn-primary">Guardar Cambios</button>
                  </form>
                  <?php } ?>
                </div>
              </div>
    </div>

    <div class="col-lg-8">
      <center><h3>Consulta de Usuario Registrados</h3></center>
      <table class="table table-responsive">
        <tr bgcolor="#e74a3b">
          <th><font color="#FFFFFF">Nombre</font></th>
          <th><font color="#FFFFFF">Institución</font></th>
          <th><font color="#FFFFFF">Correo</font></th>
          <th><font color="#FFFFFF">Tipo</font></th>
          <th><font color="#FFFFFF">Status</font></th>
          <th><font color="#FFFFFF">Acciones</font></th>
        </tr>
          <?php
             $sql = ("SELECT * FROM usuario INNER JOIN registro ON usuario.id_registro = registro.id_registro"); 
             $result=mysqli_query(conexion::con(), $sql);
             echo "<b>Usuarios Registrados:</b>";
             echo "&nbsp";
             echo "<span class='badge badge-success'>";
             echo $num = $result->num_rows;
             echo "</span>";
             foreach ($result as $key) {
          ?>
        
        <tr>
          <td><?php echo $key['nombre']; ?></td>
          <td><?php echo $key['ente']; ?></td>
          <td><?php echo $key['email']; ?></td>
          <td><?php if ($key['tipo'] =='1') {
            echo "Admin";
          }elseif ($key['tipo'] == '2') {
            echo "Ente";
          }elseif ($key['tipo'] == '3') {
            echo "Informatica";
          }elseif ($key['tipo'] == '4') {
            echo "Bienes";
          } ?></td>
          <td><?php echo $key['estatus']; ?></td>
          <td><a href="crear_usuario1.php?id_usuario=<?php echo $key['id_usuario'] ?>" class="btn btn-primary" title="Modificar-Aun no Disponible"><i class="fa fa-edit"></a></td>
        </tr>
          <?php } ?>
      </table>


    </div>
  </div>
</div>
    

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       