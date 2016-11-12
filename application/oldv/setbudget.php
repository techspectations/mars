<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input.css">



<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<!--fonts-->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!--ace styles-->

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-skins.min.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!--inline styles related to this page-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


	<body>
		
		    <?php  
include "h.php";

?>
<div class="sidebar-collapse" id="sidebar-collapse">
<i class="icon-double-angle-left"></i>
</div>
</div>

<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">
<ul class="breadcrumb">
<li>
<i class="icon-home home-icon"></i>
<a href="#">Home</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>
<li class="active">Dashboard</li>
</ul><!--.breadcrumb-->

<!--<div class="nav-search" id="nav-search">
<form class="form-search" />
<span class="input-icon">
<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
<i class="icon-search nav-search-icon"></i>
</span>
</form>
</div>#nav-search-->
</div>

<div class="page-content">
<div class="page-header position-relative">
<h1>
Dashboard
<small>
<i class="icon-double-angle-right"></i>
overview &amp; status
</small>
</h1>
</div><!--/.page-header-->


			

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<div class="row-fluid">
								<div class="span3">
							
								</div>

								<div class="span3">
									<div class="widget-box pricing-box">
										<div class="widget-header header-color-orange">
											<h5 class="bigger lighter">Add budget</h5>
										</div>

										<div class="widget-body">
											<div class="widget-main">
                                <link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input.css">
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input_1.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input_1_1.css">
<style>
.si-wrapper input {
	font-size: 2em;
	padding: .1em;
}
</style>
<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;Month Year :<br/><br/>
<div class="si-wrapper">
  <?php
  echo form_open('money_c/savebudget')?>
    <input type="text" id="si-input"  name="date" style=" font-size: 15px; margin-left: 21px;"  class="si-input"  placeholder="Eg:September 2015"><br>
     
	<button class="si-btn">
		speech input
		<span class="si-mic"></span>
		<span class="si-holder"></span>
	</button>
</div><br><br><br>
<style>
.si-wrapper1 input {
	font-size: 2em;
	padding: .1em;
}
</style>
&nbsp;&nbsp;&nbsp;&nbsp;Category:<br/><br/>
<div class="si-wrapper1">
  

    <input type="text" id="si-input" name="cate" style=" font-size: 15px; margin-left: 21px;"  class="si-input1" >
     
	<button class="si-btn1">
		speech input
		<span class="si-mic1"></span>
		<span class="si-holder1"></span>
	</button>
</div><br><br><br>
<style>
.si-wrapper2 input {
	font-size: 2em;
	padding: .1em;
}
</style>
&nbsp;&nbsp;&nbsp;&nbsp;Amount:<br/><br/>
<div class="si-wrapper2">
  

    <input type="text" id="say" name="amount"  style="font-size:15px;margin-left: 21px;"   class="si-input2" >
     
	<button class="si-btn2">
		speech input
		<span class="si-mic2"></span>
		<span class="si-holder2"></span>
	</button>
</div>

 <span><input type="submit" value="Add" style="background-color: #ffc657;margin-top:14px; margin-left: 101px;height:38px;width:90px;"/></span>
    
<!--<input type="text" id="say">-->
<script src="<?php echo base_url();?>assets/js/speech-input.js"></script>
<script src="<?php echo base_url();?>assets/js/speech-input_1.js"></script>
<script src="<?php echo base_url();?>assets/js/speech-input_1_1.js"></script>
<!--<script src="jquery1.9.1.js"></script>-->

											</div>

											
										</div>
									</div>
								</div>
	<div class="span3">
									<div class="widget-box pricing-box">
										<div class="widget-header header-color-blue">
											<h5 class="bigger lighter">Avaialble Categories</h5>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<ul class="unstyled spaced2">
													<li>
														<i class="icon-ok green"></i>
														Business
													</li>

													<li>
														<i class="icon-ok green"></i>
														Education
													</li>

													<li>
														<i class="icon-ok green"></i>
														Entertainment
													</li>

													<li>
														<i class="icon-ok green"></i>
														Housing
													</li>

													<li>
														<i class="icon-ok green"></i>
														Food
													</li>

													<li>
														<i class="icon-ok green"></i>
													Insurance
                                                                                                   
													</li>
                                                                                                        <li>
														<i class="icon-ok green"></i>
													Vehicle
                                                                                                   
													</li>
                                                                                                        <li>
														<i class="icon-ok green"></i>
													Medical
                                                                                                   
													</li> 
                                                                                                        <li>
														<i class="icon-ok green"></i>
												Mutual fund
                                                                                                   
													</li>
                                                                                                        
                                                                                                          <li>
														<i class="icon-ok green"></i>
												loan
                                                                                                   
													</li>
                                                                                                       
												</ul>

											
												
											</div>

											
										</div>
									</div>
								</div>
								

								
										</div>
									</div>
								</div>
							</div><!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
<!--					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>-->

				

						
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url();?>assets3/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets3/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>assets3/js/flot/jquery.flot.resize.min.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
	</body>
</html>
