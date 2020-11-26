<?php
require_once 'PatientFunction.php';
?>

<!-- HTML CODE  -->
<html>

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="DataTables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="Style.css">
</head>

<body>
	<div class="fluid-container">
		<div class="row">
			<div class="col-sm"></div>
		</div>
	</div>
	<div class="container">
		<nav aria-label="breadcrumb bg-light">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a class="text-dark font-weight-bold" href="Show.php">Patient List</a></li>
			</ol>
		</nav>
		<div class="float-right pb-3">
			<a href="Insert.php"><button class="btn btn-dark text-light">Add Patient</button></a>
		</div>

		<table class="table" id="datatableid">
			<thead class="thead-dark">
				<tr>
					<th>SR No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Mobile No.</th>
					<th>Address</th>
					<th>Dob</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody">
				<thead class="thead-dark">
					<tr>
						<th>SR No.</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Mobile No.</th>
						<th>Address</th>
						<th>Dob</th>
						<th>Gender</th>
						<th>Action</th>
					</tr>
				</thead>
			</tbody>
		</table>
	</div>

</body>
<!-- script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jQuery/jquery-3.3.1.min.js"></script>
<script src="DataTables/js/jquery.dataTables.min.js"></script>
<script src="patientajax.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootbox.min.js"></script>
<script src="notify.min.js"></script>
<script>
	$(document).ready(function() {
		$('#datatableid').DataTable();
	});
</script>
<!-- script -->

</html>
<!-- HTML CODE END -->