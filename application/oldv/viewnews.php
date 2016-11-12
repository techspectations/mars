
 <div id="body">            
		<div id="content">
                    <style>
                        th{
                            font-family: sans-serif;
                            font-size: 15px;
                        }
                        </style>
                    <table width="50" border="0" cellspacing="0" cellpadding="0">
  
    <th>Title</th>
    <th>Link</th>
    <th>Description</th>
    <th>Delete</th>
  
  
                  <?php foreach ($q as $news){ ?>
                   <?php $d=$news->id; ?>  
                   <tr>
    <td><?php echo $news->title; ?></td>
    <td><?php echo $news->slug; ?></td>
    <td><?php echo $news->text; ?></td>
    <td><a href="<?php echo site_url('money_c/newsdelete/'.$d);?>">Delete</a></td>
  </tr>
   <?php } ?> 
                    
                    
      </table>        
                    
                    
        </div>
        
        <div class="sidebar">
            <ul>	
               <li>
                    <h4><span>Our <strong>Pages</strong></span></h4>
                    <ul class="blocklist">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="examples.html">Examples</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                
                <li>
                    <h4><span>About <strong>Us</strong></span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus.</p>
                        </li>
                    </ul>
                </li>
                
               
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>