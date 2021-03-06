<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array (Multidimensionals)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-dark">Array (Multidimensionals)</h1>
				<hr>
				<?php 
					$bicycles = array(
						'Santa Cruz'  => array('Nomad', 'MegaTower', 'HighTower'),
						'Intense'     => array('Carbine', 'Tracer', 'Spider'),
						'Specialized' => array('Enduro', 'Stumjumper', 'Camber')
					);
					//var_dump($bicycles);
				?>
				<table class="table table-striped table-hover table-bordered">
					<?php foreach ($bicycles as $brand => $value): ?>
						<tr>
							<th class="bg-dark text-light"><?php echo $brand ?></th>
							<?php foreach ($value as $reference): ?>
								<td><?php echo $reference; ?></td>
							<?php endforeach ?>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>