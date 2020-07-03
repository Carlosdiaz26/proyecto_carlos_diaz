<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 align="center">Equipos Reparados</h2><hr>
      <a href="consulta_general.php" class="btn btn-primary">Consulta General</a>
      <a href="equipos_reparados.php" class="btn btn-dark">Equipos Reparados</a> 
      <?php require_once("consulta/consulta_e_reparados.php"); ?>
    </div>
  </div>
</div>



<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
    
