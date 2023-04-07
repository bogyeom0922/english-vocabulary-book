<?php
    session_start();
	
    $connect= mysqli_connect("localhost", "user", "1234", "mydb");
    $Use_id = $_SESSION['Use_id'];

    $sql_log = "SELECT * FROM user WHERE Use_id='$Use_id'";
    $ret_log = mysqli_query($connect, $sql_log);
    $row_log = mysqli_fetch_array($ret_log);

    $con = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");
?> 


<!DOCTYPE HTML>
<html>
   <head>
      <title>Easy Game</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
   </head>
   
   <body class="is-preload">
        <header id="header">
            <a href="index.html" class="title">English Vocabulary Book</a>
            <nav>
                <ul>
                <li><a href="index.html">Home</a></li>
					<li><a href="game.html" class="active">Game</a></li>
					<li><a href="EasyRanking.php">Ranking</a></li>
               </ul>
            </nav>
        </header>
        <section id="main" class="wrapper">
			<div class="inner" style="position:absolute; top:0px; left:140px;">
				<h1 class="major">뜻에 맞는 올바른 영단어를 작성하시오</h1> 
			</div>
		</section>
        <div id="wrapper" style="position:absolute; top: 300px; left: 220px; width: 1150px;">
            <form method="post" action="easygame_action.php">
                <?php

                            echo "&nbsp&nbsp&nbsp&nbsp";
                            $sql = "SELECT * FROM word order by rand() limit 1";
                            $ret = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($ret)) {
                                echo "<h2>";
                                echo $row['Mean'];
                                $_SESSION['Mean'] = $row['Mean'];
                                echo "</h2><br>";?>
                                <input placeholder="Word"  type="text" name="word"  style="width:380px; height:80px;" />
                                
                            <?php
                            }  ?>
                </form>
        </div>
   </body>
</html>