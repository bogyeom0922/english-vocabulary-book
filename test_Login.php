<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css?after">
    <script src="https://kit.fontawesome.com/51db22a717.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>
		<div class="page-container">

			<div class="login-form-container shadow">
			
				<div class="login-form-right-side">
				
					<div class="top-logo-wrap">
						
					</div>
					
					<h1>Welcome to the Login Page!!</h1>
					
				</div>
				
				<div class="login-form-left-side">
				
					<div class="login-top-wrap">
						<span>계정이 없으신가요?</span>
						<a href="test_SignUp.php" target=_blank><button class="create-account-btn shadow-light" style='cursor:pointer;'>Sign Up</button></a>
					</div>
					
					<form method="post" action="test_Login_Ok.php">
					
					<div class="login-input-container">
					
						<div class="login-input-wrap input-id">
							<i class="far fa-user"></i>
							<input placeholder="ID" type="text" name="Use_id">
						</div>
						
						<div class="login-input-wrap input-password">
							<i class="fas fa-lock"></i>
							<input placeholder="Password"  type="password" name="Use_pw">
						</div>
						
					</div>
					
					<div class="login-btn-wrap">
						<button class="login-btn" onclick="location.href = 'Login_1.html'" style='cursor:pointer;'>Login</button>
						<a href="test_Forget_Pw1.php" target=_blank>Forgot Password?</a>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</form>
</body>

</html>