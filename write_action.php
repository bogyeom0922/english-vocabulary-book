<?php
$connect = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");

$User_id = $_POST['User_id'];                   //Writer
$pw = $_POST['pw'];                     //Password
$title = $_POST['title'];               //Title
$content = $_POST['content'];           //Content
$date = date('Y-m-d H:i:s');            //Date

$URL = './index.php';                   //return URL


$query = "INSERT INTO board (number, title, content, User_id, date, hit) 
        values(null,'$title', '$content', '$User_id', '$date', 0)";


$result = $connect->query($query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>