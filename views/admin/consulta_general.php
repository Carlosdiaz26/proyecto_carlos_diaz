<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
       <h2 align="center">Consulta General de Equipos Registrados Para Reparación</h2><hr>
      <a href="consulta_general.php" class="btn btn-primary">Consulta General</a>
      <a href="equipos_reparados.php" class="btn btn-dark">Equipos Reparados</a>
      <?php require_once("consulta/consulta_e_general.php"); ?>
    </div>
  </div>
</div>



<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
    