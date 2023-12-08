<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인 페이지</title>
</head>
<body>
    <h1>로그인</h1>
    <form method="GET" action="/login_check.php">
      <div>
        아이디 : 
        <input type="text" name="login_id" />
        </div>
        <div>
            비밀번호 : 
            <input type="password" name="login_pw" />
        </div>               
        <div><input type="submit" value="로그인"></div>
        </form>

</body>
</html>