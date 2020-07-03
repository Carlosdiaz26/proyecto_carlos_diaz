<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <div class="row">
     <div class="col-lg-6">
        <?php include('../alertas/alert.php'); ?>

                  <form  method="POST" action="../../controllers/registro/registro_e_e.php">
                    <label><b>Tipo de Equipo</b></label>
                    <select name="tipo_de_equipo" class="form-control" required="">
                      <option value="">Seleccione un Tipo de Equipo</option>
                      <option value="Computadora">Computadora Todo en Uno</option>
                      <option value="CPU">CPU</option>
                      <option value="Monitor">Monitor</option>
                      <option value="Impresora">Impresora</option>
                      <option value="Video Beam">Video Beam</option>
                      <option value="Teclado">Teclado</option>
                      <option value="Mouse">Mouse</option>
                      <option value="Cornetas">Cornetas</option>
                      <option value="Otro">Otro</option>
                    </select>
                    <label><b>Descripción</b></label>
                    <textarea class="form-control" name="descripcion" rows="3" required=""></textarea>
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
                    <label><b>Nombre de Quien Trajo el Equipo</b></label>
                    <input type="Text" name="nombre_responsable" minlength="3" onkeypress="return soloLetras(event)" class="form-control">
                    <label><b>Telefono de Quien Trajo el Equipo</b></label>
                    <input type="Text" minlength="11" maxlength="11" onkeypress="return soloNumeros(event)" name="telefono_responsable" class="form-control">
                    <label><b>Cargo de Quien Trajo el Equipo en el Ente</b></label>
                    <input type="Text" name="cargo_responsable" class="form-control">
                    <label><b>Falla que Presenta</b></label>
                    <textarea class="form-control" name="falla" rows="3" required=""></textarea>
                    <hr><button type="submit" class="btn btn-primary">Guardar Datos</button>
                    <button type="reset" class="btn btn-danger">Borrar Todo</button>
                  </form>
     </div> 
     <div class="col-lg-6"><br><br><br><br>
        <img src="../img/tech-580x387.jpg">
     </div> 
  </div>
</div>

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       