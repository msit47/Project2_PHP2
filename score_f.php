

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Funny Survey </title>

<link rel="stylesheet" type="text/css" href="homepage.css" />
</head>

<body>

<nav>
  <ul>
    <li style="float:right">
      <div>
          <li><a href="homepage.html"><b>Home</b></a></li>
      <li><a href="funny.php"><b>Funny Survey</b></a></li>
      <li><a href="personality.php"><b>Personality Test</b></a></li>
            </ul>
        </div>
    </li>
     
  </ul>
</nav>

	<div id="page-wrap">

		<h1 align="center"> Funny Survey</h1>
		<?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "D")   { $totalCorrect++; }
            if ($answer2 == "D")   { $totalCorrect++; }
            if ($answer3 == "C,D") { $totalCorrect++; }
            if ($answer4 == "C")   { $totalCorrect++; }
            if ($answer5 == "B")   { $totalCorrect++; }

            echo "<div id='results'> your Score = $totalCorrect/5 </div>";
            if ($totalCorrect>=3)  { echo "You have done Great job"; }
			 
        ?>

	</div>
</body>

</html>
