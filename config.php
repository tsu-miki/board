<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=board', 'root','root');
}catch(PDOException $e){
    echo 'DB接続エラー'.$e->getMessage();
}
?>