<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

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
 <link rel="stylesheet" href="<?php echo base_url();?>asset1/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>asset1/css/grid.css" type="text/css" media="screen">   
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>chat/css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url()?>chat/css/screen.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input.css">
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input_1.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/speechinput3.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/speechinput4.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/speech-input_1_1.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<?php  
include "hcontact.php";

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
<li class="active">Contact us</li>
</ul>
    
    
     <script src="<?php echo base_url();?>assets/js/speech-input.js"></script>
                
                
                <script type="text/javascript">
 $.event.special.inputchange = {
    setup: function() {
        var self = this, val;
        $.data(this, 'timer', window.setInterval(function() {
            val = self.value;
            if ( $.data( self, 'cache') != val ) {
                $.data( self, 'cache', val );
                $( self ).trigger( 'inputchange' );
            }
        }, 20));
    },
    teardown: function() {
        window.clearInterval( $.data(this, 'timer') );
    },
    add: function() {
        $.data(this, 'cache', this.value);
    }
};

$('input').on('inputchange', function() {
    
   var s=$.data(this, 'cache', this.value);
   document.getElementById("sayy").value=s;

 window.location = "voicee/?my=" + s;
});
</script>



    <script>
        
        function voice2()
        {
            var mic=document.getElementById("say").value;
            window.location = "voicee/?my="+mic;
            
            
        }
        </script>

</body>
</html>

        

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
     $you=$admin;
?>
     
    <?php if($status1==1){
        echo " <div id='ad' style='font-size: 20px;color: #1EF36B;'>"."Admin Online"."</div>";
        }
 else {
       echo " <div id='ad' style='font-size: 20px;color: #E2350B;'>"."Admin Offline"."</div>";
}
     ?>
     <br/><br/><br/>
     <a href="javascript:void(0)" onclick="javascript:chatWith('<?php echo $you?>')"><img src="<?php echo base_url(); ?>assets/images/chat.jpg" style="width: 110px;margin-left: 55px;"/></a>
     
    </div>  
    
   
          <div id="refer" style="margin-top: 100%;margin-left: 5%;">
                                    <a href="<?php echo site_url('money_c/referfriend');?>" > <button id="refe" style="width: 47%;height: 30px;background-color: #004e98;color: white;">Refer A Friend</button></a>
                                </div>
         
                          </article>                        
                     </div>
               
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<!--==============================footer=================================-->
  	<script type="text/javascript"> Cufon.now(); </script>
        <style>
body {
	background-color: #eeeeee;
	}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<script src="<?php echo base_url();?>assets3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/speech-input.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

                <script type="text/javascript" src="<?php echo base_url();?>chat/js/chat.js"></script>
                   
               