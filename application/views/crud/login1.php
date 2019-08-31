<!DOCTYPE html>
<html>
<head>
	<title>login admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<style type="text/css">
    #mark{
        margin-bottom: 16%;
    }
</style>
</head>
<body>
<div class="container">
<div class="row text-center ">
<div class="col-md-4">
<br /><br />
 <br />
</div>
</div>
<div class="row ">

  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
        <strong>   Enter Details To Login   (Admin login)</strong>  
            </div>
            <div class="panel-body">
                <form id="form_Add" action="<?php echo site_url('C_login/login_action')?>" role="form" method="POST" enctype="multipart/form-data">
                	<div class="alert alert-danger animated fadeInDown" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Warning!</strong>
									 <strong>Warning!</strong> <?php echo $msg; ?>
						</div>
					
                       <br />
                     <div class="form-group input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="user"placeholder="Your Username " />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"></span>
                            <input type="password" class="form-control" name="pass" placeholder="Your Password" />
                        </div>
                    <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" /> Remember me
                            </label>
                            <span class="pull-right">
                                   <a href="#" >Forget password ? </a> 
                            </span>
                        </div>
                     
                     <button class="btn btn-primary form-control" value="login">Log In</button>
                    <hr />
                   
                    </form>

            </div>
           
        </div>
    </div>


</div>
</div>
<div id="mark"></div>
</body>
</html>