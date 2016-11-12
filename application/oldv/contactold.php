<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Tables - Ace Admin</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<style>
    #formid{
        
        margin-top: -50px;
    }
    
    
</style>

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-skins.min.css" />




   <!--<link rel="stylesheet" href="<?php echo base_url();?>asset1/css/reset.css" type="text/css" media="screen">--> 
    <link rel="stylesheet" href="<?php echo base_url();?>asset1/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>asset1/css/grid.css" type="text/css" media="screen">   
<!--    <script src="<?php echo base_url();?>asset1/js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset1/js/cufon-yui.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset1/js/cufon-replace.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset1/js/NewsGoth_400.font.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>asset1/js/NewsGoth_700.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset1/js/NewsGoth_Lt_BT_italic_400.font.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>asset1/js/Vegur_400.font.js" type="text/javascript"></script> 
    <script src="<?php echo base_url();?>asset1/js/FF-cash.js" type="text/javascript"></script>-->
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>chat/css/screen.css" />

<script type="text/javascript" src="<?php echo base_url();?>chat/js/chat.js"></script>













<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
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
<a href="#">Contact Us</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>

</ul>
        <div class="row-fluid">
<div class="span12">
    <div class="row-fluid">
        <section id="content">
            <!--<div class="ic">More Website Templates @ TemplateMonster.com. December10, 2011!</div>-->
            <div class="content-bg" style="background-color: white;">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper">
                        	<article class="grid_8">
                            	<h3>Contact Form</h3>
                                
                                  
 <!--<form id="contact-form2" name="contact-form2" method="post" action="contact_sent.php" enctype="multipart/form-data">-->                    
                                    
 <?php  
 session_start();
 $attribute=array('name'=>'contact-form2','id'=>'contact-form2');
 echo form_open('money_c/contactsend',$attribute); ?>
 <fieldset>
                                          <label><span class="text-form">Name:</span><input name="txtname" type="text" style="background-color: #D5E2EA;"/></label>
<label><span class="text-form">Place:</span><input name="txtplace" type="text" style=" background-color: #D5E2EA;" /></label>                                               
  <label><span class="text-form">Number:</span><input name="txtph" type="text" style="background-color: #D5E2EA;"/></label>
<label><span class="text-form">Email:</span><input name="txtmail" type="text" style="background-color: #D5E2EA;"/></label>                              
                                          <div class="wrapper">
                                            <div class="text-form">Message:</div>
                                            <div class="extra-wrap">
                                                <textarea name="txtmsg" style="background-color: #D5E2EA;"></textarea>
                                                
                                                
                                                
                                              
                                                <div class="clear"></div>
                                                <div class="buttons2">
                                                     <input type="submit" name="send" id="send" value="Send" style="width:70px; height:30px; background:#004e98; color: white; margin-left:400px; margin-top:10px; ">
                                                     <?php echo form_close(); ?>
 
 
 <br><br><br><br>
 
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245.56336967775664!2d76.35655123101093!3d10.015708843497123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c8665cac215%3A0x4a229adeb667fcfa!2sKuzhikattumoola+Bus+Stop!5e0!3m2!1sen!2sin!4v1421142441834" width="498" height="200" frameborder="0" style="border:0"></iframe>-->
 
 
                                            </div> 
                                            </div>
                                      </div>                            
                                  </fieldset>						
                              </form>
                            </article>    
                            <article class="grid_4">
                            	<h3>Contact Info</h3>
                             
                                <dl>
                                  <dt class="indent-bot">&nbsp;</dt>
                                  <dd style="font-size: 14px;"><span>Phone:</span>  +91 9895437504</dd>
                                    <dd style="font-size: 14px;"><span>Phone:</span>  +91 9400335304</dd>
                                   
                                    <dd style="font-size: 14px;"><span>Email:</span><a style="font-size: 16.5px;" href="#">irinstechnologies@gmail.com
</a></dd>
 </dl>
                           
 <div class="a5" style="width:175px; height:100px; margin-left:10px; margin-top:20px; float:left;"  >
      <?php foreach ($row as $q)
     {
         $admin=$q->admin_name;
         $status1=$q->status;
     }
         ?>
     <?php
     $me=$this->session->userdata('usr');
     $_SESSION['username'] = "$me";
//     print_r($_SESSION['username']);
     $you="Admin";
//   echo form_open('money_c/chat/'.$usr)?>
     <!--<input type="submit" name="sub" value="chat">-->
    
     
     <?php // echo form_close();?>
     <!--<div id="main_container">-->
    <?php if($status1==1){
        echo " <div id='ad' style='font-size: 20px;color: #1EF36B;'>"."Admin Online"."</div>";
        }
 else {
       echo " <div id='ad' style='font-size: 20px;color: #E2350B;'>"."Admin Offline"."</div>";
}
     ?>
     <br/><br/><br/>
     <script type="text/javascript" src="<?php echo base_url();?>chat/js/jquery.js"></script>
     <a href="javascript:void(0)" onclick="javascript:chatWith('<?php echo $you?>')"><img src="<?php echo base_url(); ?>assets/images/chat.jpg" style="width: 110px;margin-left: 55px;"/></a>
     <!--</div>-->
<!-- <img src="<?php // echo base_url();?>assets/images/chat.jpg" style="margin-top: 15px;
    margin-left: -37px;">-->
    </div>  
    
   
    
         
         
         
                     
                          </article>                        
                       
               <!--  <div class="map"  style="width:200px; height:180px; margin-left:80px; margin-top:500px;">
                       
            
                                    <iframe width="198" height="50" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                               
                         
        </div>    -->                        
                       
                      
                            
                          
                        </div>
            
                  
                        
                        
                        
                    </div>
                </div>
              <!--  <div class="block"></div>-->
            </div>
        </section>
    </div>
	
	<!--==============================footer=================================-->
  <?php // include("footer.php")?>

	<script type="text/javascript"> Cufon.now(); </script>
        <style>
body {
	background-color: #eeeeee;
	/*padding:0;*/
	/*margin:0 auto;*/
	/*font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;*/
	/*font-size:11px;*/
}
</style>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

	
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets3/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

	

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets3/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.slimscroll.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>





</body>
</html>

        
