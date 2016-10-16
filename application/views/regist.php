<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
 <base href="<?php echo site_url()."/";?>">
</head>
<body>
  <form action="welcome/save_user" method="post">
  	用户名：<input type="text" name="username"/></br>
  	密码：<input type="password" name="password"/></br>
  	性别：<input type="radio" value="男" name="sex"/>男
  	      <input type="radio" value="女" name="sex"/>女</br>
  	真名：<input type="text" name="realname"/></br>
  	生日：<input type="text" name="birthday"/></br>
    <input type="submit" value="注册"/>
  </form>
</body>
</html>