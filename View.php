<!-- PHP -->
<?php

require_once 'PatientFunction.php';


$iPatientViewId = $_GET['sid'];
$oPatientView = new SinglePatientDetails();
$qSql = $oPatientView->ViewSinglePatient($iPatientViewId);

?>
<!-- PHP -->

<!-- HTML CODE -->
<html>

<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Style.css">
</head>

<body>
	<div class="container">
		<nav aria-label="breadcrumb bg-light">
			<ol class="breadcrumb ">
				<li class="breadcrumb-item"><a class="text-dark font-weight-bold" href="Show.php">Patient List</a></li>
				<li class="breadcrumb-item"><a class="text-dark font-weight-bold" href="#">Patient Details</a></li>
			</ol>
		</nav>
	</div>
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="card col-md-8">
				<?php while ($row = mysqli_fetch_array($qSql)) { ?>
					<div class="card-body">
						First Name : <?php echo $row['First_Name']; ?></br>
						Last Name : <?php echo $row['Last_Name']; ?></br>
						Email : <?php echo $row['Email']; ?></br>
						Address : <?php echo $row['Address']; ?></br>
						Mobile No : <?php echo $row['Mobile_Number']; ?></br>
						Gender : <?php echo $row['Gender']; ?></br>
						DOB : <?php echo $row['Dob']; ?></br>
					</div>
				<?php } ?>
				<a href="Show.php"><button class="btn btn-info float-right">Go Back</button></a>
			</div>
		</div>
	</div>
</body>

</html>
<!-- HTML CODE END -->
