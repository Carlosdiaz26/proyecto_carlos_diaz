<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <h4><b>Acta Traspaso Interno de Bienes y Muebles</b></h4><hr>
  <div class="row">
      <div class="col-lg-12">
        <?php include('../alertas/alert.php'); ?>
          <div class="card mb-4 py-3 border-bottom-danger">
            <div class="card-body">
              <div class="row">
                      <div class="col-lg-5">
                        <form method="POST" action="traspaso1.php" class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
                          <div class="row">
                            <div class="col-lg-10">
                              <hr>
                            </div>
                            <div class="col-lg-2">
                              <hr>
                            </div>
                          </div>
                          <select name="id_oficina" class="form-control" required="">
                              <option value="">Seleccione!!!</option>
                              <?php 
                                require_once("../../models/consulta/consulta_oficina.php");
                                foreach ($result as $ofi) {
                              ?>
                              <option value="<?php echo $ofi['id_oficina']; ?>"><?php echo $ofi['oficina']; ?></option>
                              <?php } ?>
                          </select>
                          <button type="submit" class="btn btn-primary">Continuar</button>
                        </form>
                      </div>
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
       