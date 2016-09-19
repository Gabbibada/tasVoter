<?php
require_once('../../path.php');
$page_name = "candidate";
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
                                <div><br></div>
                                <section>
                                    <div class="container-fluid container-padded">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">
                                                                    <i class="ion ion-android-sort"></i> Candidate View
                                                                </h3>
                                                                <ul class="panel-tools pull-right">                                                                                                                                        
                                                                    <li>
                                                                        <div class="btn-group">
                                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Candidate <i class="fa fa-caret-down"></i></button>
                                                                            <ul class="dropdown-menu" role="menu">
                                                                                <li>
                                                                                    <a href="candidate.php">President</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#">Vice President</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <a href="candidate_position.php" class="btn btn-default active">Position</a>
                                                                </ul> 
                                                            </div>   
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <tr style="font-size: 30px;">
                                                                                <th>Colleges</th>
                                                                                <th>100</th>
                                                                                <th>200</th>
                                                                                <th>300</th>
                                                                                <th>400</th>
                                                                                <th>TOTAL</th>
                                                                                <!--<th>Registered</th>-->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr style="font-size: 30px;">
                                                                                <td class="text-danger" style="font-weight: bold">President</td>
                                                                                <td>2,920</td>
                                                                                <td>3,120</td>
                                                                                <td>2,980</td>
                                                                                <td>1,098</td>
                                                                                <td style="font-weight: bold">5,720</td>                                                                                
                                                                            </tr>
                                                                            <tr style="font-size: 30px;">
                                                                                <td class="text-primary" style="font-weight: bold">Vice President</td>
                                                                                <td>1,920</td>
                                                                                <td>1,039</td>
                                                                                <td>3,559</td>
                                                                                <td>2,344</td>
                                                                                <td style="font-weight: bold">9,291</td>
                                                                            </tr>
                                                                            <tr style="font-size: 30px;">
                                                                                <td class="text-info" style="font-weight: bold">Gen Sec</td>
                                                                                <td>2,120</td>
                                                                                <td>1,232</td>
                                                                                <td>3,444</td>
                                                                                <td>4,332</td>
                                                                                <td style="font-weight: bold">6,210</td>
                                                                            </tr>
                                                                            <tr style="font-size: 30px;">
                                                                                <td style="font-weight: bold">PRO</td>
                                                                                <td>2,150</td>
                                                                                <td>1,233</td>
                                                                                <td>3,223</td>
                                                                                <td>1,232</td>
                                                                                <td style="font-weight: bold;">10,239</td>
                                                                            </tr>
                                                                            <tr style="font-size: 30px;">
                                                                                <td style="font-weight: bold">TOTAL</td>
                                                                                <td style="font-weight: bold;">9,250</td>
                                                                                <td style="font-weight: bold;">7,323</td>
                                                                                <td style="font-weight: bold;">8,003</td>
                                                                                <td style="font-weight: bold;">9,432</td>
                                                                                <td style="font-weight: bolder;">33,300 </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Total votes</h3>
                                                    </div>

                                                    <div class="panel-body">
                                                        <div id="bar-example" style="height: 200px;"></div>
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
        <script src="<?php echo SITEURL.'/'?>js/lib/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo SITEURL.'/'?>js/lib/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo SITEURL.'/'?>js/lib/momentjs/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo SITEURL.'/'?>js/lib/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="<?php echo SITEURL.'/'?>js/lib/tabdrop/bootstrap-tabdrop.js" type="text/javascript"></script>
        <script src="<?php echo SITEURL.'/'?>js/lib/morris/morris.js"></script>
        <script src="<?php echo SITEURL.'/'?>js/lib/morris/raphael-min.js"></script>
        <script src="<?php echo SITEURL.'/'?>js/pages/total_votes.js"></script>
        <script src="<?php echo SITEURL.'/'?>js/scripts.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var clock;

            $(document).ready(function() {
                    var clock;

                    clock = $('.clock').FlipClock({
                    clockFace: 'HourlyCounter',
                    autoStart: false,
                    callbacks: {
                            stop: function() {
                                    $('.message').html('The clock has stopped!')
                            }
                    }
                });

                clock.setTime(14400);
                clock.setCountdown(true);
                clock.start();

            });
        </script>
    </body>

</html>