<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="Static &amp; Dynamic Tables" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<style>
    #formid{
        
        margin-top: -50px;
    }
    
    
</style>

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-skins.min.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<?php  
include "h.php";

?>
<div class="sidebar-collapse" id="sidebar-collapse">
<i class="icon-double-angle-left"></i>
</div>
</div>

<div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">

<ul class="breadcrumb">
<li>
<i class="icon-home home-icon"></i>
<a href="#">Reports</a>

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
      $my=$this->input->get('my');
//      print_r($my);die;
        $mydate1=date('F Y');
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
                         <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>            
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
        
    </head>
    <br/> 
    <a href="<?php echo site_url('money_c/tablereporting');?>" >
        <div class="infobox infobox-green" style="margin-left: 25px;">
    <img src="<?php echo base_url();?>assets3/images/graph.png" style="width: 48px;"/>

<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">Graphical Report</div>
</div>

</div>
    </a>
      <a href="<?php echo site_url('money_c/diagramreporting');?>" >
        <div class="infobox infobox-green">
    <img src="<?php echo base_url();?>assets3/images/table.png" style="width: 48px;"/>

<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">Table Report</div>
</div>

</div>
    </a>
    <?php $dat=date('M-Y'); ?>
    <div id="right" align="right" style=" margin-top: -91px;width:721px;" >
        <?php 
        $attributes=array('name'=>'myform','id'=>'formid');
        echo form_open('money_c/getdata2',$attributes);?>
        
        <div class="infobox infobox-green" style="width:249px;margin-top: 23px;" title="change month">
<!--    <img src="<?php // echo base_url();?>assets3/images/table.png" style="width: 48px;"/>-->

<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">
        <input type="text" id="mydate1" name="mydate1" value="<?php echo $date;?>" class="monthYearPicker" style="width:108px;border-color:white;background: url(<?php echo base_url();?>assets3/images/calendar1.png) no-repeat scroll 3px -6px;padding-left:73px;height:77px;"/>
    <input type="submit" name="save" style="margin-left: 201px;margin-top: -134px;" value="OK">
                    <?php echo form_close();?>
    </div>
</div>

 
   
        </div>
       
        </div>
   
                
                
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/canvasjs/canvasjs.js"></script>
<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.1.min.css">  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>  
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>  
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>  

</head>
<body>
    <?php
	include "libchartnew/libchart/classes/libchart.php";
//	$chart = new PieChart(700,300);
//	$dataSet = new XYDataSet();
////		$result =$this->money_m->select2();
//
////	$num_results = $result->num_rows;
//    print_r($some_data_browser);
           $json_data=array();    
	foreach($report as $row)
        {
            
            
            $name=$row->catname;
//            print_r($name);
            $ratings=$row->actamount;

$json_array['label']=$row->catname;
print_r($json_array['label']);
    $json_array['value']=$row->actamount;
//    array_push($json_data,$json_array);  

	
      
      
     
    ?>
<div id="donut-example" style="height: 250px;"></div>

<script type="text/javascript">

Morris.Donut({
  element: 'donut-example',
 data: [
    {label: "<?php echo $row->catname; ?>", value: <?php echo $row->actamount; ?>}
   
  ]
});

</script>

<?php  } ?>

    
    
    
    
    
    
    <?php
      $chart = new HorizontalBarChart(800,450);
$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 140));
	$serie3 = new XYDataSet();
       foreach($report as $row3)
        {
            
            
            $bud3=$row3->budamount;
            $cat3=$row3->catname;
//		while( $row = $result->fetch_assoc() ){
			extract($row1);
			 $serie3->addPoint(new Point("{$cat3}", $bud3));
		}
	     $serie4 = new XYDataSet();
//	$result['query1'] =$this->money_m->selectbud();
//          $result['query2'] =$this->money_m->selectexp();
//          print_r($result['query2']);die;
	foreach($report as $row4)
        {
            
            
            $exp4=$row4->actamount;
            $cat4=$row4->catname;
//		while( $row = $result->fetch_assoc() ){
			extract($row);
			   $serie4->addPoint(new Point("{$cat4}", $exp4));
		}
       
	$dataSet = new XYSeriesDataSet();
	$dataSet->addSerie("Budget", $serie3);
	$dataSet->addSerie("Actual", $serie4);
	$chart->setDataSet($dataSet);

	$chart->setTitle("Budget Vs Actual");
	$chart->render("generated/demo8.png");
?>


	<title>Libchart line demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
    <img alt="Line chart" src="<?php echo base_url();?>generated/demo8.png" style="margin-left:100px;" />
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
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets3/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

	

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets3/js/bootstrap.min.js"></script>

<!--		page specific plugin scripts-->

		<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/jquery.slimscroll.min.js"></script>

<!--		ace scripts-->

		<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

                
                
                
                
                
                
</html>

</body>
</html>

        </html>