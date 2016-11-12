<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="Large &amp; Small" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />

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
<a href="#">Home</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>

<li>
<a href="#">Bank Account</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>
<li class="active">Add Transaction</li>
</ul><!--.breadcrumb-->


</div>

<div class="page-content">
<div class="page-header position-relative">
<h1>
Bank Account
<small>
<i class="icon-double-angle-right"></i>
Add Transaction
</small>
</h1>
</div><!--/.page-header-->
<br/><br/>
<div class="row-fluid" style="margin-left: 382px;">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<?php
    
    $m = $this->input->get('month');
    $y = $this->input->get('year');
    $id = $this->input->get('id');
      $dat = $m." ".$y;
      //print_r($manual);      die();
  foreach($manual as $row)
  { 
      $des = $row->details;
      $cre = $row->credit;
      $deb = $row->debit;
      $bal = $row->balance;
      $rem = $row->remarks;
  }

  ?>

<div class="row-fluid">

<div class="span3">
<div class="widget-box pricing-box">
<div class="widget-header header-color-orange">
<h5 class="bigger lighter">Starter Package</h5>
</div>

<div class="widget-body">
<div class="widget-main">
        <ul class="unstyled spaced2">
                
            
            
          <div id="bo">
        
<div id="contact">
 <br/>
<?php
              
        echo form_open('money_c/updatemanualdata/'.$id.'/'.$m.'/'.$y);?>

        <fieldset class="contact-inner">
      
            <input type="hidden" name="month" value="<?php echo $m;?>">
            <input type="hidden" name="year"  value="<?php echo $y;?>">
            
 <p class="contact-input">
     Description:<input type="text" name="des" value="<?php echo $des;?>" required/>
      </p>
      Category:
      <p class="contact-input"> 
        <label for="select" class="select">
            <select name="cat" id="cat" required>
            <option value="" selected>Choose category</option>  
            <?php foreach($category as $row) 
            {  ?>
                <option value="<?php echo  $row->catname;?>"><?php echo $row->catname;?></option>
     <?php  }
            ?>
          </select>
        </label>
      </p>
Debit:
      <p class="contact-input">
          <input type="text" name="deb" value="<?php if(isset($deb)){ echo $deb;}else{echo "0";}?>" required />
      </p>
      Credit:
<p class="contact-input">
    <input type="text" name="cre" value="<?php if(isset($deb)){ echo $cre;}else{echo "0";}?>" required/>
        </p>
        <p class="contact-input">
            
            Is it a goal?<input type="checkbox" id="goal" name="setgoal" style="width: 69px;opacity: initial;height: 25px;"/>
            
        </p>
    </fieldset>
   
</div>
    </div>
            
            
        </ul>

        
        
</div>

<div>
       
    <span><input type="submit" value="Insert" style=" width: 235px;height: 41px;background-color: #ffc657;"/></span>
        
</div>
</div>
</div>
</div>




</div>




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

<!--page specific plugin scripts-->

<!--ace scripts-->

<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

<!--inline scripts related to this page-->
</body>
</html>
