<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

        <div class="container-fluid">
     
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cambiar de status el Equipos que se está en Reparando</h1>
          <div class="row">
            <div class="col-lg-4">
              <?php 
                  $id_reg_e_e = $_GET['id_reg_e_e'];
                  if ($id_reg_e_e > 0) {
              ?>
              <?php 
                require_once("../../bd/conexion.php");
                $consulta = ("SELECT * FROM registro_e_e WHERE id_reg_e_e = '$id_reg_e_e'");
                $resultado=mysqli_query(conexion::con(), $consulta);
                foreach ($resultado as $reg) {
              ?>
              <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                  <form method="POST" action="../../controllers/actualizar/actualizar_e1.php">
                    <label><b>Solución</b></label>
                    <input type="hidden" name="id_reg_e_e" value="<?php echo $reg['id_reg_e_e']; ?>">
                    <input type="hidden" name="ente" value="<?php echo $reg['ente']; ?>">
                    <textarea class="form-control" name="solucion" rows="3" required=""><?php echo $reg['solucion']; ?></textarea>
                    <label>Status</label>
                    <select name="status" class="form-control" required="">
                      <option value="<?php echo $reg['status']; ?>"><?php echo $reg['status']; ?></option>
                      <option value="En Reparacion">En Reparación</option>
                      <option value="En Espera de Respuesto">En Espera de Respuesto</option>
                      <option value="Dañada">Dañada</option>
                      <option value="Reparado">Reparado</option>
                    </select>
                    <hr><button type="submit" class="btn btn-primary">Actualizar Datos</button>
                  </form>
                </div>
              </div>
              <?php }} ?>
            </div>




            <div class="col-lg-8">
                    <?php include('../alertas/alert.php'); ?>

                    <!-- Select para buscar -->
                          <table width="100%">
                            <tr>
                              <td width="90%">
                                <form method="GET" action="salida_e.php">
                                  <label><b>Pertecene al Ente</b></label>
                                  <select class="form-control" name="ente" required="">
                                        <option value="">Seleccione!!!</option>
                                     <?php 
                                        require_once("../../models/consulta/ente_centralizados.php");
                                        foreach ($result as $ente) {
                                     ?>
                                        <option value="<?php echo $ente['ente']; ?>"><?php echo $ente['ente']; ?></option>
                                     <?php } ?>
                                  </select>
                              </td>
                              <td width="10%"><br><br><p>
                                  <button type="submit" class="btn btn-primary">Continuar</button></p>
                                </form>
                              </td>
                            </tr>
                          </table><br>
                    <!-- fin del Select -->

                    <?php 
                      $ente = $_GET['ente']; 
                      if ($ente == '') {
                        echo "No hay Busqueda Realizada";
                      }else{
                    ?>
                      <div class="card mb-4 py-3 border-bottom-primary">
                        <div class="card-body">
                          <strong>Resultados Encontrados</strong><hr>

                    <?php 
                      $ent = $_GET['ente'];
                      require_once("../../models/consulta/ente.php"); 
                      foreach ($result as $ente) {
                        if ($num == '') {
                           echo "No se Encontraron Resultados";
                        }
                    ?>
                      <form method="GET" action="../../controllers/registro/registro_e_e.php">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th>Ente</th>
                                    <th>Equipo</th>
                                    <th>Descripción</th>
                                    <th>Falla</th>
                                    <th>Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                     require_once("../../models/consulta/ente.php");
                                     foreach ($result as $equipo) {
                                  ?>
                                  <tr>
                                    <td>
                                      <b>Responsable:</b> <?php echo $equipo['nombre_responsable']; ?>
                                      <b>Telf:</b> <?php echo $equipo['telefono_responsable']; ?></td>
                                      <span id="id_reg_e_e<?php echo $equipo['id_reg_e_e']; ?>"><font color="#FFFFFF"><?php echo $equipo['id_reg_e_e']; ?></font></span>
                                      <td><span id="tipo_de_equipo<?php echo $equipo['id_reg_e_e']; ?>"><?php echo $equipo['tipo_de_equipo']; ?></span></td>
                                      <td><span id="descripcion<?php echo $equipo['id_reg_e_e']; ?>"><?php echo $equipo['descripcion']; ?></span></td>
                                      <td><span id="falla<?php echo $equipo['id_reg_e_e']; ?>"><?php echo $equipo['falla']; ?></span></td>
                                      <td>
                                        <a href="salida_e.php?id_reg_e_e=<?php echo $equipo['id_reg_e_e']; ?>&ente=<?php echo $equipo['ente']; ?>" type="button" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i></a>
                                      </td>
                                  </tr>
                                  <?php 
                                     } 
                                  ?>                   
                                </tbody>
                              </table>
                            </div>
                      </form>
                    <?php } ?>
                        </div>
                      </div>
                    <?php } ?>
            </div>
        </div>


        </div>

<?php 
   // pie de Pagina Footer
include('modal.php'); 

   require_once("footer.php"); 
?>
 <script src="custom.js"></script>      