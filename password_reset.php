<?php require_once("nabvar.php"); ?>
            <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="controllers/enviar/enviar_c.php" method="POST" class="tm-search-form tm-section-pad-2">
                                    <center><h3>Recuperar Contraseña</h3></center><hr>
                                    <?php require_once("views/alertas/alert.php"); ?>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                            <input name="correo" type="email" class="form-control" placeholder="Ingrese su Correo Electronico">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" class="btn btn-primary tm-btn-search">Enviar</button>
                                        </div>
                                    </div>
                                      <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                          <a href="index.php" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Volver al Login</a>
                                      </div>
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div> 
            
 <?php require_once("footer.php"); ?>           