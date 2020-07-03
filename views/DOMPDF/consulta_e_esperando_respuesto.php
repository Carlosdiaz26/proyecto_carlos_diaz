<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b>Reporte General de Equipos En Espera de Respuestos</b><br><br>
    </td>
  </tr>
</table>
<br><br>
<?php 
  require_once("../../models/consulta/consulta_e_esperando_respuesto.php"); 
  echo "Total de Registros:";
  echo "&nbsp;";
  echo $er;
?>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr bgcolor="#4e73df">
                      <th><font color="#ffffff">Equipo</font></th>
                      <th><font color="#ffffff">Descripción</font></th>
                      <th><font color="#ffffff">Ente</font></th>
                      <th><font color="#ffffff">Responsable</font></th>
                      <th><font color="#ffffff">Telefono</font></th>
                      <th><font color="#ffffff">Falla</font></th>
                      <th><font color="#ffffff">Solución</font></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../bd/conexion.php");
                       require_once("../../models/consulta/consulta_e_esperando_respuesto.php");
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
