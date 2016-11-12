<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="with selectable items(single &amp; multiple) and custom icons" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

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
<li class="active">Loan</li>
</ul><!--.breadcrumb-->


</div>



<div class="page-content">
<div class="page-header position-relative">
<h1>
Loan
<small>
<i class="icon-double-angle-right"></i>
Add a loan  account here 
</small>
</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->
<br/><br/><br/>
<div class="row-fluid" style="margin-top: 10px;margin-left: 400px;width: 855px;">
<div class="widget-box span6">
<div class="widget-header header-color-blue2">
<h4 class="lighter smaller">Add Amount: </h4>
</div>

<div class="widget-body">
<div class="widget-main padding-8">

<?php  echo form_open('money_c/loaninsert');  ?>  

<table border="0" class="demo">

    <tr><td width="200">Type of loan</td><td>
    <select name="ltype" style="margin-left: -75px;">
                        <option>Please select</option>
                        <?php foreach($ltype as $lt) { ?>
                        <option value="<?php echo $lt->lntid; ?>"><?php echo $lt->lntype; ?></option>
                        <?php } ?>
    </select><!--<div id="showtext"><input type="text" name="other" id="other" style="visibility:hidden"></div>--></td></tr>
    <tr><td width="200">Bank name:</td><td>
    <select name="bname" style="margin-left: -75px;">
                        <option>Please select</option>
                        <?php foreach($banks as $bk){ ?>
                        <option value="<?php echo $bk->instid; ?>"><?php echo $bk->instname; ?></option>
                        <?php } ?>
    </select></td></tr>
    <tr><td>Day/Month/Year:</td><td><select name="day" style=" width: 60px;margin-left: -75px;"><option></option>
                                            <?php for($j=1;$j <= 31;$j++){ ?>
                                                    <option><?php echo $j; ?></option>
                                            <?php } ?></select><select name="month" style="width:100px"><option>Select</option>
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
                                    <select name="year" style="width:80px"><option>Select</option>
                                            <?php for($i=2012;$i <= 2100;$i++){ ?>
                                                    <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select></td>
    
    <tr><td>Loan Amount</td><td><input type="text" name="amount" id="inst" placeholder="Loan Amount" style="margin-left: -75px;"/></td></tr>
    <tr><td colspan="2"><input type="submit" name="btn-save" id="btn-save" class="btn btn-primary" style="height: 32px;width: 91px;margin-left: 152px;" value="Save"></td></tr>
        </table>
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

<div class="ace-settings-container" id="ace-settings-container">
<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
<i class="icon-cog bigger-150"></i>
</div>

<div class="ace-settings-box" id="ace-settings-box">
<div>
<div class="pull-left">
<select id="skin-colorpicker" class="hide">
<option data-class="default" value="#438EB9" />#438EB9
<option data-class="skin-1" value="#222A2D" />#222A2D
<option data-class="skin-2" value="#C6487E" />#C6487E
<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
</select>
</div>
<span>&nbsp; Choose Skin</span>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
<label class="lbl" for="ace-settings-header"> Fixed Header</label>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
</div>
</div>
</div><!--/#ace-settings-container-->
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
