<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.5/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 05:25:17 GMT -->
<head>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Personal Finance Manager</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/assets3/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/assets3/css/font-awesome/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/assets3/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/assets3/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/assets3/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/assets3/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/assets3/js/html5shiv.min.js"></script>
		<script src="/assets3/js/respond.min.js"></script>
		<![endif]-->
	</head>


	<body class="login-layout" style="background-color: #004e98;">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container" >
							<div class="center">
								<h1>
									<span class="white" id="id-text2">FED Personal Finance Manager	</span>
								</h1>
							
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border" style="background-color: #ffb70b;">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
												Login Attempt Restricted
											</h4>
                                             <p>We deactivated your login because your attempt for login is exceeded.Enter your Email id to activate your account</p>
											<div class="space-6"></div>
											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Send</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->


									</div><!-- /.widget-body -->
							</div><!-- /.login-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

    	<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="/assets3/js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/assets3/js/jquery.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
		</script>
	</body>
</html>
