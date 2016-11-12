<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1>CELEBRITY CHAT</h1>
      <img class="imgr" src="<?php echo base_url(); ?>images/chat1.jpg" alt="" width="125" height="125" />
      <p>Celebrity Chat is an application may refer to any kind of communication over the internet that offers a real-time transmission of text messages from sender to receiver. Chatting, is a method of using technology to bring people and ideas “together” despite of the geographical barriers. </p>
      <img class="imgl" src="<?php echo base_url(); ?>images/chat2.jpg" alt="" width="125" height="125" />
      <p>Our project is an example of a chat platform, were we can chat with celebrities. In this project there is a three section android chat window, web chat window for people and the server side. Then all chats forwarded to celebrity’s web chat room. Each Celebrity has its own separate login. They can see all messages to them and can give reply to people. In this application we provide a private chat window to client and celebrity.</p>
     
    </div>
    <div class="column">
      <div class="subnav">
        <h2> Celebrity Online</h2>
        <ul>
		<?php foreach($star as $d)
		{ 
		$sname=$d['name'];
		}
		if($star){
		?>
					<li><a href="#" id="addClass" onclick="show()"><?php echo $sname;?></a></li>
					<?php } else { ?>
					<li>No one online</li>
					<?php } ?>
        </ul>
      </div>
     
     
	 
     
    </div>
    <br class="clear" />
	
	<div class="col-xs-12">
   <div class="box box-danger direct-chat direct-chat-danger pull-right" id="qnimate">
  <div class="box-header with-border">
    <h3 class="box-title">Direct Chat</h3>
    <div class="box-tools pull-right">
      <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>-->
      <button class="btn btn-box-tool" data-widget="collapse"><i class="icon-minus"></i></button>
      <!-- In box-tools add this button if you intend to use the contacts pane -->
     <a href="<?php echo base_url();?>index.php/custlog/incust"><button class="btn btn-box-tool" id="refresh"><i class="icon icon-refresh"></i></button></a>
      <button class="btn btn-box-tool" data-widget="remove"><i class="icon-asterisk"></i></button>
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">
 
    <!-- Conversations are loaded here -->
    <div class="direct-chat-messages">
	 <?php
	 foreach($user as $ds)
	 {
		$uname=$ds['name'];
		$sids=$ds['sid'];
	 }
  foreach($dat as $d)
  {
	     //$sid=$d['sid'];
		$from=$d['mfrom'];
		$time=$d['time'];
		$mssg=$d['message'];
		if($from != $uname ){
			
		
 
  ?>
      <!-- Message. Default to the left -->
      <div class="direct-chat-msg">
        <div class="direct-chat-info clearfix">
          <span class="direct-chat-name pull-left"><?php echo $from; ?></span>
          <span class="direct-chat-timestamp pull-right"><?php echo $time; ?></span>
        </div><!-- /.direct-chat-info -->
        <img class="direct-chat-img" src="<?php echo base_url();?>asset/admin1/images/images.png" alt="message user image"><!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          <?php echo $mssg; ?>
        </div><!-- /.direct-chat-text -->
      </div><!-- /.direct-chat-msg -->
		<?php } else { ?>
      <!-- Message to the right -->
      <div class="direct-chat-msg right">
        <div class="direct-chat-info clearfix">
          <span class="direct-chat-name pull-right"><?php echo $uname; ?></span>
          <span class="direct-chat-timestamp pull-left"><?php echo $time; ?></span>
        </div><!-- /.direct-chat-info -->
		<?php /*if($image3)
		{
			$img='default.png';
		}
		else
		{
			$img='default.png';
		}*/
		$img='default.png';
		?>
        <img class="direct-chat-img" src="<?php echo base_url();?>asset/admin1/images/<?php echo $img;?>" alt="message user image"><!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          <?php echo $mssg; ?>
        </div><!-- /.direct-chat-text -->
      </div><!-- /.direct-chat-msg -->
		<?php  }} ?>
    </div><!--/.direct-chat-messages-->

    <!-- Contacts are loaded here -->

  </div><!-- /.box-body -->
  <div class="box-footer">
  <form method="post" action="" onsubmit="return saveForm()">
    <div class="input-group">
	 <input type="hidden" name="message" id="id" value="<?php echo $sids;?>" class="form-control">
	 <input type="hidden" name="message" id="sname" value="<?php echo $sname; ?>" class="form-control">
      <input type="text" name="message"id="sendmsg" placeholder="Type Message ..." class="form-control">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-danger btn-flat">Send</button>
		<br/><br/>
		</form>
      </span>
	  
    </div>
  </div><!-- /.box-footer-->
		</div><!--/.direct-chat -->
</div>	
  </div>
</div>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

		<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>asset/admin1/plugins/fastclick/fastclick.min.js"></script>
				<script src="<?php echo base_url();?>asset/admin1/dist/js/app.min.js"></script>
				<!--<script src="<?php echo base_url();?>asset/admin1/docs.js"></script>-->
				<script src="<?php echo base_url();?>asset/admin1/plugins/slimScroll/jquery.slimscroll.min.js"></script>
				<?php if($star){ ?>
				<script type="text/javascript"> document.getElementById('qnimate').style.display = "block";</script>
				<?php } ?>
		 <script type="text/javascript">
						 function show()
						 {
							 //$('#qnimate').addClass('box box-danger');
							 document.getElementById('qnimate').style.display = "block";
						 }
											 /*  $(function(){
							$("#addClass").click(function () {
									  $('#qnimate').addClass('box box-danger direct-chat direct-chat-danger pull-right');
									});
								  
									$("#removeClass").click(function () {
								  $('#qnimate').removeClass('popup-box-on');
									});
						  })*/
					 </script>
					 <script type="text/javascript">
					 function saveForm()
					 { document.getElementById('qnimate').style.display = "block";
						var uid=document.getElementById('id').value;
						var sname=document.getElementById('sname').value;
						var msg=document.getElementById('sendmsg').value; 
						//alert(uid);
						//alert(msg);
						 $.ajax({
						  type: 'POST',
						  url: '<?php echo base_url();?>index.php/custlog/chatsends',
						  data: {'uidc': uid,
						  'msgc':msg,
						  'snamec':sname
						  },
						   success: function (data) {
							   //alert(data);
						  // $('#user_d').html(data);
							}
							//$("#qnimate").css("display","block");
						});
						//document.getElementById("addClass").onclick;
						
					 }
					 </script>
					 