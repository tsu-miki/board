<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>新規登録</title>
 </head>
 <body>
   <h1>新規登録</h1>
   <form action="signup_done.php" method="post">
    <label for="name">ニックネーム</label>
    <input type="name" name="user_name"><br>
     <label for="email">email</label>
     <input type="email" name="user_email"><br>
     <label for="password">password</label>
     <input type="password" name="user_password"><br>
     <button type="submit">Sign Up!</button>
   </form>
 </body>
</html>