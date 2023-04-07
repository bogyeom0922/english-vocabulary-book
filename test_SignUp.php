<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/51db22a717.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>
	<form method="post" action="test_SignUp_Ok.php">
		<div class="page-container">
		
			<div class="login-form-container shadow">
			
				<div class="login-form-right-side">
				
					<div class="top-logo-wrap">
						
					</div>
					
					<h1>Welcome to the Sign Up Page!!</h1>
					
				</div>
				
				<div class="login-form-left-side">
		
						<div class="login-top-wrap">
							<span>회원가입을 위해 필요한 정보를 기입해주세요.</span>
						</div>
						
					<div class="login-input-container">
					
						<div class="login-input-wrap input-id">
							<i class="far fa-user"></i>
							<input placeholder="ID" type="text" name="Use_id">
						</div>
						
						<div class="login-input-wrap input-password">
							<i class="fas fa-lock"></i>
							<input placeholder="Password"  type="password" name="Use_pw">
						</div>

							<div class="login-input-wrap input-id">
								<i class="fas fa-pen"></i>
								<input placeholder="Name"  type="text" name="Name">
							</div>
						
							<div class="login-input-wrap input-id">
								<i class="fas fa-envelope"></i>
								<input placeholder="E-mail"  type="text" name="Email">
							</div>
							
							<div class="login-input-wrap input-id">
									<i class="fas fa-phone"></i>
									<input placeholder="Phone Number ex) 01012345678"  type="text" name="P_Num">
								</div>
							
							<div class="login-input-wrap input-id">
								<i class="fas fa-calendar"></i>
								<input placeholder="Birth-Date ex) 220526"  type="text" name="Birth">
							</div>
						
					</div>
					
					<div class="login-btn-wrap">
						<button class="login-btn" type="submit" style='cursor:pointer;'>Join</button>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</form>
</body>

</html>