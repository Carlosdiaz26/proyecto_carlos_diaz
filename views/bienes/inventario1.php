<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>
<?php 
  $id_oficina = $_GET['id_oficina'];
?>
<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800">Consulta de Inventario</h1>
<div class="row">
  <div class="col-sm-3">
    <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
        <select name="id_oficina" class="form-control" required="">
            <option value="">Seleccione!!!</option>
            <?php 
              require_once("../../models/consulta/consulta_oficina.php");
              foreach ($result as $ofi) {
            ?>
            <option value="<?php echo $ofi['id_oficina']; ?>"><?php echo $ofi['oficina']; ?></option>
            <?php } ?>
        </select>
      <button type="submit" class="btn btn-primary"><i class="fas fa-search" aria-hidden="true"></i></button>
    </form>
    <br>
  </div>
  <div class="col-sm-9">
     <p align="right"><a href="../DOMPDF/inventario1.php?id_oficina=<?php echo $id_oficina; ?>" class="btn btn-secondary" target="nuevo"><i class="fas fa-file-download"></i> Reporte PDF</a></p> 
  </div>
</div>

   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Inventario</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Equipo</th>
                      <th>Categoría</th>
                      <th>Ubicación</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Descripción</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../bd/conexion.php");
                       require_once("../../models/consulta/inventario_oficina.php");
                       foreach ($result as $equipo) {
                    ?>
                    <tr>
                      <td><?php echo $equipo['codigo']; ?></td>
                      <td><?php echo $equipo['equipo']; ?></td>
                      <td><?php if ($equipo['categoria'] == '1') {
                        echo "Equipos Informaticos";
                      }elseif ($equipo['categoria'] == '2') {
                        echo "Equipos de Oficina";
                      } ?></td>
                      <td><?php echo $equipo['oficina']; ?></td>
                      <td><?php echo $equipo['marca']; ?></td>
                      <td><?php echo $equipo['modelo']; ?></td>
                      <td><?php echo $equipo['descripcion']; ?></td>

                        <td><a href="registro_inventario1.php?id_inventario=<?php echo $equipo['id_inventario']; ?>" class="btn btn-primary" title="Descargar Acta de Entrega"><i class="fa fa-edit"></a></td>
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
    