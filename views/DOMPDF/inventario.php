<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b>Reporte de Inventario General de Equipos de la Alcaldia</b><br><br>
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
                      <th>Codigo</th>
                      <th>Equipo</th>
                      <th>Categoría</th>
                      <th>Ubicación</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Descripción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../bd/conexion.php");
                       require_once("../../models/consulta/inventario.php");
                       foreach ($result as $equipo) {
                    ?>
                    
                    <tr>
                     <td><?php echo $equipo['codigo']; ?></td>
                      <td><?php echo $equipo['equipo']; ?></td>
                      <td><?php if ($equipo['categoria'] == '1') {
                        echo "Equipos Informaticos";
                      }elseif ($equipo['categoria'] == '2') {
                        echo "Equipos de Oficina";
                      } ?></td>
                      <td><?php echo $equipo['oficina']; ?></td>
                      <td><?php echo $equipo['marca']; ?></td>
                      <td><?php echo $equipo['modelo']; ?></td>
                      <td><?php echo $equipo['descripcion']; ?></td>
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
$filename = "Inventario General.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
