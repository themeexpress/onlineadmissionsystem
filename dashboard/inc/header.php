<?php

include "../lib/Session.php";
Session::checkSession();
include "../lib/Database.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title> Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
      <script src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>
    <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <img src="img/logo.png" alt="OnlineAdmission" />
				</div>
				<div class="floatleft middle">
					<h1>Online Admission System</h1>
					
				</div>

                <?php

                if (isset($_GET['action']) && $_GET['action'] == "logout") {
                    Session::destroy();

                }

                ?>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hi, <?php echo Session::get('username');?></li>
                            <li><a href="?action=logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="admin.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="profile.php"><span>User Profile</span></a></li>
				<li class="ic-typography"><a href=""><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href=""><span>Inbox</span></a></li>
                <li class="ic-charts"><a href=""><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
           <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="title.php">Your Profile</a></li>
                                <li><a href="application.php">Application</a></li>
                                <li><a href="application_photo.php">Application2</a></li>
                                <li><a href="status.php">Status</a></li>                       
                            </ul>
                        </li>						
                        
                    </ul>
                </div>
            </div>
        </div>