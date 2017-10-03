
<!DOCTYPE html>
<html lang = "en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel= "stylesheet" type= "text/css" href= "homepage.css" media= "screen" />

<title> Funny Survey</title>

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

	<h1 align="center"> Funny Survey </h1>

	<form action = "score_f.php" method="post" id="quiz">
	<ol>
		<li>
		<h3> How do you feel about God?</h3>

		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> He doesn't exist </label>
		</div>

		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B">He is powerful but not good</label>
		</div>
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> He is good but not powerful </label>
		</div>
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D">He is good and powerful </label>
		</div>
		 
		</li>

		<li>
		<h3>How would describe your interest towards food? </h3>

		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> Think about food only when I am hungry </label>
        </div>

        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
             <label for="question-2-answers-B"> Not really that interested in food </label>
        </div>
		<div>
			<input type = "radio" name = "question-2-answers" id="question-1-answers-C" value="C" />
			<label for="question-2-answers-C">passionate about food </label>
		</div>
		<div>
			<input type = "radio" name = "question-2-answers" id="question-1-answers-D" value="D" />
			<label for="question-2-answers-D">Passionate towards all varieties of food </label>
		</div>
		
		</li>

		<li>
		<h3> What is the first thing you do when you get home? </h3>

		<div>
             <input type="checkbox" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> Call up your friends to make plans to go out </label>
        </div>

        <div>
             <input type="checkbox" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B">Change into comfy clothes</label>
        </div>
		<div>
             <input type="checkbox" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> Go to your room and play some music </label>
        </div>
		<div>
             <input type="checkbox" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> Munch on some chips and watch TV </label>
        </div>

		</li>

		<li>
		<h3>  How fast can you run a mile? </h3>

		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> 4-6 minutes</label>
        </div>

        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> 6-8 minutes </label>
        </div>
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C">8-10 minutes </label>
        </div>
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D">Faster than my friends atleast </label>
        </div>
		 </li>

		<li>
		<h3> Are you childish?</h3>

		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> Yes </label>
        </div>

        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> No </label>
        </div>
	</li>

	</ol>

	<div class="button">
    <input type="submit" value="Submit"/>
	</div>

	</form>

</div>

<br>
<br>

</body>
</html>
