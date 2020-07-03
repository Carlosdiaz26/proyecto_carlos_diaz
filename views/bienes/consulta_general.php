<?php 
  // Nabvar
  require_once("nabvar.php"); 
?>
<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800">Consulta General de Movimientos de Equipo</h1>
        <div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li><a href="#general" class="btn" data-toggle="tab">General</a></li>
              <li><a href="#cola" class="btn" data-toggle="tab">En Cola</a></li>
              <li><a href="#en" class="btn" data-toggle="tab">En Reparación</a></li>
              <li><a href="#esperando" class="btn" data-toggle="tab">Esperando Respuestos</a></li>
              <li><a href="#reparados" class="btn btn-primary" data-toggle="tab">Reparados</a></li>
              <li>
                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                  <b>Consulta Filtrada</b>
                </button>
              </li>
            </ul><br>
              <div id="myTabContent" class="tab-content">   
                <div class="tab-pane fade" id="general">
                  <?php require_once("consulta/consulta_e_general.php"); ?>
                </div>             
                <div class="tab-pane fade" id="cola">
                  <?php require_once("consulta/consulta_e_en_cola.php"); ?>
                </div>
                <div class="tab-pane fade" id="en">
                  <?php require_once("consulta/consulta_e_en_reparacion.php"); ?>
                </div>
                <div class="tab-pane fade" id="esperando">
                  <?php require_once("consulta/consulta_e_esperando_respuesto.php"); ?>
                </div>
                <div class="tab-pane fade" id="reparados">
                  <?php require_once("consulta/consulta_e_reparados.php"); ?>
                </div>
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
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <label>Estados de los Equipos</label>
          <select name="status" class="form-control" required="">
            <option value="">Seleccione !!!</option>
            <option value="En Cola">En Cola</option>
            <option value="En Reparacion">En Reparación</option>
            <option value="Esperando Respuestos">Esperando Respuestos</option>
            <option value="Reparados">Reparados</option>
          </select>
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
    