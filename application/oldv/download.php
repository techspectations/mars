<html>
<body>
    <!--<body bgcolour='teal' background='img/background.png' width='100' height='50'/>-->
    <?php

    echo "<a href='options.php'><img src='img/back.jpg' width='30' height='30'/></a>";
    echo "<br/><br/>";
    echo "<div align='center'>"."<h1>Download Your File</h1>"."<table>";
    echo "<br/><br/>";
  echo "<form action='file_download.php' method='post' enctype='multipart/form-data'>
    <tr><td>Select File For Download(max:1MB):</td>
   <td><input type='file' onclick=window.open('uploads','width=40,height=200') name='file' id='file'></td></tr>
   </form></table>";
  ?>
</body>
</html>
