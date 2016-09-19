<?php
require_once('../../path.php');
$page_name = "account";
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
                        <?php include INCPATH . '/side_nav.php' ?>
                        <div class="main-content-wrapper" style="min-height: 0%;">
                            <div class="main-content">
                                <section>
                                    <div class="container-fluid container-padded">
                                        <div class="row">
                                            <div class="col-md-12 page-title">
                                                <h2>Settings</h2>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid container-padded">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel panel-plain">
                                                    <div class="panel-body">
                                                        <ul class="nav nav-tabs tab-drop">
                                                            <li class="active"><a href="#profile-settings" data-toggle="tab"><i class="fa fa-user fa-fw"></i> Profile settings</a></li>
                                                            <li><a href="#change-password" data-toggle="tab"><i class="fa fa-edit fa-fw"></i> Change password</a></li>
                                                        </ul>
                                                        <div class="panel panel-default m-bot0">
                                                            <div class="panel-body tab-content">
                                                                <div class="tab-pane active" id="profile-settings">
                                                                    <h4><i class="fa fa-user fa-fw"></i> Profile settings</h4>
                                                                    <form action="#" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Profile Pic</label>
                                                                            <div class="col-md-7">
                                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                                                                                        <img src="images/.jpg">
                                                                                    </div>
                                                                                    <div>
                                                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Username</label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" name="user-name" value=
                                                                                       "admin" class="form-control" disabled=
                                                                                       "disabled" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">First
                                                                                Name</label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" name="first-name" value="Gabbi"
                                                                                       class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Last Name</label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" name="last-name" value="A"
                                                                                       class="form-control" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-7 col-md-push-3">
                                                                                <button type="submit" class="btn btn-primary">Save
                                                                                    Changes</button> &nbsp; <button type="reset" class=
                                                                                                                "btn btn-default">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane" id="change-password">
                                                                    <h4><i class="fa fa-edit fa-fw"></i> Change password</h4>
                                                                    <form action="#" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Old
                                                                                Password</label>
                                                                            <div class="col-md-7">
                                                                                <input type="password" name="old-password" class=
                                                                                       "form-control">
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">New
                                                                                Password</label>
                                                                            <div class="col-md-7">
                                                                                <input type="password" name="new-password-1" class=
                                                                                       "form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">New Password
                                                                                Confirm</label>
                                                                            <div class="col-md-7">
                                                                                <input type="password" name="new-password-2" class=
                                                                                       "form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-7 col-md-push-3">
                                                                                <button type="submit" class="btn btn-primary">Save
                                                                                    Changes</button> &nbsp; <button type="reset" class=
                                                                                                                "btn btn-default">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane" id="notifications">
                                                                    <h4><i class="fa fa-bell fa-fw"></i> Adjust notifications</h4>
                                                                    <hr>
                                                                    <p class="callout callout-warning">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                                    <hr>
                                                                    <form action="#" class="form form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Toggle
                                                                                Notifications</label>
                                                                            <div class="col-md-7">
                                                                                <div class="checkbox">
                                                                                    <label><input value="" type="checkbox" checked=
                                                                                                  "checked" /> Send me security emails</label>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label><input value="" type="checkbox" checked=
                                                                                                  "checked" /> Send system emails</label>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label><input value="" type="checkbox" /> Lorem
                                                                                        ipsum dolor sit amet</label>
                                                                                </div>
                                                                                <div class="checkbox">
                                                                                    <label><input value="" type="checkbox" />
                                                                                        Laborum, quam iure quibusdam</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Email for
                                                                                Notifications</label>
                                                                            <div class="col-md-7">
                                                                                <select name="email_notifications" class=
                                                                                        "form-control">
                                                                                    <option value="1">
                                                                                        john@proctor.com
                                                                                    </option>
                                                                                    <option value="2">
                                                                                        mary@proctor.com
                                                                                    </option>
                                                                                    <option value="3">
                                                                                        chris@proctor.com
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-7 col-md-push-3">
                                                                                <button type="submit" class="btn btn-primary">Save
                                                                                    Changes</button> &nbsp; <button type="reset" class=
                                                                                                                "btn btn-default">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="tab-pane" id="payments">
                                                                    <h4><i class="fa fa-dollar fa-fw"></i> Payment settings</h4>
                                                                    <hr>
                                                                    <div class="callout callout-info">
                                                                        <h5>You are currently on the <u>Starter plan</u>.</h5>
                                                                        <p>Your monthly charge for the <strong>$9.00</strong> is paid on the 11th of each month.</p>
                                                                        <br>
                                                                        <a href="#" class="btn btn-info">Change plan</a>
                                                                    </div>
                                                                    <hr>
                                                                    <form action="#" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Card type</label>
                                                                            <div class="col-md-7">
                                                                                <p class="form-control-static">Visa</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Card number</label>
                                                                            <div class="col-md-7">
                                                                                <p class="form-control-static">**** **** **** 4784 <a href="#">(Change)</a></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Valid until</label>
                                                                            <div class="col-md-7">
                                                                                <p class="form-control-static">07/19</p>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <hr>
                                                                    <h4>Account usage</h4>
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <strong>Disk space</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="progress m-bot0">
                                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                                                            <span>5/20 GB</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <strong>Users</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="progress m-bot0">
                                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                                                                            <span>10/25</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <strong>Projects</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="progress m-bot0">
                                                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                                                            <span>25/50</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
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