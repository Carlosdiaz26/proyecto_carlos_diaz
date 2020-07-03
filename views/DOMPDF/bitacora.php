<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b><h1>Bitacora</h1></b>
    </td>
  </tr>
</table>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr bgcolor="#e74a3b">
                      <th>Usuario</th>
                      <th>Actividad</th>
                      <th>Fecha y Hora</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../bd/conexion.php");
                       require_once("../../models/consulta/bitacora.php"); 
                        foreach ($result_bitacora as $bit) {?>
                    <tr>
                      <td><?php echo $bit['nombre']; ?></td>
                      <td><?php echo $bit['actividad']; ?></td>
                      <td><?php echo $bit['fecha_hora']; ?></td>
                    </tr>
                    <?php 
                       } 
                    ?>                   
                  </tbody>
  </table>
  



<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
//$dompdf->set_paper('letter', 'landscape');
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "bitacora.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
