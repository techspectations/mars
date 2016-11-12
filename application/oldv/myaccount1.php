
<div id="body" style="width: 284px;margin-left: 339px;">            
<div id="content">
<div class="box" style="color: black;width: 950px;margin-left: -349px;">


<style type="text/css">
.styled-button-11 {
background: #FEDA71;
background: -moz-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#FEDA71),color-stop(100%,#FEBB49));
background: -webkit-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
background: -o-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
background: -ms-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
background: linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
filter: progid DXImageTransform.Microsoft.gradient( startColorstr='#FEDA71',endColorstr='#FEBB49',GradientType=0);
padding:8px 18px;
color:#623F1D;
font-family:'Helvetica Neue',sans-serif;
font-size:16px;
border-radius:48px;
-moz-border-radius:48px;
-webkit-border-radius:48px;
border:1px solid #623F1D
}         
</style>

<div id="main">   
<div id="su" style="margin-left: 202px;">  
    <br/>
<?php
echo form_open('money_c/addaccount')?>

<input type="submit" class="styled-button-11"   name="sub" value="+ Add new account" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>

<?php echo form_close();?>
</div>
<div id="su1" style=" margin-left: 513px;margin-top: -50px;">
<?php
echo form_open('money_c/storedocument')?>

<input type="submit" class="styled-button-11"   name="sub" value="store/view documents" /><br><br>

<?php echo form_close();?>
</div>
</div>
<br/>
<h3 style="color:black;color: #004e98;margin-left: 317px;font-size: 31px;">Existing Accounts:</h3>
<br/>
<a href="<?php echo site_url('money_c/manualview');?>" style="color: black;"><div id="ban" style="margin-left: 58px;width: 346px;height: 94px;font-size: 24px;background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #004e98), color-stop(1, #56aaff) );border-radius: 18px;"> <div id="ban1" style="width: 83px;margin-left: 17px;"><img src="<?php echo base_url();?>assets/images/bank.jpg" style="width: 61px;margin-top: 18px;margin-left: 13px;"></div><div id="ban2" style="width: 213px;margin-top: -54px;margin-left: 114px;height: 70px;">Bank Accounts</a></div> </div>

<br><br><br><a href="<?php echo site_url('money_c/ecredit');?>" style="color: black;"><div id="ban" style="margin-left: 58px;width: 346px;height: 94px;font-size: 24px;background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #004e98), color-stop(1, #56aaff) );border-radius: 18px;"> <div id="ban1" style="width: 83px;margin-left: 17px;"> <img src="<?php echo base_url();?>assets/images/credit.jpg" style="width: 61px;margin-top: 18px;margin-left: 13px;"></div><div id="ban2" style="width: 213px;margin-top: -54px;margin-left: 114px;height: 70px;" >Credit Card</a></div></div>


<br><br><br><a href="<?php echo site_url('money_c/insaccount');?>" style="color: black;"><div id="ban" style="margin-left: 58px;width: 346px;height: 94px;font-size: 24px;background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #004e98), color-stop(1, #56aaff) );border-radius: 18px;"> <div id="ban1" style="width: 83px;margin-left: 17px;"> <img src="<?php echo base_url();?>assets/images/ins1.jpg" style="width: 61px;margin-top: 18px;margin-left: 13px;"></div><div id="ban2" style="width: 213px;margin-top: -54px;margin-left: 114px;height: 70px;" >Insurance</a></div></div>



<br><br><br><a href="<?php echo site_url('money_c/mfund');?>" style="color: black;"><div id="ban" style="margin-left: 519px;margin-top: -417px;width: 346px;height: 94px;font-size: 24px;background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #004e98), color-stop(1, #56aaff) );border-radius: 18px;"> <div id="ban1" style="width: 83px;margin-left: 17px;"> <img src="<?php echo base_url();?>assets/images/mf.jpg" style="width: 61px;margin-top: 18px;margin-left: 13px;"></div><div id="ban2" style="width: 213px;margin-top: -54px;margin-left: 114px;height: 70px;" >Mutual fund</a></div></div>



<br><br><br><a href="<?php echo site_url('money_c/fdeposit');?>" style="color: black;"><div id="ban" style="margin-left:519px;width: 346px;height: 94px;font-size: 24px;background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #004e98), color-stop(1, #56aaff) );border-radius: 18px;"> <div id="ban1" style="width: 83px;margin-left: 17px;"> <img src="<?php echo base_url();?>assets/images/save.jpg" style="width: 61px;margin-top: 18px;margin-left: 13px;"></div><div id="ban2" style="width: 213px;margin-top: -54px;margin-left: 114px;height: 70px;" >Fd bond</a></div></div>

<br><br><br><a href="<?php echo site_url('money_c/eloans');?>" style="color: black;"><div id="ban" style="margin-left: 519px;width: 346px;height: 94px;font-size: 24px;background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #004e98), color-stop(1, #56aaff) );border-radius: 18px;"> <div id="ban1" style="width: 83px;margin-left: 17px;"><img src="<?php echo base_url();?>assets/images/loan.jpg" style="width: 61px;margin-top: 18px;margin-left: 13px;"></div><div id="ban2" style="width: 213px;margin-top: -54px;margin-left: 114px;height: 70px;" >loan:</a></div></div>
<br>
<br>
<br>

</div>



<!--<h2>Existing accounts</h2>-->




</div>


</div>