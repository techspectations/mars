
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
            
        </style>
    </head>
    <body>

       
           
            
    
<?php
// foreach($query as $row)
// {
//     
//     $item=$row->category;
//     $s=$row->subcategory;
//     $pr=$row->price;
//     $id=$row->id;
//     ?>
<!--        <div class="a">
            <h2>item:</h2><img src="<?php echo base_url();?>assets/images/<?php echo $row->image?>" width="380" height="280" style="margin-left:-258px;"/><br><br>
        </div>
        <div class="b" style="margin-left: 547px;height: 204px;">
             Category:<?php //echo "$item";?><br>
         
            sub category:<?php //echo "$s";?><br>-->
 
            <?php// echo "$pr";?>
        <?php echo form_open('money_c/addcart1/'.$row->id)?>
        <input type="hidden"  name="category" value="$item">
           <input type="hidden" name="subcategory" value="$s">    
            <input type="hidden" name="price" value="$pr">
            Enter the amount:<input type="text" name="qty"><br><br>
            <input type="submit" value="add to cart" name="addcart">
            <?php echo form_close();?>
     <?php
// }
 ?>
   
            </div>
        
    </body>
</html>

