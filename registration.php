<?php
include 'includes/header.php';
?> 
<div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registration Form</h3>
                    </div>
					<?php if (!empty($error)) { ?>
					<div class="alert alert-danger">
						<button type="button" class="close" aria-hidden="true">&times;</button>
						<i class="fa fa-info-circle"></i>  <?=$error?>
					</div>
					<?php } ?>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First name" name="firstname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                    <input class="form-control" placeholder="Last name" name="lastname" type="text" autofocus>
                                </div>
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                </div>
                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input class="btn btn-lg btn-success" type="submit" value='Submit'/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'includes/footer.php';
?>