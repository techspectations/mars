<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>personal finance manager</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2036 Blue Office
http://www.tooplate.com/view/2036-blue-office
-->
<!--<link href="<?php echo base_url(); ?>styles/tooplate_style.css" rel="stylesheet" type="text/css" />-->

<script type="text/javascript">

   //Created / Generates the captcha function    
    function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
	    var d = Math.ceil(Math.random() * 10)+ ''; 
         
        var code = a +''+ b +''+''+ c +''+ d;
        document.getElementById("txtCaptcha").value = code
    }

    // Validate the Entered input aganist the generated security code function   
    
    // Remove the spaces from the entered and generated code
    function removeSpaces(string)
    {
        return string.split(' ').join('');
    }
    
    window.onload=function SendCode()
    {
        var a = Math.ceil(Math.random() * 5)+ '';
        var b = Math.ceil(Math.random() * 5)+ '';       
        var c = Math.ceil(Math.random() * 5)+ '';  
	var d = Math.ceil(Math.random() * 10)+ ''; 
         
         var code = a +''+ b +''+''+ c +''+ d;
        document.getElementById("sendcode").value = code
    }
    
    function check()
    {
        var captcha = document.getElementById('txtCaptcha').value;
        var input = document.getElementById('txtInput').value;
        if(captcha === input)
        {
            document.form.submit('Money_c/signup_action');
        }
        else
        {
            
            alert('Captcha Miss match.. Please Re enter.. ');
//            window.location.href = 'Money_c/signup'; 
//             window.location.href = "";
        }
    }
</script>     



<style type="text/css">
#apDiv1 {
	position:absolute;
	width:408px;
	height:423px;
	z-index:1;
	left: 605px;
	top: 131px;
}
#apDiv2 {
	position:absolute;
	width:372px;
	height:418px;
	z-index:1;
	left: 579px;
	top: 156px;
}
</style>
</head>
    <body class="home" onload="DrawCaptcha()"><!-- end of content --><!-- end of wrapper -->
 <script>
     function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('txt_pass');
    var pass2 = document.getElementById('txt_pass1');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords No Match!"
    }
}  
     </script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script>
                  
                         function usercheck(){
                    var name = $('#txtuser').val();
                    $.post('<?php echo base_url(); ?>index.php/money_c/chk_usr', {txt_uname: name}, function(d) {
                        if (d == 1)
                        {
                            $('#msgbx_success').css('display', 'none');
                            $('#msgbx_err').css('display', 'block');
                        }
                        else
                        {
                            $('#msgbx_err').css('display', 'none');
                            $('#msgbx_success').css('display', 'block');
                        }
                    });
                }
        </script>   
 <div id="body1" style=" margin-left: -7px;margin-top: -13px;">
<!--<div style="background-image:url(<?php // echo base_url(); ?>assets/images/head_bg.png);">-->
  <!--<img src="<?php // echo base_url(); ?>assets/images/header-pam_750x85.png" width="1349" height="87" /></div>-->
<div>
    <p><?php echo form_open('money_c/signup_action');?></p>
  <div id="apDiv2"><table width="297" border="0">
  <tr>
    <td width="127">username</td>
    <td width="154"><label for="textfield4"></label>
      <input type="text" name="txt_uname" id="txtuser" required="required" onkeyup="usercheck()"/></td>
    <td><div id="msgbx_err" class="alert-box error"><span style="margin:0 0 0 -33px;">Name exist.</span></div>
      <div id="msgbx_success" class="alert-box success"><span style="margin:0 0 0 -33px;">Name available.</span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>password</td>
    <td><label for="textfield5"></label>
      <input type="password" name="txt_pass" id="txt_pass" required="required"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Confirm password</td>
    <td><label for="textfield5"></label>
      <input type="password" name="txt_pass" id="txt_pass1" required="required" onkeyup="checkPass()"/>
      <span id="confirmMessage" class="confirmMessage"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Email Id</td>
    <td><label for="textfield5"></label>
      <input type="text" name="txt_email" id="txt_email" required="required"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Captcha</td>
    <td><input type="text"  id="txtCaptcha" readonly="readonly"/></td>
    <td><input type="button" name="btn-refresh" id="btn-refresh" value="Refresh" onclick="DrawCaptcha()" width="30px"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="text" name="txtInput" id="txtInput" required="required"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="hidden" name="code" id="sendcode" /></td>
    <td colspan="2"><div align="center">
      <input type="submit" name="signup" id="signup" value="Sign up" onclick="check()"/>
      <?php  echo form_close(); ?></td>
  </tr>
</table>

<p><style type="text/css">
            ::selection{ background-color: #E13300; color: white; } ::moz-selection{ background-color: #E13300; color: white; } ::webkit-selection{ background-color: #E13300; color: white; } 
            body { background-color: #fff; font: 13px/20px normal Helvetica, Arial, sans-serif; color: #4F5155; } 
            a { color: #003399; background-color: transparent; font-weight: normal; } 
            h1 { color: #444; background-color: transparent; border-bottom: 1px solid #D0D0D0; font-size: 19px; font-weight: normal; margin: 0 0 14px 0; padding: 14px 15px 10px 15px; } 
            #body{ margin: 0 15px 15px 15px; } 
            #container{ margin: 10px; border: 1px solid #D0D0D0; -webkit-box-shadow: 0 0 8px #D0D0D0; } 
            .alert-box { color:#555; border-radius:10px; font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; padding:10px 10px 10px 36px; margin:10px; height:  12px;width: 69px;} 
            .alert-box span { font-weight:bold; text-transform:uppercase; } 
            .error { background:#ffecec; border:1px solid #f5aca6; } 
            .success { background:#e9ffd9; border:1px solid #a6ca8a; } 
            #msgbx_err{ display: none; } 
            #msgbx_success{ display: none; } 
 
        </style>&nbsp;</p>
  </div>
        <img src="<?php echo base_url(); ?>assets/images/signup.jpg" width="1370" height="667" style="margin-left: -21px;"/></div>
<!--<div id="tooplate_wrapper" style="background-color:#CCC;">

    <div id="tooplate_main">
    
        <div id="tooplate_content">
    
          <div class="col_w300 float_r">
            
       	    <div id="apDiv1" ></div>
           
          </div>
        </div> 
      
    
    </div>
</div> 
-->
<!--<div id="tooplate_footer_wrapper">
  <div id="tooplate_footer">

        <a href="">Home</a> | <a href="">About Us</a> | <a href="">Services</a> | <a href="">Gallery</a> | <a href="">Contact</a> <?php echo form_open('Money_c/login');?><br />
        
        Copyright Â© 2048 <a href="#">Company Name</a> - Design: <a href="">Irins Technologies</a>
		
    </div>
</div>-->
</div>
</body>
</html>

