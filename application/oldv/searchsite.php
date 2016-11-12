




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>asset/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<!--fonts-->

<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

<!--ace styles-->

<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/ace-responsive.min.css" />
<link rel="stylesheet" href<?php echo base_url();?>asset/css/ace-skins.min.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="asset/css/ace-ie.min.css" />
<![endif]-->

<!--inline styles related to this page-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<?php
if($yodintegration=='YES'){
  include 'fastlink2_utility.php';
$protocol = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != "off")) ? "https" : "http";
$fullURI = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pos = strpos($fullURI, "trial_period_extension");
$base_url = substr($fullURI, 0, $pos - 1);
$rest_url = 'https://rest.developer.yodlee.com/services/srest/restserver/'; //prod
$node_url = 'https://node.developer.yodlee.com/authenticate/restserver/';
$finapp_id = '10003600';
$extra_params = '';
$cob_username = 'sbCobshinojirins';
$cob_password = 'a6c1c53a-1b98-41fb-9ade-ebe770e89db1';
$logusr= $this->session->userdata('logusr');
        $user_name=$logusr[0]['yodusr'];
         $user_password=$logusr[0]['yodpass'];
$cob_suburl = 'v1.0/authenticate/coblogin';
$user_suburl = 'v1.0/authenticate/login';
$token_suburl = 'v1.0/authenticator/token';
$cob_session_token = getCobSessionToken($rest_url . $cob_suburl, $cob_username, $cob_password);
$rsession_token = getUserSessionToken($rest_url . $user_suburl, $cob_session_token, $user_name, $user_password);
$fastlink2_token = getFastlink2Token($rest_url . $token_suburl, $cob_session_token, $rsession_token, $finapp_id);
$url = 'https://rest.developer.yodlee.com/services/srest/restserver/v1.0/jsonsdk/SiteTraversal/searchSite';
$data = array('siteSearchString' => $site,'cobSessionToken'=>$cob_session_token,'userSessionToken'=>$rsession_token);
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$myArray = json_decode($result, true);
?>
    								<div class="col-sm-6">
										<hr />
										<h1>SELECT BANK</h1>
										<p class="lead">
											Select your financial institution name that generated from our financial partner Yodlee. If your financial institution
											name is not listed,sorry for the inconvenience. You can use our manual update,statement upload and other features offer by us. 
											
										</p>
									</div>
<div class=""><i class="icon-th-list"></i><b> List Sites</b></div>
<table class="table table-bordered" border="1">
	<thead>
		<tr>
		  <td class="c-gray "><b> ID</b></td>
		  <td class="c-gray"><b> Site</b></td>
		  <td class="c-gray"><b>Select bank</b></td>
		</tr>
	</thead>
	<tbody>
            <?php
foreach($myArray as $row)
{
    $siteId=$row['siteId'];
    ?>
    <tr>
			  <td><?php echo  $row['siteId'];?></td>
                          <td><?php echo $row['defaultDisplayName']; ?></td><td><input type="submit" value="Add" onClick="window.location='<?php echo site_url('money_c/addaccount2/'. $siteId);?>'"></td>
			</tr>
 <?php
}
?>

</table>
		<form action="<?php echo $node_url; ?>" method="post" id="rsessionPost">
			<input type="hidden" name="rsession" placeholder="rsession" value="<?php echo $rsession_token; ?>"/>
			<input type="hidden" name="app" placeholder="FinappId" value="<?php echo $finapp_id; ?>"/>
			<input type="hidden" name="redirectReq" placeholder="true/false" value="true"/>
			<input type="hidden" name="token" placeholder="token" value="<?php echo $fastlink2_token; ?>"/>
			<input type="hidden" name="extraParams" placeholer="Extra Params" value="<?php echo $extra_params; ?>"/>
		</form>
<?php }else{ ?>
    								<div class="col-sm-6">
										<hr />
										<h1>SELECT BANK</h1>
										<p class="lead">
											Select your financial institution name . If your financial institution
											name is not listed,sorry for the inconvenience. We solve it soon. You can use our manual update,statement upload and other features offer by us. 
											
										</p>
									</div>
<div class=""><i class="icon-th-list"></i><b> List Sites</b></div>
<table class="table table-bordered" border="1">
	<thead>
		<tr>
		  <td class="c-gray "><b> ID</b></td>
		  <td class="c-gray"><b> Site</b></td>
		  <td class="c-gray"><b>Select bank</b></td>
		</tr>
	</thead>
	<tbody>
<?php foreach($reslt as $row) {  ?>
    <tr>
 <td><?php echo  $row->id;?></td>
 <td><?php echo $row->bankName; ?></td>
 <td><input type="submit" value="Add" onClick="window.location='<?php echo site_url('index.php/account/addbank/'. $row->id);?>'"></td>
 </tr>
 <?php
}
?>
</tbody>
</table>

 <?php } ?>
</div><!--/.span-->
</div><!--/.row-fluid-->


</div><!--/.main-content-->
</div><!--/.main-container-->
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url();?>asset/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
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
var oTable1 = $('#sample-table-2').dataTable( {
"aoColumns": [
{ "bSortable": false },
null, null,null, null, null,
{ "bSortable": false }
] } );


$('table th input:checkbox').on('click' , function(){
var that = this;
$(this).closest('table').find('tr > td:first-child input:checkbox')
.each(function(){
this.checked = that.checked;
$(this).closest('tr').toggleClass('selected');
});

});


$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
function tooltip_placement(context, source) {
var $source = $(source);
var $parent = $source.closest('table')
var off1 = $parent.offset();
var w1 = $parent.width();

var off2 = $source.offset();
var w2 = $source.width();

if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
return 'left';
}
})
</script>
</body>
</html>




