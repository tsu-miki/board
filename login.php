<?php
session_start();
require('config.php');

//DBへ問い合わせ
if(!empty($_POST)){
  if($_POST['user_email']!==''&& $_POST['user_password']!==''){
    $login = $db->prepare('SELECT* FROM users WHERE user_email=? AND user_password=?');
    $login->execute(array($_POST['user_email'],$_POST['user_password']));
    $user = $login->fetch();
    //ログイン成功した時にindex.phpにとぶ、違う場合はページ遷移しない
    if($user){
      $_SESSION['id'] = $user['id'];
      $_SESSION['time'] = time();
      if($_POST['save'] === 'on'){
        setcookie('user_email',$_POST['user_email'], time()+60*60*24*14);
      }
      header('Location:top.php');
      exit();
    }else{
      $error['login'] = 'failed';
    }
  }else{
    $error['login'] = 'blank';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>ログイン</title>
 </head>
 <body>
   <h1>ログイン</h1>
   <form action="" method="post">
    <div>
     <label for="email">email</label>
     <input type="email" name="user_email"><br>
    </div>
     <label for="password">password</label>
     <input type="password" name="user_password"><br>
    </div>
     <button type="submit">Login</button>
   </form>
 </body>
</html>
