<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
   <h4><b>Registro de Inventario</b></h4><hr>
  <div class="row">
     <div class="col-lg-6">
        <?php include('../alertas/alert.php'); ?>

                  <form  method="POST" action="../../controllers/registro/inventario1.php">
                    <label><b>Codigo del Equipo</b></label>
                    <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id_registro">
                    <input type="text" class="form-control" name="codigo" required="">
                    <label><b>Equipo</b></label>
                    <input type="text" class="form-control" name="equipo" required="">
                    <label><b>Categoria</b></label>
                    <select name="categoria" class="form-control">
                      <option value="">Seleccione!!!</option>
                      <option value="1">Equipos Informaticos</option>
                      <option value="2">Equipos de Oficina</option>
                    </select>
                    <label><b>Ubicación / Oficina</b></label>
                    <select name="id_oficina" class="form-control" required="">
                        <option value="">Seleccione!!!</option>
                      <?php 
                        require_once("../../models/consulta/consulta_oficina.php");
                        foreach ($result as $ofi) {
                      ?>
                        <option value="<?php echo $ofi['id_oficina']; ?>"><?php echo $ofi['oficina']; ?></option>
                      <?php } ?>
                    </select>
                    <label><b>Marca del Equipo</b></label>
                    <input type="text" class="form-control" name="marca">
                    <label><b>Modelo del Equipo</b></label>
                    <input type="text" class="form-control" name="modelo">
                  
     </div> 
     <div class="col-lg-6">
                    <label><b>Decripción del Equipo</b></label>
                    <textarea name="descripcion" class="form-control" rows="13" required=""></textarea><br>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-danger">Borrar Todo</button>
                    </form>
     </div>
  </div>
</div>

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       