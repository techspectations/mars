<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Tables - Ace Admin</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
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
<?php  
include "h.php";

?>
   <script type="text/javascript">
$( document ).ready(function() {
   $.ajax({
	
    url   : "<?php echo base_url();?>index.php/money_c/user_bank_update",
    async : true //change this to false if you hate your users and want them to wait 
}).done(function(datas) {
   
});
});
        </script>
<div class="sidebar-collapse" id="sidebar-collapse">
<i class="icon-double-angle-left"></i>
</div>
</div>

<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">
<ul class="breadcrumb">
<li>
<i class="icon-home home-icon"></i>
<a href="#">Tax</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>
<li class="active">Tax Plan </li>
</ul>

    <div class="row-fluid">
<div class="span12">
    <div class="row-fluid">
        <div class="span3" style="width: 788px;margin-left:243px;">
<div class="widget-box pricing-box">
<div class="widget-header header-color-green1" style=" background-image: url(<?php echo base_url();?>assets3/images/blue.PNG);?>">
<h5 class="bigger lighter">TAX PLAN</h5>
</div>

<div class="widget-body" style="background-color: #D5E2EA;">
<div class="widget-main">

   <?PHP
foreach ($settings as $row)
             {
    $insurance=$row->insurance;
    $ulip=$row->ulip;
    $repayment=$row->repayment;
    $tution=$row->tution;
    $infrastructure=$row->infrastructure;
    $sukanya=$row->sukanya;
    $us80d=$row->us80d;
    $fixeddeposit=$row->fixeddeposit;
    $us80g=$row->us80g;
    $us80ee=$row->us80ee;
    $us80tta=$row->us80tta;
    $govdedu=$row->govdedu;
}
foreach ($settings3 as $row3)
             {
                
                 $taxamount=$row3->taxamount;
                 $income=$row3->income;
             }


?>

                    <!--<br/><br/>-->
                    <!--<div id="taxplan" style="font-size: 30px;color: blue;margin-left: 371px;">Tax Plan</div>-->
                    <!--<br/><br/>-->
                    <div id="plaviewhead" style="color: black;background-color:#D5E2EA; margin-left:74px;height: 46px;width:368px;">
                        <br/>  Tax amount for your income <?php echo $income; ?>Rs is:<div id="taxamnt" style="margin-left:492px; margin-top:-38px;color: red;"><?php echo $taxamount;  ?></div> 
                    </div>  
                    <div id="plaviewhead" style="color: blue;background-color:#D5E2EA; margin-left: 196px;height: 46px;width:368px;">
                        <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;80c Deductions<br/><br/>
                    </div>        
                    <div id="80c"><br/>
                        <table border="0" style="color: black;background-color:#D5E2EA;; margin-left:86px;height: 46px;width:545px;">
                            <tr><td>Life Insurance premium paid Maximum is:</td><td><?php echo $insurance;  ?></td></tr>
                            <tr><td>Contribution toward ULIP Maximum is:</td><td><?php echo $ulip;  ?></td></tr>
                            <tr><td>Re-payment of housing loan etc, Maximum is:</td><td><?php echo $repayment;  ?></td></tr>
                            <tr><td>Tuition fees paid for children Maximum is:</td><td><?php echo $tution;  ?></td></tr>
                            <tr><td>Long-term infrastructure bonds (u/s 80CCF)Maximum is:</td><td><?php echo $infrastructure;  ?></td></tr>
                            <tr><td>Deposit with Sukanya Samridhi Accounts Maximum is:</td><td><?php echo $sukanya;  ?></td></tr>
                            <tr><td>5 Years fixed deposit with PO or Schedule Bank Maximum is:</td><td><?php echo $fixeddeposit;  ?></td></tr>
                        </table>
                    </div>
                    <div id="plaviewhead" style="color: blue;background-color: #D5E2EA; margin-left: 196px;height: 46px;width:485px;">
                      <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Deductions
                    </div><br/>   
                    <div id="80dd">
                                        <table border="0" style="color: black;background-color:#D5E2EA; margin-left:86px;height: 46px;width:545px;">
                        <!--<table border="0" style="font-size: 15px;color: black;background-color:#DCFAD7; margin-left: 196px;height: 46px;width: 609px;">-->
                            <tr><td>Medi-claim premium (u/s 80D) Maximum is:</td><td><?php echo $us80d;  ?></td></tr>
                            <tr><td>Donations (u/s 80G) Maximum is:</td><td><?php echo $us80g;  ?></td></tr>
                            <tr><td>Interest on loan taken for Residential House (u/s 80EE) Maximum is:</td><td><?php echo $us80ee;  ?></td></tr>
                            <tr><td>Interest on deposits in saving account (u/s 80TTA) Maximum is:</td><td><?php echo $us80tta;  ?></td></tr>
                        </table>
                    </div>
                    
        </div>
        
       
    </div>
<style>
    
</style>
        </div>
         <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

	
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets3/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

	

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.slimscroll.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

    
    
    
    
    
    

</div>

<div>

</a>
</div>
</div>
</div>
</div>