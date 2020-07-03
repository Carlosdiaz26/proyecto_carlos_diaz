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
                  <form method="POST" action="../../controllers/registro/registro_usuario.php">
                    <label><b>Nombre Completo</b></label>
                    <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                    <input type="text" name="nombre" minlength="3" maxlength="100" onkeypress="return soloLetras(event)" class="form-control" required="">
                    <label><b>Cedula</b></label>
                    <input type="text" name="cedula" minlength="5" maxlength="8" onkeypress="return soloNumeros(event)" class="form-control" required="">
                    <label><b>Correo</b></label>
                    <input type="email" name="email" class="form-control" required="">
                    <label><b>Password</b></label>
                    <input type="Password" name="password" class="form-control">
                    <label><b>Ente al Cual Pertecene</b></label>
                    <select class="form-control" name="ente" required="">
                      <option value="">Seleccione un Ente</option>
                    <?php
                     $sql = ("SELECT * FROM ente"); 
                     $result=mysqli_query(conexion::con(), $sql);
                     foreach ($result as $key) {
                    ?>
                      <option value="<?php echo $key['ente']; ?>"><?php echo $key['ente']; ?></option>
                    <?php } ?>
                    </select>
                    <label>Tipo</label>
                    <select name="tipo" class="form-control" required="">
                      <option value="">Seleccione el Tipo de Usuario</option>
                      <option value="1">Admin</option>
                      <option value="2">Ente Centralizado</option>
                      <option value="3">Informatica</option>
                      <option value="4">Bienes</option>
                    </select>
                    <hr><button type="submit" class="btn btn-primary">Guardar Datos</button>
                    <button type="reset" class="btn btn-danger">Borrar Todo</button>
                  </form>
                </div>
              </div>
    </div>

    <div class="col-lg-8">
      <center><h3>Consulta de Usuario Registrados</h3></center>
      <table class="table table-responsive">
        <tr bgcolor="#4e73df">
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
          <td><?php echo utf8_decode(utf8_encode($key['ente'])); ?></td>
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
       