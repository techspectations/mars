
<div id="body" style="height:550px;">            
    <div id="content" style=" width: 782px;margin-left: 77px;">
                  <br/><br/><br/> 
                  <div id="mes" style="font-size: 42px;color: #004e98;margin-left: 318px;">INBOX</div>   
                    <br/><br/><br/>
          <?php
        echo'<table id="myTable" class="tablesorter3" border="1" cellspacing="0">
             <thead>
              <tr><th style="width: 28px;">S.NO</th><th style="width: 60px;">Date</th><th>Message</th><th style="width: 56px;">Delete</th></tr></thead><tbody>';
        $i = 0;

        foreach ($query1 as $row) {
            $date2 = $row->date;
            $message2 = $row->message;
            $id=$row->id;
            $i++;
            echo'<tr><td>' . $i . '</td><td>' . $date2 . '</td><td>' . $message2 . '</td><td>';
            ?>
            <a href="<?php echo site_url('money_c/messagedelete/' . $id); ?>"><img src="<?php echo base_url(); ?>assets/images/close.png"</a>
            <?php
            '</td></tr>';
        }


        echo "";
        echo '</table>';
        ?>          
                    
                    
        </div>
        
        
    </div>