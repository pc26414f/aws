<?php
$ip = [];

if(!empty($_SERVER['HTTP_CLIENT_IP'])) $ip[] = 'HTTP_CLIENT_IP: '.$_SERVER['HTTP_CLIENT_IP'];
if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) $ip[] = 'HTTP_X_FORWARDED_FOR: '.$_SERVER['HTTP_X_FORWARDED_FOR'];
if(!empty($_SERVER['HTTP_X_FORWARDED'])) $ip[] = 'HTTP_X_FORWARDED: '.$_SERVER['HTTP_X_FORWARDED'];
if(!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) $ip[] = 'HTTP_X_CLUSTER_CLIENT_IP: '.$_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
if(!empty($_SERVER['HTTP_FORWARDED_FOR'])) $ip[] = 'HTTP_FORWARDED_FOR: '.$_SERVER['HTTP_FORWARDED_FOR'];
if(!empty($_SERVER['HTTP_FORWARDED'])) $ip[] = 'HTTP_FORWARDED: '.$_SERVER['HTTP_FORWARDED'];
if(!empty($_SERVER['REMOTE_ADDR'])) $ip[] = 'REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR'];
if(!empty($_SERVER['HTTP_VIA'])) $ip[] = 'HTTP_VIA: '.$_SERVER['HTTP_VIA'];
?>
<html>
  <head>
    <title>Instance IP</title>
  </head>
  <body>
    <p>Current Instance IP:</p>
    <?php foreach($ip as $val){?>
    <div><?php echo $val;?></div>
    <?php }?>
  </body>
</html>
