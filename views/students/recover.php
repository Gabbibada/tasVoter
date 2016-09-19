<?php
require_once('../../path.php');
?>
<!DOCTYPE html>
<html>
   
    <?php include INCPATH . '/head.php'; ?>
    
    <body>
         <?php include INCPATH . '/header.php'; ?>
        <div class="container form-container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <div class="panel panel-default panel-more-shadow">
                        <div class="panel-body">
                            <div class="panel-desc" style="text-align: center;">Register To Vote</div>
                            <hr>
                            <form role="form" action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" id="username" placeholder="matric number">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" id="email" placeholder="phone number">
                                </div>
                                <div class="checkbox m-bot15">
                                    <label>
                                        <input type="checkbox"> I agree to <a href="#">Vote</a>.
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                                <div class="form-group m-top15">
                                    <a href="login.php">Already Registered?</a>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer text-center">
                            <a class="btn btn-sm btn-social-icon"><img src="<?php echo SITEURL.'/'?>images/tams.png" /></a>
                            <a class="btn btn-sm btn-social-icon m-left10"><img src="<?php echo SITEURL.'/'?>images/tasued.png" /></a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <?php include INCPATH . '/scripts.php'; ?>
        
    </body>
   
</html>