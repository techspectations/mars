<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>personal finance manager</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" type="image/ico" href="<?php echo base_url();?>asset/image/hdfcfv.jpg"/>
		<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>asset/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/fullcalendar.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speech-input.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-skins.min.css" />
		 <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/grid.css" type="text/css" media="screen">   
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>asset/css/chat.css" />
		<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>asset/css/screen.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speech-input_1.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speechinput3.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speechinput4.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speech-input_1_1.css">
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap-editable.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speech-input.css">
	</head>
		<body>
		<style>
			.si-wrapper input 
		{
			font-size: 2em;
			padding: .1em;
		}
		</style>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid" style="background-color: #00488E;">
					<a href="<?php echo site_url('index.php/dashboard');?>" class="brand">
						<small>
							<img src="<?php echo base_url();?>asset/image/hdfc3.jpg" style="width: 100px;height: 25px;"/>
							HDFC Personal Finance Manager
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li style="background-color: #00488E;">
        

							<div class="si-wrapper" style="font-size:9px;">
  
								<input type="text" class="si-input" id="say" placeholder="speak"  style="width:212px;margin-left: 52px;border-radius: 12px;" />
								<button class="si-btn" style="margin-top:10px;">
									speech input
									<span class="si-mic" ></span>
									<span class="si-holder"></span>
								</button>
							</div>
  
							<br><br/>
							<input type="hidden" name="speh" id="sayy">
							<script src="<?php echo base_url();?>asset/js/speech-input.js"></script>
							<script src="<?php echo base_url();?>asset/js/jquery1.9.1.js"></script>
							<!--<script type="text/javascript">
							 $.event.special.inputchange = {
								setup: function() {
									var self = this, val;
									$.data(this, 'timer', window.setInterval(function() {
										val = self.value;
										if ( $.data( self, 'cache') != val ) {
											$.data( self, 'cache', val );
											$( self ).trigger( 'inputchange' );
										}
									}, 20));
								},
								teardown: function() {
									window.clearInterval( $.data(this, 'timer') );
								},
								add: function() {
									$.data(this, 'cache', this.value);
								}
							};

							$('input').on('inputchange', function() {
								
							   var s=$.data(this, 'cache', this.value);
							   document.getElementById("sayy").value=s;

							 window.location = "voicee/?my=" + s;
							});
							</script>


							<script src="<?php echo base_url();?>asset/js/speech-input.js"></script>  
								<script>
									
									function voice2()
									{
										var mic=document.getElementById("say").value;
										window.location = "voicee/?my="+mic;
										
										
									}
								</script>-->
						</li>
						<li class="grey" title="Savings">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bar-chart"></i>
								<span class="badge badge-grey">▼</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
									<li class="nav-header">
										<i class="icon-ok"></i>
											Status
									</li>
										<?php
										$savings=$this->session->userdata('savings');
										$expense=$this->session->userdata('expense');
										$tot=$savings+$expense;
										$exppercent=($expense/$tot)*100;
										$exppercent1=round($exppercent, 2);
										$savingspercent=($savings/$tot)*100;
										$savingspercent1=round($savingspercent, 2);
										?>
									<li>

										<div class="clearfix">
											<span class="pull-left">Total Expense:</span>
											<span class="pull-right"><?php echo $exppercent1; ?>%</span>
											<br/>
											<span class="pull-right"><?php echo $expense; ?></span>
										</div>

										<div class="progress progress-mini progress-danger progress-striped active">
											<div style="width:<?php echo $exppercent1; ?>%" class="bar">
											</div>
										</div>



									</li>
									<li>
										<div class="clearfix">
											<span class="pull-left">Total Savings:</span>
											<span class="pull-right"><?php echo $savingspercent1; ?>%</span>
											<br/>
											<span class="pull-right"><?php echo $savings; ?></span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:<?php echo $savingspercent1; ?>%" class="bar">
											</div>
										</div>

									</li>
									<li class="nav-header">
										For more savings see the bellow policies
									</li>
									<li>
										<div class="clearfix">
											<a href="http://www.federalbank.co.in/federal-savings-fund" >
											<span class="pull-left">Do you want to know an ideal way to plan 
											for your future needs? Want to fulfill the dreams of your children ?
											Federal Savings Fund (FSF) is the right choice for you.</span></a>

										</div>

									</li>





									<li>

									</li>
							</ul>
						</li>

						<li class="purple" title="Alert">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt"></i>
								<span class="badge badge-important">▼</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									alerts
								</li>

								<li>
									<?php
										$d=$this->session->userdata('even');
										//        print_r($d);
										foreach ($d as $k)
											 {
											$t=$k->details;
											$u=$k->fdate;
											 
										?>
											<div class="clearfix">
		
												<span class="pull-left" style="width: 143px;">
													<i class="icon-circle"></i>
													<?php  
													echo $t;?>
												</span>
												<span class="pull-right badge badge-info"><?php echo $u; ?></span>

											</div>
										<?php } ?>
								</li>

							</ul>
						</li>

						<li class="green" title="Inbox">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope"></i>
								<span class="badge badge-success">▼</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope-alt"></i>
									Messages
								</li>
								<?php
									$s=$this->session->userdata('mail');
									 foreach ($s as $y)
									 {
										 $a=$y->message;
										//                 print_r($a);die();
										 $b=$y->date;
							
								?>
								<li>
									<a href="#">
										<img src="<?php echo base_url();?>asset/image/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Admin:
												</span>
												<?php echo $a; ?>
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span><?php echo $b; ?>
												</span>
											</span>
										</span>
									</a>
								</li>
								<?php } ?>




								<li>

								</li>
							</ul>
						</li>
						<?php 
						$logusr=$this->session->userdata('logusr');
						$image3=$logusr[0]['image'];
						$uname=$logusr[0]['fname'];
						?>
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<?php if($image3){ ?>
								<img class="nav-user-photo" src="<?php echo base_url();?>asset/image/userimages/<?php echo $image3; ?>" />
								<? }else{ ?>
								<img class="nav-user-photo" src="<?php echo base_url();?>asset/image/avatar2.png" />
								<?php } ?>
								<span class="user-info">
								<small>Welcome,</small>
								<?php 
								echo $uname;
								 ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<!--<a href="#">
									<i class="icon-cog"></i>
									Settings
									</a>-->
								</li>
								<!--<li>
									<a href="<?php // echo site_url('money_c/changepassword');?>">
										<i class="icon-lock">&nbsp;Change password</i>

									</a>
								</li>-->
								<li>
									<a href="<?php echo site_url('index.php/profile');?>">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo site_url('index.php/profile/userlogout');?>">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
		<div id='line' style="height: 3px;background-color: #EA1820;">
		</div>
		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">


					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>

					<ul class="nav nav-list">
						<li class="active">
							<a href="<?php echo site_url('index.php/dashboard');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>



						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">+ Add Account </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										Bank Account
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo site_url('index.php/account');?>">
												<i class="icon-edit"></i>
												Add Account
											</a>
										</li>
											 <?php
										$sb=$this->session->userdata('SBI1');
										$hd=$this->session->userdata('HDFC1');
										$fe=$this->session->userdata('FEDERAL1');
											if($sb!=''){?>
										<li>
											<!--<span class="pull-right badge" style="width: 153px;">-->
											<?php
											//echo $this->session->userdata('SBI1');
											?>
											<!--</span>-->

												<?php } ?>
											<?php if($hd!=''){?>

											<!--<span class="pull-right badge" style="width: 153px;">-->
											<?php
											//echo $this->session->userdata('HDFC1');
											?>

												<?php } ?>
											<?php if($fe!=''){?>

											<!--<span class="pull-right badge" style="width: 153px;">-->
											<?php
											//echo $this->session->userdata('FEDERAL1');
											?>
											<!--</span>-->
												<?php } ?>
										</li>
										<li>
											<a href="<?php echo site_url('index.php/statement');?>">
												<i class="icon-leaf"></i>
												Statement Upload
											</a>
										</li>

										<li>
											<a href="<?php echo site_url('index.php/uploadmanual');?>" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												Manual Update
											</a>

										</li>
									</ul>
								</li>

								<li>
									<a href="<?php echo site_url('index.php/creditcard');?>">
										<i class="icon-double-angle-right"></i>
										Credit card
									</a>
								</li>

								<li>
									<a href="<?php echo site_url('index.php/mutualfund');?>">
										<i class="icon-double-angle-right"></i>
										Mutual fund
									</a>
								</li>
								<li>
									<a href="<?php echo site_url('index.php/insurance');?>">
										<i class="icon-double-angle-right"></i>
										Insurance
									</a>
								</li>
								<li>
									<a href="<?php echo site_url('index.php/fixeddeposit');?>">
										<i class="icon-double-angle-right"></i>
										Fixed Deposit
									</a>
								</li>
								<li>
									<a href="<?php echo site_url('index.php/loan');?>">
										<i class="icon-double-angle-right"></i>
										Loan
									</a>
								</li>


							</ul>
						</li>

						<li>
							<a href="<?php echo site_url('index.php/budget');?>">
								<i class="icon-briefcase"></i>
								<span class="menu-text">Budget</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('index.php/goal');?>">
								<i class="icon-bullseye"></i>
								<span class="menu-text">Set Goal</span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-book"></i>
								<span class="menu-text">Tax</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo site_url('index.php/taxcalc');?>">
										<i class="icon-double-angle-right"></i>
										Tax Calculator
									</a>
								</li>

								<li>
									<a href="<?php echo site_url('index.php/taxplan');?>">
										<i class="icon-double-angle-right"></i>
										Tax Plan
									</a>
								</li>

								<!--<li>
								<a href="wysiwyg.html">
								<i class="icon-double-angle-right"></i>
								Wysiwyg &amp; Markdown
								</a>
								</li>-->
							</ul>
						</li>

						<li>
							<a href="<?php echo site_url('index.php/reports');?>">
								<i class="icon-bar-chart"></i>
								<span class="menu-text">Reports</span>
							</a>
						</li>

						<li>
							<a href="<?php echo site_url('index.php/events');?>">
								<i class="icon-calendar"></i>

								<span class="menu-text">
								Add Events
								<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
								</span>
								</span>
							</a>
						</li>

						<li>
							<a href="<?php echo site_url('index.php/contact');?>">
								<i class="icon-phone"></i>
								<span class="menu-text">Contact Us</span>
							</a>
						</li>

						<li>
							<a href="<?php echo site_url('index.php/profile');?>">
							<i class="icon-cog"></i>
							<span class="menu-text"> Settings </span>

							</a>

							<!--<ul class="submenu">
							<li>
							<a href="<?php // echo site_url('money_c/changepassword');?>">
							<i class="icon-double-angle-right"></i>
							Change Password
							</a>
							</li>

							<li>
							<a href="<?php // echo site_url('money_c/profile');?>">
							<i class="icon-double-angle-right"></i>
							User profile
							</a>
							</li>
							</ul>-->
						</li>
					</ul><!--/.nav-list-->
				
	

			<link rel="stylesheet" href="<?php echo base_url();?>home/css/ace.min.css" />

			<?php 
			 $uname = $this->session->userdata('usr');
			$image3=$this->session->userdata('img');
			$joindate=$this->session->userdata('joindate');
			$email=$this->session->userdata('email');
			$bdate=$this->session->userdata('bdate');
			$phone=$this->session->userdata('phone');
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
<a href="<?php echo base_url();?>index.php/dashboard">Home</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>

<li class="active">User Profile</li>
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
User Profile
<small>
<i class="icon-double-angle-right"></i>
View profile details
</small>
</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<div class="clearfix">
<div class="pull-left alert alert-success inline no-margin">
<button type="button" class="close" data-dismiss="alert">
<!--<i class="icon-remove"></i>-->
</button>

<i class="icon-umbrella bigger-120 blue"></i>
Click on the image below or on profile fields to edit them
</div>

</div>
<a href="<?php echo site_url('index.php/profile/updateprofile');?>">
<div class="pull-right">
<span class="btn btn-app btn-small btn-primary no-hover">
<span class="smaller-90"> Update </span>
</span>
</div>
</a>
<div class="hr dotted"></div>

<div>
<div id="user-profile-1" class="user-profile row-fluid">
<div class="span3 center">
<div>
<span class="profile-picture">
<?php if($image3){ ?>
<img class="nav-user-photo" src="<?php echo base_url();?>userimages/<?php echo $image3; ?>" />
<? }else{ ?>
<img class="nav-user-photo" src="<?php echo base_url();?>asset/image/avatar2.png" />
<?php } ?>
</span>

<div class="space-4"></div>

<div class="width-80 label label-info label-large arrowed-in arrowed-in-right">
<div class="inline position-relative">

<i class="icon-circle light-green middle"></i>
&nbsp;
<span class="white middle bigger-120"> <?php 
$logusr=$this->session->userdata('logusr');
echo $logusr[0]['fname']." ".$logusr[0]['sname'];
?></span>


<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
<li class="nav-header"> Change Status </li>



</ul>
</div>
</div>
</div>






<div class="hr hr16 dotted"></div>
</div>

<div class="span9">


<div class="space-12"></div>

<div class="profile-user-info profile-user-info-striped">
<div class="profile-info-row">
<div class="profile-info-name">Username</div>

<div class="profile-info-value">
<span  id="username">
<?php 
$logusr=$this->session->userdata('logusr');
echo $logusr[0]['fname']." ".$logusr[0]['sname'];
?>
</span>
</div>
</div>
<div class="profile-info-row">
<div class="profile-info-name"> Date Of Birth </div>

<div class="profile-info-value">
<span  id="age"><?php echo $bdate; ?></span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> Joined </div>

<div class="profile-info-value">
<span  id="signup"><?php echo $joindate; ?></span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> Phone.No </div>

<div class="profile-info-value">
<span  id="login"><?php echo $phone; ?></span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> E-mail</div>

<div class="profile-info-value">
<span  id="about"><?php echo $email; ?></span>
</div>
</div>
</div>

<div class="space-20"></div>


<div class="hr hr2 hr-double">
    
</div>

<div class="space-6"></div>
<div class="page-header position-relative">
<h1>

<small>
<!--<i class="icon-double-angle-right"></i>-->
change your password
</small>
</h1>
</div><!--/.page-header-->
 <?php echo form_open('index.php/profile/changepassword1');?>
           	    <!--<form class="form">--> 
   
    <p class="name">  
        <input type="text" name="name" id="name" style="margin-left: 131px;    margin-top: 11px;" required/> 
        <label for="name" style="margin-top: -40px;">User Name</label>
    </p> 
     <p class="name">
         <input type="password" name="oldpass" id="name" style="margin-left: 131px;    margin-top: 27px;" required/> 
          <label for="name" style="    margin-top: -36px;">Old Password</label>
    </p> 
    <p class="name"> 
        <input type="password" name="newpass" id="newpass" style="margin-left: 131px;    margin-top: 25px;" required/> 
         <label for="name" style="    margin-top: -35px;">New Password</label>
    </p> 
   <p class="name"> 
       <input type="password" name="newpass1" id="newpass1" style="margin-left: 131px;    margin-top: 20px;" onkeyup="checkPass()" required/> 
        <label for="name" style="    margin-top: -35px;">Confirm Password</label> <span id="confirmMessage" class="confirmMessage"></span>
    </p> 
     
    <p class="submit"> 
        <input class="btn btn-primary" type="submit" value="Send" style="margin-left: 131px;    margin-top: 22px;" /> 
    </p> 
   
<!--</form>-->
</tr>
       	        </table>
           	         <?php  echo form_close(); ?>

</div>
</div>
</div>

<div class="hide">
<div id="user-profile-2" class="user-profile row-fluid">
<div class="tabbable">
<ul class="nav nav-tabs padding-18">
<li class="active">
<a data-toggle="tab" href="#home">
<i class="green icon-user bigger-120"></i>
Profile
</a>
</li>

<li>
<a data-toggle="tab" href="#feed">
<i class="orange icon-rss bigger-120"></i>
Activity Feed
</a>
</li>

<li>
<a data-toggle="tab" href="#friends">
<i class="blue icon-group bigger-120"></i>
Friends
</a>
</li>

<li>
<a data-toggle="tab" href="#pictures">
<i class="pink icon-picture bigger-120"></i>
Pictures
</a>
</li>
</ul>

<div class="tab-content no-border padding-24">
<div id="home" class="tab-pane in active">
<div class="row-fluid">
<div class="span3 center">
<span class="profile-picture">
<img class="editable" alt="Alex's Avatar" id="avatar2" src="<?php echo base_url();?>asset/image/profile-pic.jpg" />
</span>

<div class="space space-4"></div>

<a href="#" class="btn btn-small btn-block btn-success">
<i class="icon-plus-sign bigger-110"></i>
Add as a friend
</a>

<a href="#" class="btn btn-small btn-block btn-primary">
<i class="icon-envelope-alt"></i>
Send a message
</a>
</div><!--/span-->

<div class="span9">
<h4 class="blue">
<span class="middle">
  <?php echo $uname; ?>
</span>

<span class="label label-purple arrowed-in-right">
<i class="icon-circle smaller-80"></i>
online
</span>
</h4>

<div class="profile-user-info">
<div class="profile-info-row">
<div class="profile-info-name"> Username </div>

<div class="profile-info-value">
<span>

<?php echo $uname; ?>
</span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> Location </div>

<div class="profile-info-value">
<i class="icon-map-marker light-orange bigger-110"></i>
<span>Netherlands</span>
<span>Amsterdam</span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> Age </div>

<div class="profile-info-value">
<span>38</span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> Joined </div>

<div class="profile-info-value">
<span>20/06/2010</span>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name"> Last Online </div>

<div class="profile-info-value">
<span>3 hours ago</span>
</div>
</div>
</div>

<div class="hr hr-8 dotted"></div>

<div class="profile-user-info">
<div class="profile-info-row">
<div class="profile-info-name"> Website </div>

<div class="profile-info-value">
<a href="#" target="_blank">www.alexdoe.com</a>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name">
<i class="middle icon-facebook-sign bigger-150 blue"></i>
</div>

<div class="profile-info-value">
<a href="#">Find me on Facebook</a>
</div>
</div>

<div class="profile-info-row">
<div class="profile-info-name">
<i class="middle icon-twitter-sign bigger-150 light-blue"></i>
</div>

<div class="profile-info-value">
<a href="#">Follow me on Twitter</a>
</div>
</div>
</div>
</div><!--/span-->
</div><!--/row-fluid-->

<div class="space-20"></div>

<div class="row-fluid">
<div class="span6">
<div class="widget-box transparent">
<div class="widget-header widget-header-small">
<h4 class="smaller">
<i class="icon-check bigger-110"></i>
Little About Me
</h4>
</div>

<div class="widget-body">
<div class="widget-main">
<p>
My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
</p>
<p>
Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
</p>
<p>
The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
</p>
<p>
Thanks for visiting my profile.
</p>
</div>
</div>
</div>
</div>

<div class="span6">
<div class="widget-box transparent">
<div class="widget-header widget-header-small header-color-blue2">
<h4 class="smaller">
<i class="icon-lightbulb bigger-120"></i>
My Skills
</h4>
</div>

<div class="widget-body">
<div class="widget-main padding-16">
<div class="row-fluid">
<div class="grid3 center">
<div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952">
<span class="percent">45</span>
%
</div>

<div class="space-2"></div>
Graphic Design
</div>

<div class="grid3 center">
<div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
<span class="percent">90</span>
%
</div>

<div class="space-2"></div>
HTML5 & CSS3
</div>

<div class="grid3 center">
<div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
<span class="percent">80</span>
%
</div>

<div class="space-2"></div>
Javascript/jQuery
</div>
</div>

<div class="hr hr-16"></div>

<div class="profile-skills">
<div class="progress">
<div class="bar" style="width:80%">
<span class="pull-left">HTML5 & CSS3</span>
<span class="pull-right">80%</span>
</div>
</div>

<div class="progress progress-success">
<div class="bar" style="width:72%">
<span class="pull-left">Javascript & jQuery</span>

<span class="pull-right">72%</span>
</div>
</div>

<div class="progress progress-purple">
<div class="bar" style="width:70%">
<span class="pull-left">PHP & MySQL</span>

<span class="pull-right">70%</span>
</div>
</div>

<div class="progress progress-warning">
<div class="bar" style="width:50%">
<span class="pull-left">Wordpress</span>

<span class="pull-right">50%</span>
</div>
</div>

<div class="progress progress-danger">
<div class="bar" style="width:35%">
<span class="pull-left">Photoshop</span>

<span class="pull-right">35%</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div><!--#home-->

<div id="feed" class="tab-pane">
<div class="profile-feed row-fluid">
<div class="span6">
<div class="profile-activity clearfix">
<div>
<img class="pull-left" alt="Alex Doe's avatar" src="<?php echo base_url();?>asset/image/avatar5.png" />
<a class="user" href="#"><?php echo $uname; ?></a>
changed his profile photo.
<a href="#">Take a look</a>

<div class="time">
<i class="icon-time bigger-110"></i>
an hour ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<img class="pull-left" alt="Susan Smith's avatar" src="<?php echo base_url();?>asset/image/avatar1.png" />
<a class="user" href="#"> Susan Smith </a>

is now friends with <?php echo $uname; ?> Doe.
<div class="time">
<i class="icon-time bigger-110"></i>
2 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<i class="pull-left thumbicon icon-ok btn-success no-hover"></i>
<a class="user" href="#"><?php echo $uname; ?></a>
joined
<a href="#">Country Music</a>

group.
<div class="time">
<i class="icon-time bigger-110"></i>
5 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<i class="pull-left thumbicon icon-picture btn-info no-hover"></i>
<a class="user" href="#"><?php echo $uname; ?></a>
uploaded a new photo.
<a href="#">Take a look</a>

<div class="time">
<i class="icon-time bigger-110"></i>
5 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<img class="pull-left" alt="David Palms's avatar" src="<?php echo base_url();?>asset/image/avatar4.png" />
<a class="user" href="#"> David Palms </a>

left a comment on <?php echo $uname; ?>'s wall.
<div class="time">
<i class="icon-time bigger-110"></i>
8 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>
</div><!--/span-->

<div class="span6">
<div class="profile-activity clearfix">
<div>
<i class="pull-left thumbicon icon-edit btn-pink no-hover"></i>
<a class="user" href="#"><?php echo $uname; ?> </a>
published a new blog post.
<a href="#">Read now</a>

<div class="time">
<i class="icon-time bigger-110"></i>
11 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<img class="pull-left" alt="Alex Doe's avatar" src="<?php echo base_url();?>asset/image/avatar5.png" />
<a class="user" href="#"> <?php echo $uname; ?> </a>

upgraded his skills.
<div class="time">
<i class="icon-time bigger-110"></i>
12 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
<a class="user" href="#"><?php echo $uname; ?>/a>

logged in.
<div class="time">
<i class="icon-time bigger-110"></i>
12 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<i class="pull-left thumbicon icon-off btn-inverse no-hover"></i>
<a class="user" href="#"><?php echo $uname; ?> </a>

logged out.
<div class="time">
<i class="icon-time bigger-110"></i>
16 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>

<div class="profile-activity clearfix">
<div>
<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
<a class="user" href="#"><?php echo $uname; ?></a>

logged in.
<div class="time">
<i class="icon-time bigger-110"></i>
16 hours ago
</div>
</div>

<div class="tools action-buttons">
<a href="#" class="blue">
<i class="icon-pencil bigger-125"></i>
</a>

<a href="#" class="red">
<i class="icon-remove bigger-125"></i>
</a>
</div>
</div>
</div><!--/span-->
</div><!--/row-->

<div class="space-12"></div>

<div class="center">
<a href="#" class="btn btn-small btn-primary">
<i class="icon-rss bigger-150 middle"></i>

View more activities
<i class="icon-on-right icon-arrow-right"></i>
</a>
</div>
</div><!--/#feed-->

<div id="friends" class="tab-pane">
<div class="profile-users clearfix">
<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar4.png" alt="Bob Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-online"></span>
Bob Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">Content Editor</div>

<div class="time">
<i class="icon-time middle bigger-120 orange"></i>
<span class="green"> 20 mins ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar1.png" alt="Rose Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-offline"></span>
Rose Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">Graphic Designer</div>

<div class="time">
<i class="icon-time middle bigger-120 grey"></i>
<span class="grey"> 30 min ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar.png" alt="Jim Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-busy"></span>
Jim Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">SEO &amp; Advertising</div>

<div class="time">
<i class="icon-time middle bigger-120 red"></i>
<span class="grey"> 1 hour ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar5.png" alt="Alex Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-idle"></span>
<?php echo $uname; ?>
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">Marketing</div>

<div class="time">
<i class="icon-time middle bigger-120 orange"></i>
<span class=""> 40 minutes idle </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar2.png" alt="Phil Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-online"></span>
Phil Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">Public Relations</div>

<div class="time">
<i class="icon-time middle bigger-120 orange"></i>
<span class="green"> 2 hours ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar3.png" alt="Susan Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-online"></span>
Susan Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">HR Management</div>

<div class="time">
<i class="icon-time middle bigger-120 orange"></i>
<span class="green"> 20 mins ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar1.png" alt="Jennifer Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-offline"></span>
Jennifer Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">Graphic Designer</div>

<div class="time">
<i class="icon-time middle bigger-120 grey"></i>
<span class="grey"> 2 hours ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>

<div class="itemdiv memberdiv">
<div class="inline position-relative">
<div class="user">
<a href="#">
<img src="<?php echo base_url();?>asset/image/avatar3.png" alt="Alexa Doe's avatar" />
</a>
</div>

<div class="body">
<div class="name">
<a href="#">
<span class="user-status status-offline"></span>
Alexa Doe
</a>
</div>
</div>

<div class="popover">
<div class="arrow"></div>

<div class="popover-content">
<div class="bolder">Accounting</div>

<div class="time">
<i class="icon-time middle bigger-120 grey"></i>
<span class="grey"> 4 hours ago </span>
</div>

<div class="hr dotted hr-8"></div>

<div class="tools action-buttons">
<a href="#">
<i class="icon-facebook-sign blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-twitter-sign light-blue bigger-150"></i>
</a>

<a href="#">
<i class="icon-google-plus-sign red bigger-150"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="hr hr10 hr-double"></div>

<ul class="pager pull-right">
<li class="previous disabled">
<a href="#">&larr; Prev</a>
</li>

<li class="next">
<a href="#">Next &rarr;</a>
</li>
</ul>
</div><!--/#friends-->

<div id="pictures" class="tab-pane">
<ul class="ace-thumbnails">
<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-1.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-2.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-3.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-4.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-5.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-6.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-1.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>

<li>
<a href="#" data-rel="colorbox">
<img alt="150x150" src="<?php echo base_url();?>asset/image/thumb-2.jpg" />
<div class="text">
<div class="inner">Sample Caption on Hover</div>
</div>
</a>

<div class="tools tools-bottom">
<a href="#">
<i class="icon-link"></i>
</a>

<a href="#">
<i class="icon-paper-clip"></i>
</a>

<a href="#">
<i class="icon-pencil"></i>
</a>

<a href="#">
<i class="icon-remove red"></i>
</a>
</div>
</li>
</ul>
</div><!--/#pictures-->
</div>
</div>
</div>
</div>

<div class="hide">
<div id="user-profile-3" class="user-profile row-fluid">
<div class="offset1 span10">
<div class="well well-small">
<button type="button" class="close" data-dismiss="alert">&times;</button>
&nbsp;
<div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

&nbsp; &nbsp; &nbsp;
<div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-success progress-striped active">
<div class="bar" style="width:70%"></div>
</div>
</div><!--/well-->

<div class="space"></div>

<form class="form-horizontal" />
<div class="tabbable">
<ul class="nav nav-tabs padding-16">
<li class="active">
<a data-toggle="tab" href="#edit-basic">
<i class="green icon-edit bigger-125"></i>
Basic Info
</a>
</li>

<li>
<a data-toggle="tab" href="#edit-settings">
<i class="purple icon-cog bigger-125"></i>
Settings
</a>
</li>

<li>
<a data-toggle="tab" href="#edit-password">
<i class="blue icon-key bigger-125"></i>
Password
</a>
</li>
</ul>

<div class="tab-content profile-edit-tab-content">
<div id="edit-basic" class="tab-pane in active">
<h4 class="header blue bolder smaller">General</h4>

<div class="row-fluid">
<div class="span4">
<input type="file" />
</div>

<div class="vspace"></div>

<div class="span8">
<div class="control-group">
<label class="control-label" for="form-field-username">Username</label>

<div class="controls">
<input type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-first">Name</label>

<div class="controls">
<input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
</div>
</div>
</div>
</div>

<hr />
<div class="control-group">
<label class="control-label" for="form-field-date">Birth Date</label>

<div class="controls">
<div class="input-append">
<input class="input-small date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
<span class="add-on">
<i class="icon-calendar"></i>
</span>
</div>
</div>
</div>

<div class="control-group">
<label class="control-label">Gender</label>

<div class="controls">
<div class="space-2"></div>

<label class="inline">
<input name="form-field-radio" type="radio" />
<span class="lbl"> Male</span>
</label>

&nbsp; &nbsp; &nbsp;
<label class="inline">
<input name="form-field-radio" type="radio" />
<span class="lbl"> Female</span>
</label>
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-comment">Comment</label>

<div class="controls">
<textarea id="form-field-comment"></textarea>
</div>
</div>

<div class="space"></div>
<h4 class="header blue bolder smaller">Contact</h4>

<div class="control-group">
<label class="control-label" for="form-field-email">Email</label>

<div class="controls">
<span class="input-icon input-icon-right">
<input type="email" id="form-field-email" value="alexdoe@gmail.com" />
<i class="icon-envelope"></i>
</span>
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-website">Website</label>

<div class="controls">
<span class="input-icon input-icon-right">
<input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
<i class="icon-globe"></i>
</span>
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-phone">Phone</label>

<div class="controls">
<span class="input-icon input-icon-right">
<input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
<i class="icon-phone icon-flip-horizontal"></i>
</span>
</div>
</div>

<div class="space"></div>
<h4 class="header blue bolder smaller">Social</h4>

<div class="control-group">
<label class="control-label" for="form-field-facebook">Facebook</label>

<div class="controls">
<span class="input-icon">
<input type="text" value="facebook_alexdoe" id="form-field-facebook" />
<i class="icon-facebook"></i>
</span>
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-twitter">Twitter</label>

<div class="controls">
<span class="input-icon">
<input type="text" value="twitter_alexdoe" id="form-field-twitter" />
<i class="icon-twitter"></i>
</span>
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-gplus">Google+</label>

<div class="controls">
<span class="input-icon">
<input type="text" value="google_alexdoe" id="form-field-gplus" />
<i class="icon-google-plus"></i>
</span>
</div>
</div>
</div>

<div id="edit-settings" class="tab-pane">
<div class="space-10"></div>

<div>
<label class="inline">
<input type="checkbox" name="form-field-checkbox" />
<span class="lbl"> Make my profile public</span>
</label>
</div>

<div class="space-8"></div>

<div>
<label class="inline">
<input type="checkbox" name="form-field-checkbox" />
<span class="lbl"> Email me new updates</span>
</label>
</div>

<div class="space-8"></div>

<div>
<label class="inline">
<input type="checkbox" name="form-field-checkbox" />
<span class="lbl"> Keep a history of my conversations</span>
</label>

<label class="inline">
<span class="space-2 block"></span>

for
<input type="text" class="input-mini" maxlength="3" />
days
</label>
</div>
</div>

<div id="edit-password" class="tab-pane">
<div class="space-10"></div>

<div class="control-group">
<label class="control-label" for="form-field-pass1">New Password</label>

<div class="controls">
<input type="password" id="form-field-pass1" />
</div>
</div>

<div class="control-group">
<label class="control-label" for="form-field-pass2">Confirm Password</label>

<div class="controls">
<input type="password" id="form-field-pass2" />
</div>
</div>
</div>
</div>
</div>

<div class="form-actions">
<button class="btn btn-info" type="button">
<i class="icon-ok bigger-110"></i>
Save
</button>

&nbsp; &nbsp; &nbsp;
<button class="btn" type="reset">
<i class="icon-undo bigger-110"></i>
Reset
</button>
</div>
</form>
</div><!--/span-->
</div><!--/user-profile-->
</div>

<!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


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
window.jQuery || document.write("<script src='<?php echo base_url();?>asset/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="asset/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->

<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url();?>asset/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>asset/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.gritter.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootbox.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.easy-pie-chart.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.hotkeys.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url();?>asset/js/select2.min.js"></script>
<script src="<?php echo base_url();?>asset/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>asset/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?php echo base_url();?>asset/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?php echo base_url();?>asset/js/x-editable/ace-editable.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.maskedinput.min.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>asset/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>asset/js/ace.min.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">
$(function() {

//editables on first profile page
$.fn.editable.defaults.mode = 'inline';
$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
'<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    

//editables 
$('#username').editable({
type: 'text',
name: 'username'
});

var countries = [];
$.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
countries.push({id: k, text: v});
});

var cities = [];
cities["CA"] = [];
$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
cities["CA"].push({id: v, text: v});
});
cities["IN"] = [];
$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
cities["IN"].push({id: v, text: v});
});
cities["NL"] = [];
$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
cities["NL"].push({id: v, text: v});
});
cities["TR"] = [];
$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
cities["TR"].push({id: v, text: v});
});
cities["US"] = [];
$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
cities["US"].push({id: v, text: v});
});

var currentValue = "NL";
$('#country').editable({
type: 'select2',
value : 'NL',
source: countries,
success: function(response, newValue) {
if(currentValue == newValue) return;
currentValue = newValue;

var source = (!newValue || newValue == "") ? [] : cities[newValue];
$('#city').editable('destroy').editable({
type: 'select2',
source: source
}).editable('setValue', null);
}
});

$('#city').editable({
type: 'select2',
value : 'Amsterdam',
source: cities[currentValue]
});



$('#signup').editable({
type: 'date',
format: 'yyyy-mm-dd',
viewformat: 'dd/mm/yyyy',
datepicker: {
weekStart: 1
}
});

$('#age').editable({
type: 'spinner',
name : 'age',
spinner : {
min : 16, max:99, step:1
}
});

//var $range = document.createElement("INPUT");
//$range.type = 'range';
$('#login').editable({
type: 'slider',//$range.type == 'range' ? 'range' : 'slider',
name : 'login',
slider : {
min : 1, max:50, width:100
},
success: function(response, newValue) {
if(parseInt(newValue) == 1)
$(this).html(newValue + " hour ago");
else $(this).html(newValue + " hours ago");
}
});

$('#about').editable({
mode: 'inline',
type: 'wysiwyg',
name : 'about',
wysiwyg : {
//css : {'max-width':'300px'}
},
success: function(response, newValue) {
}
});



// *** editable avatar *** //
try {//ie8 throws some harmless exception, so let's catch it

//it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
//so let's have a fake appendChild for it!
if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}

var last_gritter
$('#avatar').editable({
type: 'image',
name: 'avatar',
value: null,
image: {
//specify ace file input plugin's options here
btn_choose: 'Change Avatar',
droppable: true,
/**
//this will override the default before_change that only accepts image files
before_change: function(files, dropped) {
return true;
},
*/

//and a few extra ones here
name: 'avatar',//put the field name here as well, will be used inside the custom plugin
max_size: 110000,//~100Kb
on_error : function(code) {//on_error function will be called when the selected file has a problem
if(last_gritter) $.gritter.remove(last_gritter);
if(code == 1) {//file format error
last_gritter = $.gritter.add({
title: 'File is not an image!',
text: 'Please choose a jpg|gif|png image!',
class_name: 'gritter-error gritter-center'
});
} else if(code == 2) {//file size rror
last_gritter = $.gritter.add({
title: 'File too big!',
text: 'Image size should not exceed 100Kb!',
class_name: 'gritter-error gritter-center'
});
}
else {//other error
}
},
on_success : function() {
$.gritter.removeAll();
}
},
url: function(params) {
// ***UPDATE AVATAR HERE*** //
//You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


var deferred = new $.Deferred

//if value is empty, means no valid files were selected
//but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
//so we return just here to prevent problems
var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
if(!value || value.length == 0) {
deferred.resolve();
return deferred.promise();
}


//dummy upload
setTimeout(function(){
if("FileReader" in window) {
//for browsers that have a thumbnail of selected image
var thumb = $('#avatar').next().find('img').data('thumb');
if(thumb) $('#avatar').get(0).src = thumb;
}

deferred.resolve({'status':'OK'});

if(last_gritter) $.gritter.remove(last_gritter);
last_gritter = $.gritter.add({
title: 'Avatar Updated!',
text: 'Uploading to server can be easily implemented. A working example is included with the template.',
class_name: 'gritter-info gritter-center'
});

} , parseInt(Math.random() * 800 + 800))

return deferred.promise();
},

success: function(response, newValue) {
}
})
}catch(e) {}



//another option is using modals
$('#avatar2').on('click', function(){
var modal = 
'<div class="modal hide fade">\
<div class="modal-header">\
<button type="button" class="close" data-dismiss="modal">&times;</button>\
<h4 class="blue">Change Avatar</h4>\
</div>\
\
<form class="no-margin">\
<div class="modal-body">\
<div class="space-4"></div>\
<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
</div>\
\
<div class="modal-footer center">\
<button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
<button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
</div>\
</form>\
</div>';


var modal = $(modal);
modal.modal("show").on("hidden", function(){
modal.remove();
});

var working = false;

var form = modal.find('form:eq(0)');
var file = form.find('input[type=file]').eq(0);
file.ace_file_input({
style:'well',
btn_choose:'Click to choose new avatar',
btn_change:null,
no_icon:'icon-picture',
thumbnail:'small',
before_remove: function() {
//don't remove/reset files while being uploaded
return !working;
},
before_change: function(files, dropped) {
var file = files[0];
if(typeof file === "string") {
//file is just a file name here (in browsers that don't support FileReader API)
if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
}
else {//file is a File object
var type = $.trim(file.type);
if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
) return false;

if( file.size > 110000 ) {//~100Kb
return false;
}
}

return true;
}
});

form.on('submit', function(){
if(!file.data('ace_input_files')) return false;

file.ace_file_input('disable');
form.find('button').attr('disabled', 'disabled');
form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");

var deferred = new $.Deferred;
working = true;
deferred.done(function() {
form.find('button').removeAttr('disabled');
form.find('input[type=file]').ace_file_input('enable');
form.find('.modal-body > :last-child').remove();

modal.modal("hide");

var thumb = file.next().find('img').data('thumb');
if(thumb) $('#avatar2').get(0).src = thumb;

working = false;
});


setTimeout(function(){
deferred.resolve();
} , parseInt(Math.random() * 800 + 800));

return false;
});

});



//////////////////////////////
$('#profile-feed-1').slimScroll({
height: '250px',
alwaysVisible : true
});

$('.profile-social-links > a').tooltip();

$('.easy-pie-chart.percentage').each(function(){
var barColor = $(this).data('color') || '#555';
var trackColor = '#E2E2E2';
var size = parseInt($(this).data('size')) || 72;
$(this).easyPieChart({
barColor: barColor,
trackColor: trackColor,
scaleColor: false,
lineCap: 'butt',
lineWidth: parseInt(size/10),
animate:false,
size: size
}).css('color', barColor);
});

///////////////////////////////////////////

//show the user info on right or left depending on its position
$('#user-profile-2 .memberdiv').on('mouseenter', function(){
var $this = $(this);
var $parent = $this.closest('.tab-pane');

var off1 = $parent.offset();
var w1 = $parent.width();

var off2 = $this.offset();
var w2 = $this.width();

var place = 'left';
if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';

$this.find('.popover').removeClass('right left').addClass(place);
}).on('click', function() {
return false;
});


///////////////////////////////////////////
$('#user-profile-3')
.find('input[type=file]').ace_file_input({
style:'well',
btn_choose:'Change avatar',
btn_change:null,
no_icon:'icon-picture',
thumbnail:'large',
droppable:true,
before_change: function(files, dropped) {
var file = files[0];
if(typeof file === "string") {//files is just a file name here (in browsers that don't support FileReader API)
if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
}
else {//file is a File object
var type = $.trim(file.type);
if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android default browser!
) return false;

if( file.size > 110000 ) {//~100Kb
return false;
}
}

return true;
}
})
.end().find('button[type=reset]').on(ace.click_event, function(){
$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
})
.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
$(this).prev().focus();
})
$('.input-mask-phone').mask('(999) 999-9999');



////////////////////
//change profile
$('[data-toggle="buttons-radio"]').on('click', function(e){
var target = $(e.target);
var which = parseInt($.trim(target.text()));
$('.user-profile').parent().hide();
$('#user-profile-'+which).parent().show();
});
});
</script>
</body>
</html>
