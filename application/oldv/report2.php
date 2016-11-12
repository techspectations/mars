
<style>
    #formid{
        
        margin-top: -50px;
    }
    
    
</style>


<div class="sidebar-collapse" id="sidebar-collapse">
<i class="icon-double-angle-left"></i>
</div>
</div>

<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">

<ul class="breadcrumb">
<li>
<i class="icon-home home-icon"></i>
<a href="<?php echo base_url();?>index.php/dashboard">Home</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>
<li class="active">Graphic Reports</li>
</ul>
        <div class="row-fluid">
<div class="span12">
    <div class="row-fluid" style="background-color: white;">
        



<!--<div class="widget-body">-->
<!--<div class="widget-main">-->
    <?php
    $date1=$this->input->post('mydate1');
    $date3=$this->input->post('mydate2');
      $my=$this->input->get('my');
//      print_r($my);die;
        $mydate1=date('yyyy-mm-dd');
        if($date1=="" && $my=='')
        {
            $date=$mydate1;
        }
        elseif ($date1!="") 
            {
            $date=$date1;
        }
        else
            {
            $date=$my;
            
            }
//        print_r($mydate1);   ?>
                    
                     <head>
                        <script src="<?php echo base_url();?>asset/js/jquery-ui.js"></script>            
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery-ui.css">
        
    </head>
    <br/> 
    <a href="<?php echo site_url('index.php/reports');?>" >
        <div class="infobox infobox-green" style="margin-left: 25px;">
    <img src="<?php echo base_url();?>asset/image/graph.png" style="width: 48px;"/>

<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">Graphical Report</div>
</div>

</div>
    </a>
      <a href="<?php echo site_url('index.php/reports/diagramreporting');?>" >
        <div class="infobox infobox-green">
    <img src="<?php echo base_url();?>asset/image/table.png" style="width: 48px;"/>

<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">Table Report</div>
</div>

</div>
    </a>
    <?php $dat=date('yyyy/mm/dd'); ?>
    <div id="right" align="right" style="margin-top: -100px;width: 721px;margin-left: 224px;" >
        <?php 
        $attributes=array('name'=>'myform','id'=>'formid');
        echo form_open('index.php/reports/getdata',$attributes);?>
        
        <div class="infobox infobox-green" style="" title="change month">
<div class="infobox-data">

    <!--<div style="font-family: 'Open Sans';color:black;">-->
        
        <input type="date" id="mydate1" name="mydate1" value="<?php echo $date;?>"  style="margin-left: -16px;width: 194px;"/>
                
      <!--</div>-->
</div></div>
        <div class="infobox infobox-green" style="width: 256px;" title="change month">
<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">
        <input type="date" id="mydate2" name="mydate2" value="<?php echo $date3;?>" style="margin-left: -16px;width: 194px;" />
        <input type="submit" name="save" class="btn btn-primary" style="margin-left: 196px;margin-top: -72px;height: 34px;" value="OK">
                   
      </div>
</div>
        </div>
   
        
       <?php echo form_close();?>
        </div>
    <div id="exp" style="margin-left: 15%;font-family: monospace;font-size: 15px;"><b>Expense</b></div>
  <script type="text/javascript" src="<?php echo base_url();?>asset/js/canvasjs/canvasjs.js"></script>
</head>
<body>
        
  <!--<script type="text/javascript" src="<?php echo base_url();?>asset/js/canvasjs/canvasjs.js"></script>-->
</head>
<body>
    
        <table id="sample-table-1" class="table table-striped table-bordered table-hover">
            <th>date</th>
            <th>details</th>
            <th>category</th>
            <th>type</th>
            <th>amount</th>
        
            <?php
           foreach($report as $row)
           {
               
               $dt=$row->date;
               $det=$row->details;
               $cat=$row->category;
               $ty=$row->type;
               $amt=$row->amount;
               
               ?>
            
            
            <tr>
                <td><?php echo $dt;?></td>
            <td><?php echo $det;?></td>
            <td><?php echo $cat;?></td>
            <td><?php echo $ty;?></td>
            <td><?php echo $amt;?></td>
<!--            <td><?php echo $dt;?></td>-->
            </tr>
            <?php
           }
            ?>
            
            
            
    </table>
     
   
<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
		
 </body>
       
        </div>
 </div>
     
    	<div class="clear"></div>
    </div>
    <script>  
$(document).ready(function () {
    $(function () {
        $('.monthYearPicker').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy'
        }).focus(function () {
            var thisCalendar = $(this);
            $('.ui-datepicker-calendar').detach();
            $('.ui-datepicker-close').click(function () {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                thisCalendar.datepicker('setDate', new Date(year, month, 1));
                
            });
        });
    });
});
</script>
<style>
    .ui-datepicker-calendar {
   visibility:hidden;
}</style>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

	
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>asset/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

	

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

<!--		page specific plugin scripts-->

		<script src="<?php echo base_url();?>asset/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/jquery.slimscroll.min.js"></script>

<!--		ace scripts-->

		<script src="<?php echo base_url();?>asset/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>asset/js/ace.min.js"></script>

                
                
                
                
                
                
</html>

</body>
</html>

        </html>