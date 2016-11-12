<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Popup contact form using only CSS - Demo | CodingCrazy</title>
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/styleform.css" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />
</head>
<body>
            
    <?php 
   
    $month = $this->input->get('month');
    $year = $this->input->get('year');
    $my=$month.$year;
    
       echo form_open('money_c/add_row/'.$month.'/'.$year);   ?>
    <input type="submit" name="add" value="add new row">
     
           <table  border="0" style="width:10%; margin-left:690px;">
               <tr><td>
        
                            <select name="month">
                                <option value="<?php echo $month;?>"><?php echo $month; ?></option>
                            </select>
                        </td><td>
                            <select name="year">
                                <option value="<?php echo $year;?>"><?php echo $year; ?></option>       
                            </select>        
                </td></tr>
           </table>
 
    <?php echo form_close();                
    ?>
<div id="table_div">
<table border="1">
    <tr><th>Account Name</th><th>Description</th><th>Category</th><th>Debit</th><th>Credit</th><th>Bal.Amount</th><th>Insert</th><th>Delete</th></tr>
    <tbody>
        <?php foreach($balance as $row)
              { 
                $id = $row->id;
                $accn = $row->accname;
                $dels = $row->details;
                $catn = $row->catname;
                $pbal = $row->balance;
                $credit = $row->credit;
                $debit = $row->debit;
                $total = ($pbal + $credit) - ($debit); ?>
        
    <tr><td><?php echo $accn; ?> </td>
        <td><?php echo $dels; ?> </td>
        <td><?php echo $catn; ?> </td>
        <td><?php echo $debit; ?> </td>
        <td><?php echo $credit; ?> </td>
        <td><?php echo $total; ?> </td>
        <td><a href="<?php echo site_url('Money_c/updatemanual').'/'.$id.'/'.$month.'/'.$year; ?>">insert</a></td>
        <td><a href="<?php echo site_url('Money_c/manualdelete').'/'.$id.'/'.$month.'/'.$year; ?>">delete</a></td></tr>     
        <?php } ?>
    </tbody>       
</table>
</div>        
</body>
</html>
