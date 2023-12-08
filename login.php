<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 페이지</title>
</head>
<body>
  <form method="GET" action="/login_check.php">
  <fieldset>
  <legend>로그인</legend>
  <ul>
    <li>
    <label for="text">아이디 : </label>
    <input type="text" name="login_id" placeholder="아이디"/>
    </li>
    <li>
    <label for="password">비밀번호 : </label>  
    <input type="password" name="login_pw" placeholder="비밀번호"/>
    </li>
    <input type="submit" value="로그인">
  </ul>
    </fieldset>
  </form>

</body>
</html>