<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>
<?php 
   $id_inventario = $_GET['id_inventario'];?>
<div class="container">
   <h4><b>Registro de Inventario</b></h4><hr>
  <div class="row">
     <div class="col-lg-6">
        <?php require_once('../alertas/alert.php'); ?>
        <?php 
            require_once("../../models/consulta/inventario_id.php"); 
            foreach ($result as $inv) {
        ?>

                  <form  method="POST" action="../../controllers/actualizar/inventario.php">
                    <label><b>Codigo del Equipo</b></label>
                    <input type="hidden" class="form-control" value="<?php echo $id_inventario; ?>" name="id_inventario">
                    <input type="text" class="form-control" name="codigo" value="<?php echo $inv['codigo']; ?>" required="">
                    <label><b>Equipo</b></label>
                    <input type="text" class="form-control" name="equipo" value="<?php echo $inv['equipo']; ?>" required="">
                    <label><b>Categoria</b></label>
                    <select name="categoria" class="form-control">
                      <option value="<?php echo $inv['categoria']; ?>">
                        <?php 
                         if ($inv['categoria'] == '1') {
                           echo "Equipos Informaticos";
                         }elseif ($inv['categoria'] == '2') {
                           echo "Equipos de Oficina";
                         } 
                        ?></option>
                      <option value="1">Equipos Informaticos</option>
                      <option value="2">Equipos de Oficina</option>
                    </select>
                    <label><b>Ubicación / Oficina</b></label>
                    <select name="id_oficina" class="form-control" required="">
                        <option value="<?php echo $inv['id_oficina']; ?>"><?php echo $inv['oficina']; ?></option>
                      <?php 
                        require_once("../../models/consulta/consulta_oficina.php");
                        foreach ($result as $ofi) {
                      ?>
                        <option value="<?php echo $ofi['id_oficina']; ?>"><?php echo $ofi['oficina']; ?></option>
                      <?php } ?>
                    </select>
                    <label><b>Marca del Equipo</b></label>
                    <input type="text" class="form-control" value="<?php echo $inv['marca']; ?>" name="marca">
                    <label><b>Modelo del Equipo</b></label>
                    <input type="text" class="form-control" value="<?php echo $inv['modelo']; ?>" name="modelo">
                  
     </div> 
     <div class="col-lg-6">
                    <label><b>Decripción del Equipo</b></label>
                    <textarea name="descripcion" class="form-control" rows="13" required=""><?php echo $inv['descripcion']; ?></textarea><br>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
        <?php } ?>
     </div>
  </div>
</div>

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       