<?php
	$connect = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");

	$Use_id = $_POST['Use_id'];
	$Use_pw = $_POST['Use_pw'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$P_Num = $_POST['P_Num'];
	$Birth = $_POST['Birth'];
		
	//id 중복 확인
	$query1 = "select * from user where Use_id='$Use_id'";
	$result1 = $connect->query($query1);
	$count = mysqli_num_rows($result1);
	
if ($count)
{      
//만약 중복된 id가 있다면
	?>
	<script>
			alert('이미 존재하는 ID입니다.');
			history.back();
    </script>
	<?php
}
else
{ 
//없다면
//입력받은 데이터를 DB에 저장

	$query = "insert into user(Use_id, Use_pw, Name, Email, P_Num, Birth, Score, Stage, Ranking, Game_date) values('$Use_id', '$Use_pw', '$Name', '$Email', '$P_Num', '$Birth', 0, null, null, null)";

    $result = $connect->query($query);

    //저장이 되었다면 (result = true) 가입 완료
    if ($result)
	{
	?>
	<script>
            alert('회원가입에 성공하였습니다.');
            location.replace("./test_Login.php");
    </script>

	<?php
	}
	else
	{
	?>
	<script>
           alert("회원가입에 실패하였습니다.");
		   alert("실패 원인 :".mysqli_error($connect));
     </script>
	 <?php
	 }
}

mysqli_close($connect);

?>