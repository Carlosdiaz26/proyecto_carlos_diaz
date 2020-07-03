<?php include("nabvar.php"); ?>

<div class="container">
  <div class="row">
    <div class="col-md-7">
      <?php include("../alertas/alert.php"); ?>
                <div class="panel-heading">
                  <h5><b>Seguimientos de las Actividades de los Usuarios</b></h5>
                  <p align="right"><a href="../DOMPDF/bitacora.php" class="btn btn-secondary" target="nuevo"><i class="fas fa-file-download"></i> Generar Reporte PDF</a></p>                
                </div>
                 <center>
                    <table class="table table-responsive">
                    <tr bgcolor="#e74a3b">
                      <th><font color='#FFFFFF'>Usuario</font></th>
                      <th><font color='#FFFFFF'>Actividad</font></th>
                      <th><font color='#FFFFFF'>Fecha y Hora</font></th>
                    </tr>
                     <?php 
                      require_once ("../../bd/conexion.php");
                      require_once("../../models/consulta/bitacora.php"); 
                      foreach ($result_bitacora as $bit) {?>
                    <tr>
                      <td><?php echo $bit['nombre']; ?></td>
                      <td><?php echo $bit['actividad']; ?></td>
                      <td><?php echo $bit['fecha_hora']; ?></td>
                    </tr>
                    <?php } ?>                   
                   
                  </table>
                 </center>
    </div>
  </div>
</div>


<!-- Fin de estrutura del Archivo -->

<?php include("../publico/footer.php"); ?>
 
