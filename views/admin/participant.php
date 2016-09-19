<?php
require_once('../../path.php');
$page_name = 'participant';
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
                                                <h2>Create Participants</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid container-padded">
                                        <div class="row">                                            
                                            <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Electoral Participants</h3>
                                                        <button class="pull-right btn" style="margin-bottom: 2px;"><i class="ion ion-plus"></i>Add</button>
                                                    </div>
                                                    <div class="panel-body">
                                                        <form class="form-inline" role="form">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="name">Full Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="Enter Fullname">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="session">Session</label>
                                                                <input type="text" class="form-control cep" autocomplete="off" placeholder="session">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="positions">Positions</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control">
                                                                        <option>Position</option>
                                                                        <option>President</option>
                                                                        <option>Vice President</option>
                                                                        <option>Speaker</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Create</button>
                                                        </form>
                                                        <br>
                                                        <form class="form-inline" role="form">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="name">Full Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="Enter Fullname">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="session">Session</label>
                                                                <input type="text" class="form-control cep" autocomplete="off" placeholder="session">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="positions">Positions</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control">
                                                                        <option>Position</option>
                                                                        <option>President</option>
                                                                        <option>Vice President</option>
                                                                        <option>Speaker</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Create</button>
                                                        </form>
                                                        <br>
                                                        <form class="form-inline" role="form">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="name">Full Name</label>
                                                                <input type="text" class="form-control" id="name" placeholder="Enter Fullname">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="session">Session</label>
                                                                <input type="text" class="form-control cep" autocomplete="off" placeholder="session">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="sr-only" for="positions">Positions</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control">
                                                                        <option>Position</option>
                                                                        <option>President</option>
                                                                        <option>Vice President</option>
                                                                        <option>Speaker</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Create</button>
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