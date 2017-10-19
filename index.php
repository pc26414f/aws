<?php
$dt = date('Y-m-d H:i').' '.date('T');
?>
<html>
  <head>
    <title>Auto Deploy From GitHub</title>
  </head>
  <body>
    <p>Auto Deploy From GitHub Success!</p>
    <div>Current System Time: <?php echo $dt;?></div>
    <div>By AWS CodeDeploy & GitHub Service</div>
  </body>
</html>
