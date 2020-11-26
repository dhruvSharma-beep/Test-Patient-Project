<!-- PHP -->
<?php

require_once 'PatientFunction.php';


$I_Patient_ViewId = $_GET['sid'];
$O_Patient_View = new SinglePatientDetails();
$Q_Sql = $O_Patient_View->ViewSinglePatient($I_Patient_ViewId);

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
				<?php while ($row = mysqli_fetch_array($Q_Sql)) { ?>
					<div class="card-body">
						First Name : <?php echo $row['First_Name']; ?></br>
						Last Name : <?php echo $row['Last_Name']; ?></br>
						Email : <?php echo $row['E_mail']; ?></br>
						Address : <?php echo $row['A_ddress']; ?></br>
						Mobile No : <?php echo $row['Mobile_Number']; ?></br>
						Gender : <?php echo $row['G_ender']; ?></br>
						DOB : <?php echo $row['D_ob']; ?></br>
					</div>
				<?php } ?>
				<a href="Show.php"><button class="btn btn-info float-right">Go Back</button></a>
			</div>
		</div>
	</div>
</body>

</html>
<!-- HTML CODE END -->