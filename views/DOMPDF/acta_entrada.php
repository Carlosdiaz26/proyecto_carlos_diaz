<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b>Acta de Entrada y Salida de Equipos a Reparación</b><br><br>
    </td>
  </tr>
</table>
<br><br>
<?php 
  $id = $_GET['id'];
  require_once("../../models/consulta/consulta_e_e_ente.php"); 
  foreach ($result as $key ) {
?>



 <table class="table table-bordered" id="dataTable" width="100%" border="1" cellspacing="0">
                    <tr bgcolor="#4e73df">
                      <th><font color="#ffffff">Ente</font></th>
                      <th><font color="#ffffff">Equipo/ Descripción</font></th>
                      <th><font color="#ffffff">Falla que Presenta</font>
                    </tr>
                     <?php
                        $id = $_GET['id'];
                        $fecha = date('Y/m/d');
                        $sql = ("SELECT * FROM registro_e_e WHERE id_reg_e_e = '$id'"); 
                        $result=mysqli_query(conexion::con(), $sql);
                        $num = $result->num_rows;
                        foreach ($result as $traspaso) {
                     ?>
                    
                    <tr>
                      <td>
                        <?php echo $traspaso['ente']; ?>
                      </td>
                      <td>
                        <?php echo $traspaso['descripcion']; ?>
                      </td>
                      <td>
                        <?php echo $traspaso['falla']; ?> 
                      </td>
                    </tr>
                    <?php 
                       } 
                    ?>   
  </table>
  <br>
  <table class="table table-bordered" id="dataTable" width="100%" border="1" cellspacing="0">
    <tr>
      <td width="33%" align="center"><p>Ing. Yorman Pinto</p><p>Jefe de Informatica</p><br><br></td>
      <td width="33%" align="center"><p>Departamento de Bienes</p><br><br><br></td>
      <td width="33%" align="center"><p><?php echo $key['nombre_responsable']; ?></p><p><?php echo $key['cargo_responsable']; ?></p><br><br></td>
    </tr>
  </table>

   <table class="table table-bordered" id="dataTable" width="100%" border="0" cellspacing="0">
    <tr>
      <td width="50%" align="center"><p>Fecha de Recibido</p><p><?php echo $key['fecha_registro']; ?></p><br><br></td>
      <td width="50%" align="center"><p>Fecha de Entrega</p><p>___________________</p><br><br></td>
    </tr>
  </table>


<?php } ?>

<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
//$dompdf->set_paper('letter', 'landscape');
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Acta de Entrada de Equipos a Reparacion.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
