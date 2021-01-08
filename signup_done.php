<?php
session_start();
//DBに接続
try{
  $dbh = new PDO('mysql:host=localhost;dbname=board', 'root','root');
  // DBに情報を挿入
	$statement = $dbh->prepare('INSERT INTO users SET user_name=?, user_email=?, user_password=?, post_data=NOW()');
  $statement->execute(array($_POST['user_name'], $_POST['user_email'], $_POST['user_password']));
   echo '情報が登録されました。';
}catch(PDOException $e){
  echo 'DB接続エラー'.$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>新規登録</title>
 </head>
 <body>
     <a href="login.php">ログインする</a>
 </body>
</html>