<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="<?=base_url()."asset/css/bootstrap.min.css"?>">
    <link rel="stylesheet" href="<?=base_url()."asset/css/register.css"?>">

  </head>
  <body>
    <div class="container">
            <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            	<div class="panel panel-default">
            		<div class="panel-heading">
    			    		<h3 class="panel-title">Register</small></h3>
    			 			</div>
    			 			<div class="panel-body">
                  <form class="" action="<?=base_url()."authenticate/registration"?>" method="post">

			    					<div class="form-group">
			                <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
			    					</div>

    			    			<div class="form-group">
    			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
    			    			</div>

    			    			<!-- <div class="row">
    			    				<div class="col-xs-6 col-sm-6 col-md-6"> -->
    			    					<div class="form-group">
    			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
    			    					</div>
    			    				</div>
    			    				<!-- <div class="col-xs-6 col-sm-6 col-md-6">
    			    					<div class="form-group">
    			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
    			    					</div>
    			    				</div> -->
    			    			<!-- </div> -->

    			    			<input type="submit" name="register" value="Register" class="btn btn-info btn-block">

    			    		</form>
    			    	</div>
    	    		</div>
        		</div>
        	</div>
        </div>

  </body>
</html>
