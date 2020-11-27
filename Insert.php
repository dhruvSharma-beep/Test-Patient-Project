<?php
require_once 'PatientFunction.php';
?>
<!-- HTML CODE START -->
<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">

</head>

<body>
    <div class="container pb-4">
        <nav aria-label="breadcrumb bg-light">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a class="text-dark font-weight-bold" href="Show.php">Patient List</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class=" text-dark font-weight-bold" href="#">Add Patient</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="post" id="form" enctype="multipart/form-data">
                    <div class="form-row pb-4">
                        <div class="col">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" required placeholder="First name" name="First_Name" id="First_Name">
                        </div>
                        <div class="col">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" required placeholder="Last name" name="Last_Name" id="Last_Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" required class="form-control" placeholder="Email" id="Email_Id" name="Email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" placeholder="Mobile No" name="Contact_No" id="Contact_No">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" placeholder="Address" style="resize:none" id="A_ddress" name="Address"></textarea>
                    </div>
                    <div class="form-row pb-4">
                        <div class="col-md-6">
                            <label class="form-label">DOB</label>
                            <input type="date" class="form-control" placeholder="DOB" id="D_ob" name="Dob">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <div class="col form-check form-check-inline pl-2">
                                <span> <input class="form-check-input" type="radio" name="Gender" value="M" id="Gender">
                                    <label class="form-check-label">Male</label>
                                </span>
                                <span class="pl-5"> <input class="form-check-input" type="radio" name="Gender" value="F" id="Gender">
                                    <label class="form-check-label">Female</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  white"> <input type="submit" class="form-control btn-primary" name="Submit" id="Submit"></input></div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
<!-- SCRIPT FILE -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jQuery/jquery-3.3.1.min.js"></script>
<script src="DataTables/js/jquery.dataTables.min.js"></script>
<script src="patientajax.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootbox.min.js"></script>
<script src="notify.min.js"></script>
<!-- SCRIPT FILE -->

</html>
<!-- HTML CODE END -->
