<!DOCTYPE html>
<?php



include 'fastlink2_utility.php';


$protocol = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != "off")) ? "https" : "http";
$fullURI = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pos = strpos($fullURI, "trial_period_extension");
$base_url = substr($fullURI, 0, $pos - 1);



$rest_url = 'https://rest.developer.yodlee.com/services/srest/restserver/'; //prod
$node_url = 'https://node.developer.yodlee.com/authenticate/restserver/';
$finapp_id = '10003600';
$extra_params = '';


$cob_username = 'sbCobmars';
$cob_password = '505761a3-1a6b-4ebc-8608-05bf1609c1e9';
$user_name = 'sbMemmars4';
$user_password = 'sbMemmars4#123';

$cob_suburl = 'v1.0/authenticate/coblogin';

$user_suburl = 'v1.0/authenticate/login';

$token_suburl = 'v1.0/authenticator/token';





$cob_session_token = getCobSessionToken($rest_url . $cob_suburl, $cob_username, $cob_password);
$rsession_token = getUserSessionToken($rest_url . $user_suburl, $cob_session_token, $user_name, $user_password);
$fastlink2_token = getFastlink2Token($rest_url . $token_suburl, $cob_session_token, $rsession_token, $finapp_id);



?>


<html >
  <head>
    <meta charset="UTF-8">
    <!--<title>connect your bank</title>-->

<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">

<meta name="apple-mobile-web-app-capable" content="yes">


    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css'>

        <link rel="stylesheet" href="css/style.css">




  </head>

  <body>




<div class="row">
  <div class="small-12 columns">
    <div class="off-canvas-wrap" data-offcanvas>
      <div class="inner-wrap">


        <section class="main-section">
          <div class="row">
        <div class="large-12 columns">
          <br/><br/><br/><br/>

          <p>
          <!--<center><img src="https://upload.wikimedia.org/wikipedia/commons/e/e2/Yodlee_logo.svg" /></center>-->

          </p>
          <br/><br/><br/><br/>


		<form action="<?php echo $node_url; ?>" method="post" id="rsessionPost">
			<input type="hidden" name="rsession" placeholder="rsession" value="<?php echo $rsession_token; ?>"/>
			<input type="hidden" name="app" placeholder="FinappId" value="<?php echo $finapp_id; ?>"/>
			<input type="hidden" name="redirectReq" placeholder="true/false" value="true"/>
			<input type="hidden" name="token" placeholder="token" value="<?php echo $fastlink2_token; ?>"/>
			<input type="hidden" name="extraParams" placeholer="Extra Params" value="<?php echo $extra_params; ?>"/>
		</form>


          <a href="#" onClick="javascript:launch();" class="button radius expand black">connect to your bank</a>

		<script type="text/javascript">
			function launch(){
				document.getElementById('rsessionPost').submit();
			}
		</script>

                    <br/><br/><br/><br/>


        </div>
      </div>
        </section>


      </div>
    </div>
  </div>
</div>
    <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.js'></script>

        <script src="js/index.js"></script>




  </body>
</html>
