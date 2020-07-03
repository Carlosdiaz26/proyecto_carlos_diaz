<?php require_once("nabvar.php"); ?>    
            <div class="tm-section tm-section" id="tm-section-1"><br><br>
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                                   
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 mt-3 mt-md-0">
                            <div class="tm-bg-white tm-p-4">
                                <?php require_once("views/alertas/alert.php"); ?>
                                <form action="controllers/registro/contactame.php" method="POST" class="contact-form">
                                    <div class="form-group">
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="telefono" class="form-control" placeholder="Telefono"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Correo Electronico"  required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="asunto" class="form-control" placeholder="Asunto"  required/>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="mensaje" class="form-control" rows="3" placeholder="Mensaje" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary tm-btn-primary">Enviar Mensaje</button>
                                </form>
                            </div>                            
                        </div>
                    </div>     
                </div>
            </div>
            
<?php require_once("footer.php"); ?>    