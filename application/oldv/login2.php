

<html>
   
    <head>
        <style>
    
   

td{
    background-color:lightsalmon;
    color:black;
     text-align:left;
}
table{
    border: 4px solid black;
    align:center;

}
</style>
    </head>
    <body>
        <?php
       
  echo form_open('money_c/loggin');?>
          <table border="2" style="width:20%" >
        
              
            <tr><td>username</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr><td>password</td>
                <td><input type="password" name="pwd"></td></tr>
            <tr><td></td>
                <td><input type="submit" name="login" value="login">
            </td></tr>
              </table>
        <?php echo form_close();?>
    
    </body>
</html>