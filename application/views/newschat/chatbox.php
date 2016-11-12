<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Star at chat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/ico" href=""/>
  <link rel="stylesheet" href="<?php echo base_url();?>admin/fancybox/jquery.fancybox.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/admin1/bootstrap/css/bootstrap.min.css">
 <link href="<?php echo base_url();?>asset/css/chatbox.css" rel="stylesheet"> 
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <link href="<?php echo base_url();?>asset/css/font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/admin1/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/admin1/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/admin1/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>admin/admin1/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->

  
  
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class=" skin-blue ">


 
  <!-- Left side column. contains the logo and sidebar -->
  

 

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       STAR CHAT
        <small> MESSAGES</small>
      </h1>
      
            <div class="btn-panel btn-panel-msg pull-right">

                <a href="starlogout" class="btn btn-primary pull-right" role="button">Logout</a>
            </div>
        
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
        
       <!-- <div class="col-lg-offset-1 col-lg-8">
            <div class="btn-panel btn-panel-msg">

                <a href="chatlog/chatadminlogout" class="btn btn-primary pull-right" role="button">Logout</a>
            </div>
        </div>-->
    </div>
      <div class="row">
         <div class="conversation-wrap col-lg-3">

			<?php if($user){
			foreach($user as $u){
				$user=$u['mfrom'];
				$user1=$u['sid'];
				?>
				<div class="media conversation">
					<a class="pull-left" href="#">
						<!--<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="">-->
					</a>
					<div class="media-body" onclick="clicked(this);" id="<?php echo $user1; ?>">
						<h5 class="media-heading"><?php echo $user; ?></h5>
						<small>New Message</small>
					</div>
				</div>
			<?php } }
			else
				echo "no new msg";
			?>
			
			
          
		 
		 
           
		   
           

           

            <div class="media conversation">
                <a class="pull-left" href="#">
                    <!--<img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
               --> </a>
                <div class="media-body">
                    <h5 class="media-heading">Naimish Sakhpara</h5>
                    <small>New Message</small>
                </div>
            </div>
        </div>
		
		
		
        <div class="message-wrap col-lg-8">
		<h3>Select user to reply</h3>
            <div class="msg-wrap" id="user_d">
			<div><b>No message is selected</b></div>
				<!--	<?php foreach($dat as $ads)
					{
						$from=$ads['mfrom'];
						$time=$ads['time'];
						$mssg=$ads['message'];?>
						
					
               
                   <div class='media msg' ><div class='media-body'>
                       <small class='pull-right time'><i class='fa fa-clock-o'></i><?php //echo $time; ?></small>
						<h5 class='media-heading'><?php //echo $from; ?></h5> <small class='col-lg-10'><?php //echo$mssg; ?></small>
		</div><hr/></div><br/>
		<?php } ?>-->
				   <!-- <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                    </a>-->
					
					<!-- <div class="media msg ">
                  <div class="media-body">
                       
                    </div>
					<hr/>
                </div>-->
            </div>
				<form method="post" onsubmit="return validateForm();">
            <div class="send-wrap " id="mw"style="display:none;">
					<input type="hidden" id="cuid" value=""/>
                <textarea class="form-control send-message" id="admsg" rows="3" placeholder="Write a reply..." required></textarea>


            </div>
            <div class="btn-panel" id="but" style="display:none;">
               <br/>
                <button class="btn btn-primary pull-left" type="submit"> Send Message</button>
            </div>
			</form>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
  <!-- Bootstrap 3.3.6 -->

<script src="<?php echo base_url();?>asset/ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>admin/fancybox/jquery.fancybox.pack.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.4.2.min.js"></script>-->

  <script type="text/javascript">
  
  
   function clicked(item) {
   var mitem=$(item).attr("id");
    document.getElementById('cuid').value=mitem;
   document.getElementById('but').style.display = "block";
   document.getElementById('mw').style.display = "block";
   $.ajax({
  type: 'POST',
  url: '<?php echo base_url();?>index.php/starlog/chatfetch',
  data: {'variable': mitem},
   success: function (data) {
	   $('#user_d').html(data);
        }
	});
   }
  </script>
  <script type="text/javascript">
  function validateForm()
  {
  var uid=document.getElementById('cuid').value;
  var msg=document.getElementById('admsg').value;
 // document.getElementById('cuid').value=uid;
 //  document.getElementById('but').style.display = "block";
  // document.getElementById('mw').style.display = "block";
 
  //alert(msg+uid);
   $.ajax({
  type: 'POST',
  url: '<?php echo base_url();?>index.php/starlog/starsend',
  data: {'uidc': uid,
  'msgc':msg
  },
   success: function (data) {
	   //$('#user_d').html(data);
        }
	});
	
	 
  }
   </script>
</body>
</html>
