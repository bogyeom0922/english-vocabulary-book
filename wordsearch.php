<?php
    $con = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");

    if(empty($_REQUEST["search_word"])){ // 검색어 empty일때 예외처리
        $search_word =""; 
    } else {
        $search_word =$_REQUEST["search_word"];
    }

    $sql = "SELECT * FROM word WHERE Word LIKE '%$search_word%'";
    $ret = mysqli_query($con, $sql);
    mysqli_close($con);
?> 

<!DOCTYPE HTML>

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
						<li><a href="wordsearch.php" class="active">Search</a></li>
						<li><a href="test_Login.php">LOGIN</a></li>
				</ul>
			</nav>
		</header>

         <div id="wrapper">
               <section id="main" class="wrapper">
                  <div class="inner">
                     <h1 class="major">English Word Vocabulary</h1>
                     <span class="image fit"><img src="searchimg.png" alt="" /></span>
                     <p>필요로 하는 영단어를 찾아볼 수 있는 페이지 입니다.</p>
                     <p>영단어의 뜻 또는 단어 스펠링을 적어주세요.</p><br>
                     <div class="search">
                        <label>Search English Word &nbsp;</label>
                        <form class="navbar-form pull-left" method="get" action="">
                            <input type="text" name="search_word" class="form-control" placeholder="영어 스펠링을 입력 후 enter를 누르세요" autofocus>
                        </form>
                        
                     </div>
                  </div>
               </section>

               <div style="position:absolute; left: 180px; width: 800px;">
               <?php
                  while($row = mysqli_fetch_array($ret)) {
                     if ( $search_word != null ) {
                        echo "<TABLE BORDER=1>";
                        echo "<TR>";
                        echo "<TH>Word</TH><TH>Mean</TH>";
                        echo "</TR>";
                        echo "<TR>";
                        echo "<TD>", $row['Word'], "</TD>";
                        echo "<TD>", $row['Mean'], "</TD>";
                        echo "</TR>";
                     }
                  }
                  echo "</TABLE>";
               ?>
               </div>

               <FORM METHOD="post" ACTION="wordsearch2.php" style="position:absolute; left: 1100px;" >
                  <input type="submit" class="box" value="전체 단어 조회">
               </FORM>
         </div>
         <br><br><br><br>
   </body>
</html>