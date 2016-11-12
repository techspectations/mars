<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>personal finance manager</title>

<meta name="description" content="with draggable and editable events" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link href="<?php echo base_url();?>assets3/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets3/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/fullcalendar.css" />

<!--fonts-->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!--ace styles-->

<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets3/css/ace-skins.min.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
<![endif]-->

<!--inline styles related to this page-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

     <?php  
include "h.php";

?>
     <script type="text/javascript">
$( document ).ready(function() {
   $.ajax({
	
    url   : "<?php echo base_url();?>index.php/money_c/user_bank_update",
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
<a href="<?php echo site_url('money_c/home');?>">Home</a>

<span class="divider">
<i class="icon-angle-right arrow-icon"></i>
</span>
</li>
<li class="active">Statement Upload</li>
</ul><!--.breadcrumb-->

<div class="nav-search" id="nav-search">
<form class="form-search" />
<span class="input-icon">
<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
<i class="icon-search nav-search-icon"></i>
</span>
</form>
</div><!--#nav-search-->
</div>

<div class="page-content">
<div class="page-header position-relative">
<h1>
Statement Upload
<small>
<i class="icon-double-angle-right"></i>
Upload your statement in an easy way.
</small>
</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->

<div class="row-fluid">
    <div class="span9" style="margin-left: 224px;">

<?php echo $error;?>


Convert Your Bank statement:

<a href="<?php echo base_url();?>Convert Multiple XLS Files To OpenOffice ODS Files Software/Convert Multiple XLS Files To OpenOffice ODS Files Software.exe">convert</a><br><br>
<?php echo form_open_multipart('money_c/conv')?>
Select bank:<select name="bank" style="    margin-left: 41px;">
<option value="">--selectbank---</option>
<option value="HDFC">HDFC</option>
<option value="SBI">SBI</option>
<option value="ICIC">ICIC</option>
<option value="FEDERAL">FEDERAL</option>
</select><br><br>
<input type="file" name="userfile" style="margin-left: 116px;" class="btn btn-primary">
<br/>
<input type="submit" name="sub" value="add" style="margin-left: 117px;" class="btn btn-primary">

<?php echo form_close();?>

<?php echo form_open('money_c/selectbankdata')?>
Select bank:<select name="bank1" style="margin-left: 44px;">
<option value="">--selectbank---</option>
<option value="HDFC">HDFC</option>
<option value="SBI">SBI</option>
<option value="ICIC">ICIC</option>
<option value="FEDERAL">FEDERAL</option>
</select><br><br>
select month:<select name="month" style="    margin-left: 36px;">
<option value="select">select</option>
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>


</select><br><br>

select year:<select name="year" style="    margin-left: 51px;" >
<option value="select">select</option>
<?php
for($i=13;$i<99;$i++)
{


?>
<option value="<?php echo $i;?>">
<?php
echo 20..$i;
}                             
//                                               
//            for($j=2013;$j<2099;$j++)
//            {
//                ?>
<?php // echo $j;?></option>
<?php
//            
////            echo $j;
//            }

?>
</select><br><br>

<input type="submit" name="sub" value="submit" style=" margin-left: 122px;" class="btn btn-primary">
<?php echo form_close();?>

<a href="<?php echo site_url('money_c/yodlee');?>"><button class="btn btn-primary">Connect Your Bank</button></a>
</div>


</div>

<!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->

<div class="ace-settings-container" id="ace-settings-container">
<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
<i class="icon-cog bigger-150"></i>
</div>

<div class="ace-settings-box" id="ace-settings-box">
<div>
<div class="pull-left">
<select id="skin-colorpicker" class="hide">
<option data-class="default" value="#438EB9" />#438EB9
<option data-class="skin-1" value="#222A2D" />#222A2D
<option data-class="skin-2" value="#C6487E" />#C6487E
<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
</select>
</div>
<span>&nbsp; Choose Skin</span>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
<label class="lbl" for="ace-settings-header"> Fixed Header</label>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
</div>

<div>
<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
</div>
</div>
</div><!--/#ace-settings-container-->
</div><!--/.main-content-->
</div><!--/.main-container-->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
<i class="icon-double-angle-up icon-only bigger-110"></i>
</a>

<!--basic scripts-->

<!--[if !IE]>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo base_url();?>assets3/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>assets3/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets3/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<script src="<?php echo base_url();?>assets3/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/fullcalendar.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/bootbox.min.js"></script>

<!--ace scripts-->

<script src="<?php echo base_url();?>assets3/js/ace-elements.min.js"></script>
<script src="<?php echo base_url();?>assets3/js/ace.min.js"></script>

<!--inline scripts related to this page-->

<script type="text/javascript">
$(function() {

/* initialize the external events
-----------------------------------------------------------------*/

$('#external-events div.external-event').each(function() {

// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
// it doesn't need to have a start or end
var eventObject = {
title: $.trim($(this).text()) // use the element's text as the event title
};

// store the Event Object in the DOM element so we can get to it later
$(this).data('eventObject', eventObject);

// make the event draggable using jQuery UI
$(this).draggable({
zIndex: 999,
revert: true,      // will cause the event to go back to its
revertDuration: 0  //  original position after the drag
});

});




/* initialize the calendar
-----------------------------------------------------------------*/

var date = new Date();
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();


var calendar = $('#calendar').fullCalendar({
buttonText: {
prev: '<i class="icon-chevron-left"></i>',
next: '<i class="icon-chevron-right"></i>'
},

header: {
left: 'prev,next today',
center: 'title',
right: 'month,agendaWeek,agendaDay'
},
events: [
{
title: 'All Day Event',
start: new Date(y, m, 1),
className: 'label-important'
},
{
title: 'Long Event',
start: new Date(y, m, d-5),
end: new Date(y, m, d-2),
className: 'label-success'
},
{
title: 'Some Event',
start: new Date(y, m, d-3, 16, 0),
allDay: false
}]
,
editable: true,
droppable: true, // this allows things to be dropped onto the calendar !!!
drop: function(date, allDay) { // this function is called when something is dropped

// retrieve the dropped element's stored Event Object
var originalEventObject = $(this).data('eventObject');
var $extraEventClass = $(this).attr('data-class');


// we need to copy it, so that multiple events don't have a reference to the same object
var copiedEventObject = $.extend({}, originalEventObject);

// assign it the date that was reported
copiedEventObject.start = date;
copiedEventObject.allDay = allDay;
if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];

// render the event on the calendar
// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

// is the "remove after drop" checkbox checked?
if ($('#drop-remove').is(':checked')) {
// if so, remove the element from the "Draggable Events" list
$(this).remove();
}

}
,
selectable: true,
selectHelper: true,
select: function(start, end, allDay) {

bootbox.prompt("New Event Title:", function(title) {
if (title !== null) {
calendar.fullCalendar('renderEvent',
{
title: title,
start: start,
end: end,
allDay: allDay
},
true // make the event "stick"
);
}
});


calendar.fullCalendar('unselect');

}
,
eventClick: function(calEvent, jsEvent, view) {

var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");

var div = bootbox.dialog(form,
[
{
"label" : "<i class='icon-trash'></i> Delete Event",
"class" : "btn-small btn-danger",
"callback": function() {
calendar.fullCalendar('removeEvents' , function(ev){
return (ev._id == calEvent._id);
})
}
}
,
{
"label" : "<i class='icon-remove'></i> Close",
"class" : "btn-small"
}
]
,
{
// prompts need a few extra options
"onEscape": function(){div.modal("hide");}
}
);

form.on('submit', function(){
calEvent.title = form.find("input[type=text]").val();
calendar.fullCalendar('updateEvent', calEvent);
div.modal("hide");
return false;
});


//console.log(calEvent.id);
//console.log(jsEvent);
//console.log(view);

// change the border color just for fun
//$(this).css('border-color', 'red');

}

});


})
</script>
</body>
</html>
