<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Cambiar Contraseña</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"></a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action = "app/controlador/changePasswordController.php" method="post" id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input required id="passwordActual" type="password" class="form-control" name="passwordActual" value="" placeholder="Contraseña Actual">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input required id="passwordNueva" type="password" class="form-control" name="passwordNueva" placeholder="Contraseña Nueva">
                                    </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input required id="passwordConfirmar" type="password" class="form-control" name="passwordConfirmar" placeholder="Confirmar Contraseña">
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" id="btn-login" href="#" class="btn btn-default">Cambiar Contraseña</button>
                                     
                                    </div>
                                </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="label label-success"><?php echo filter_input(INPUT_GET, "success"); ?></span>
                                        <span class="label label-danger"><?php echo filter_input(INPUT_GET, "error"); ?></span>
                                    </div>
                        </form>
                    </div>
            </div>
        </div>
</div>

