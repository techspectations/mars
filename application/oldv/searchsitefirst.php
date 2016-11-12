




<style>
#slider {
    width: 300px;
	height: 17px;
	position: relative;
	background: #10171D;
	
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	
	-webkit-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
	-moz-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
	box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
}

#slider .bar {
	width: 290px;
	height: 5px;
	background: #333;
	position: relative;
	top: -4px;
	left: 4px;	
	
	background: #1d2e38;
	background: -moz-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#1d2e38), color-stop(50%,#2b4254), color-stop(100%,#2b4254));
	background: -webkit-linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	background: -o-linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	background: -ms-linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	background: linear-gradient(left, #1d2e38 0%,#2b4254 50%,#2b4254 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1d2e38', endColorstr='#2b4254',GradientType=1 );	
	
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
}

#slider .highlight {
	height: 2px;
	position: absolute;
	width: 388px;
	top: 6px;
	left: 6px;
		
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	
	background: rgba(255, 255, 255, 0.25);
}

input[type="range"] {
	-webkit-appearance: none;
	background-color: black;
	height: 2px;
}

input[type="range"]::-webkit-slider-thumb {
	-webkit-appearance: none;
	position: relative;
	top: 0px;
	z-index: 1;
	width: 11px;
	height: 11px;
	cursor: pointer;
	-webkit-box-shadow: 0px 6px 5px 0px rgba(0,0,0,0.6);
	-moz-box-shadow: 0px 6px 5px 0px rgba(0,0,0,0.6);
	box-shadow: 0px 6px 5px 0px rgba(0,0,0,0.6);
	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebf1f6), color-stop(50%,#abd3ee), color-stop(51%,#89c3eb), color-stop(100%,#d5ebfb));
}

input[type="range"]:hover ~ #rangevalue,input[type="range"]:active ~ #rangevalue {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	top: -75px;
}

/* Tool Tip */
#rangevalue {
	color: white;
	font-size: 10px;
	text-align: center;
	font-family:  Arial, sans-serif;
	display: block;
	color: #fff;
	margin: 20px 0;
	position: relative;
	left: 44.5%;
	padding: 6px 12px;
	border: 1px solid black;

	-webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	-moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#222931), color-stop(100%,#181D21));

	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	width: 18px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;

	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	top: -95px;
}
.block .pagination {
	font-size: 10px;
	font-weight: bold;
	padding-bottom: 15px;
	padding-top: 15px;
	border-top: 1px solid #eee;
	}

.block .pagination.right {
	float: right;
	text-align: right;
	padding-top: 1px;
	border: 0;
	width: 500px;
	overflow: hidden;
	}

.block .pagination a {
	border: 1px solid #ccc;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	padding: 3px 6px;
	margin: 0 1px;
	}

.block .pagination a.active {
	background: #39a3e6;
	border: 1px solid #0082d5;
	color: #fff;
	}

.block .pagination a:hover {
	color: #fff;
	background: #ec8526;
	border: 1px solid #d77011;
	}

.block .pagination .current {
	color: #fff;
	background: #ec8526;
	border: 1px solid #d77011;
}

</style>
<body>

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

<li class="active">Add bank</li>
</ul><!--.breadcrumb-->

</div>

<div class="page-content">
<div class="page-header position-relative">
<h1>
Add account
<small>
<i class="icon-double-angle-right"></i>
Search your bank
</small>
</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<form  action="<?php echo base_url();?>index.php/account/searchsite" method="POST" class="navbar-form pull-left" id="search_site" autocomplete="false">
    
         
                    <input type="text" value="" placeholder="Search Bank" name="search" id="search" autocomplete="false" class="form-control">
                    <input type="submit" value="search" class="btn btn-info" style="margin-top:-12px";/>

 </form>

                    <br><br>

                    <!--<a href="<?php // echo site_url('money_c/removeaccount');?>">remove account</a><br/>-->
<!--<a href="<?php // echo site_url('money_c/getallaccounts');?>">get all accounts</a>-->









<?php if($banklist){ ?>

                    
                    <div class="table-responsive">  
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">

<tr>

<th>Bank Name</th>
<th>Account Holder</th>
<th>Available  balance(INR)</th>

<th>Delete Account</th>
</tr>
                    <?php echo form_close();?>



                    <h3>Existing Accounts:</h3>
<?php	

 //$uname = $this->session->userdata('logusr');
 foreach($ydetails as $dser)
 {
    $statoryod=$dser->yodintegration;    
 }
if($statoryod=='YES'){
  $link='delete_bank';
  $link1='select_bnk_data';
}
else
{
   $link='delete_bank_statem';
   $link1='select_bnk_data_statem';
}

foreach($banklist as $bnk){ ?>
<tr>
    
    <td>
        
 <a  id="item02"   class="fancybox" data-fancybox-href="<?php echo site_url('index.php/account/'.$link1.'/'.$bnk->bankname);?>"><?php echo $bnk->bankname;?></a>
    <!--<a id="item02" rel="gallery" class="fancybox" data-fancybox-href="http://fancyapps.com" href="javascript:;">Fancybox</a>-->
    </td>
<td><?php echo $bnk->accholder;?></td>
<td><?php echo $bnk->availbalance;?></td>

<td><a href="<?php echo site_url('index.php/account/'.$link.'/'.$bnk->siteid.'/'.$bnk->uid);?>" onclick="return confirm('Are you sure to delete this bank?')" ><button class="btn btn-mini btn-danger">
<i class="icon-trash bigger-120"></i>
</button></a></td>
</tr>
<?php
}
?>
</table>
</div>
<?php }else{ ?>
<div class="hr hr-18 dotted hr-double"></div>
<h3>No Existing Accounts:</h3>
<?php } ?>
<div class="hr hr-18 dotted hr-double"></div>
<br/>
<div class="alert alert-success">
    <strong>Cash from ATM Cash withdrawals are spent in  miscellaneous categories.Do you want to add these to expense categories?
 



  <div class="hr hr-18 dotted hr-double"></div>



<form id="myForm">

    
    <input type="radio" style="opacity:2;" id="ansss" name="ans" value="YES" <?php if($atm=='YES'){echo "checked";} ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;
  <input type="radio" style="opacity:2;" id="anss" name="ans" value="NO" <?php if($atm=='NO'){echo "checked";} ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No<br>
</form>
   </div>
  
 <?php if($query){ ?>   
  
  <div class="hr hr-18 dotted hr-double"></div>
  <div class="table-responsive"> 
<div id="hidenshow">  
<table id="sample-table-1" class="table table-striped table-bordered table-hover" >

<tr><th>BANK</th>
<th>DATE</th>
<th>CATEGORY</th>
<th>AMOUNT</th>
<th>MONTH</th></tr>
<?php
$i=0;
foreach($query as $row2)
{
if($row2->amount > 0){
$amt=$row2->amount;
$c=$row2->category;
$dat=$row2->date;
$b=$row2->bank;
$my=$row2->monthyear;
$rowid=$row2->id;
$tranid=$row2->tranid;
?>

<tr><td><?php echo $b;?></td>
<td><?php echo $dat;?></td>
<td><?php echo $c;?></td>
<td><?php echo $amt;?></td>
<td><?php echo $my;?></td>
<td><a class="various btn btn-info" href="#formsld" onclick="getid('<?php echo $amt; ?>','<?php echo $rowid; ?>')">Update</a></td>

</tr>

<?
}
}
?>         

</table> 
<div class="btn-group">
<?php echo $paages; ?> 
</div> 
</div> 
 </div>
 <?php } ?>
<form id="formsld" name="formsld" action="<?php echo base_url();?>index.php/account/updates_main_table" method="post" style="display:none">
<div>
<label>Category:</label>   
<select name="cat" id="cat" required>
<option value="" selected>Choose category</option>  
<?php foreach($category as $row) 
{  ?>
<option value="<?php echo $row->catname;?>"><?php echo $row->catname;?></option>
<?php  }
?>
</select><br />
<p id="errors" style="font-size: 12px;font-weight: bold;color: red;"></p>
<div id="slider">
	<input class="bar" type="range" max="" id="rangeinput" value="0" onchange="rangevalues.value=value"/><br/>
	<input id="rangevalues" name="rangevalues" style="  font-family: Helvetica,Arial,sans-serif;font-weight: bold;font-size: 24px;border: 0px;
    background-color: #F9F9F9;
    width: 97px;" />
    <output  name="amount" id="amount" value="" style="  font-family: Helvetica,Arial,sans-serif;font-weight: bold;font-size: 24px;float: right;"></output>
</div><br/>
<br/>
<input type="hidden" name="row_id" id="row_id" value=""/><br/>
<input class="btn btn-info" type="submit" id="splitsub" value="Ok" />
<div>
</form>

<style>


#overlay_form{
display:none;
position: relative;
border: 5px solid gray;
padding: 10px;
background: white;
width: 270px;
height: 300px;
left: 787.5px;
/*margin-top: 287px;*/
}
<?php
$i=0;
foreach($query as $row2)
{

?>
#pop<?php echo $i; ?>{
display: block;
border: 1px solid gray;
width: 65px;
text-align: center;
padding: 6px;
border-radius: 5px;
text-decoration: none;
/*margin: 0 auto;*/
/*margin-top:500px;*/
}
<?php 
$i++;
} ?>
</style>
<script type="text/javascript">

$(document).ready(function(){
//open popup
<?php
$i=0;
foreach($query as $row2)
{

?>
$("#pop<?php echo $i; ?>").click(function(){
$("#overlay_form").fadeIn(1000);
positionPopup("window");
});

//close popup
$("#close").click(function(){
$("#overlay_form").fadeOut(500);
});
<?php

$i++;
} ?>
});

//position the popup at the center of the page
function positionPopup(){
if(!$("#overlay_form").is(':visible')){
return;
}
$("#overlay_form").css({
left: ($(window).width() - $('#overlay_form').width()) / 2,
top: ($(window).width() - $('#overlay_form').width()) / 7,
position:'absolute'
});
}

//maintain the popup at center of the page when browser resized
$(window).bind('resize',positionPopup);

</script>


</head>




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

<script src="<?php echo base_url();?>asset/js/jquery-1.6.1.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<script src="<?php echo base_url();?>asset/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.dataTables.bootstrap.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>asset/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>asset/js/ace.min.js"></script>
<!--inline scripts related to this page-->
  <script type="text/javascript">


$(function() {
$('#myForm input').on('change', function() {
var ans =$('input[name="ans"]:checked', '#myForm').val(); 
if(ans=='YES'){
	$('#hidenshow').slideUp(200);
	$('#formsld').hide();	
}else{
	$('#hidenshow').slideDown(200);
	$('#formsld').hide();	
}
base_url="<?php echo base_url();?>";
$.ajax({
type: "POST",
            data:{ans:ans},
url: base_url+"index.php/money_c/radio_ans",
            success:function(visitors){
          
     //               alert (visitors);
//            $("#amount").empty();
//    $("#amount").val(visitors);
}
}); 
});
}
  </script>
   <script type="text/javascript">
$( document ).ready(function() {
   var ans=$('input[name="ans"]:checked', '#myForm').val();
if(ans=='YES'){
	$('#hidenshow').slideUp(1500);
	$('#formsld').hide();	
}else{
	$('#hidenshow').slideDown(1500);
	$('#formsld').hide();	
}
   $.ajax({
	
    url   : "<?php echo base_url();?>index.php/money_c/user_bank_update",
    async : true //change this to false if you hate your users and want them to wait 
}).done(function(datas) {
 
});
	$("#splitsub").on("click", function () {
		$('#errors').empty();
		if($('#rangeinput').val()==0){
		$('#errors').append("Can not be Zero");
		//parent.$.fancybox.close();
		return false;			
		}
	
});
});
        </script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
function getid(amt,rowid){
$('#errors').empty();
$('#rangevalues').empty();	
$('#amount').empty();
$('#rowid').empty();
$('#amount').val(amt);
$('#row_id').val(rowid);
$('#rangeinput').attr('max',amt);
$(".various").fancybox({
		maxWidth	: 300,
		maxHeight	: 250,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
    }
</script>
<script type="text/javascript">
$(document).ready(function ($) {
    $("#search_site").submit(function() {
        $form = $(this);
		var search=$('#search').val();
        $.fancybox({
                'title': "ADD BANK",
				'maxWidth'	: '1500',
		        'maxHeight'	: '800',
		       'fitToView'	: 'true',
		       'width'		: '100%',
		       'height'		: '70%',
               'href': $form.attr("action") + "/" +search,
               'type': 'iframe',
               'afterClose': function () { 
        parent.location.reload(true); }
            
        });
        return false;
    });
    
    $(".fancybox").fancybox({
    // API options 
//    autoScale: false,
    type: 'iframe',
    padding: 0,
    closeClick: false,
 'overflow-y': 'scroll',
            'overflow-x': 'scroll',
});
    
    
});
</script>
<script type="text/javascript">
$(window).ready(function(){
				$("#loading").fadeOut(2000);	
				});
				</script>
</body>
</html>






