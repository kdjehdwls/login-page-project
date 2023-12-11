<?php
require_once("db.php");

$login_id = isset($_GET['login_id']) ? $_GET['login_id'] : null;
$login_pw = isset($_GET['login_pw']) ? $_GET['login_pw'] : null;

// 파라미터 체크
if ($login_id == null || $login_pw == null){    
    header("Location: /login.php");
    exit();
}

// 회원 데이터
$member_data = db_select("select * from member where id = ?", array($login_id));


// 회원 데이터가 없다면
if ($member_data == null || count($member_data) == 0){
    header("Location: /loginfail.php");
    exit();
}
//사용자에게 전달받은 비밀번호 암호화
$hash_pw = password_hash($login_pw, PASSWORD_BCRYPT);
// 비밀번호 일치 여부 검증
$is_match_password = password_verify($member_data[0]['pw'], $hash_pw);

// 비밀번호 불일치
if ($is_match_password === false){
    header("Location: /loginfail.php");
    exit();
}
//로그인 성공
session_start();
$_SESSION['member_id'] = $member_data[0]['id'];

header("Location: /afterlogin.php");
?>
