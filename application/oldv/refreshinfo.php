<?php

$memSiteAccId;
  
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

$cob_username = 'sbCobace';
$cob_password = '8fd9e3d3-26d3-47c5-b46e-6b0de0e2cca2';
$logusr= $this->session->userdata('logusr');
        $user_name=$logusr[0]['yodusr'];
         $user_password=$logusr[0]['yodpass'];

$cob_suburl = 'v1.0/authenticate/coblogin';

$user_suburl = 'v1.0/authenticate/login';

$token_suburl = 'v1.0/authenticator/token';





$cob_session_token = getCobSessionToken($rest_url . $cob_suburl, $cob_username, $cob_password);
$rsession_token = getUserSessionToken($rest_url . $user_suburl, $cob_session_token, $user_name, $user_password);
$fastlink2_token = getFastlink2Token($rest_url . $token_suburl, $cob_session_token, $rsession_token, $finapp_id);

//$url='https://rest.developer.yodlee.com/services/srest/restserver/v1.0/jsonsdk/SiteAccountManagement/getSiteLoginForm';
$url = 'https://rest.developer.yodlee.com/services/srest/restserver/v1.0//jsonsdk/Refresh/getSiteRefreshInfo';


$data = array('memSiteAccId' =>$memSiteAccId,'cobSessionToken'=>$cob_session_token,'userSessionToken'=>$rsession_token);
//print_r($data);
    
    
    
    
    

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
//print_r($result);die;
$myArray = json_decode($result, true);
//var_dump($myArray);die;
//// $memSiteAccId=$myArray['siteAccountId'];
redirect('money_c/trans/'.$memSiteAccId);