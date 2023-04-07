<?php
    session_start();
	
    $connect= mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");
    $Use_id = $_SESSION['Use_id'];

    $sql_pre = "SELECT * FROM user WHERE Use_id='$Use_id'";
    $res_pre = mysqli_fetch_array(mysqli_query($connect, $sql_pre));
	
	//앞에서 입력받은값
	$Use_id = $_POST['$Use_id2'];
	$Name = $_POST['Name2'];
	$Birth = $_POST['Birth2'];
	$P_Num = $_POST['P_Num2'];
	$Email = $_POST['Email2'];
	
	//원래 있었던값
	$Use_id_pre = $res_pre['Use_id'];
	$Use_Name_pre = $res_pre['Name'];
	$Use_Birth_pre = $res_pre['Birth'];
	$Use_P_Num_pre = $res_pre['P_Num'];
	$Use_Email_pre = $res_pre['Email'];

    $change_cnt = 0;

	//공백 if문
	if($Use_id=="")
	{
        echo "<script>alert('ID는 비울 수 없습니다!');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
	}
	
	if($Name=="")
	{
        echo "<script>alert('Name은 비울 수 없습니다!');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
	}
	
	if($Birth=="")
	{
        echo "<script>alert('Birth-Date는 비울 수 없습니다!');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
	}
	
	if($P_Num=="")
	{
        echo "<script>alert('Phone Number는 비울 수 없습니다!');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
	}
	
	if($Email=="")
	{
        echo "<script>alert('E-mail은 비울 수 없습니다!');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
	}
	
	//일치 if문
	if($Use_id!=$Use_id_pre)
	{
        echo "<script>alert('ID를 다시 확인해주세요.');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
	}
	
    if($Name!=$Name_pre)
	{
		echo "<script>alert('Name을 다시 확인해주세요.');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
        $change_cnt++;
    }
	
	 if($Birth!=$Birth_pre)
	{
		echo "<script>alert('Birth-Date를 다시 확인해주세요.');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
        $change_cnt++;
    }
	
    if($P_Num!=$P_Num_pre)
	{
		echo "<script>alert('Phone Number를 다시 확인해주세요.');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
        $change_cnt++;
    }
	
    if($Email!=$Email_pre)
	{
		echo "<script>alert('E-mail을 다시 확인해주세요.');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
        exit;
        $change_cnt++;
    }

    if($change_cnt==0){
        echo "<script>alert('비밀번호 찾기 완료.');";
        echo "window.location.href='test_Forget_Pw2.php';</script>";
    }

    #$sql = "UPDATE user SET Use_pw='$Use_pw', Email='$Email', P_Num='$P_Num' WHERE Use_id='$Use_id'";
    #$res = mysqli_query($connect, $sql);

    if($res){
        echo "<script>alert('비밀번호 찾기 완료.');";
        echo "window.location.href='test_Forget_Pw1.php';</script>";
    }
?>
<meta http-equiv="refresh" content="0;url=test_Forget_Pw1.php">