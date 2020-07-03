<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>
<?php 
   $id_oficina = $_POST['id_oficina']; 
?>

<div class="container">
  <h4><b>Acta Traspaso Interno de Bienes y Muebles</b></h4><hr>
  <div class="row">
      <div class="col-lg-12">
        <?php include('../alertas/alert.php'); ?>
          <div class="card mb-4 py-3 border-bottom-danger">
            <div class="card-body">
              <div class="row">
                      <div class="col-lg-4">
                        <?php 
                            require_once("../../models/consulta/consulta_oficina.php");
                            foreach ($result as $ofi) {
                        ?>
                        <form  method="POST" action="../../controllers/registro/traspaso.php">                        
                          <label>Entidad de Trabajo ó Departamento</label>
                          <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                          <select name="entidad" class="form-control" required="">
                              <option value="">Seleccione!!!</option>
                              <?php 
                                require_once("../../models/consulta/consulta_oficina.php");
                                foreach ($result as $ofi) {
                              ?>
                              <option value="<?php echo $ofi['oficina']; ?>"><?php echo $ofi['oficina']; ?></option>
                              <?php } ?>
                          </select>
                           <input type="hidden" name="tipo" value="<?php echo 'Traslado'; ?>">
                          <label>Equipo</label>
                          <select name="id_inventario" class="form-control" required="">
                              <option value="">Seleccione!!!</option>
                              <?php 
                                require_once("../../models/consulta/consulta_equipos_oficina.php");
                                foreach ($result1 as $eq) {
                              ?>
                              <option value="<?php echo $eq['id_inventario']; ?>"><?php echo $eq['codigo']; ?> || <?php echo $eq['equipo']; ?> <?php echo $eq['marca']; ?> <?php echo $eq['modelo']; ?>  </option>
                              <?php } ?>
                          </select>                            
                          <label>Ubicación Inicial</label>
                          <?php 
                              require_once("../../models/consulta/consulta_oficina_id.php");
                              foreach ($result2 as $g) {
                           ?>
                          <input type="hidden" name="ubicacion_inicial" value="<?php echo $g['oficina']; ?>"  class="form-control" >
                          <input type="text" name="ubicacion_inicial" value="<?php echo $g['oficina']; ?>" disabled='' class="form-control" disabled="">
                          <?php } ?>
                          <label>Ubicación Final</label>
                          <select name="ubicacion_final" class="form-control" required="">
                              <option value="">Seleccione!!!</option>
                              <?php 
                                require_once("../../models/consulta/consulta_oficina.php");
                                foreach ($result as $ofi) {
                              ?>
                              <option value="<?php echo $ofi['id_oficina']; ?>"><?php echo $ofi['oficina']; ?></option>
                              <?php } ?>
                          </select><br>
                      </div>
                      <div class="col-lg-8">
                        <div class="row">
                          <div class="col-lg-6">
                            <label>Nombre - Responsable de la Dependencia Emisora</label>
                            <input type="text" class="form-control" name="nombre_dep_emisora" required="">
                          </div>
                          <div class="col-lg-6">
                            <label>Cedula - Responsable de la Dependencia Emisora</label>
                            <input type="text" class="form-control" name="cedula_dep_emisora" required="">
                          </div>
                          <div class="col-lg-6">
                            <label>Nombre - Responsable de la Dependencia Receptora</label>
                            <input type="text" class="form-control" name="nombre_dep_receptora" required="">
                          </div>
                          <div class="col-lg-6">
                            <label>Cedula - Responsable de la Dependencia Receptora</label>
                            <input type="text" class="form-control" name="cedula_dep_receptora" required="">
                          </div>
                          <div class="col-lg-6">
                            <label>Nombre - Oficina de Bienes</label>
                            <input type="text" class="form-control" name="nombre_oficina_bienes" required="">
                          </div>
                          <div class="col-lg-6">
                             <label>Cedula - Oficina de Bienes</label>
                             <input type="text" class="form-control" name="cedula_oficina_bienes" required="">
                          </div>
                          <div class="col-lg-6">
                            <label>Nombre del Funcionario que Realizo el Movimiento</label>
                            <input type="text" class="form-control" name="nombre_fun_movimiento" required="">
                          </div>
                          <div class="col-lg-6">
                            <label>Cedula del Funcionario que Realizo el Movimiento</label>
                            <input type="text" class="form-control" name="cedula_fun_movimiento" required=""><br>
                            <p align="right">
                              <button type="submit" class="btn btn-primary">Guardar Datos</button>
                              <button type="reset" class="btn btn-danger">Borrar Todo</button>
                            </p>                            
                          </div>
                        </form>
                        <?php } ?>
                        </div>
                      </div>

              </div>
            </div>
          </div>
      </div>
  </div>
</div>

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       