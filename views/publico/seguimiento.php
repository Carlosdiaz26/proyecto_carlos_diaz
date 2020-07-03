<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <h4>Seguimiento de Equipos en Reparación - Oficina de Informatica Alcaldia Juan German Roscio Nieves</h4><hr>
      
        <a href="seguimiento.php" class="btn btn-primary">Equipos en Reparación</a>
        <a href="seguimiento1.php" class="btn btn-success">Equipos Reparados</a>
        <hr>
        <?php require_once("consulta/consulta_e_reparados.php"); ?>

    </div>
  </div>
</div>
    

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
       