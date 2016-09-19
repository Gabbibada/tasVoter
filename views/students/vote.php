<?php
require_once('../../path.php');
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
                        <div class="main-content-wrapper" style="min-height: 0%;">
                            <div class="main-content">
                                <div><br></div>
                                <section>
                                    <div class="container-fluid container-padded">                                                                                         
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-group" id="accordion_info">
                                                    <!--president-->
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion_info" href="#collapseOne_info">
                                                                    Presidential Candidates
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne_info" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-primary panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate A
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-primary-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/87.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border funkyradio" style="text-align: center; font-weight: bold;">
                                                                                        <div class="list-group-item funkyradio-danger" style="padding: 2%;">
                                                                                            <input type="radio" name="radio" id="radio1" />
                                                                                            <label for="radio1">Sulex D</label>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-primary panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate B
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-primary-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/59.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border funkyradio" style="text-align: center; font-weight: bold;">
                                                                                        <div class="list-group-item funkyradio-primary" style="padding: 2%;">
                                                                                            <input type="radio" name="radio" id="radio2" />
                                                                                            <label for="radio2">MYS Akins</label>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-primary panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate C
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-primary-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/56.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border funkyradio" style="text-align: center; font-weight: bold;">
                                                                                        <div class="list-group-item funkyradio-success" style="padding: 2%;">
                                                                                            <input type="radio" name="radio" id="radio3" />
                                                                                            <label for="radio3">Coolchi Shef</label>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-primary panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate D
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-primary-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/21.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border funkyradio" style="text-align: center; font-weight: bold;">
                                                                                        <div class="list-group-item funkyradio-warning" style="padding: 2%;">
                                                                                            <input type="radio" name="radio" id="radio4" />
                                                                                            <label for="radio4">Gabbi G</label>
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--president ends-->

                                                    <!--vice president-->
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion_info" href="#collapseTwo_info">
                                                                    Vice Presidential Candidate
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo_info" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-success panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate A
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-success-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/59.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            Sulex D
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-success panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate B
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-success-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/87.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            MYS Akins
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-success panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate C
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-success-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/21.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            Coolchi Shef
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-success panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate D
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-success-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/56.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            Gabbi G
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--vice president ends-->

                                                    <!--speaker--> 
                                                    <div class="panel panel-warning">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion_info" href="#collapseThree_info">
                                                                    Speaker Candidate
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree_info" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-warning panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate A
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-warning-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/21.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            Sulex D
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-warning panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate B
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-warning-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/87.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            MYS Akins
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-warning panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate C
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-warning-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/56.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            Coolchi Shef
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="panel panel-default">
                                                                                    <div class="panel-body panel-body-warning panel-body-no-br text-center">
                                                                                        <h3 class="panel-title">
                                                                                            <i class="ion ion-person"></i> Candidate D
                                                                                        </h3>
                                                                                    </div>
                                                                                    <div class="panel-body panel-body-warning-light panel-body-no-br">
                                                                                        <img width="100%" src="<?php echo SITEURL.'/'?>images/59.jpg"/>
                                                                                    </div>
                                                                                    <hr class="small">
                                                                                    <div class="list-group no-top-border" style="text-align: center; font-weight: bold;">
                                                                                        <a class="list-group-item">
                                                                                            Gabbi G
                                                                                        </a>                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--speaker ends-->

                                                </div>
                                            </div>
                                        </div>
                                        <!--speaker-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-body-success">                                                
                                                    <button data-toggle="modal" data-target="#mod-success" type="button" class="btn btn-success btn-block"><i class="fa fa-check"></i> Cast Vote</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--modal-->
                                    <div class="container-fluid container-padded">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="panel panel-plain">                                                    
                                                    <div class="modal fade" id="mod-success" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header modal-header-success">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title">Vote Casted</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="text-center">
                                                                        <div class="i-circle"><i class="fa fa-check text-success"></i></div>
                                                                        <h4>Congratulations!</h4>
                                                                        <p>You have cast your vote successfully!</p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <!--<button type="button" class="btn btn-success" html="#">View Result</button>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of modal-->                                    
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