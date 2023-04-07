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
        $connect = mysqli_connect("localhost", "user", "1234", "mydb");
        $number = $_GET['number'];
        session_start();
        $query = "select title, content, date, hit, User_id from board where number = $number";
        $result = $connect->query($query);
        $rows = mysqli_fetch_assoc($result);
        
        $hit = "update board set hit = hit + 1 where number = $number";
        $connect->query($hit);

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


            <table align=center style="position:absolute; top:180px; left:320px; width:900px;">
                <tr>
                    <td colspan="4" style="height: 20px;"><h3><?php echo $rows['title'] ?></h3></td>
                </tr>
                <tr>
                    <td style="height: 20px;">작성자</td>
                    <td style="height: 20px;"><?php echo $rows['User_id'] ?></td>
                    <td style="height: 20px;">조회수</td>
                    <td style="height: 20px;"><?php echo $rows['hit'] + 1 ?></td>
                </tr>


                <tr>
                    <td colspan="4" valign="top" style="height: 350px;">
                        <?php echo $rows['content'] ?></td>
                </tr>
            </table>

            <div style="position:absolute; top:675px; left:750px;">
                <button onclick="location.href='./index.php'">목록</button>&nbsp;&nbsp;
            </div>
            <h1>&nbsp;&nbsp;</h1>
	</body>
</html>