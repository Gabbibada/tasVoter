<?php
require_once('../../path.php');
$page_name = "index";
?>

<!DOCTYPE html>
<html>

    <?php include INCPATH . '/head.php'; ?>

    <body>
        <?php include INCPATH . '/header.php'; ?>
        <div class="container" id="content-container">
            <div class="content-wrapper">
                <div class="row">
                    <div class="side-nav-content">
                        
                        <?php include INCPATH.'/side_nav.php'?>
                        
                        <div class="main-content-wrapper" style="min-height: 0%;">                            
                            <div class="main-content">
                                <section>
                                    <div class="container-fluid container-padded">
                                        <div class="row">
                                            <div class="col-md-12 page-title">
                                                <h2>Create Election</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid container-padded">
                                        <div class="row">                                            
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Vote Details</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group">
                                                                <label for="name" class="col-md-1 control-label">Name</label>
                                                                <div class="col-md-9">
                                                                    <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="date" class="col-md-1 control-label">Date</label>
                                                                <div class="col-md-9">
                                                                    <input type="date" class="form-control" id="inputPassword1" placeholder="Date">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="section" class="col-md-1 control-label">Session</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control cep" autocomplete="off" placeholder="session">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include INCPATH . '/footer.php'; ?>       
        <?php include INCPATH . '/scripts.php'; ?>
    </body>

</html>



