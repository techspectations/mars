



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
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

<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

<!--ace styles-->

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-responsive.min.css" />
<link rel="stylesheet" href<?php echo base_url();?>assets3/css/ace-skins.min.css" />

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
<a href="#">Home</a>

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
View Mutual Fund Transactions Of Each month
</small>
</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->
  
<?php


//$query;
//print_r($siteid);die;
error_reporting(0);


include 'fastlink2_utility.php';


$protocol = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != "off")) ? "https" : "http";
$fullURI = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pos = strpos($fullURI, "trial_period_extension");
$base_url = substr($fullURI, 0, $pos - 1);



$rest_url = 'https://rest.developer.yodlee.com/services/srest/restserver/'; //prod
$node_url = 'https://node.developer.yodlee.com/authenticate/restserver/';
$finapp_id = '10003600';
$extra_params = '';

$cob_username = 'sbCobmarstech';
$cob_password = '0894fc9b-fde9-480f-8d9e-6f6153a245ba';
$logusr= $this->session->userdata('logusr');
        $user_name=$logusr[0]['yodusr'];
         $user_password=$logusr[0]['yodpass'];
$cob_suburl = 'v1.0/authenticate/coblogin';

$user_suburl = 'v1.0/authenticate/login';

$token_suburl = 'v1.0/authenticator/token';





$cob_session_token = getCobSessionToken($rest_url . $cob_suburl, $cob_username, $cob_password);
$rsession_token = getUserSessionToken($rest_url . $user_suburl, $cob_session_token, $user_name, $user_password);
$fastlink2_token = getFastlink2Token($rest_url . $token_suburl, $cob_session_token, $rsession_token, $finapp_id);

//$url='https://rest.developer.yodlee.com/services/srest/restserver/v1.0/jsonsdk/TransactionSearchService/executeUserSearchRequest';
$url='https://rest.developer.yodlee.com/services/srest/restserver/v1.0//jsonsdk/SiteAccountManagement/removeSiteAccount';
$data = array( 'cobSessionToken' => $cob_session_token, 'userSessionToken' => $rsession_token, 'memSiteAccId'=>$siteid);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
//var_dump($result);
$myArray = json_decode($result,true);
redirect('money_c/serachsitefirst');
?>
<div class="hr hr-18 dotted hr-double"></div>





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

<script src="<?php echo base_url();?>assets3/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/jquery.dataTables.bootstrap.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

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


    
    
			



