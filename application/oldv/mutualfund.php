<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="with selectable items(single &amp; multiple) and custom icons" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->
<link rel="icon" type="image/ico" href="../assets/images/hdfcfv.jpg"/>
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

<body>



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
<a href="<?php echo site_url('money_c/home');?>">Home</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>

<li>
<a>Add Account</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>
<li class="active">Mutual Fund</li>
</ul><!--.breadcrumb-->


</div>



<div class="page-content">
<div class="page-header position-relative">
<h1>
Mutual Fund
<small>
<i class="icon-double-angle-right"></i>
Add a Mutual Fund Account here 
</small>
</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->
<br/><br/><br/>
<div class="row-fluid" style="margin-top: 50px;margin-left: 385px;width: 900px;">
<div class="widget-box span6">
<div class="widget-header header-color-blue2">
<h4 class="lighter smaller">Add a Mutual Fund Account:  </h4>
</div>

   <div class="widget-body" style="    border-radius: 1px;">
<div class="widget-main padding-8">
<?php  echo form_open('money_c/mutualfundinsert'); 
            $cbal = $this->input->get('cbal');  ?>  

<table border="0" class="demo">

    <tr><td width="200">Top Companies:</td><td>
            <select name="cname" style="    margin-left: -53px;">
                                       <option>Please Select</option>
                                       <?php   foreach($companies as $comp) 
                                       {   ?>
                                           <option value="<?php echo $comp->cid; ?>"><?php echo $comp->cname; ?></option>
                                <?php   } ?>
                                   </select></td></tr><br><br>
    <tr><td>Day/Month/Year:</td><td><select name="day" style=" width: 60px;margin-left: -52px;"><option></option>
                                            <?php for($j=1;$j <= 31;$j++){ ?>
                                                    <option><?php echo $j; ?></option>
                                            <?php } ?>
                                        </select>
                                    <select name="month" style=" width: 100px;"><option>Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                    <select name="year" style=" width: 80px;"><option>Select</option>
                                            <?php for($i=2010;$i <= 2100;$i++){ ?>
                                                    <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select></td>
    <tr><td>Add Amount:</td><td><input type="text" name="bal" id="bal" placeholder="Amount" style="margin-left: -53px;"/></td></tr>
    <tr><td colspan="2"><input type="submit" name="save" class="btn btn-primary" style="height: 32px;width: 91px;    margin-left: 148px;" value="Save">
          <?php echo form_close();?>  
           <?php echo form_open('money_c/mfundinsert');?>
            
            
            <input type="submit" name="save" class="btn btn-primary" style="height: 32px;width: 91px;margin-left: 289px;margin-top: -57px;" value="View"></td></tr>
</table><br><br>
<?php echo form_close();?>

</div>
</div>
</div>


</div>

<script type="text/javascript">
var $assets = "assets";//this will be used in fuelux.tree-sampledata.js
</script>

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

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

<!--page specific plugin scripts-->

<script src="<?php echo base_url();?>assets3/js/fuelux/data/fuelux.tree-sampledata.js"></script>
<script src="<?php echo base_url();?>assets3/js/fuelux/fuelux.tree.min.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">
$(function(){

$('#tree1').ace_tree({
dataSource: treeDataSource ,
multiSelect:true,
loadingHTML:'<div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>',
'open-icon' : 'icon-minus',
'close-icon' : 'icon-plus',
'selectable' : true,
'selected-icon' : 'icon-ok',
'unselected-icon' : 'icon-remove'
});

$('#tree2').ace_tree({
dataSource: treeDataSource2 ,
loadingHTML:'<div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>',
'open-icon' : 'icon-folder-open',
'close-icon' : 'icon-folder-close',
'selectable' : false,
'selected-icon' : null,
'unselected-icon' : null
});



/**
$('#tree1').on('loaded', function (evt, data) {
});

$('#tree1').on('opened', function (evt, data) {
});

$('#tree1').on('closed', function (evt, data) {
});

$('#tree1').on('selected', function (evt, data) {
});
*/
});
</script>
</body>
</html>
