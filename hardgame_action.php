<?php
	session_start();
	
    $connect= mysqli_connect("localhost", "user", "1234", "mydb");

    $Mean = $_SESSION['Mean'];
    $Word = $_POST['word'];
    $score = 0;
    $date = date('Y-m-d H:i:s');
    if($Word) {
        $_SESSION['i'] += 1;
    }

    $sql = "select * from word where Word='$Word'";
    $ret = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($ret);
    
    $Use_id = $_SESSION['Use_id'];

    $sql_log = "SELECT * FROM user WHERE Use_id='$Use_id'";
    $ret_log = mysqli_query($connect, $sql_log);
    $row_log = mysqli_fetch_array($ret_log);

    if ( strcasecmp($row['Word'], $Word) == 0 ) {
        $score = $row_log['Score'] + 1;   ?>
        <script>
            alert("<?php echo "정답입니다" ?>");
        </script>
        <?php
        if ($_SESSION['i'] < 200) { 
            echo "<script>location.href='hardgame.php'</script>";
        }
        else if ($_SESSION['i'] >= 200) { 
            echo "<script>location.href='HardRanking.php'</script>";
        }
    } else { ?>
        <script>
            alert("<?php echo "오답입니다" ?>");
        </script>
    <?php
    }

    $Use_id = $row_log['Use_id'];
    $Use_pw = $row_log['Use_pw'];
    $Name = $row_log['Name'];
    $Email = $row_log['Email'];
    $P_Num = $row_log['P_Num'];
    $Birth = $row_log['Birth'];
    
    mysqli_query($connect, "UPDATE user SET Score = '$score' WHERE Use_id = '$Use_id'");
    mysqli_query($connect, "UPDATE user SET Stage = 'Hard' WHERE Use_id = '$Use_id'");
    mysqli_query($connect, "UPDATE user SET Game_date = '$date' WHERE Use_id = '$Use_id'"); 

    mysqli_close($connect);

?>