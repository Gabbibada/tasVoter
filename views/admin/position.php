<?php
require_once('../../path.php');
$page_name = "position";
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
                                                <h2>Create Positions</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid container-padded">
                                        <div class="row">                                            
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Electoral Positions</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-horizontal" role="form">
                                                            <div class="form-group">
                                                                <label class="col-md-1 control-label">Default</label>
                                                                <div class="col-md-11">
                                                                    <input type="text" value="President, Vice President, Speaker" data-role="tagsinput" style="display: none;">
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