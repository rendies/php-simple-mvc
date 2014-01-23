<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 26 Nov 2013 23:55:53 GMT -->
<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo APP; ?>library/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo APP; ?>library/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo APP; ?>library/css/fullcalendar.css" />
		<link rel="stylesheet" href="<?php echo APP; ?>library/css/jquery.jscrollpane.css" />	
		<link rel="stylesheet" href="<?php echo APP; ?>library/css/unicorn.css" />
		<link rel="stylesheet" href="<?php echo APP; ?>library/css/unicorn.grey.css" class="skin-color" />	
	</head>
	<body>
		<div id="header">
			<h1><a href="dashboard.html">Unicorn Admin</a></h1>	
			<a id="menu-trigger" href="#"><i class="icon-align-justify"></i></a>	
		</div>
		<div id="user-nav">
		<?php

			if ((isset($_SESSION['login']) && $_SESSION['login']['status'] == true)) {
	
			?>

			<ul class="btn-group">
                <li class="btn" ><a title="" href="#"><i class="icon-user"></i> <span class="text">Profile</span></a></li>
                <li class="btn dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class="btn"><a title="" href="#"><i class="icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class="btn"><a title="" href="index.php?r=site/logout"><i class="icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>

			<?php
			
			} else {

			?>	

			<ul class="btn-group">
                <li class="btn" ><a title="" href="index.php?r=site/login"><i class="icon-user"></i> <span class="text">Login</span></a></li>
            </ul>

			<?php
			}

		?>

           
        </div>
            
		<div id="sidebar">
		<?php

			if ((isset($_SESSION['login']) && $_SESSION['login']['status'] == true)) {
	
			?>

				<ul>
					<li class="active"><a href="index-2.html"><i class="icon-home"></i> <span>Dashboard</span></a></li>
					<li class="submenu">
						<a href="#"><i class="icon-beaker"></i> <span>UI Lab</span> <i class="arrow icon-chevron-right"></i></a>
						<ul>
							<li><a href="interface.html">Interface Elements</a></li>
							<li><a href="jquery-ui.html">jQuery UI</a></li>
							<li><a href="buttons.html">Buttons &amp; icons</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#"><i class="icon-th-list"></i> <span>Form elements</span> <i class="arrow icon-chevron-right"></i></a>
						<ul>
							<li><a href="form-common.html">Common elements</a></li>
							<li><a href="form-validation.html">Validation</a></li>
							<li><a href="form-wizard.html">Wizard</a></li>
						</ul>
					</li>
					<li><a href="tables.html"><i class="icon-th"></i> <span>Tables</span></a></li>
					<li><a href="grid.html"><i class="icon-th-list"></i> <span>Grid Layout</span></a></li>
					<li class="submenu">
						<a href="#"><i class="icon-file"></i> <span>Sample pages</span> <i class="arrow icon-chevron-right"></i></a>
						<ul>
							<li><a href="invoice.html">Invoice</a></li>
							<li><a href="chat.html">Support chat</a></li>
							<li><a href="calendar.html">Calendar</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="messages.html">Messages</a></li>
						</ul>
					</li>
					<li>
						<a href="charts.html"><i class="icon-signal"></i> <span>Charts &amp; graphs</span></a>
					</li>
					<li>
						<a href="widgets.html"><i class="icon-inbox"></i> <span>Widgets</span></a>
					</li>
				</ul>

			<?php
			
			} else {

			?>	

			<ul>
				<li class="active"><a href="index.php?r=site/login"><i class="icon-user"></i> <span>Login</span></a></li>
				
			</ul>

			<?php
			}

		?>
			
		
		</div>
		
		<div id="content">
			
			<?php echo $content; ?>

		</div>
		<div class="row">
			<div id="footer" class="col-xs-12">
				2012 - 2013 &copy; Unicorn Admin. Brought to you by <a href="http://bootstra-hunter.com/">Bootstrap Hunter</a>
			</div>
		</div>

            <script src="<?php echo APP; ?>library/js/excanvas.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery-ui.custom.js"></script>
            <script src="<?php echo APP; ?>library/js/bootstrap.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery.flot.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery.flot.resize.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery.sparkline.min.js"></script>
            <script src="<?php echo APP; ?>library/js/fullcalendar.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery.jpanelmenu.min.js"></script>
            <script src="<?php echo APP; ?>library/js/jquery.nicescroll.min.js"></script>
            <script src="<?php echo APP; ?>library/js/unicorn.js"></script>
            <script src="<?php echo APP; ?>library/js/unicorn.dashboard.js"></script>
	</body>

<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 26 Nov 2013 23:57:09 GMT -->
</html>
