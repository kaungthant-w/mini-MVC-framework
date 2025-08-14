<?php
//    include_once("vendor/autoload.php");
	include_once __DIR__.'/vendor/autoload.php';
   
    // use App\DB;
	// use Ultis\DB as UltisDB;
	use App\Database;

	$db = new Database();

	// die(var_dump($db -> index()));

	
	$results = $db -> index();


?>

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
		<a href="store.php" class="btn btn-success  float-end mb-3">Add New Student</a>


	<table class="table table-striped table-bordered">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Gender</th>
				<th scope="col">Age</th>
				<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>

				<?php $id = 1; ?>
				<?php foreach($results as $value): ?>
					<tr>
						<th scope="row"><?php echo $id++; ?></th>
						<td><?php echo $value->name; ?></td>
						<td><?php echo $value->email; ?></td>
						<td><?php echo ucfirst($value->gender); ?></td>
						<td><?php echo $value->age; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $value->id; ?>" class="btn btn-primary">Edit</a>
							<a href="delete.php?id=<?php echo $value->id; ?>" class="btn btn-outline-danger">Delete</a>
							<a href="show.php?id=<?php echo $value->id; ?>" class="btn btn-outline-warning">Details</a>
						</td>
					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</div>

</body>
</html>