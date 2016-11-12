<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>vertex - Free CSS Template by ZyPOP</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css" type="text/css" />
			
            
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/slider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/superfish.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>

<!--
vertex, a free CSS web template by ZyPOP (www.zypopwebtemplates.com)

Download: http://www.zypopwebtemplates.com

License: Creative Commons Attribution
//-->
</head>

<body class="homepage">
<div id="container">
<!--	<div id="header">
    	<h1><a href="/">Website<strong>Name</strong></a></h1>
        <h2>Your website slogan here</h2>
        <div class="clear"></div>
    </div>-->
    <div id="nav">
    	<ul class="sf-menu dropdown">
            <li class="selected"><a href="<?php echo site_url('money_c/adminhome');?>">Home</a></li>
        	<li class="selected"><a href="<?php echo site_url('money_c/userprodview');?>">User added products</a></li>
            <li><a href="<?php echo site_url('money_c/view_all');?>">MANAGE USERS</a></li>
            <!--<li><a class="has_submenu" href="<?php // echo site_url('money_c/budget');?>">ADD</a></li>-->
                    <li><a href="#">Mutual funds</a>
                    <ul>
                        <li><a href="<?php echo site_url('money_c/admin_add_mf');?>">Add Mutual funds</a></li>
                    <li><a href="<?php echo site_url('money_c/admin_add_scheme');?>">Add scheme</a></li>
                    <li><a href="<?php echo site_url('money_c/admin_mf_catg');?>">Add mf category</a></li>
                     <li><a href="<?php echo site_url('money_c/addloan');?>">Add loan</a></li>
                </ul></li> 
            <li><a href="<?php echo site_url('money_c/message');?>">Message</a></li>
            <!--<li><a href="<?php // echo site_url('money_c/tablereporting');?>">REPORTING</a></li>-->
            <li><a href="<?php echo site_url('money_c/admincontact');?>">CONTACT US</a></li>
             <li><a class="has_submenu" href="#">SETTINGS</a>
             <ul>
                	<!--<li><a href="">CHANGE PASSWORD</a></li>-->
                        <li><a href="<?php echo site_url('money_c/newssettings');?>">News Settings</a></li>
                        <li><a href="<?php echo site_url('money_c/taxsettings');?>">Tax settings</a></li>
                        <li><a href="<?php echo site_url('money_c/adminlogout');?>">Logout</a></li>
             </ul>
             </li>
        </ul>
    </div>

