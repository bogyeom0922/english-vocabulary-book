<!DOCTYPE html>
<html>
	<head>
		<title>Register Words</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <style>
            table.table2 {
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin: 20px 10px;
            }

            table.table2 tr {
                width: 50px;
                padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
            }

            table.table2 td {
                width: 100px;
                padding: 10px;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
            }
        </style>
    </head>
	<body class="is-preload">
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

        <section id="main" class="wrapper">
			<div class="inner" style="text-align:center; position:absolute; left:120px;">
				<h1 class="major">게시글 작성하기</h1> 
			</div>
		</section>

        <form method="post" action="write_action.php" style="position:absolute; top:290px; left:215px; width:1100px; height:900px;">
            <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
                <tr>
                    <td>
                        <table class="table2">
                            <tr>
                                <td>작성자</td>
                                <td><input type="text" name="User_id" size=30></td>
                            </tr>

                            <tr>
                                <td>제목</td>
                                <td><input type="text" name="title" size=70></td>
                            </tr>

                            <tr>
                                <td>내용</td>
                                <td><textarea name="content" cols=75 rows=15></textarea></td>
                            </tr>
                        </table>

                        <center>
                            <input style="height:26px; width:47px; font-size:16px;" type="submit" value="작성">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
	</body>
</html>