<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Athena掲示板</title>
</head>
<body>

ログアウトしました。<br />
<br />
<a href="index.php">投稿一覧へ</a>

</body>
</html>
