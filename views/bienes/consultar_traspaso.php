<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>


<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="h3 mb-4 text-gray-800">Consulta de Traspaso Realizados</h1>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  <b>Consulta Filtrada</b>
      </button>
      <p align="right"><a href="../DOMPDF/consulta_traspaso.php" class="btn btn-secondary" target="nuevo"><i class="fas fa-file-download"></i> Generar Reporte PDF</a></p>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                         <tr bgcolor="#e74a3b">
                                          <th><font color="#ffffff">Entidad</font></th>
                                          <th><font color="#ffffff">Descripción</font></th>
                                          <th><font color="#ffffff">Ubicación</font>
                                          <th><font color="#ffffff">Fecha</font></th>
                                          <th><font color="#ffffff">Acciones</font></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php 
                                              require_once("../../bd/conexion.php");
                                              $fecha = date('Y/m/d');
                                              $sql = ("SELECT * FROM traspaso INNER JOIN oficina ON traspaso.ubicacion_final = oficina.id_oficina");
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
                                            <b>Inicial:</b>
                                            <?php echo $traspaso['ubicacion_inicial']; ?> 
                                            <b>Final:</b> 
                                            <?php echo $traspaso['oficina']; ?> 
                                          </td>
                                          <td><?php echo $traspaso['fecha_traspaso']; ?></td>
                                          <td><a href="../DOMPDF/traspaso_id.php?id=<?php echo $traspaso['id_traspaso']; ?>" class="btn btn-primary"><i class="fas fa-file-download"></i></a></td>
                                        </tr>
                                        <?php 
                                           } 
                                        ?>                   
                                      </tbody>
                      </table>
    </div>
  </div>
</div>



    
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Consulta Filtrada</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="consultar_traspaso_fecha.php" method="POST">
          <label>Desde</label>
          <input type="date" class="form-control" name="fecha1" required="">
          <label>Hasta</label>
          <input type="date" class="form-control" name="fecha2" required="">
          <hr>
          <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>

<?php 
   // pie de Pagina Footer
   require_once("footer.php"); 
?>
    