<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr bgcolor="#4e73df">
                      <th><font color="#ffffff">Equipo</font></th>
                      <th><font color="#ffffff">Descripción</font></th>
                      <th><font color="#ffffff">Ente</font></th>
                      <th><font color="#ffffff">Responsable</font></th>
                      <th><font color="#ffffff">Telefono</font></th>
                      <th><font color="#ffffff">Falla</font></th>
                      <th><font color="#ffffff">Status</font></th>
                      <th><font color="#ffffff">Solución</font></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                       require_once("../../models/consulta/consulta_e_reparados_entes1.php");
                       foreach ($result as $equipo) {
                    ?>
                    <tr>
                      <td><?php echo $equipo['tipo_de_equipo']; ?></td>
                      <td><?php echo $equipo['descripcion']; ?></td>
                      <td><?php echo utf8_decode(utf8_encode($equipo['ente'])); ?></td>
                      <td><?php echo $equipo['nombre_responsable']; ?></td>
                      <td><?php echo $equipo['telefono_responsable']; ?></td>
                      <td><?php echo $equipo['falla']; ?></td>
                      <td><?php echo $equipo['status']; ?></td>
                      <td><?php echo $equipo['solucion']; ?></td>
                    </tr>
                    <?php 
                       } 
                    ?>                   
                  </tbody>
  </table>
</div>