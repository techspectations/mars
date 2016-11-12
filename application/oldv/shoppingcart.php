<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylec.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css" type="text/css" media="all" />

        <script src="<?php echo base_url(); ?>assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slide.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-func.js" type="text/javascript"></script>
        <style>
            
            td{
                width:100px;
                height:80px;
                font-size:15px;
            }
            
           
.styled-button-11,button {
	background: #FEDA71;
	background: -moz-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
	background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#FEDA71),color-stop(100%,#FEBB49));
	background: -webkit-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
	background: -o-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
	background: -ms-linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
	background: linear-gradient(top,#FEDA71 0%,#FEBB49 100%);
	filter: progid DXImageTransform.Microsoft.gradient( startColorstr='#FEDA71',endColorstr='#FEBB49',GradientType=0);
	padding:8px 13px;
	color:#623F1D;
	font-family:'Helvetica Neue',sans-serif;
	font-size:12px;
	border-radius:48px;
	-moz-border-radius:48px;
	-webkit-border-radius:48px;
	border:1px solid #623F1D
}   
////////////////

		

        </style>
        <script type="text/javascript">
            $(document).ready(function(){
  var placeholder = null;
  $('input[type=text]').focus(function(){
    placeholder = $(this).attr("placeholder");
    $(this).attr("placeholder","");
  });
  $('input[type=text]').blur(function(){
    $(this).attr("placeholder", placeholder);
  });
});
            </script>
    </head>
    
<!--         Top 
        <div id="top">

            <div class="shell">

                 Header 
                <div id="header">
                    <h1 id="logo"><a href="#">Fashion starts here</a></h1>
                    <div id="navigation">
                        <ul>
                            <li><a href="<?php echo site_url('money_c/index');?>">Home</a></li>
                            <li><a href="#">brands</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">The Store</a></li>
                            <li class="last"><a href="<?php echo site_url('money_c/contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                 End Header 

        

            </div>
        </div>-->
        <!-- Top -->

        <!-- Main -->
        <div id="main">
            <div class="shell">

                <!-- Search, etc -->
<!--                <div class="options" style="background-color: #004e98;">
                    <div class="search">
                        <form action="" method="post">
                            <span class="field"><input type="text" class="blink" value="SEARCH" title="SEARCH" /></span>
                            <input type="text" class="search-submit" value="GO" />
                        </form>
                    </div>
                    <span class="left"><a href="#">Advanced Search</a></span>

                    <div class="right">
                        <span class="cart">
                            <a href="<?php //echo site_url('money_c/index');?>" class="cart-ico">&nbsp;</a>
                            <strong>$0.00</strong>
                        </span>
                        <span class="left more-links">
                            <a style="color:white;" href="<?php //echo site_url('money_c/logout')?>">logout</a>
                            <a href="#">Details</a>
                        </span>
                    </div>
                </div>-->
                <!-- End Search, etc -->

                <!-- Content -->
                <div id="content">
  
                    <!-- Tabs -->
                    
                    <!-- Tabs -->

                    <!-- Container -->
                    <div id="container">

                        <div class="tabbed" style="    min-height: 619px;">
 <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><a href="<?php echo site_url('money_c/home');?>">HOME</a></li>
            <li><a class="has_submenu" href="<?php echo site_url('money_c/myaccount');?>">MY ACCOUNT</a></li>
            <li><a class="has_submenu" href="<?php echo site_url('money_c/budget');?>">BUDGET</a></li>
                    <li><a href="#">MESSAGE</a>
                    <ul>
                    <li><a href="<?php echo site_url('Money_c/add_tasks');?>">EVENT CALENDAR</a></li>
                    <li><a href="<?php echo site_url('Money_c/view_events')?>">NOTIFICATION INBOX</a></li>
                     <li><a href="<?php echo site_url('Money_c/inbox')?>">INBOX</a></li>
                </ul></li> 
            <li><a href="<?php echo site_url('money_c/taxcalculator');?>">INCOME TAX</a></li>
            <li><a href="<?php echo site_url('money_c/tablereporting');?>">REPORTING</a></li>
            <li><a href="<?php echo site_url('money_c/contact');?>">CONTACT US</a></li>
             <li><a class="has_submenu" href="#">SETTINGS</a>
             <ul>
                	<li><a href="<?php echo site_url('money_c/changepassword');?>">CHANGE PASSWORD</a></li>
<!--                        <li><a href="<?php // echo site_url('money_c/newssettings');?>">News Settings</a></li>
                        <li><a href="<?php // echo site_url('money_c/taxsettings');?>">Tax settings</a></li>-->
             </ul>
             </li>
        </ul>
    </div>
                            <div class="tabs" style="background-color: #ABA;height: 37px;margin-top: -36px;">
                        <ul>
                            <li><a href="<?php echo site_url('money_c/women');?>"><span>OWN PRODUCTS</span></a></li>

                            <li><a href="#"><span>OTHER PRODUCTS</span></a></li>
                            
                            <li><a href="#" class="red"><span>ADD PRODUCTS</span></a></li>
                        </ul>
                    </div>
                            <!-- First Tab Content -->
                            <div class="tab-content" style="display:block;">
                                <div class="items">
                                    <div class="cl">&nbsp;</div>
                                    
                                        <table border="1">
                                            <th>Amc</th>
                                            <th>Scheme</th>
                                             <th>Category</th>
                                                 <!--<th>Returns</th>-->
                                                 <th>nav</th>
                                                 <th>Action</th>
                                               
                                             <?php foreach($query4 as $row4)
//                       
                                                 {
                                                     $a1=$row4->amc;
//                                                     print_r($a1);
                                                     $a2=$row4->scheme;
                                                     $a3=$row4->cat;
                                                     $a4=$row4->nav;
//                                                     $r=$row4->returns;
                                                     $id4=$row4->id;
//                           ?>
                                                 <tr><td><?php echo $a1;?></td>
                                                     <td><?php echo $a2;?></td>
                                                         <td><?php echo $a3;?></td>
                                                            <td><?php echo $a4;?></td>
                                                 <!--<td><?php // echo $a4;?></td>-->
                                                 <td><button><a href="<?php echo site_url('money_c/invest/'.$row4->id);?>">Invest now</a></button>
                                                 <!--<td><a  style="font-size:11px; color:red "href="<?php echo site_url('money_c/invest');?>">INVEST NOW</a></td>-->
                                     <?php
                                                 }
                                                 ?>
                                        </table>
                                    
                                    <div class="cl">&nbsp;</div>
                                </div>
                            </div>
<!--                             End First Tab Content -->

                             <!--Second Tab Content--> 
                            <div class="tab-content">
                                <div class="items">
                                    <div class="cl">&nbsp;</div>
                                    <ul>
                                        <?php foreach($query2 as $row1)
//                       
                                                 {
                                                     $img=$row1->image;
                                                     $pr=$row1->price;
                                                     $id=$row1->id;
                                                       $c=$row1->subcategory;
                          ?>
                                        <li>
                                            <div class="image">
                                             <img src="<?php echo base_url();?>userprodimages/<?php echo $img;?>" height="80" width="80"/>
                                            </div>
                                            <p>
                                                Price: <span><?php echo @$pr;?></span><br />
                                                category: <span><?php echo $c;?></span><br />
                                                 </p>
                                           
                                           <button><a href="<?php echo site_url('money_c/product/'.$row1->id);?>">Buy now</a></button>
<!--                                            <p class="price">Wholesale Price: <strong>53 USD</strong></p>-->
                                        </li>
                                        <?php
                                                 }
                                                 ?>
                                      
                                    </ul>
                                    <div class="cl">&nbsp;</div>
                                </div>
                            </div>
                            <!-- End Second Tab Content -->

                            <!-- Third Tab Content -->
                            <div class="tab-content">
                                <div class="items">
                                    <div class="cl">&nbsp;</div>
                                    <div class="register">
                                      
                                    <ul>
                                        <?php echo $error;?>
                                      <?php echo form_open_multipart('money_c/addyourprod')?>

<b>Product Name:</b><input type="text" name="pname"id="name1" style="margin-left: 40px;
    width: 250px;
    margin-top: 14px;    border-radius: 17px"><br><br>
            <b>Category:</b><select type="cat" name="cat" style="margin-left: 70px;
    width: 259px;
    margin-top: 14px;    border-radius: 17px">
                
                <?php 
                foreach($query5 as $row5)
                {
                ?>
                <option value="<?php echo $row5->cat;?>"><?php echo $row5->cat;?></option>
                 <?php
            }
            ?>   
            </select><br><br>
           
           
    <b>Image:</b><input type="file" name="userfile" style="margin-left: 86px;
    width: 251px;
    margin-top: 14px;    border-radius: 26px"><br><br>
                <b> price:</b><input type="text" name="price" style="margin-left: 95px;
    width: 251px;
    margin-top: 14px;    border-radius: 17px"><br><br>
                    <input type="submit" name="addp"  value="add products" style=" width: 129px;margin-left: 129px;border-radius: 17px;background-color: orange;
    font-size: 13px;"></input>
                                        
                                        
                                        
                                    </ul>
                                    <?php echo form_close();?>
                                    <div class="cl">&nbsp;</div>
                                </div>
                            </div>
                            <!-- End Third Tab Content -->

                        </div>

                        <!-- Brands -->
                        <div class="brands">
<!--                            <h3>Brands</h3>
                            <div class="logos">
                                <a href="#"><img src="<?php echo base_url(); ?>asset/css/images/logo1.gif" alt="" /></a>
                                <a href="#"><img src="<?php echo base_url(); ?>asset/css/images/logo2.gif" alt="" /></a>
                                <a href="#"><img src="<?php echo base_url(); ?>asset/css/images/logo3.gif" alt="" /></a>
                                <a href="#"><img src="<?php echo base_url(); ?>asset/css/images/logo4.gif" alt="" /></a>
                                <a href="#"><img src="<?php echo base_url(); ?>asset/css/images/logo5.gif" alt="" /></a>
                            </div>-->
                        </div>
                        <!-- End Brands -->

<!--                         Footer 
                        <div id="footer">
                            <div class="left">
                                <a href="#">Home</a>
                                <span>|</span>
                                <a href="#">Support</a>
                                <span>|</span>
                                <a href="#">My Account</a>
                                <span>|</span>
                                <a href="#">The Store</a>
                                <span>|</span>
                                <a href="#">Contact</a>
                            </div>
                            <div class="right">
                                &copy; Sitename.com. Design by <a href="http://chocotemplates.com" target="_blank" title="CSS Templates">ChocoTemplates.com</a>
                            </div>
                        </div>
                         End Footer -->

                    </div>
                     <!--End Container--> 

                </div>
                 <!--End Content--> 

            </div>
        </div>
         <!--End Main--> 

    </body>
</html>