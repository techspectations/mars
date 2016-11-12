<?php
$this->load->library('session');
$i=$this->session->userdata('id');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flower Shop - free website template, HTML CSS</title>
<meta name="keywords" content="free website template, flower shop, website templates, CSS, HTML" />
<meta name="description" content="Flower Shop - free website template, W3C compliant HTML CSS layout" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Free CSS Template | Designed by TemplateMo.com  -->
<style>
body {
	margin: 0;
	padding: 0;
	line-height: 1.5em;
	font-family: Verdana, Arial, san-serif;
	font-size: 11px;
	color: #fff;
	background: #fff;
}

a:link, a:visited { color: #F1A5D5; text-decoration: underline; } 
a:active, a:hover { color: #FFFF00; text-decoration:none; }

h1 {
	margin: 0px;
	padding: 10px 0 20px 0;
	font-size: 24px;
	color: #ffffff;
	font-weight: normal;
}

h2 {
	margin: 0 0 20px 0;
	padding: 10px 0 10px 15px;
	font-size: 24px;
	color: #ffffff;
	font-weight: normal;
	background-color: #440522;
}

h3 {
	margin: 0 0 10px 0;
	padding: 5px 0 5px 10px;
	font-size: 16px;
	color: #ffffff;
	font-weight: normal;
	background-color: #be457c;
}

h4 {
	margin: 0;
	padding: 5px 0 5px 15px;
	font-size: 16px;
	color: #ffffff;
	font-weight: normal;
	background-color: #be457c;
}

p {
	margin: 0px;
	padding: 0 0 10px 0;
	text-align: justify;
}

.price{
	font-size:16px;
	margin-bottom: 10px;
}

.price span{
	font-size:16px;
	color: #ffffff;
}

.buynow a{
	clear: both;
	display: block;
	float: left;
	width: 80px;
	padding: 1px 0;
	margin: 0 15px 10px 0;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	color: #ffffff;
	background: #be457c;
	border-bottom: 1px solid #f285b6;
}

.cleaner {
	clear: both;
	width: 100%;
	height: 1px;
	font-size: 1px;	
}

.cleaner_with_height {
	clear: both;
	width: 100%;
	height: 30px;
	font-size: 1px;	
}

#templatemo_container{
	width: 940px;
	margin: 0 auto;
	border: 10px solid #f2d9ef;
}

/* top panel */
#templatemo_top_panel {
	overflow: hidden;	
	width: 880px;
	height: 32px;
	padding: 5px 30px;
	background: #c82c74;
	border-bottom: 1px solid #870843;
}

#templatemo_top_panel #templatemo_language_section {
	float: left;
	width: 400px;
	padding-right: 25px;
	margin: 0;
	padding: 0;
}

#templatemo_top_panel #templatemo_language_section img {
	padding: 0px;
	border: none;
	margin-right: 5px;
	border: 1px solid #ffffff;
}

#templatemo_top_panel #templatemo_shopping_cart {
	float: right;
	width: 400px;
	padding-top: 10px;
	text-align: right;
	font-size: 14px;
	font-weight: bold;
	color: #ffffff;
}

#templatemo_top_panel #templatemo_shopping_cart span{
	font-weight: normal;
}
/* end of top panel */

/* header panel */
#templatemo_container #templatemo_header {
	overflow: hidden;	
	width: 880px;
	height: 70px;
	padding: 15px 30px;
	background: #ebbce5 url(images/templatemo_header_bg.jpg) bottom right no-repeat;
}
/* end of header panel */

/* header panel */
#templatemo_container #templatemo_banner {
	overflow: hidden;	
	width: 880px;
	height: 190px; /* + 60 for padding top and bottom */
	padding: 30px 30px;
	background: #ffffff url(images/templatemo_banner_bg.jpg) top right no-repeat;
}
/* end of header panel */

/* menu */
#templatemo_menu_panel{
	overflow: hidden;	
	width: 880px;
	height: 40px;
	padding: 0 30px;
	background: #440522;
}

#templatemo_menu_panel ul {
	float: left;
	width: 930px;
	margin: 0;
	padding: 5px 0 0 0;
	list-style: none;
}

#templatemo_menu_panel ul li{
	display: inline;
}

#templatemo_menu_panel ul li a{
	float: left;
	width: 110px;
	padding: 5px 0;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	color: #ebbce5;
	border-left: 1px solid #5f3b11;	
}

#templatemo_menu_panel li a:hover, #templatemo_menu_panel li .current{
	color: #ffffff;
}
/* end of menu */

/* content */
#templatemo_content{
	width: 880px;
	padding: 30px 30px 0 30px;
	background: #811044;
}

#templatemo_content #templatemo_content_left {
	float: left;
	width: 630px;
}

#templatemo_content_left .product_box {
	float: left;
	width: 200px;
	margin-right: 10px;
}

#templatemo_content_left .product_box img{
	margin-bottom: 5px;
}

#templatemo_content #templatemo_content_right {
	float: right;
	width: 220px;
}

.templatemo_right_section {
 	width: 210px;	
	border: 5px solid #f8c7f2;
	background: #ebbce5;
	margin-bottom: 30px;
}

.templatemo_right_section_content{
 	width: 180px;
	padding: 15px;	
} 
.templatemo_right_section_content h3{
	margin-bottom: 0px;	
} 

.templatemo_right_section_content form{
	padding: 0;
	margin: 0;
} 

.templatemo_right_section_content input{
	width: 180px;
	margin-bottom: 15px;
}

.templatemo_right_section_content .button{
	width: 70px;
	margin-bottom: 0px;
}

.templatemo_right_section_content ul{
	list-style: none;
	margin: 0px;
	padding: 0px;
}

.templatemo_right_section_content li {
	margin-bottom: 3px;
}

.templatemo_right_section_content li a{
	color: #be457c;
	padding: 0 0 0 20px;
	text-decoration: none;	
	background:	url(images/templatemo_list_icon.gif) bottom left no-repeat;	
}

.templatemo_right_section_content li a:hover{
	color: #440522;
	text-decoration: none;
	background:	url(images/templatemo_list_icon_hover.gif) bottom left no-repeat;
}
/* end of content */

/*  footer */

#templatemo_footer_panel{
	overflow: hidden;
	width: 900px;
	padding: 15px 20px;
	background: #333333;
}

#templatemo_footer_panel img{
	margin: 0 5px 0 0;
}

#templatemo_footer_panel #footer_left {
	float: left;
	width: 340px;
	padding: 0 25px 0 0;
	margin: 0 15px 0 0;	
	border-right: 1px solid #4c4c4c;

}

#templatemo_footer_panel #footer_right {
	float: right;
	width: 485px;
	text-align: left;
}

</style>

<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
           
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
<!--        	.html" style="margin-left: 50px;">Read more...</a>-->
        </div>
        
        <div id="templatemo_new_books">
<!--        	<ul>
                <li>Suspen disse</li>
                <li>Maece nas metus</li>
                <li>In sed risus ac feli</li>
            </ul>-->

<!--<h4><?php // echo "WELCOME ";?></h4>-->
<!--<h4><a href="<?php // echo site_url('User_c/addcart/',$i);?>">VIEW MY CART</a></h4>



<div class="breadcrumbs">
				<ol class="breadcrumb">
                                    <li><a href="<?php // echo site_url('User_c/index'); ?>">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
<table cellpadding="6" cellspacing="1" style="width:100%" border="1">
<tr>
  <th>QTY</th>
  <th>Item Name</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($this->cart->contents() as $items): ?>   to fetch value from cart (no need of interfacing with model)
<?php echo form_open('money_c/update_c'); ?>
	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?> row ID is a unique identifier that is generated by the 
                                                                      cart code when an item is added to the cart. The reason 
                                                                      a unique ID is created is so that identical products 
                                                                      with different options can be managed by the cart 
        <tr>
	  <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach;?>

<tr>
  <td colspan="2"></td>
  <td class="right"><strong>Total</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>-->
</div>
    </div> <!-- end of header -->
<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

    <tr>

        <th>Item Name</th>
        <th style="text-align:0px">Qty</th>
        <th style="text-align:0px">Sub-Total</th>
    </tr>

    <?php $i = 1; ?>

    <?php foreach ($this->cart->contents() as $items): ?>
        <tr>
            <td><?php echo $items['name']; //echo $row->name;  ?></td>
    <!--        <td><img src="<?php echo base_url(); ?>uploads/<?php //echo  $row->image;   ?>" alt="" width="95" height="50" /></td>-->
            <td><?php echo $items['qty']; //echo $row->quantity;  ?></td>
            <td><?php echo $items['subtotal']; //echo $row->subtotal;  ?></td>
        </tr>

    <?php endforeach; ?>
    <tr><td colspan="4">Total:<?php echo $this->cart->total(); ?></td></tr>
</table>
<!--<?php //echo form_open('userc/pay/'.$id)   ?> 

    <tr><td colspan="4">Total://<?php echo $row->total; ?></td></tr>


<input type="submit" name="submit" value="pay">-->
<?php
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id = 'niranjanapraveen117@gmail.com'; // Business email ID
//$paypal_id = 'anupamamathew381992@gmail.com'; 
?>
<!--<h4>////<?php // echo "WELCOME ".$n;?></h4>-->

<div class="product">            
    <div class="image">
<!--        <img src="http://www.phpgang.com/wp-content/uploads/gang.jpg" />-->
        
<!--        <img src="<?php echo base_url();?>images/p2.jpg"/>
        <h4>Stay Connected With:<img src="<?php echo base_url();?>images/p6.jpg"/></h4>-->
  </div>
    <div class="name">
        PHPGang Payment
    </div>
    <div class="price">
        <!--        Price:$10-->
        
    </div>       
    <div class="btn">
        
        
        <?php
        echo'<form action="' . $paypal_url . '" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="' .$paypal_id  . '">
    <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="upload" value="1">';
        $i = 1;
       $dd = $this->session->userdata('id');
        foreach ($this->cart->contents() as $items):
            echo '<input type="hidden" name="item_name_' . $i . '" value="' . $items['name'] . '">
    <input type="hidden" name="item_number_' . $i . '" value="' . $i . ' ">
    <input type="hidden" name="quantity_' . $i . '" value="' . $items['qty'] . '">
    <input type="hidden" name="amount_' . $i . '" value="' . $items['price'] . '">';
            ?>

            <?php $i++; ?>

        <?php endforeach; ?>
<!--    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">-->
        <?php echo'<input type="hidden" name="no_shipping" value="1">
         <input type="hidden" name="custom" value="' . $dd . '">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="tx" value="TransactionID"> 
   <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://localhost/shopping_cart/index.php/e_shop/cancel">
    <input type="hidden" name="return" value="http://localhost/shopping_cart/index.php/e_shop/success">
<!--    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
    <input type="submit" name="submit" value="make your payment">
<!--    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
    </form>'; ?> 
    </div>
</div>
 <div id="templatemo_footer">
    
<!--	       <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a> | Designed by <a href="http://www.templatemo.com" target="_parent" title="free css templates">Free CSS Templates</a><span class="templatemo_footer">|&nbsp;<u><a href="http://www.maagraphics.com">Web Graphics</a></u>&nbsp;downloaded  from&nbsp;DH <u><a href="http://webtemplates.dezinehub.com">Website Templates</a></u></span></div> -->
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
</body>
</html>
