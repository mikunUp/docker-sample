<?php
define('DB_HOST', 'db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'dbtest');
try {
    print("aaaa");
    $dsn = 'mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8;';
    // print($dsn);
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    var_dump($pdo);
//    print("aaa");
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print('接続しました。');
}
catch(PDOException $e){
  print('ERROR:'.$e->getMessage());
  exit;
}

?>
