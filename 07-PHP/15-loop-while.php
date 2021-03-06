<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loop (While)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-dark">Loop (While)</h1>
				<hr>
				<nav>
			  		<ul class="pagination justify-content-center">
				    	<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<?php 
							$i = 1;
							while($i <= 10) {
								echo '<li class="page-item"><a class="page-link" href="#">'.$i.'</a></li>';
								$i++;
							}
						?>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
			  	</ul>
			  </nav>
				
			</div>
		</section>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>