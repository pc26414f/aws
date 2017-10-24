<?php
date_default_timezone_set('Asia/Taipei');
$dt = date('Y-m-d H:i').'('.date('e').')';

/*
$dsn = 'mysql:host=db0.cu46sumlir5i.ap-northeast-1.rds.amazonaws.com;port=3306;dbname=LA;charset=utf8';
$account = 'root';
$password = '12345678';

try{
	$dbh = new PDO($dsn, $account, $password);
	$stmt = $dbh->prepare('SELECT * FROM target');
	$stmt->execute(array());
	$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
	echo $e->getMessage();
}
*/
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
    
    <div>
      <ul>
        <?php /*foreach($response as $row){*/ ?>
        <li>ID: <?php #echo $row['id'];?>, Name: <?php #echo $row['name'];?></li>
        <?php /*}*/ ?>
      </ul>
    </div>
  </body>
</html>
