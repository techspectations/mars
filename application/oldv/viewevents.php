<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Popup contact form using only CSS - Demo | CodingCrazy</title>
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/styleform.css" rel="stylesheet" type="text/css"/>
<!--<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />-->
</head>
<body>
<div id="table_div">
<table border="1">
    <tr><th>Description</th><th>Repeat</th><th>Remind mode</th><th>Days</th><th>From Date</th><th>To Date</th><th>Time</th><th>Delete</th></tr>
    <tbody>
        <?php foreach($events as $row)
              { 
                $id = $row->eid;
                $des = $row->details;
                $rep = $row->repeat;
                $rmod = $row->rmode;
                $ndys = $row->ndays;
                $fdat = $row->fdate;
                $ndat = $row->ndate;
                $time = $row->time;
        ?>
        
    <tr><td><?php echo $des; ?> </td>
        <td><?php echo $rep; ?> </td>
        <td><?php echo $rmod; ?> </td>
        <td><?php echo $ndys; ?> </td>
        <td><?php echo $fdat; ?> </td>
        <td><?php echo $ndat; ?> </td>
        <td><?php echo $time; ?> </td>
        <td><a href="<?php echo site_url('Money_c/delete_events').'/'.$id; ?>">delete</a></td></tr>     
        <?php } ?>
    </tbody>       
</table>
</div>        
</body>
</html>



