<?php 
    include('../../bd/conexion.php');    
?>
<?php ob_start(); ?>
<img src="../img/banner_pdf.png" width="100%"><br><br>
<table width="100%">
  <tr>
    <td width="100%" align="center"><br>
      <b>Acta Traspaso Interno de Bienes Muebles</b><br><br>
    </td>
  </tr>
</table>
<br>
<?php 
  $id = $_GET['id'];
   $sql = ("SELECT * FROM traspaso INNER JOIN inventario ON traspaso.ubicacion_final = inventario.id_oficina INNER JOIN oficina ON traspaso.ubicacion_final = oficina.id_oficina WHERE traspaso.id_traspaso = '$id'");
    $result=mysqli_query(conexion::con(), $sql);
    $num = $result->num_rows;
       foreach ($result as $traspaso) {
  
?>
<p><b>Codigo N°</b>  <?php echo $traspaso['numero']; ?></p>
<p><b>Unidad de Trabajo o Dependencia:</b> <?php echo $traspaso['entidad']; ?>  </p>
<p><b>Tipo:</b> <?php echo $traspaso['tipo']; ?></p>
<p align="justify">En la Fecha <?php echo $traspaso['fecha_traspaso']; ?>, el funcionario <?php echo $traspaso['nombre_oficina_bienes']; ?>, C.I. N° <?php echo $traspaso['cedula_oficina_bienes']; ?>,
   actualmente en mi caracter de Jefe de Bienes RESOLUCION N° D.A 243-243-2018 DE FECHA 09-05-2018. Ubicado en la oficina de Bienes, Acto con la finalidad dejar constancia de TRASLADAR/TRASPASAR (el) o (los) bien (es), bajo identificados, (el)o (los) cual (es) se solicita tomar las respectivas notas de la presente acta de TRASLADO/TRASPASO a los fines de actualizar el inventario de las respectivas unidades en consonancia con la norma emanada por la (Publicación 21 C.G.R)  
</p>


</p>
<table width="100%" border="1">
  <tr align="center" bgcolor="#e74a3b">
    <th>Numero de Identifiación</th>
    <th>Descropción/Marca/Tipo/Seria/Color del Mueble/Equipo</th>
    <th>Ubicación Inicial</th>
    <th>Ubicación Final</th>
  </tr>
  <tr>
    <td widtd="25" align="center"><?php echo $traspaso['numero']; ?></td>
    <td widtd="25" align="center"><?php echo $traspaso['descripcion']; ?></td>
    <td widtd="25" align="center"><?php echo $traspaso['ubicacion_inicial']; ?></td>
    <td widtd="25" align="center"><?php echo $traspaso['oficina']; ?></td>
  </tr>
</table>

<center><b>Firmas Conformes</b></center>
<table width="100%" border="1">
  <tr align="center" bgcolor="#e74a3b">
    <th>Responsable de la Dependencia Emisora</th>
    <th>Responsable de la Dependencia Receptora</th>
    <th>Oficina de Bienes</th>
  </tr>
  <tr align="justify">
    <td widtd="33">
      <p><b>Nombre y Apellido:</b> <?php echo $traspaso['nombre_dep_emisora']; ?></p>
      <p><b>C.I.</b> <?php echo $traspaso['cedula_dep_emisora']; ?></p> 
      Firma: _________________________
      Sello      
    </td>
    <td widtd="34">
      <p><b>Nombre y Apellido:</b> <?php echo $traspaso['nombre_dep_receptora']; ?></p>
      <p><b>C.I.</b> <?php echo $traspaso['cedula_dep_receptora']; ?></p> 
      Firma: _________________________
      Sello    
    </td>
    <td widtd="33">
      <p><b>Nombre y Apellido:</b> <?php echo $traspaso['nombre_oficina_bienes']; ?></p>
      <p><b>C.I.</b> <?php echo $traspaso['cedula_oficina_bienes']; ?></p>
      Firma: _________________________
      Sello  
    </td>
  </tr>
</table>

<p><b>Nombre del Funcionario quien realiza el movimiento: </b><?php echo $traspaso['nombre_fun_movimiento']; ?></p>
<p><b>Firma:</b>_____________________</p><b>C.I. N°:</b><?php echo $traspaso['cedula_fun_movimiento']; ?>
  

<center><h3><i>Hacia el Municipio Comunal con Eficiencia y Eficacia</i></h3></center>

<?php } ?>

<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
//$dompdf->set_paper('letter', 'landscape');
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "acta_entrada.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
