<?php
    session_start();
	
    $connect= mysqli_connect("localhost", "user", "1234", "mydb");
    $Use_id = $_SESSION['Use_id'];

    $sql_pre = "SELECT * FROM user WHERE Use_id='$Use_id'";
    $res_pre = mysqli_fetch_array(mysqli_query($connect, $sql_pre));
	
	//앞에서 입력받은값
	$Use_pw = $_POST['Use_pw2'];
	$Use_pw_Check = $_POST['Use_pw_Check2'];
	$Email = $_POST['Email2'];
	$P_Num = $_POST['P_Num2'];
	
	//원래 있었던값
	$Use_pw_pre = $res_pre['Use_pw'];
	$Use_pw_Check_pre = $res_pre['Use_pw'];
	$Email_pre = $res_pre['Email'];
	$P_Num_pre = $res_pre['P_Num'];

    $change_cnt = 0;

	if($Use_pw=="")
	{
        echo "<script>alert('Password는 비울 수 없습니다!');";
        echo "window.location.href='test_MyPage.php';</script>";
        exit;
	}
	
	if($Use_pw_Check=="")
	{
        echo "<script>alert('Password Check는 비울 수 없습니다!');";
        echo "window.location.href='test_MyPage.php';</script>";
        exit;
	}
	
	if($Use_pw!=$Use_pw_Check)
	{
        echo "<script>alert('Password와 Password Check는 일치하지 않습니다!');";
        echo "window.location.href='test_MyPage.php';</script>";
        exit;
	}
	
    if($Use_pw!=$Use_pw_pre)
	{
        $change_cnt++;
    }
	
	 if($Use_pw!=$Use_pw_Check_pre)
	{
        $change_cnt++;
    }
	
    if($Email!=$Email_pre)
	{
        $change_cnt++;
    }
	
    if($P_Num!=$P_Num_pre)
	{
        $change_cnt++;
    }

    if($change_cnt==0){
        echo "<script>alert('변경 사항이 없습니다!');";
        echo "window.location.href='test_MyPage.php';</script>";
        exit;
    }

    $sql = "UPDATE user SET Use_pw='$Use_pw', Email='$Email', P_Num='$P_Num' WHERE Use_id='$Use_id'";
    $res = mysqli_query($connect, $sql);

    if($res){
        echo "<script>alert('내 정보를 변경했습니다!');";
        echo "window.location.href='test_MyPage.php';</script>";
    }
?>
<meta http-equiv="refresh" content="0;url=test_MyPage.php">