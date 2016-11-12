<link rel="stylesheet" href="<?php echo base_url();?>home/css/ace.min.css" />
		
<style>
#mask {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9000;
  background-color: #000;
  display: none;
}
#boxes .window {
  position: absolute;
  left: 0;
  top: 0;
  width: 440px;
  height: 200px;
  display: none;
  z-index: 9999;
  padding: 20px;
  border-radius: 15px;
  text-align: center;
}
 #boxes #dialog {
  width: 750px;
  height: 300px;
  padding: 10px;
  background-color: #ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}
#popupfoot {
  font-size: 16pt;
  position: absolute;
  bottom: 114px;
  width: 250px;
  left: 250px;
}
</style>

<?php  if($yod_integer=='NOTSET') ?>
<div id="boxes">
  <div id="dialog" class="window">
  <h1>Want automatic updation?</h1>
    Hai <font  style="font-size: 15pt;font-weight: bold;color: red;">
 <?php 
					foreach($udetail as $dser)
					{
					echo $dser->fname;
					} ?></font>,
  Personal Finance Manager gives you an oppurtunity to get banks transactions automatically. So you can get all bank transactions without any efforts.
  For activating this facility just click YES button. We charge a price for this feature. If you don't want to activate
  this feature just click NO button, so you have to do the jobs manually.
    <div id="popupfoot"> <a href="#" id="agree" class="btn btn-primary">YES</a> 
	<a class="btn btn-primary agree" id="close" href="#">NO, THANKS</a> </div>
  </div>
  <div id="mask"></div>
</div>


    <script type="text/javascript">
$( document ).ready(function() {
   $.ajax({
    
    url   : "<?php echo base_url();?>index.php/account/user_bank_update",
    async : true //change this to false if you hate your users and want them to wait 
}).done(function(datas) {
});
});
        </script>
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
<li class="active">Dashboard</li>
</ul>
</div>
<div class="page-content">
<div class="page-header position-relative">
<h1>
Dashboard
<small>
<i class="icon-double-angle-right"></i>
overview &amp; status
</small>
</h1>
</div><!--/.page-header-->
<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->



<div class="space-6"></div>

<div class="row-fluid">
<div class="span7 infobox-container" style="padding-top: 11px;border: 1px solid #CCCCCC;border-radius: 23px;padding-bottom: 12px;">
  
    <a href="<?php echo site_url('index.php/account');?>" >
        <div class="infobox infobox-blue" style="border: none">
    <img src="<?php echo base_url();?>asset/image/bank.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-comments"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">32</span>-->
    <div style="font-family: 'Open Sans';color:black;">Bank Accounts</div>
</div>
<!--<div class="stat stat-success">8%</div>-->
</div>
    </a>
    <a href="<?php echo site_url('index.php/creditcard');?>" >
<div class="infobox infobox-blue"style="border: none">
    <img src="<?php echo base_url();?>asset/image/credit.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-twitter"></i>
</div>-->

<div class="infobox-data">

    <div style="font-family: 'Open Sans';color:black;">Credit Card</div>
</div>


</div>
    </a>
    <a href="<?php echo site_url('index.php/insurance');?>" >
<div class="infobox infobox-pink" style="border: none">
    <img src="<?php echo base_url();?>asset/image/ins.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-shopping-cart"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">8</span>-->
    <div style="font-family: 'Open Sans';color:black;">Insurance</div>
</div>
<!--<div class="stat stat-important">+4%</div>-->
</div>
    </a>
    <a href="<?php echo site_url('index.php/mutualfund');?>" >
<div class="infobox infobox-red " style="border: none">
    <img src="<?php echo base_url();?>asset/image/mf1.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Mutual fund</div>
</div>
</div>
    </a>
    <a href="<?php echo site_url('index.php/fixeddeposit');?>" >
<div class="infobox infobox-orange2" style="border: none">
     <img src="<?php echo base_url();?>asset/image/fd.png" style="width: 48px;"/>
<!--<div class="infobox-chart">
<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">6,251</span>-->
    <div style="font-family: 'Open Sans';color:black;">Fixed Deposit</div>
</div>

<!--<div class="badge badge-success">
7.2%
<i class="icon-arrow-up"></i>
</div>-->
</div>
    </a>
    <a href="<?php echo site_url('index.php/loan');?>" >
<div class="infobox infobox-blue2  " style="border: none">
    <img src="<?php echo base_url();?>asset/image/loan2.png" style="width: 48px;"/>
<!--<div class="infobox-progress">-->
<!--<div class="easy-pie-chart percentage" data-percent="42" data-size="46">
<span class="percent">42</span>
%
</div>-->
<!--</div>-->

<div class="infobox-data">
<!--<span class="infobox-text">traffic used</span>-->

    <div style="font-family: 'Open Sans';color:black;">
<!--<span class="bigger-110">~</span>-->
Loan
</div>
</div>
</div>
    </a>
        <a href="<?php echo site_url('index.php/budget');?>" >
<div class="infobox infobox-red " style="border: none">
    <img src="<?php echo base_url();?>asset/image/budget.png" style="width:54px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Budget</div>
</div>
</div>
        </a>
           <a href="<?php echo site_url('index.php/taxcalc');?>" >
<div class="infobox infobox-red " style="border: none">
    <img src="<?php echo base_url();?>asset/image/tax.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Tax</div>
</div>
</div>
        </a>
           <a href="<?php echo site_url('index.php/reports');?>" >
<div class="infobox infobox-red " style="border: none">
    <img src="<?php echo base_url();?>asset/image/pie.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Reports</div>
</div>
</div>
        </a>
               <a href="<?php echo site_url('index.php/contact');?>" >
<div class="infobox infobox-red " style="border: none">
    <img src="<?php echo base_url();?>asset/image/chat2.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Customer support</div>
</div>
</div>
        </a>
                   <a href="<?php echo site_url('index.php/goal');?>" >
<div class="infobox infobox-red " style="border: none">
    <img src="<?php echo base_url();?>asset/image/setgoal.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Set Goal</div>
</div>
</div>
        </a>
                       <a href="<?php echo site_url('index.php/events');?>" >
<div class="infobox infobox-red "  style="border: none">
    <img src="<?php echo base_url();?>asset/image/cale.png" style="width: 48px;"/>
<!--<div class="infobox-icon">
<i class="icon-beaker"></i>
</div>-->

<div class="infobox-data">
<!--<span class="infobox-data-number">7</span>-->
    <div style="font-family: 'Open Sans';color:black;">Events</div>
</div>
</div>
        </a>
     <?php ////////////////////////////// ?>
<div class="space-6"></div>






</div><?php ////////////////////////////// ?>

<div class="vspace"></div>

<div class="span5">
	<div class="widget-box">
		<!--<div class="widget-header widget-header-flat widget-header-small">-->
		<!--</div> -->

		<div class="widget-body" style=" width: 100%;height: 100%;padding-top: 8px;">
			<h5 class="widget-header widget-header-flat widget-header-small" style="">
			Graphical Report (Current Month Expense)
			</h5>
			<div class="widget-main" style=" width: 100%;height: 100%;">

				<?php if($query4 || $query7){?>  
				<script  type="text/javascript" src="<?php echo base_url();?>asset/js/amchart.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>asset/js/pie.js"></script>
				<script  type="text/javascript" src="<?php echo base_url();?>asset/js/light.js"></script>


			<script type="text/javascript">
						AmCharts.makeChart("chartdiv",
							
											  
								{
				"type": "pie",
				"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
				"innerRadius": "40%",
				"labelText": "",
					"radius":"35%",
				"labelsEnabled": false,
				"titleField": "title",
				"valueField": "value",
				"theme": "light",
				"allLabels": [],
				"balloon": {},
				"legend": {
					"enabled": false,
					"align": "center",
					"markerType": "circle"
				},
				"titles": [],
			"dataProvider": [ 
				 <?php
			$atms = $atm;
			if ($atms === 'NO' ){ 
			   foreach($query4 as $row){
				   //if()
				   
				   ?>
							{
						title: '<?php echo $row['category']; ?>',
						value: '<?php echo $row['amt']; ?>',    
								},
			   <?php } 
			   }
			   else
			   { 
			  foreach($query7 as $row)
			  { ?>
							{
						title: '<?php echo $row['category']; ?>',
						value: '<?php echo $row['amt']; ?>',    
								},
			   <?php 
			   } 
			   } ?> ],
			}
			);
			</script>
			 <?php } ?>
			<div id="chartdiv" style="width:550px;height: 339px;font-size: 11px;margin-left: -70px; background-color: #FFFFFF;" >
					<?php if(!$firstornot){ ?>
						<div  style="padding-right: 19px;height: 320px;padding-left: 76px;">
							<h3>Add your Financial Institution</h3>
							<h5>You have to add your financial institutions, to get the current month expenses in graphical representation.
							</h5>

							<img src="<?php echo base_url(); ?>asset/image/pie-diagram1.png" style="width: 190px;"/>
							<a href="<?php echo base_url(); ?>index.php/account" class="btn btn-primary">Add Now</a>
						</div>
						 <?php }
						 else
						 { ?>
						<div  style="padding-right: 19px;height: 320px;padding-left: 76px;">
							<h3>No Transaction</h3>
							<h5>This month you have no transactions.
							</h5>
							<?php
							$path = 'asset/image/pie-diagram1.png';
							$type = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							//$data  = fread(fopen($path, "r"), filesize($path));
							$data = base64_encode($data);
							//header("Content-type: image/png");
							//$data = base64_decode($base64);
								echo '<img src="data:image/'.$type.';base64,' . $data . '" />';
							//echo base64_encode($data);
							//..............................
							//header("Content-type: image/$type");
							//$data = $base64;
							//echo base64_decode($data);
							//
							?>

							</div>	 
							<?php } ?>
						</div>


    
    

</div><!--/widget-main-->
</div><!--/widget-body-->
</div><!--/widget-box-->
</div><!--/span-->
</div><!--/row-->
<br/><br/>
<div class="span7 infobox-container" style="padding-top: 11px;border: 1px solid #CCCCCC;border-radius: 23px;padding-bottom: 30px;padding-left: 104px;width: 645px;margin-left: 0px;margin-top: 28px;">
 <div id="f" style="width: 414px;">
<div id="container" style="min-width: 271px;width: 414px;height: 300px;margin-left: -20px;">
<?php 
$combined = $fdbonds+$credit+$loan+$insurance+$mutualfund;
if($combined)
{


?> 



</div>    
        <?php foreach($bank as $row16){ 
       $bnk[]=$row16->totbank; 
                 } ?>
                     <?php foreach($insurance as $row17){ 
        $ins[]=$row17->totinsurance; 
                } ?>
                    <?php foreach($mutualfund as $row18){
                        
                        
                       
        $mf[]=$row18->totmutual;
                    
                
                
                    } ?>
                    <?php
                 
                    foreach($fdbonds as $row19){ 
                      
        $fd[]=$row19->totfdbonds;
        } ?>
        
   
  
        <?php foreach($credit as $row13){
     
       $cc[]=$row13->totcredit;
        } ?>
  <?php foreach($loan as $row14){
     
       $ln[]=$row14->totloan;
        } ?>
       
       
  
<script>
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Assets and Liabilities'
        },
        xAxis: {
            categories: ['Assets','Liabilities']
        },
        yAxis: {
            min: 0,
//            title: {
////                text: 'Assets and Liabilities'
//            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
         exporting: { enabled: false },
        series: [{
            name: 'Mutual fund',
             data: [<?php echo join($mf, ',') ?>],
        }, {
           name: 'fd',
             data: [<?php echo join($fd, ',') ?>],
        },
         {
           name: 'Insurance',
             data: [<?php echo join($ins, ',') ?>],
        },{
            name: 'Bank Account',
            data: [<?php echo join($bnk, ',') ?>],
        },
     {
           name: 'credit card',
             data: ['0',<?php echo join(',',$cc) ?>],
        },
    {
           name: 'Loan',
             data: ['0',<?php echo join(',',$ln) ?>],
        }
    ]
    });
});

</script>
<?php

}else{
    ?>

<h3>No Assets and Liabilities</h3>
<img src="<?php echo base_url();?>asset/image/asset.png" style="width: 300px;"/>
<h5>You have to add your assets and liabilities,And the categories are fixed diposits, insurance, loan, credit cards, bank account, mutual funds etc.
</h5>




 <?php }
 ?>
    </div>
     </div>      
          
<!--<div class="hr hr32 hr-dotted"></div>-->
<br/><br/>
<div class="row-fluid">
<div class="span5">
<div class="widget-box transparent">
<div class="widget-body">
    <div class="widget-main no-padding" style="height: 385px;">

    <br/><br/>
  
<div class="widget-box" style="margin-top: -53px;margin-left: 28px;margin-right: -22px;">
<div class="widget-body" style=" width: 100%;height: 100%;padding-top: 8px;border: 1px solid lightgrey;">
<div class="widget-header widget-header-flat" style="width: 121px;padding-left: 166px;margin-top: 12px;">
<h4 class="lighter">
News Updates
</h4>

</div>
    <br/>
    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" height="259" scrollamount="2" style="margin-left: 11px;margin-right: 11px;font-family: 'Open Sans';    font-size:14px;"/>
<?php foreach ($news as $news_item){ ?>

    <h3 style="color: black;font-size:17px;"><?php echo $news_item->title; ?></h3>
        <div class="main">
                <?php echo $news_item->text; ?>
        </div>
        <p><a href="<?php echo $news_item->slug; ?>">View article</a></p>

<?php }?>
        </marquee></font>  </div></div>
    
    
    
    
    
    
    
</div><!--/widget-main-->
</div><!--/widget-body-->
</div><!--/widget-box-->
</div>

<div class="span7" style="margin-left: 189px">
<div class="widget-box transparent">
<div class="widget-body">
<div class="widget-main padding-4" style="border: 1px solid #CCCCCC;border-radius: 23px;padding-left: 158px;padding-bottom: 107px;padding-top: 58px;">
  		<div id="chartdiv2" style="width:80%; height:219px;min-width: 271px;

    background-color: #FFFFFF;" >
	<?php if(!$goal){ ?> 
<h3>Sets no Goal</h3>
<img src="<?php echo base_url();?>asset/image/goal.png" style="width: 190px;"/>
<h5>You have to add your goals.You can set your goal by keeping some amount from budget
</h5>
<a href="<?php echo base_url(); ?>index.php/goal" class="btn btn-primary">Add Now</a>
</div>
  <?php } ?>
	<?php
//print_r($goal);
	if($goal){ ?>
	</div>
                <script type="text/javascript" src="<?php echo base_url();?>asset/js/amcharts2.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>asset/js/serial.js"></script>
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv2",
				{
					"type": "serial",
					"categoryField": "category",
					"rotate": true,
					"startDuration": 1,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"title": "Completed",
							"type": "column",
							"valueField": "column-1"
						},
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"fillAlphas": 1,
							"id": "AmGraph-2",
							"title":"left",
							"type": "column",
							"valueField": "column-2"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"stackType": "100%",
							"title": ""
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": true,
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Goal Status"
						}
					],
					"dataProvider": [
<?php
            foreach($goal as $row9){
                   $piadamnt=$row9->paidamount;
                   $totalamnt=$row9->tot;
                   $amntact= round(($piadamnt/$totalamnt)*100,2);
                   $minus=100-$amntact;
                                                ?>

    {
							"category": '<?php echo $row9->category; ?>',
							"column-1": '<?php echo $amntact; ?>',
							"column-2":'<?php echo $minus; ?>'
						},
						<?php
                                                } ?>
					]
                                         
                                        
                                        
                                        
                                        
                                        
                                        
				}
			);
		</script>
	<?php } ?>
</div>


</div><!--/widget-main-->
</div><!--/widget-body-->
</div><!--/widget-box-->
</div>
</div>

<div class="hr hr32 hr-dotted"></div>

<div class="row-fluid">
<div class="span6">
<div class="widget-box transparent" id="recent-box">
<div class="widget-header">
<h4 class="lighter smaller">
<i class="icon-rss orange"></i>
Features 
</h4>

<div class="widget-toolbar no-border">

</div>
</div>




<div class="widget-body">
<div class="widget-main padding-4">
<div class="tab-content padding-8 overflow-visible">
<div id="task-tab" class="tab-pane active">


    <ul id="tasks" class="item-list" style="font-family: 'Open Sans';font-size:16px;">
<li class="item-orange clearfix">
<label class="inline">

<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i>Compute Tax Liability.</span>
</label>
</li>

<li class="item-red clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> Store financial documents.</span>
</label>
</li>

<li class="item-default clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> Set budgets and goals</span>
</label>
</li>

<li class="item-blue clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> See your shopping, dining, other spending patterns etc.</span>
</label>
</li>

<li class="item-grey clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> Get automatic alerts.</span>
</label>
</li>

</ul>
</div>




</div>
</div><!--/widget-main-->
</div><!--/widget-body-->
</div><!--/widget-box-->
</div><!--/span-->





<div class="span6">
<div class="widget-box transparent" id="recent-box">
<div class="widget-header">
<h4 class="smaller lighter green" align="right">
<i class="icon-list"></i>
Highlights
</h4>

<div class="widget-toolbar no-border">
<ul class="nav nav-tabs" id="recent-tab">
<!--<li class="active">
<a data-toggle="tab" href="#task-tab">Tasks</a>
</li>-->

<!--<li>
<a data-toggle="tab" href="#member-tab">Members</a>
</li>

<li>
<a data-toggle="tab" href="#comment-tab">Comments</a>
</li>-->
</ul>
</div>
</div>

<div class="widget-body">
<div class="widget-main padding-4">
<div class="tab-content padding-8 overflow-visible">
<div id="task-tab" class="tab-pane active" style="font-family: 'Open Sans';">



<ul id="tasks" class="item-list">




<li class="item-green clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> Event management and bill reminder.</span>
</label>
</li>

<li class="item-pink clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i>E-commerce support to buy mutual funds/Insurance and other goods.</span>
</label>
</li>
<li class="item-blue clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> Multi bank/Institute financial statement upload can be utilized to prepare PFM.</span>
</label>
</li>
<li class="item-blue clearfix">
<label class="inline">
<span class="lbl" style="font-size:14px;"><i class="icon-ok"></i> Real-Time customer care facility.</span>
</label>
</li>
</ul>
</div>




</div>
</div><!--/widget-main-->
</div><!--/widget-body-->
</div><!--/widget-box-->
</div><!--/span-->


</div><!--/span-->
</div><!--/row-->

<!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>

<!--basic scripts-->

<!--[if !IE]>-->

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

<!--<![endif]-->

<!--[if IE]>-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<!--<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url();?>asset/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>asset/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url();?>asset/js/highcharts2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/js/exporting2.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.slimscroll.min.js"></script>
<!--ace scripts-->

<script src="<?php echo base_url();?>asset/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>asset/js/ace.min.js"></script>

<!--inline scripts related to this page-->
<?php  if($yod_integer=='NOTSET'){ ?>
<script type="text/javascript">
$(document).ready(function() { 
var id = '#dialog';
var maskHeight = $(document).height();
var maskWidth = $(window).width();
$('#mask').css({'width':maskWidth,'height':maskHeight});
$('#mask').fadeIn(500);
$('#mask').fadeTo("slow",0.9); 
var winH = $(window).height();
var winW = $(window).width();
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
$(id).fadeIn(2000);  
$('.window #close').click(function (e) {
$.ajax({
	type  :"POST",
	data  :{request:'NO'},
    url   : "<?php echo base_url();?>index.php/dashboard/yod_integration",
	success:function(){
e.preventDefault();
$('#mask').hide();
$('.window').hide();
}	
});
});
$('.window #agree').click(function (e) {
$.ajax({
	type  :"POST",
	data  :{request:'YES'},
    url   : "<?php echo base_url();?>index.php/dashboard/yod_integration",
	success:function(){
e.preventDefault();
$('#mask').hide();
$('.window').hide();
}	
});
});
});
</script>
<?php } ?>
</body>
</html>
