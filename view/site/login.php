<div id="content-header">
				<h1><?php echo $variable ?></h1>
			</div>
			<div id="breadcrumb">
				<a href="<?php echo APP; ?>index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">Login</a>
			</div>
			<div class="container-fluid">
					<div class="col-md-5 col-md-offset-3">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-user"></i>
								</span>
								<h5>Please Login Here</h5>
							</div>
							<div class="widget-content">
								<form class="form-horizontal" method="post" action="<?php echo $action; ?>" >
									
									<label class="control-label">Username</label>
									<div class="controls">
										<input class="form-control input-sm ui-wizard-content" style="width:inherit !important" id="username" type="text" name="username">
									</div>
								
									
									<label class="control-label">Password</label>
									<div class="controls">
										<input class="form-control input-sm ui-wizard-content" style="width:inherit !important" id="password" type="password" name="password">
									</div>
											
									
									<label class="control-label"></label>
									<div class="controls">
										<input id="submit" class="btn btn-primary" type="submit" value="Login">
									</div>
											
								</form>
							</div>
						</div>
					</div>
			</div>