 <?php
    session_start();

    if(!isset($_SESSION['Use_id']) || !isset($_SESSION['Use_id'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"../index.html\";</script>";
    }

    $connect = mysqli_connect("localhost", "user", "1234", "mydb");
    $Use_id = $_SESSION['Use_id'];
    $sql = "SELECT * FROM user WHERE Use_id='$Use_id'";
    $res = mysqli_fetch_array(mysqli_query($connect, $sql));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="style3.css?after">
    <script src="https://kit.fontawesome.com/51db22a717.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>
	<FORM METHOD="post" ACTION="test_MyPage_Change.php"> 
		<div class="page-container">
		
			<div class="login-form-container shadow-light">
			 
					<div class="login-form-right-side">
				
					<div class="top-logo-wrap">
						
					</div>
					
					<h1>My Page</h1>
					
				</div>
				
				
				<div class="login-top-wrap1">
							<span><b>＊회원 정보</b></span>
				</div>
						
				<div class="login-form-left-side">
						
					<div class="login-input-container-1">
					
						<div class="login-input-wrap input-id">
							<i class="far fa-user"></i>
								&nbsp;&nbsp;<?=$res['Use_id']?>
						</div>
						
						<div class="login-input-wrap input-id">
								<i class="fas fa-calendar"></i>
								&nbsp;&nbsp;<?=$res['Birth']?>
						</div>
							
							<div class="login-input-wrap input-id">
								<i class="fas fa-envelope"></i>
								&nbsp;&nbsp;<?=$res['Email']?>
							</div>
							
						
					</div>
					
					<div class="login-input-container-2">
					
							<div class="login-input-wrap input-id">
								<i class="fas fa-pen"></i>
								&nbsp;&nbsp;<?=$res['Name']?>
							</div>
							
							<div class="login-input-wrap input-id">
									<i class="fas fa-phone"></i>
									&nbsp;&nbsp;<?=$res['P_Num']?>
								</div>
					</div>
				</div>
				
				<div class="login-top-wrap2">
							<span><b>＊회원 정보 수정</b></span>
				</div>
				
				 <div class="login-form-left-side">
						
					<div class="login-input-container-3">
					
						<div class="login-input-wrap input-password">
							<i class="fas fa-lock"></i>
							<input placeholder="Password"  type="password" name="Use_pw2">
						</div>
							
							<div class="login-input-wrap input-id">
								<i class="fas fa-envelope"></i>
								<input placeholder="E-mail"  type="text" name="Email2">
							</div>
							
						
					</div>
					
					<div class="login-input-container-2">
					
							<div class="login-input-wrap input-password">
								<i class="fas fa-check"></i>
								<input placeholder="Password Check"  type="password" name="Use_pw_Check2">
							</div>
							
							<div class="login-input-wrap input-id">
									<i class="fas fa-phone"></i>
									<input placeholder="Phone Number"  type="text" name="P_Num2">
								</div>
					</div>
				</div>
				
				<div class="login-btn-wrap">
						<button class="login-btn" type="submit" style='cursor:pointer;'>변경</button>
			   </div>
				</FORM> 
				
				<FORM METHOD="post" ACTION="test_Logout_Ok.php"> 
				<div class="login-btn-wrap">
						<button class="login-btn" type="submit" style='cursor:pointer;'>로그아웃</button>
			   </div>
			   
			</div>
			
		</div>
	 </FORM> 

</body>

</html>