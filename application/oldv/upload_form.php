<style>
    
    input[type="file"]{
        height:40px;
        
  }

    input[type="file"]::-webkit-file-upload-button{
        height:45px;
        width:100px;
        border-radius:15px;
        background-color:orange;
  }
    </style>
<div id="body" style="height:550px;">            
		<!--<div id="content">-->
                   
                    
             <?php echo $error;
//             print_r($data['query1']);die;
             $data['query1']=$data1;
// print_r($data1);die;
             ?>
                    <br/><br/>
                    <div id="te" style="margin-left: 373px;font-size: 31px;color: blue;">Upload Your Files </div>
                    <br/><br/><br/><br/>
<?php echo form_open_multipart('money_c/do_upload');?>
                    <div  class="demo">
                        <div id="file" style="margin-left: 282px;"> Enter file name related to it:<input type="text" name="filename" id="filename"/></div>
                    <input type="file" name="userfile" size="20" style="border: none;margin-left: 339px;"/>

<br /><br />

<input type="submit" value="upload" style="margin-left: 346px;width:100px;border-radius:15px; background-color:orange;" />

<?php echo form_close();  ?>       
                    
                    </div>
                    <br/><br/><br/><br/><br/><br/>
                    <div id="d" style="margin-left: 282px;font-size: 31px;color: blue;">Download Your Documents</div>
                    <br/><br/> <br/><br/>
                    <?php echo form_open_multipart('money_c/download');?>
                    <div id="in" style="    margin-left: 358px;">
                    select your file:<select name="download" >
                    <option value="">select</option>
                    <?php foreach ($query1 as $row6)
                    {

                        ?>
    <option value="<?php echo $row6->filename; ?>"><?php echo $row6->filename; ?></option>
                  <?php   }
?>
                    </select>
                    
                    </div>
<br /><br />

<input type="submit" value="download" style="margin-left: 346px;width:100px;border-radius:15px; background-color:orange;" />

<?php echo form_close();  ?>     
                     <!--<a href="<?php // echo site_url('money_c/download');?>">Click here</a>-->
        <!--</div>-->
        
        
    </div>