<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<body>
	
	<div class="container mt-3">
		<p class="h1">Student Table</p>
		<div class="w-100">
			<a href="index.php" class="btn btn-warning mb-3 me-auto">Back</a>
		</div>


	<div class="card">
		<div class="card-header">
			Featured
		</div>
		<div class="card-body">
			<h5 class="card-title"><?php echo $student -> name; ?></h5>
			<h5 class="card-title"><?php echo $student -> email; ?></h5>
			<h5 class="card-title"><?php echo $student -> gender; ?></h5>
			<h5 class="card-title"><?php echo $student -> age; ?></h5>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		</div>
	</div>

</body>
</html>