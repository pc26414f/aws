<?php
$dt = date('Y-m-d H:i').' '.date('e');
?>
<html>
  <head>
    <title>Auto Deploy From GitHub</title>
  </head>
  <body>
    <p>Auto Deploy From GitHub Success!</p>
    <div>Current System Time: <?php echo $dt;?></div>
    <div>By AWS CodeDeploy</div>
  </body>
</html>
