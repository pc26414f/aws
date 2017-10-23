<?php
date_default_timezone_set('Asia/Taipei');
$dt = date('Y-m-d H:i').'('.date('e').')';
?>
<html>
  <head>
    <title>AWS CodeDeploy</title>
  </head>
  <body>
    <p>Auto Deploy Trigger by GitHub Commit Success!</p>
    <div>Current System Time: <?php echo $dt;?></div>
    <div>By AWS CodeDeploy with GitHub Integrations & Services</div>
    <div>BTW, GitHub Auto Deployment API Sucks!</div>
  </body>
</html>
