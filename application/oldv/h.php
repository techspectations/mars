<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>
<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/ico" href="../asset/image/hdfcfv.jpg"/>
<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>asset/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speech-input.css">
<!--<script type="text/javascript" src="<?php echo base_url();?>asset/js/chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>asset/css/chat.css" />-->
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>asset/css/screen.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-skins.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/speech-input.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<div class="navbar">
<div class="navbar-inner">
    <div class="container-fluid" style="background-color: #00468B;">
         
<a href="<?php echo site_url('home');?>" class="brand">
  <small>
      <img src="<?php echo base_url();?>asset/image/hdfc3.jpg" style="width: 100px;height: 25px;"/>
HDFC Personal Finance Manager
</small>
</a><!--/.brand-->

<ul class="nav ace-nav pull-right">
    <li style="background-color: #00468B;">
        <style>
.si-wrapper input {
    font-size: 2em;
	padding: .1em;
}
</style>

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
<script type="text/javascript">
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
        </script>
    </li>
<li class="grey"  title="Savings">
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
<div style="width:<?php echo $exppercent1; ?>%" class="bar"></div>
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
<div style="width:<?php echo $savingspercent1; ?>%" class="bar"></div>
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
  
    echo "".$t;?>


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
<span class="blue">Admin:</span>
<?php echo $a; ?>
</span>

<span class="msg-time">
<i class="icon-time"></i>
<span><?php echo $b; ?></span>
</span>
</span>
</a>
</li>
             <?php } ?>




<li>

</li>
</ul>
</li>
<?php ?>
<li class="light-blue" title="Profile">
<a data-toggle="dropdown" href="#" class="dropdown-toggle">
<?php
 $uname = $this->session->userdata('logusr');
$image3=$uname[0]['image'];	
if($image3){?>
<img class="nav-user-photo" src="<?php echo base_url();?>userimages/<?php echo $image3; ?>" />
<?php }else{ ?>
<img class="nav-user-photo" src="<?php echo base_url();?>asset/image/avatar2.png" />	
<?php } ?>
<span class="user-info">
<small>Welcome,</small>
<?php 

echo $uname[0]['fname'];
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
<a href="<?php echo site_url('money_c/profile');?>">
<i class="icon-user"></i>
Profile
</a>
</li>

<li class="divider"></li>

<li>
<a href="<?php echo site_url('money_c/userlogout');?>">
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
<div id='line' style="height: 3px;background-color: #E3282E;"></div>
<!--<div class="hr hr-dotted"></div>-->
<div class="main-container container-fluid">
<a class="menu-toggler" id="menu-toggler" href="#">
<span class="menu-text"></span>
</a>

<div class="sidebar" id="sidebar">


<ul class="nav nav-list" style="background-color:#004E98">
<li <?php if($active=="dashboard"){echo 'class="active"';} ?>>
<a href="<?php echo site_url('home');?>">
<i class="icon-dashboard"></i>
<span class="menu-text"> Dashboard </span>
</a>
</li>



<li <?php if($active=="account"){echo 'class="active"';} ?>>
<a href="#" class="dropdown-toggle">
<i class="icon-desktop"></i>
<span class="menu-text">+ Add Account </span>

<b class="arrow icon-angle-down"></b>
</a>

<ul class="submenu">
<li <?php if($subaccount){ if($subaccount=="addbank"){echo 'class="active"';} } ?>>
<a href="#" class="dropdown-toggle">
<i class="icon-double-angle-right"></i>

Bank Account
<b class="arrow icon-angle-down"></b>
</a>

<ul class="submenu">
            <li <?php if($addaccount){ if($addaccount=="addaccount"){echo 'class="active"';} } ?>>
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
<a href="<?php echo base_url();?>index.php/statement">
<i class="icon-edit"></i>
Statement Upload
</a>
</li>

<li>
<a href="<?php echo base_url();?>index.php/money_c/uploadmanu1" class="dropdown-toggle">
<i class="icon-pencil"></i>

Manual Update
</a>

</li>
</ul>
</li>

<li>
<a href="<?php echo site_url('index.php/money_c/checkcredit');?>">
<i class="icon-double-angle-right"></i>
Credit card
</a>
</li>

<li>
<a href="<?php echo site_url('index.php/money_c/mfundinsert');?>">
<i class="icon-double-angle-right"></i>
Mutual fund
</a>
</li>
<li>
<a href="<?php echo site_url('index.php/money_c/insaccountinsert');?>">
<i class="icon-double-angle-right"></i>
Insurance
</a>
</li>
<li>
<a href="<?php echo site_url('index.php/money_c/fdepositinsert');?>">
<i class="icon-double-angle-right"></i>
Fixed Deposit
</a>
</li>
<li>
<a href="<?php echo site_url('index.php/money_c/eloaninsert');?>">
<i class="icon-double-angle-right"></i>
Loan
</a>
</li>


</ul>
</li>

<li>
<a href="<?php echo site_url('money_c/budget');?>">
<i class="icon-briefcase"></i>
<span class="menu-text">Budget</span>
</a>
</li>
<li>
<a href="<?php echo site_url('goal');?>">
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
<a href="<?php echo site_url('money_c/taxcalculator');?>">
<i class="icon-double-angle-right"></i>
Tax Calculator
</a>
</li>

<li>
<a href="<?php echo site_url('money_c/taxplan');?>">
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
<a href="<?php echo site_url('money_c/tablereporting');?>">
<i class="icon-bar-chart"></i>
<span class="menu-text">Reports</span>
</a>
</li>

<li>
<a href="<?php echo site_url('Money_c/add_tasks');?>">
<i class="icon-calendar"></i>

<span class="menu-text">
Add Events
<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
</span>
</span>
</a>
</li>

<li>
<a href="<?php echo site_url('money_c/contact');?>">
<i class="icon-phone"></i>
<span class="menu-text">Contact Us</span>
</a>
</li>

<li>
<a href="<?php echo site_url('money_c/profile');?>">
<i class="icon-cog"></i>
<span class="menu-text"> Settings </span>

</a>
</li>
</ul><!--/.nav-list-->
