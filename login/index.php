<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
  <div class="sub-container">
    <form class="submission-form" action="auth/login.php" method="post">
    <div class="login-form">
      <div class="title">
          login
      </div>
      <div class="input-fields">
        <label class="label">Username</label>
        <input type="text" class="input" name="email">
      </div>
      <div class="input-fields">
        <label class="label">Password</label>
        <input type="password" class="input" name="password">
      </div>
     
      
	   <div ><br><br><br><br><br>
       <input class="btn" type="submit" value="Login" />
      </div>
    </div>
	</form>
  </div>
</div>	
	
</body>
</html>