<?php
    session_start();
	
	$rank=1;

    $connect= mysqli_connect("localhost", "user", "1234", "mydb");
    $Use_id = $_SESSION['Use_id'];

    $sql_log = "SELECT * FROM user WHERE Use_id='$Use_id'";
    $ret_log = mysqli_query($connect, $sql_log);
    $row_log = mysqli_fetch_array($ret_log);
	
	$con = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");
    $sql = "SELECT * FROM user  where Stage = 'Normal' order by Score desc";
	
	$ret = mysqli_query($con, $sql);
    if($ret) {
        $count = mysqli_num_rows($ret);
    }
    else {
        echo "userTBL 데이터 검색 실패!!!", "<br>";
        echo "실패 원인 :".mysqli_error($con);
        exit();
    }
	mysqli_close($con);
?> 

<html>
	<head>
		<title>Game Ranking</title>
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
					<li><a href="game.html">Game</a></li>
					<li><a href="EasyRanking.php" class="active">Ranking</a></li>
				</ul>
			</nav>
		</header>

		<div class="inner" style="position:absolute; top:300px; left:30px;">
			<ul>
				<a href="EasyRanking.php">EASY</a><br>
				<a href="NormalRanking.php">NORMAL</a><br>
				<a href="HardRanking.php">HARD</a><br>
				<a href="VeryHardRanking.php">VERY HARD</a><br>
			</ul>
		</div>

		<div id="wrapper">
			<img src="rankingicon.jpg" alt="" style="float: left;  margin-left: 215px; margin-top: 55px; width:70px; height:85px;"/>
			<section id="main" class="wrapper">
				<div class="inner" style="position:absolute; top:0px; left:140px;">
					<h1 class="major">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ranking</h1> 
				</div>
				<div class="inner" style="position:absolute; top:30px; left:500px;"> <h3>
				</h3></div>
			</section>
		</div>

		<div id="wrapper">
			<section id="rank" class="wrapper">
				<div class="inner" style="position:absolute; top:130px; left:140px;">
				<?php 
					echo "<TABLE BORDER=1>";
					echo "<TR>";
					echo "<TH>Ranking</TH> <TH>User Id</TH> <TH>High Score</TH> <TH>Game Date</TH>";
					echo "</TR>";
					while($row = mysqli_fetch_array($ret)) {
						echo "<TR>";
						echo "<TD>", $rank, "</TD>";
						echo "<TD>", $row['Use_id'], "</TD>";
						echo "<TD>", $row['Score'], "</TD>";
						echo "<TD>", $row['Game_date'], "</TD>";
						echo "</TR>";
						$rank += 1;
					}
					echo "</table>";
				?>
				</div>
			</section>
		</div>
	</body>
</html>