
<div id="body" style="height:550px;">            
		<div id="content">
                   
                    
                    
                    
                    
        </div>
        
        <div class="sidebar">
            <ul>	
                <li>
                     <a href="//<?php // echo site_url('money_c/changepassword');?>"><img src="<?php echo base_url();?>assets/images/cart.jpg" style="height: 82px;width: 82px;"/></a>
                    
                </li>
                
               
                <li>
                    <h2><font color="blue"><?php echo $title ?></h2></font>
<font color="blue"><marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" height="200" scrollamount="2" bgcolor="pink"/>
<?php foreach ($news as $news_item){ ?>

        <h3><?php echo $news_item->title; ?></h3>
        <div class="main">
                <?php echo $news_item->text; ?>
        </div>
        <p><a href="<?php echo base_url();?>/https://www.google.com">View article</a></p>

<?php }?>
            </marquee></font>   </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>