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

    <a href="/students" class="btn btn-warning">Back</a>

    <div class=" m-auto " style="width:50%;">
        <form action="/students/update" method="POST">
            <input type="hidden" name="id" value="<?php echo $student->id; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $student -> name; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $student -> email; ?>">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="male" <?php if($student -> gender == "male")  echo "selected"; ?>>male</option>
                    <option value="female" <?php if($student -> gender == "female")  echo "selected"; ?>>female</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">dob</label>
                <input type="date" name="dob" class="form-control" id="dob" value="<?php echo $student -> dob; ?>">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">age</label>
                <input type="number" name="age" class="form-control" id="age" value="<?php echo $student -> age; ?>">
            </div>
        
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>

</body>
</html>