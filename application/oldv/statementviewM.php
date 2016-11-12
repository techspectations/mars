<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery Tabledit Plugin Demo</title>
<link href="<?php echo base_url();?>tabledit/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>tabledit/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>tabledit/bootstrap.min.css">
<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/fullcalendar.css" />

<!--fonts-->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!--ace styles-->

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-skins.min.css" />
<script src="<?php echo base_url();?>tabledit/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>tabledit/jquery.tabledit.js"></script>
<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets3/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/fullcalendar.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/bootbox.min.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>
<style>
.container { max-width:760px;}
</style>
</head>

<body>
<?php
//print_r($lines);
 if($msg){ ?>
<div class="alert alert-block alert-success">
<button type="button" class="close" data-dismiss="alert">
<i class="icon-remove"></i>
</button>

<i class="icon-ok green"></i>

Your Bank Statement
<strong class="green">
 successfully
<small></small>
</strong>
uploaded
</div>
<?php }else{ ?>
<form method="post" action="<?php echo base_url() ?>index.php/Statement/statement_add" >
<?php  foreach($lines as $daf=>$ds){
	if($lines[$daf]!=""){ ?>
<input type="hidden" name="singlevalues[]" value="<?php echo $ds; ?>" />
	<?php } } ?>
<input type="hidden" name="bank" value="<?php echo $bank; ?>" />
<input type="submit" name="uploadstatement" id="uploadstatement" value="Submit" class=" various btn btn-primary" />
</form>
<table class="table table-striped table-bordered" id="example">
<?php
$y=1; 
foreach ($lines as $key=>$url) {
$keyes =explode(',', $url); 
if($lines[0]==$url){ 
?>
  <thead>
    <tr>
	<th>#</th>
<?php foreach($keyes as $kees=>$kys){
	if($keyes[0]==$kys){
	$kys=substr($kys,0,5);	
	}
      echo "<th>".$kys."</th>";
 } ?>
    </tr>
  </thead>
 <tbody>
<?php }else{ ?>
<tr> 	
<?php 
if(!is_null($keyes[$kees])){
echo '<th scope="row">'.$y.'</th>';
foreach($keyes as $kys){
echo "<td>".$kys."</td>";
}} ?>
 </tr>
<?php $y++; } 
}
 ?>
</tbody>
</table>
<?php } ?>
<?php /*	  
<script type="text/javascript">
$('#example').Tabledit({
				editButton: true,
				deleteButton: false,
               // removeButton: false,
                columns: {
                    identifier: [0, 'id'],
                    editable: [<?php
$y=0;
$keyes =explode(',', $titles);
 foreach($keyes as $r){
		echo "[".++$y.",'".$r."'],";
	} 

?>]
                }
            });
			
</script>
 */ ?>
</body>
</html>
