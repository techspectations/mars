
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'vendor/autoload.php';
use Browser\Casper;
class Netbanking extends CI_Controller
{
	function index()
	{
		$casper = new Casper();
$casper->setOptions(array(
    'ignore-ssl-errors' => 'true',
	'ssl-protocol'      => 'any',
	'load-images' => 'true'
));

$casper->setUserAgent('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36');
// navigate to fednet web page
$casper->errorHanlder();
$casper->start('https://netbanking.hdfcbank.com/netbanking/');

$casper->waitForSelector('FRAME[NAME="login_page"]', 3000);
$casper->switchToChildFrame(0);
$fragment = <<<FRAGMENT
document.querySelector("input[name='fldLoginUserId']").value = "62955214";
document.querySelector('img[src="/gif/continue_new1.gif?v=1"]').click();
FRAGMENT;
$casper->evaluate($fragment);
$casper->waitForSelector('FRAME[NAME="login_page"]', 3000);
$casper->switchToChildFrame(0);
$fragment = <<<FRAGMENT
document.querySelector("input[name='fldPassword']").value = "Alphonsa1592";
document.querySelector('img[src="/gif/login_new1.gif"]').click();
FRAGMENT;
$casper->evaluate($fragment);
//$casper->waitForSelector('script[language="javascript"]', 3000);
$casper->waitForSelector('FRAME[NAME="left_menu"]', 3000);
$casper->switchToChildFrame(1);
$fragment = <<<FRAGMENT

document.querySelector('a#enquiryatag').click();
document.querySelector('li#SIN_nohref').click();
FRAGMENT;
$casper->evaluate($fragment);


$casper->switchToParentFrame();
$casper->waitForSelector('FRAME[NAME="main_part"]', 3000);
$casper->switchToChildFrame(2);

/*$fragment = <<<FRAGMENT
casper.then(function() {
	
	this.fillSelectOptionByText("select[name='- Select Type of Account -']","SCA");

});
FRAGMENT;
$casper->extraFunction($fragment);*/

$fragment = <<<FRAGMENT

document.querySelector('radio[name="radTxnType"]').click();

FRAGMENT;
$casper->evaluate($fragment);


$casper->capture(
    array(
        'top' => 0,
        'left' => 0,
        'width' => 2000,
        'height' => 3000
    ),
    '/var/www/html/images/hdfcbanknew.png'
);
////////////////////logout code////////////////////////////
/*$casper->switchToParentFrame();
$casper->switchToChildFrame(0);
$fragment = <<<FRAGMENT

document.querySelector('img[src="default/gif/logoutbtn.gif"]').click();

FRAGMENT;
$casper->evaluate($fragment);

$casper->capture(
    array(
        'top' => 0,
        'left' => 0,
        'width' => 2000,
        'height' => 3000
    ),
    '/var/www/html/images/hdfcbanks1.png'
);*/ ///logout code end////////////////////////////
$casper->run();
//print_r($casper->getNewWindow());
$debug = $casper->getOutput();
foreach($debug as $dg){
echo $dg."</br>";
}
	}
}
?>