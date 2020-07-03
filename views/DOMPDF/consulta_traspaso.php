<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b>Reporte Genera de Movimientos de Equipos</b><br><br>
    </td>
  </tr>
</table>
<br><br>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr bgcolor="#4e73df">
                      <th><font color="#ffffff">Entidad</font></th>
                      <th><font color="#ffffff">Descripción</font></th>
                      <th><font color="#ffffff">Ubicación</font>
                      <th><font color="#ffffff">Fecha</font></th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                        require_once("../../bd/conexion.php");
                        $fecha = date('Y/m/d');
                        $sql = ("SELECT * FROM traspaso INNER JOIN inventario ON traspaso.ubicacion_final = inventario.id_oficina INNER JOIN oficina ON traspaso.ubicacion_final = oficina.id_oficina");
                        $result=mysqli_query(conexion::con(), $sql);
                        $num = $result->num_rows;
                        foreach ($result as $traspaso) {
                     ?>
                    
                    <tr>
                      <td>
                        <?php echo $traspaso['entidad']; ?>
                      </td>
                      <td>
                        <b>Tipo:</b> <?php echo $traspaso['tipo']; ?>
                        <b>Descripción:</b> <?php echo $traspaso['descripcion']; ?> 
                      </td>
                      <td>
                        <b>Inicial:</b> <?php echo $traspaso['ubicacion_inicial']; ?> 
                        <b>Final:</b> <?php echo $traspaso['oficina']; ?> 
                      </td>
                      <td><?php echo $traspaso['fecha_traspaso']; ?></td>
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
$filename = "ReporteGeneral_Traspaso.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
