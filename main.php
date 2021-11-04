<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($db,$query));


?>
<html>
<head>
	<title>Quiz Application</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
		
		<h1>Quiz Application</h1>
		<button class="btn" onclick="document.location='index.php'">Home</button>
            <button class="btn1" onclick="document.location='main.php'">Take Quiz</button>
            
         
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Test Your PHP Knowledge</h2>
				<p>
					This is a multiple choise quiz to test your PHP Knowledge.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">Start Quize</a>

			</div>

	</main>


	<footer>
			<div class="container">
				
			</div>


	</footer>
