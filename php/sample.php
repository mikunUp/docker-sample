<?php
define('DB_HOST', 'db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'dbtest');
try {
    $dsn = 'mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8;';
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // INSERT
    $stmtInsert = $pdo -> prepare("INSERT INTO user (name) VALUES (:name)");
    $name = 'mikunTEST';
    $stmtInsert->bindParam(':name', $name, PDO::PARAM_STR);
    $stmtInsert->execute();

    // SELECT
    $stmt = $pdo->prepare("select name from user");

    //executeでクエリを実行
    $stmt->execute();

    //fetchAllで結果を全件配列で取得
    $all = $stmt->fetchAll();

    //取得した配列をループさせて表示
    foreach($all as $loop){
        //結果を表示
        echo "name = ".$loop['name'].PHP_EOL;
    }
}
catch(PDOException $e){
  print('ERROR:'.$e->getMessage());
  exit;
}

?>
