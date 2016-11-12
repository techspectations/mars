<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylec.css" type="text/css" media="all" />


        <script src="<?php echo base_url(); ?>assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slide.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-func.js" type="text/javascript"></script>
        <style>
            th{
                
               font-size:16px; 
               
            }
            
            
            
            
            
            
            
        </style>
    </head>
    <body>
        
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
//<?php
//print_r($query2);
//?>
        <!-- Main -->
        <div id="main">
            <div class="shell">

                <!-- Search, etc -->
                <div class="options">
                    <div class="search">
                        <form action="" method="post">
                            <span class="field"><input type="text" class="blink" value="SEARCH" title="SEARCH" /></span>
                            <input type="text" class="search-submit" value="GO" />
                        </form>
                    </div>
                    <span class="left"><a href="#">Advanced Search</a></span>

                    <div class="right">
                        <span class="cart">
                            <a href="<?php echo site_url('money_c/index');?>" class="cart-ico">&nbsp;</a>
                            <strong>$0.00</strong>
                        </span>
                        <span class="left more-links">
                            <a href="<?php echo site_url('money_c/logout')?>">logout</a>
                            <a href="#">Details</a>
                        </span>
                    </div>
                </div>
                <!-- End Search, etc -->

                <!-- Content -->
                <div id="content">

                    <!-- Tabs -->
                    <div class="tabs">
                        <ul>
                            <li><a href="<?php echo site_url('money_c/women');?>"><span>ON PRODUCTS</span></a></li>

                            <li><a href="<?php echo site_url('money_c/men');?>"><span>OTHER PRODUCTS</span></a></li>
                            <!--<li><a href="#" class="red"><span>KIDS</span></a></li>-->
                        </ul>
                    </div>
                    <!-- Tabs -->

                    <!-- Container -->
                    <div id="container">

                        <div class="tabbed">

                            <!-- First Tab Content -->
                            <div class="tab-content" style="display:block;">
                                <div class="items">
                                    <div class="cl">&nbsp;</div>
                                    <ul>
                                        <table border="0" style="width:50%">
                                            
                                            <th>Scheme No</th>  
                                            <th>Asset Type</th>     
                                             <th>Category</th>   
                                             <th>NAV</th>
                                                   <th>Action</th>
                                        
                                        
                       
                                             <?php foreach($query1 as $row)
//                     
                                                 {
                                                     $img=$row->image;
                                                     $pr=$row->price;
                                                     $id=$row->id;
                                                     $c=$row->subcategory;
                         ?>
                                         <li>
                                            <div class="image">
                                                
                                                <a href="<?php  echo site_url('money_c/product/'.$row->id);?>"><img src="<?php // echo base_url();?>assets/images/<?php // echo $img;?>"  width="10" height="10"/></a>
                                            </div>
                                            <p>
                                                Price: <span><?php echo @$pr;?></span><br />
                                                category: <span>//<?php  echo $c;?></span><br />
                                                Brand Name: <a href="#">Adidas Shoes</a><!--
-->                                            </p>
                                            <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                                           
                                        </li>
                                     <?php
                                                 }
                                                 ?>
                                    </ul>
                                    
                                    <div class="cl">&nbsp;</div>
                                </div>
                            </div>
<!--                             End First Tab Content -->

                             <!--Second Tab Content--> 
                            <div class="tab-content">
                                <div class="items">
                                    <div class="cl">&nbsp;</div>
                                    <ul>
                    
                                        <?php 
                                        
                                        foreach($query2 as $row1)
//                       
                                                 {
                                                     $img=$row1->image;
//                                                     print_r($img);
                                                     $pr=$row1->price;
                                                     $id=$row1->id;
                                                    
                                                       $c=$row1->subcategory;
//                           ?>
                                        <li>
                                            <div class="image">
                                             <img src="<?php echo base_url();?>assets/images/<?php echo $img;?>" height="80" width="80"/>
                                            </div>
                                            <p>
                                                Price: <span><?php echo @$pr;?></span><br />
                                                category: <span><?php echo $c;?></span><br />
                                                 </p>
                                                <a  style="color:red;"href="<?php echo site_url('money_c/product/'.$row1->id);?>">Buy now</a>
                                           
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
                                    <ul>
                                        <?php foreach($query2 as $row1)
//                       
                                                 {
                                              $d=$row2->subcategory;
                                                     $img=$row2->image;
                                                     $pr=$row2->price;
                                                     $id=$row2->id;
                                        ?>
                                        <li>
                                            <div class="image">
                                                 <a href="#"><img src="<?php echo base_url();?>assets/images/<?php echo $img;?>"  width="167" height="301"/></a>
                                            </div>
                                            <p>
                                                 Price: <span><?php echo @$pr;?></span><br />
                                                 category: <span><?php echo $d;?></span><br />
                                                <!--Brand Name: <a href="#">Adidas Shoes</a>-->
                                            </p>
                                            <!--<p class="price">Wholesale Price: <strong>53 USD</strong></p>-->
                                        </li>
                                        <?php
                                                 }
                                                 ?>
                                        
                                    </ul>
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
<!--
                         Footer 
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
                         End Footer 

                    </div>
                     End Container 

                </div>
                 End Content 

            </div>
        </div>
         End Main 
-->
    </body>
</html>
