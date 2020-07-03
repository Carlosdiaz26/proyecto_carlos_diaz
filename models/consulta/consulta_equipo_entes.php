<table class="table table-responsive">
        <tr bgcolor="#4e73df">
          <th><font color="#FFFFFF">Ente</font></th>
          <th><font color="#FFFFFF">Tipo de Equipo</font></th>
          <th><font color="#FFFFFF">Descripción</font></th>
          <th><font color="#FFFFFF">Falla</font></th>
          <th><font color="#FFFFFF">Status</font></th>
          <th><font color="#FFFFFF">Fecha de Entrada</font></th>
          <th><font color="#FFFFFF">Acciones</font></th>
        </tr>
          <?php 
             $sql = ("SELECT * FROM usuario WHERE email = '$email'");
             $res=mysqli_query(conexion::con(), $sql);
              foreach ($res as $key) {
                 $ente = $key['ente'];
              }  
          ?>

          <?php
             $sql = ("SELECT * FROM registro_e_e WHERE ente = '$ente'"); 
             $result=mysqli_query(conexion::con(), $sql);
             echo "<b>Usuarios Registrados:</b>";
             echo "&nbsp";
             echo "<span class='badge badge-success'>";
             echo $num = $result->num_rows;
             echo "</span>";
             foreach ($result as $key) {
          ?>
        
        <tr>
          <td><?php echo $key['ente']; ?></td>
          <td><?php echo $key['tipo_de_equipo']; ?></td>
          <td><?php echo $key['descripcion']; ?></td>
          <td><?php echo $key['falla']; ?></td>
          <td><?php echo $key['status']; ?></td>
          <td><?php echo $key['fecha_registro']; ?></td>
          <td><a href="../DOMPDF/acta_entrada.php?id=<?php echo $key['id_reg_e_e']; ?>" class="btn btn-primary" title="Descargar Acta de Entrega"><i class="fa fa-download"></a></td>
        </tr>
          <?php } ?>
</table>