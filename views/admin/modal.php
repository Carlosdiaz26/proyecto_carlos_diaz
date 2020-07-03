


 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Cambiar de Status Equipo en Reparación</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
             <div class="col-lg-12">
	            <form method="POST" action="../../controllers/actualizar/actualizar_e.php"> 
							<lable>Tipo de Equipo:</label>
							<input type="text" name="tipo_de_equipo" class="form-control" id="etipo_de_equipo">
							<input type="hidden" name="id_reg_e_e" class="form-control" id="eid_reg_e_e">
							<lable>Descripción del Equipo:</label>
							<textarea name="descripcion" rows="3" class="form-control" id="edescripcion"></textarea>
							<lable>Falla:</label>
							<textarea name="falla" rows="3" class="form-control" id="efalla"></textarea>
							<label>Solución</label>
							<textarea name="solucion" rows="3" class="form-control" required=""></textarea>
							<label>Status</label>
							<select name="status" class="form-control" required="">
								<option value="">Seleccioné el Status</option>
								<option value="En Reparacion">En Reparación</option>
								<option value="Esperando Respuesto">Esperando Respuesto</option>
								<option value="Sin solucion">Sin solución</option>
								<option value="Reparado">Reparado</option>
							</select>
							<br><button type="submit" class="btn btn-primary">Actualizar</button>
			    </form>		
		     </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>