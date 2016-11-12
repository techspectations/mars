<link rel="stylesheet" href="<?php echo base_url();?>assets/css/special.css" type="text/css" />  
<div id="body" style="height: 550px;">            
    
    <div id="content">
            <div class="box">
                
                <!--<input type="submit" name="sub" value="add account"><br><br><br>-->
            		<br/><br/><br/><br/>
                       Add Bank Account: <br/><br/><br/><br/>
                       <?php echo form_open('Money_c/addbank'); ?>
                       <table border="1" class="demo">
                            <tr><td width="200">Bank name:</td><td>
                                    <select name="bname">
                                       <option>Please Select</option>
                                       <?php   foreach($other as $oth) 
                                       {   ?>
                                           <option value="<?php echo $oth->instid; ?>"><?php echo $oth->instname; ?></option>
                                <?php   } ?>
                                   </select></td></tr><br><br>
                            <tr><td>Month/Year:</td><td><select name="month"><option>Select</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="Septembar">Septembar</option>
                                        <option value="Octobar">Octobar</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                    <select name="year"><option>Select</option>
                                            <?php for($i=1930;$i <= 2999;$i++){ ?>
                                                    <option><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select></td>
                            <tr><td>Add Balance:</td><td><input type="text" name="balance" style="height: 26px;" value="<?php echo $cbal; ?>"/></td></tr>
                            <tr><td width="200" colspan="2"><input type="submit" name="next" class="styled-button-11" style="height: 32px;width: 91px;margin-left: 38px;" value="Save"></td></tr>
                        </table><br><br>

            </div>
                  
                    
                    
                    <!--<h2>Existing accounts</h2>-->
                    
                    
                    
                    
        </div>
        
        <div class="sidebar">
            <ul>	
               <li>
                    
                </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>

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




