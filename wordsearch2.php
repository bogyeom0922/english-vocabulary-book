<?php
    $con = mysqli_connect("localhost", "user", "1234", "mydb") or die("MySQL 접속 실패!!");
    $sql = "SELECT * FROM word";
    $ret = mysqli_query($con, $sql);
    mysqli_close($con);
?> 

<!DOCTYPE HTML>

<html>
   <head>
      <title>English Word Search Service</title>
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
                  <span class="image fit"><img src="lookupimg.png" alt=""/></span>
                  <p>단어장에 등록되어있는 전체 단어를 조회할 수 있는 페이지 입니다.</p>
                  <div class="search">
                     <label>전체 단어 조회 &nbsp;</label>
                  </div>
               </div>
            </section>
            <div style="position:absolute; left: 180px; width: 800px;">
            <?php
               echo "<TABLE BORDER=1>";
               echo "<TR>";
               echo "<TH>Word</TH><TH>Mean</TH>";
               echo "</TR>";

               while($row = mysqli_fetch_array($ret)) {
                  echo "<TR>";
                  echo "<TD>", $row['Word'], "</TD>";
                  echo "<TD>", $row['Mean'], "</TD>";
                  echo "</TR>";
               }
               echo "</TABLE>";
            ?>
            </div>
         </div>
         
   </body>
</html>