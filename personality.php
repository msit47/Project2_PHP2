

<!DOCTYPE html>
<html lang = "en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel= "stylesheet" type= "text/css" href= "homepage.css" media= "screen" />
<title> Personality Test</title>
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

<div id = "page-wrap">

	<h1 align="center"> Personality Test</h1>

	<form action="score_p.php" method="post" id="quiz">
	<ol>
		<li>
		<h3>  Choose the word that describes you best?</h3>

		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> Loud </label>
		</div>

		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> open</label>
		</div>

		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> conscientious </label>
		</div>
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> shy </label>
		</div>

		<li>
		<h3>Do you suffer from anxiety?</h3>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A">Yes</label>
        </div>

        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">No</label>
        </div>
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">Sometimes</label>
        </div>
		<div>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D">Always</label>
        </div>
		</li>

		<li>
		<h3> Two close Friends are in a fight, what do you do? </h3>

		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> Have them sit down and talk it out </label>
        </div>

        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B">Lighten up the mood by making them laugh</label>
        </div>
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C">Become upset, and feel pressure to pick a side</label>
        </div>
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> They'll have to work it out </label>
        </div>
		</li>

		<li>
		<h3>  What sort of movie do you prefer to watch? </h3>

		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> Spy thrillers </label>
        </div>

        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> I don't have a preference </label>
        </div>

        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> Dramas</label>
        </div>
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> Historical biopics </label>
        </div>
		 </li>

		<li>
		<h3> If you knew you'd die tomorrow, how would you spend your last day? </h3>

		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> Crying a lot probably </label>
        </div>

        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> Spending time with loved ones  </label>
        </div>
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C"> Learning as much about the world as possible </label>
        </div>
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> Fulfilling a lifelong dream </label>
			
        </div>
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" />
             <label for="question-5-answers-E"> Enjoying as much as possible </label>
        </div>
		</li>

	</ol>

	<div class="button">
    <input type="submit" value="submit"/>
	</div>

	</form>

</div>
<br>
<br>

</body>
</html>
