<script type="text/javascript">
    $('#mytable').each(function(i) {
     //select all tds in this column
     var tds = $(this).parents('table')
              .find('tr td:nth-child(' + (i + 1) + ')');
        //check if all the cells in this column are empty
        if(tds.length == tds.filter(':empty').length) { 
            //hide header
            $(this).hide();
            //hide cells
            tds.hide();
        } 
}); 
    
    
    </script>
<div id="body" style="height:900px;">            
		<div id="content">
                   
                  <?php
    
    $attributes=array('id'=>'myform');
    echo form_open('money_c/mfcart',$attributes);?>

    <?php 
//    print_r($query1);die;
    foreach($query1 as $r)
{
    $uid=$r->uid;
//    print_r($uid);die;
}

     $usr=$this->session->userdata('usr');
    
     ?>
<?php foreach($query5 as $row5)
{
    $amc=$row5->amc;
    $ch=$row5->scheme;
    $nav=$row5->nav;
}
    ?>
    
    <input type="hidden" name="sendcode" id="sendcode" >
    
    <input type="hidden" name="sendcode1" id="sd" value="<?php echo $usr.$uid;?>"/>
    
    <br><br>
    <table  border="0" style="width:816px; margin-left: 48px;">
  <tr>
      <td> Amc:</td>
      <td><input  type="text" name="amc"  value="<?php echo$amc ;?>" style="width:324px; margin-left: 89px;"><br><br></td>
  </tr>
  <tr>
    <td>Scheme:</td>
    <td><input type="text" name="sch"  value="<?php echo $ch ;?>" style="width:324px; margin-left: 89px;"><br><br></td>
  </tr>
  <tr>
    <td>Nav:</td>
    <td><input type="text" name="nav" id="nav1" value="<?php echo $nav;?>" style="width:324px; margin-left: 89px;"/><br><br></td>
  </tr>
  <tr>
    <td>Enter The Amount:</td>
    <td><input type="text" name="amt" id="amt" onkeyup="qty()" onclick="combin()" style="width:324px; margin-left: 89px;"><br><br></td>
  </tr>
  <tr>
    <td>Investor ID:</td>
    <td><input  type="text" name="invid" id="invid" style="background-color: bisque;width:324px; margin-left: 89px;"readonly ><br><br></td>
  </tr>
  
  <tr>
    <td>Total Quantity:</td>
    <td><input type="text" name="totq" id="totq"style="background-color: bisque;width:324px; margin-left: 89px;"/></td>
  </tr>
  <tr>
    <td><?php echo form_close();?>
   <?php
        echo form_open('money_c/addmorefunds');?>
    <input type="submit" name="invest" value="Add more funds" style="width:147px;">
    <?php echo form_close();
    ?></td>
    <td><div class="sub"><input type="submit" name="invest" value="Add to cart" style="" /></div></td>
  </tr>
</table>

   
     
  
      
    <div class="tab1" id="tab1">
        
    
        <table border="1" id="mytable" style="margin-left: 65px;width: 764px;"  cellspacing="0">
    
    <th>Investor id</th>
    <th>Date</th>
      <th>Scheme</th>   
        <th>nav</th>
        <th>amount</th>
        <th>Tot.qty</th>
         <th>Delete</th>
               
<?php
             foreach($query as $row)
                 
             {
                 
                 $id=$row->id;
                 ?>
                
                <tr><td><?php echo $row->invid;?></td>
                    <td><?php echo $row->date;?></td>
                    <td><?php echo $row->scheme;?></td>
                    <td><?php echo $row->nav;?></td>
                    <td><?php echo $row->amount;?></td>
                    <td><?php echo round($row->totqty,2);?></td>
                   
                    <td><a href="<?php echo site_url('money_c/mfdelete/'.$id);?>">delete</a></td></tr>
               
                    
                    
                <?php 
             }
        ?>
                </table>

                <?php 
                
                
             foreach($query3 as $row3)
                 
             {
                
                ?>
    <div style="margin-top:77px;
    margin-left: 450px;    font-size: 19px;
    color: #2D47CE;">
              TOTAL:<?php echo $row3->amt;?>
                <?php
             }
             ?>
              <input type="submit"name="proc" value="Proceed to Payment" style="width:150px;">
    <!--</div>-->   
                    
                    
    </div>  
        </div>
        
       
    </div>

<style>


input {
	border-radius: 5px;
  height: 15px;
  padding: 0;
}

input[type="submit"] {
  background: linear-gradient(#58a9e2, #346cce);
  border: 1px solid rgba(0,0,0,0.48);
  box-shadow: inset 0 1px 3px rgba(255,255,255,0.4),
    								0 1px 2px rgba(0,0,0,0.45);
  color: #fff;
  display: inline-block;
  font-weight: bold;
	height: 35px;
  margin-left: 5px;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
  width: 76px;
  
  
  
  &:active {
  	box-shadow: inset 0 1px 2px rgba(0,0,0,0.45),
      								0 1px 3px rgba(255,255,255,0.4);
  }
}




input{
    
    margin-left:438px;
}
.demo{
    color:black;
    font-size:15px;
}
#myform{
    margin-top: -1px;
}
.sub{
    margin-left:500px;
    margin-top:5px;
}

</style>
<script type="text/javascript">
    
  window.onload=function SendCode()
    {
        var a = Math.ceil(Math.random() * 5)+ '';
        var b = Math.ceil(Math.random() * 5)+ '';       
        var c = Math.ceil(Math.random() * 5)+ '';  
	var d = Math.ceil(Math.random() * 10)+ ''; 
         
         var code = a +''+ b +''+''+ c +''+ d;
        document.getElementById("sendcode").value = code
    }
    function combin()
    {
        var a=document.getElementById('sendcode').value;
        var b=document.getElementById('sd').value;
        var c=b+a;
        document.getElementById('invid').value=c
        
    }
    function qty()
    {
     var n=document.getElementById('nav1').value;   
     var m=document.getElementById('amt').value;
     var numb=m/n;
     numb = numb.toFixed(2);
      document.getElementById('totq').value=numb;
    }
    </script>
   