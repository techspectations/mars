

<style>
    #formid{
        
        margin-top: -101px;
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

								<div style="font-family: 'Open Sans';color:black;">Graphical Report
								</div>
							</div>

						</div>
							</a>
							<a href="<?php echo site_url('index.php/reports/diagramreporting');?>" >
								<div class="infobox infobox-green">
									<img src="<?php echo base_url();?>asset/image/table.png" style="width: 48px;"/>

									<div class="infobox-data">

										<div style="font-family: 'Open Sans';color:black;">Table Report
										</div>
									</div>

								</div>
							</a>
							<?php $dat=date('yyyy/mm/dd'); ?>
							<div id="right" align="right" style="margin-top: -66px;width: 721px;margin-left: 224px;" >
														<?php 
								$attributes=array('name'=>'myform','id'=>'formid');
								echo form_open('index.php/reports/getdata2',$attributes);?>
								
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
    
     <script  type="text/javascript" src="<?php echo base_url();?>asset/js/amchart.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/pie.js"></script>
<script  type="text/javascript" src="<?php echo base_url();?>asset/js/light.js"></script>
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
  "labelsEnabled": false,
  
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
<div class="list-type3">
<ol>

<li><a href="#" style="width: 235px;
       margin-left: -190px">ATM Cash Withdrawals-Rs&nbsp;&nbsp;<?php echo $sum_amount;?></a></li>
</ol>
</div>
    <style>
       .list-type3{
margin:0 auto;
width:500px;
}
.list-type3 li, .list-type3 a{
float:left;
height:35px;
line-height:35px;
position:relative;
font-size:15px;
margin-bottom: 12px;
font-family: 'Raleway', sans-serif;
transition: background-color 1.5s ease;
}
.list-type3 a{
padding:0 60px 0 12px;
background:#0089e0;
color:#fff;
text-decoration:none;
-moz-border-radius-bottomright:4px;
-webkit-border-bottom-right-radius:4px;
border-bottom-right-radius:4px;
-moz-border-radius-topright:4px;
-webkit-border-top-right-radius:4px;
border-top-right-radius:4px;
}

.list-type3 a:before{
content:"";
float:left;
position:absolute;
top:0;
left:-12px;
width:0;
height:0;
border-color:transparent #0089e0 transparent transparent;
border-style:solid;
border-width: 18px 12px 18px 0;
}

.list-type3 a:after{
content:"";
position:absolute;
top:15px;
left:0;
float:left;
width:6px;
height:6px;
-moz-border-radius:2px;
-webkit-border-radius:2px;
border-radius:2px;
background:#fff;
-moz-box-shadow:-1px -1px 2px #004977;
-webkit-box-shadow:-1px -1px 2px #004977;
box-shadow:-1px -1px 2px #004977;
}
.list-type3 a:hover{
background:#555;
}

.list-type3 a:hover:before{
border-color:transparent #0089e0 transparent transparent;
}
 </style>
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
           $data1[]=$row3->category;
             $data2[]=$row3->budamount;
              $data3[]=$row3->actamount;
        }
   ?>
       <script type="text/javascript" src="<?php echo base_url();?>asset/js/highcharts.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>asset/js/exporting.js"></script>
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
     //categories: ['Africa'],
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
   
<div id="container" style="min-width: 310px; max-width: 800px; height: 105px; margin: 0 auto"></div>
<?php   
// print_r($goal);die;
                                            foreach($goal as $row9)
{
                                                
                   $plus=$row9->per;
                   $minus=100-$plus;
 
$cat=$row9->cat;
//        print_r($plus);

//$plus = 60;
$minus =100-$plus;


$totalnumber = $plus + $minus;

$pluspercent = round(($plus / $totalnumber) * 100,2);
$c=($pluspercent/100);
//print_r($c);die;
$minuspercent = round(($minus / $totalnumber) * 100,2);
?>


	<script src="<?php echo base_url();?>asset/js/jQuery-plugin-progressbar.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/jQuery-plugin-progressbar.css">

<div class="progress-bar position" data-percent="<?php echo $pluspercent;?>"  data-color="#c1cdcd,#12b321" title="you completed <?php echo $pluspercent;?>%">
    <div id="gg" style=" margin-top: 56px;z-index: 1;margin-left: 68px;font-size: 19px;width: 122px;height: 56px;"><?php echo $cat;?></div>
</div>
	
	<script>
         
		$(".progress-bar").loading();
		$('input').on('click', function () {
			 $(".progress-bar").loading();
		});
	</script>


<?php
}
?>      		

       
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