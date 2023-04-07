<!DOCTYPE HTML>
<html>
	<head>
		<title>REGISTER WORDS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

    <?php
    $connect = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");
    $query = "SELECT * FROM board order by number desc";
    $result = mysqli_query($connect, $query);
    if($result) {
        $total = mysqli_num_rows($result);
    }
    else {
        echo "board 데이터 검색 실패!!!", "<br>";
        echo "실패 원인 :".mysqli_error($connect);
        exit();
    }
    ?>

		<header id="header">
			<a href="index.html" class="title">English Vocabulary Book</a>
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="game.html" class="active">REGISTER</a></li>
					<li><a href="test_Login.php">LOGIN</a></li>
				</ul>
			</nav>
		</header>

        <div id="wrapper">
			<section id="main" class="wrapper">
				<div class="inner" style="text-align:center">
					<h1 class="major" onClick="location.href='./write.php'">REGISTER WORDS</h1> 
				</div>
			</section>
		</div>

        <table align=center style="position:absolute; top:290px; left:170px; width:1200px;">
            <thead align="center">
                <tr>
                    <td width="80" align="center">번호</td>
                    <td width="370" align="center">제목</td>
                    <td width="100" align="center">작성자</td>
                    <td width="200" align="center">날짜</td>
                    <td width="100" align="center">조회수</td>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                        if ($total % 2 == 0) {
                    ?>
                        <tr class="even">
                        <?php } else {
                        ?>
                        <tr>
                        <?php } ?>
                        <td width="50" align="center"><?php echo $total ?></td>
                        <td width="500" align="center">
                            <a href="read.php?number=<?php echo $rows['number'] ?>">
                                <?php echo $rows['title'] ?>
                        </td>
                        <td width="100" align="center"><?php echo $rows['User_id'] ?></td>
                        <td width="200" align="center"><?php echo $rows['date'] ?></td>
                        <td width="50" align="center"><?php echo $rows['hit'] ?></td>
                        </tr>
                    <?php
                    $total--;
                }
                ?>
            </tbody>
        </table>
	</body>
</html>