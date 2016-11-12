
<html lang="en-US">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/monthstyle.css">

</head>  
<body>
    <?php
    
    $m = $this->input->get('month');
    $y = $this->input->get('year');
    $id = $this->input->get('id');
      $dat = $m." ".$y;
      //print_r($manual);      die();
  foreach($ecredit as $row)
  { 
      $bank = $row->instname;
      $cre = $row->credit;
      $deb = $row->debit;
      $bal = $row->ccbalance;
      $rem = $row->remarks;
  }

  ?>
<div id="contact" style="margin-left:0px;margin-top:0px; background-color:#00BFFF;">
 
<?php
              
        echo form_open('money_c/updatecreditdata/'.$id.'/'.$m.'/'.$y);?>

        <fieldset class="contact-inner" style="margin-left: 274px;    margin-right: 384px;">
      
            <input type="hidden" name="month" value="<?php echo $m;?>">
             <input type="hidden" name="year"  value="<?php echo $y;?>">
            
 <p class="contact-input">
     Bank name:<input type="text" name="des" value="<?php echo $bank;?>" readonly/>
      </p>
      Category:
      <p class="contact-input"> 
        <label for="select" class="select">
            <select name="cat" id="cat" required>
            <option value="" selected>Choose category</option>  
            <?php foreach($category as $row) 
            {  ?>
                <option value="<?php echo $row->catid;?>"><?php echo $row->catname;?></option>
     <?php  }
            ?>
          </select>
        </label>
      </p>
Debit:
      <p class="contact-input">
          <input type="text" name="deb" value="<?php if(isset($deb)){ echo $deb;}else{echo "0";}?>" required />
      </p>
      Credit:
    <p class="contact-input">
        <input type="text" name="cre" value="<?php if(isset($cre)){ echo $cre;}else{echo "0";}?>" required/>
            </p>
      Current Balance:
        <p class="contact-input">
            <input type="text" name="bal" value="<?php if(isset($deb)){ echo $bal;}else{echo "0";}?>" readonly/>
        </p>
      <p class="contact-submit">
     
			<input type="submit" value="Insert" />
      </p>
    </fieldset>
   
</div>
</body>
</html>