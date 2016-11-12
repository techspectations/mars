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
//print_r($query4)
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
<a href="<?php echo site_url('money_c/home');?>">Home</a>

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
    <?php $dat=date('yyyy/mm/dd'); ?>
    <div id="right" align="right" style="margin-top: -66px;width: 721px;margin-left: 224px;" >
        <?php 
        $attributes=array('name'=>'myform','id'=>'formid');
        echo form_open('money_c/getdata2',$attributes);?>
        
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
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/canvasjs/canvasjs.js"></script>
</head>
<body>
        
  <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/canvasjs/canvasjs.js"></script>-->
</head>
<body>
    
     <script  type="text/javascript" src="<?php echo base_url();?>assets3/js/amchart.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets3/js/pie.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>assets3/js/light.js"></script>
<style>
    
    #chartdiv {
	           width: 50%;
    height: 430px;
    font-size: 11px;
   
}

</style>
<div id="chartdiv"></div>
<script type="text/javascript">
    
    var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ 
     <?php
$atms = $atm;
if ($atms === 'NO' ){ 
   foreach($query4 as $row){
       //if()
       
       ?>
                {
        title: '<?php echo $row->category; ?>',
        value: '<?php echo $row->amt; ?>',    
    },
   <?php } }else{ 
  foreach($query7 as $row){ ?>
                {
        title: '<?php echo $row->category; ?>',
        value: '<?php echo $row->amt; ?>',    
    },
   <?php } } ?> ],
  "titleField": "title",
  "valueField": "value",
  
  "labelRadius": 5,
//"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
  "radius": "29%",
  "innerRadius": "60%",
//  "depth3D": 10,
  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
//  "angle": 15,
  "export": {
    "enabled": true
  }
} );
jQuery( '.chart-input' ).off().on( 'input change', function() {
  var property = jQuery( this ).data( 'property' );
  var target = chart;
  var value = Number( this.value );
  chart.startDuration = 0;

  if ( property == 'innerRadius' ) {
    value += "%";
  }

  target[ property ] = value;
  chart.validateNow();
} );
    </script>
    

    
     
         <?php
//    
    if($atm=='YES')
    {
      foreach($sum as $rr)
      {
            $sum_amount=$rr->amt;
          ?>
    <div class="alert alert-info" style="width: 223px;">
        
  <strong>ATM Cash WIthdrawals</strong><?php echo $sum_amount;?>
</div>
  
    <?php
        
      }
       
    }
    
        
        
    ?>
     
    
    
    
<?php
$data1 = array();
$data2 = array();
$data3 = array();
//print_r($report6);die;

       foreach($report6 as $row3)
        {
            
            
            $bud3=$row3->budamount;
            $cat3=$row3->category;
           $data1[]=$row3->category;
             $data2[]=$row3->budamount;
              $data3[]=$row3->actamount;//actual
        }
//	foreach($report as $row4)
//        {
//            
//            
//            $exp4=$row4->amount;
//            $cat4=$row4->category;
//             
//        }
                ?>
       <script type="text/javascript" src="<?php echo base_url();?>assets3/js/highcharts.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>assets3/js/exporting.js"></script>
<div id="container" style="min-width: 310px;max-width: 800px;height: 400px;margin: 0 auto;margin-left: 504px;margin-top: -452px;"></div>
<script>
    $(function () {
    $('#container').highcharts({
       
            
            chart: {
                 height: 450,
                 width: 550,
            type: 'bar'
        },
        title: {
            text: 'Budget Vs Actual'
        },
        subtitle: {
//            text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
        },
        xAxis: {
             categories: ['<?php echo join($data1, "','") ?>'] ,
//            categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
//                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valuePrefix: ' Rs'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y:80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        
        credits: {
            enabled: false
        },
                exporting: { enabled: false },
        series: [{
            name: 'Budget',
              pointWidth: 20,
             data: [<?php echo join(',', $data2);  ?>],
        }, 
        
    {
            name: 'Actual',
            pointWidth: 20,
               data: [<?php echo join(',', $data3);  ?>],
        }]
    });
});
    </script>
   
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