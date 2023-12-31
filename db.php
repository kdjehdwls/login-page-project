<?php
//db 접속함수
function db_get_pdo()
{
    $host = 'kdjehdwls.ddns.net';
    $port = '3306';
    $dbname = 'loginpage';
    $charset = 'utf8';
    $username = 'admin';
    $db_pw = "admin";
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
    $pdo = new PDO($dsn, $username, $db_pw);
    return $pdo;
}
//db 조회 함수
function db_select($query, $param=array()){
    $pdo = db_get_pdo();
    try {
        $st = $pdo->prepare($query);
        $st->execute($param);
        $result =$st->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        return $result;
    } catch (PDOException $ex) {
        return false;
    } finally {
        $pdo = null;
    }
}
?>
