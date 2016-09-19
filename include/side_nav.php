<div class="left-side-wrapper">
    <div class="left-side sticky-left-side">
        <div class="left-side-inner">
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list <?php if(in_array($page_name, ['index', 'position', 'participant'])) echo "nav-active current"?>"><a href="#"><i class="ion ion-speedometer"></i> <span>Dashboards</span> <i class="ion ion-ios7-arrow-down pull-right"></i></a>
                    <ul class="sub-menu-list">
                        <li class="<?php if("index" === $page_name) echo "active"?>">
                            <a href="index.php">Create Vote</a>
                        </li>
                        <li class="<?php if("position" === $page_name) echo "active"?>">
                            <a href="position.php">Create Positions</a>
                        </li>
                        <li class="<?php if("participant" === $page_name) echo "active"?>">
                            <a href="participant.php">Create Participants</a>
                        </li>                                               
                    </ul>
                </li>
                
                <li class="menu-list <?php if(in_array($page_name, ['college', 'candidate'])) echo "nav-active current"?>"><a href="#"><i class="ion ion-android-display"></i> <span>Result Board</span> <i class="ion ion-ios7-arrow-up pull-right"></i></a>
                    <ul class="sub-menu-list">
                        <li class="<?php if ("college" === $page_name) echo "active" ?>">
                            <a href="college_voted.php">College / Level View</a>
                        </li>

                        <li class="<?php if ("candidate" === $page_name) echo "active" ?>">
                            <a href="candidate.php">Candidates View</a>
                        </li>
                    </ul>
                </li>
                
                <!--note to whoever is coding this, this should only be enabled when time runs out se oti gbo-->
                <li class="menu-list  <?php if(in_array($page_name, ['pres', 'vice'])) echo "nav-active current"?>"><a href="#"><i class="ion  ion-android-stopwatch"></i> <span>Vote Analytics</span> <i class="ion ion-ios7-arrow-up pull-right"></i></a>
                    <ul class="sub-menu-list">
                        <li class="<?php if ("pres" === $page_name) echo "active" ?>">
                            <a href="pres.php">President</a>
                        </li>

                        <li class="<?php if ("vice" === $page_name) echo "active" ?>">
                            <a href="vice.php">Vice President</a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-header">Application Pages</li>
                <li class="menu-list <?php if(in_array($page_name, ['login', 'account'])) echo "nav-active current"?>"><a href="#"><i class="ion ion-settings"></i> <span>App Pages</span> <i class="ion ion-ios7-arrow-up pull-right"></i></a>
                    <ul class="sub-menu-list">
                        <li class="<?php if ("login" === $page_name) echo "active" ?>">
                            <a href="../views/students/login.html">Logout</a>
                        </li>

                        <li class="<?php if ("account" === $page_name) echo "active" ?>">
                            <a href="account.php">Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>