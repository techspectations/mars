




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>

        
        
        
    </style>-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Popup contact form using only CSS - Demo | CodingCrazy</title>
<link href="<?php echo base_url();?>assets/css/styleform.css" rel="stylesheet" type="text/css"/>
<!--<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />-->

<!--CC-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.css"/>
</head>




<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!--<link rel="stylesheet" href="<?php // echo base_url();?>assets/css/special.css" type="text/css" />-->
<div class="bal" style="margin-left: 627px;
    padding: 15px;">
    

    Balance Amount:<input type="text" name="bal">
    <?php echo form_open('money_c/addrow')?>
    <input type="submit" style="padding:7px;" name="sub" value="add row">

<?php echo form_close();?></div>

<?php $my = $this->input->get('my');  ?>
<table border="1">

		
    <tr>
                        <th>Date</th>
			   <th>Description</th>
                              <th>Category</th>
                              <th>Debit</th>
                                 <th>Credit</th>
                                    <th>Bal.AMT</th>
                                       <th>Insert</th>
                                       <th> EDit/Delete</th></tr>
                                        
                
           <?php foreach($query2 as $row)
           {
               
               $date=$row->date;
               $desc=$row->description;
               $credit=$row->credit;
               $deb=$row->debit;
               $bal=$row->bal;
               $cat=$row->category;
               $id=$row->id;
           
          ?>
           
                <tr><td><?php echo $date;?></td>
        <td><?php echo $desc;?></td>
        <td><?php echo $credit;?></td>
        <td><?php echo $deb;?></td>
        <td><?php echo $bal;?></td>
        <td><?php echo $cat;?></td>
        
        <td><a href="<?php echo site_url('money_c/updatemanual/'.$id);?>">Insert data</a></td>
  
   
<div id="close">

 
         <td><a href="<?php echo site_url('money_c/manualdelete/'.$id);?>"><img src="<?php echo base_url();?>assets/images/del.jpg" width="60" height="40"></a></td>
			  
           
          
                </tr>
                <?php
           }
           ?></table>
                
	</tbody>
</table>
