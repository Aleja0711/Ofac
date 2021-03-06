<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operators Assignment</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-dark">Operators Assignment</h1>
				<hr>
				<table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operator</th>
							<th>Example</th>
							<th>Equal To</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> = </td>
							<td> x = y </td>
							<td><?php echo "x = y"; ?></td>
						</tr>
						<tr>
							<td> += </td>
							<td> x += y </td>
							<td><?php echo "x = x + y"; ?></td>
						</tr>
						<tr>
							<td> -= </td>
							<td> x -= y </td>
							<td><?php echo "x = x - y"; ?></td>
						</tr>
						<tr>
							<td> *= </td>
							<td> x *= y </td>
							<td><?php echo "x = x * y"; ?></td>
						</tr>
						<tr>
							<td> /= </td>
							<td> x /= y </td>
							<td><?php echo "x = x / y"; ?></td>
						</tr>
						<tr>
							<td> .= </td>
							<td> x .= y </td>
							<td><?php echo "x = x . y"; ?></td>
						</tr>
						<tr>
							<td> %= </td>
							<td> x %= y </td>
							<td><?php echo "x = x % y"; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>