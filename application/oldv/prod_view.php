
<html>
    <head>
        <style>

          .a{
              /*font-family: georgia, serif;*/
font-size: 15px;
letter-spacing: 1.4pt;
text-align: center;
font-weight: bold;
color: black;
background-color:white; 
            }
           .b{
            background-color:white;
            color: black;
            }
            input{
      
                  width: 113px; 
            }
             .add{
                  width: 119px;
    border-radius: 9px;
    margin-left: 60px;
    background-color: orange;
           }
           
           
           
        </style>
    </head>
    <body>

       
           
            
    
<?php
 foreach($query as $row)
 {
     
     $item=$row->category;
     $s=$row->product;
     $pr=$row->price;
     $id=$row->id;
     ?>
        <div class="a">
            <h2></h2><img src="<?php echo base_url();?>userprodimages/<?php echo $row->image?>" width="380" height="280" style="margin-left:-258px;"/><br><br>
        </div>
        <div class="b" style="margin-left: 547px;height: 204px;">
             <b>Productname:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s";?><br><br>
            <b>Category:</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$item";?><br><br>
         
<!--            sub category:<?php // echo "$s";?><br>-->
            <b> price:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url();?>assets/images/inr.jpg" width="18" height="20"><?php echo "$pr";?><br><br>
        <?php echo form_open('money_c/addcart/'.$row->id)?>
        <input type="hidden"  name="category" value="$item">
           <input type="hidden" name="subcategory" value="$s">    
            <input type="hidden" name="price" value="$pr">
            <b>Quantity:</b><input type="text" name="qty" style="background-color:rgba(255, 165, 0, 0.52);border-radius:9px;"><br><br>
            <input type="submit" value="add to cart" class="add" name="addcart">
            <?php echo form_close();?>
     <?php
 }
 ?>
   
            </div>
        
    </body>
</html>

