<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b>Reporte General de Equipos que han Entrado y Salido de la Oficina de Informatica</b><br><br>
    </td>
  </tr>
</table>
<br><br>
<?php 
  require_once("../../models/consulta/consulta_e_general.php"); 
  echo "Total de Registros:";
  echo "&nbsp;";
  echo $g;
?>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr bgcolor="#4e73df">
                      <th>Equipo</th>
                      <th>Descripción</th>
                      <th>Ente</th>
                      <th>Responsable</th>
                      <th>Telefono</th>
                      <th>Falla</th>
                      <th>Solución</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../bd/conexion.php");
                       require_once("../../models/consulta/consulta_e_general.php");
                       foreach ($result as $equipo) {
                    ?>
                    
                    <tr>
                      <td><?php echo $equipo['tipo_de_equipo']; ?></td>
                      <td><?php echo $equipo['descripcion']; ?></td>
                      <td><?php echo $equipo['ente']; ?></td>
                      <td><?php echo $equipo['nombre_responsable']; ?></td>
                      <td><?php echo $equipo['telefono_responsable']; ?></td>
                      <td><?php echo $equipo['falla']; ?></td>
                      <td><?php echo $equipo['solucion']; ?></td>
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
$dompdf->set_paper('letter', 'landscape');
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "reporte.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
