<?php 

session_start();

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
		<button class="btn" onclick="document.location='index.php'">Quiz Application</button> 
         
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>


	<footer>
			<div class="container">
				
			</div>


	</footer>








</body>
</html>