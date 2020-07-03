<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>
<?php 
   $ente = $_POST['ente'];
?>
<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800">Consulta de Equipo de Entrada a Reparación</h1>
<div class="row">
  <div class="col-sm-3">
    <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2" action="consulta_por_ente.php" method="POST">
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
      <button type="submit" class="btn btn-primary"><i class="fas fa-search" aria-hidden="true"></i></button>
    </form>
    <br>
  </div>
  <div class="col-sm-6">
    <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2" action="consulta_por_ente_fecha.php" method="POST">
         <input type="date" class="form-control" name="fecha1" required="">
         <input type="date" class="form-control" name="fecha2" required="">
      <button type="submit" class="btn btn-primary"><i class="fas fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
</div>

   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Reporte</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tipo de Equipo</th>
                      <th>Descripción del Equipo</th>
                      <th>Ente al cual Pertenecé</th>
                      <th>Nombre del Responsable</th>
                      <th>Telefono del Responsable</th>
                      <th>Falla que Presenta el Equipo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../bd/conexion.php");
                       require_once("../../models/consulta/consulta_equipo_e1.php");
                       foreach ($result as $equipo) {
                    ?>
                    <tr>
                      <td><?php echo $equipo['tipo_de_equipo']; ?></td>
                      <td><?php echo $equipo['descripcion']; ?></td>
                      <td><?php echo $equipo['ente']; ?></td>
                      <td><?php echo $equipo['nombre_responsable']; ?></td>
                      <td><?php echo $equipo['telefono_responsable']; ?></td>
                      <td><?php echo $equipo['falla']; ?></td>
                        <td><a href="../DOMPDF/acta_entrada.php?id=<?php echo $equipo['id_reg_e_e']; ?>" class="btn btn-primary" title="Descargar Acta de Entrega"><i class="fa fa-download"></a></td>
                    </tr>
                    <?php 
                       } 
                    ?>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

</div>
<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
    