<?php
require_once 'PatientFunction.php';
?>
<!-- HTML CODE -->
<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="DataTables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container pb-4">
        <nav aria-label="breadcrumb bg-light">
            <ol class="breadcrumb">
                <li class="breadcrumb-item ">
                    <a class="text-dark font-weight-bold" href="Show.php">Patient List</a>
                </li>
                <li class="breadcrumb-item ">
                    <a class="text-dark font-weight-bold" href="#">Update Details</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">

                <?php
                $O_Update_Patient_Details = new SinglePatientDetails();
                $Patient_Id = $_GET['sid'];
                $Q_Patient_sql = $O_Update_Patient_Details->ViewSinglePatient($Patient_Id);
                while ($row = mysqli_fetch_array($Q_Patient_sql)) {
                ?>
                    <!-- FORM -->
                    <form method="POST" id="form">
                        <input type="hidden" value="<?php echo $Patient_Id; ?>" id="Patient_Id">
                        <div class="form-row pb-4">
                            <div class="col">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First name" name="First_Name" value="<?php echo $row['First_Name']; ?>" id="First_Name">
                            </div>
                            <div class="col">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" name="Last_Name" value="<?php echo $row['Last_Name']; ?>" id="Last_Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" name="Email_Id" class="form-control" placeholder="Email" id="Email_Id" value="<?php echo $row['E_mail']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Mobile No.</label>
                            <input type="text" name="Contact_No" class="form-control" placeholder="Mobile No" id="Contact_No" value="<?php echo $row['Mobile_Number']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="A_ddress" placeholder="Address" style="resize:none" id="A_ddress"><?php echo $row['A_ddress']; ?> </textarea>
                        </div>
                        <div class="form-row pb-4">
                            <div class="col-md-6">
                                <label class="form-label">DOB</label>
                                <input type="date" class="form-control" name="D_ob" placeholder="DOB" id="D_ob" value="<?php echo $row['D_ob']; ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <div class="col form-check form-check-inline pl-2">
                                    <span> <input class="form-check-input" type="radio" name="G_ender" id="G_ender" value="M" <?php if ($row['G_ender'] == "M") {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>
                                        <label class="form-check-label">Male</label>
                                    </span>
                                    <span class="pl-5"> <input class="form-check-input" type="radio" name="G_ender" id="G_ender" value="F" <?php if ($row['G_ender'] == "F") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?>>
                                        <label class="form-check-label">Female</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="form-group  white"> <input type="submit" class="form-control btn-primary" name="Update" id="Update" value="update"></input></div>
                    </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jQuery/jquery-3.3.1.min.js"></script>
<script src="DataTables/js/jquery.dataTables.min.js"></script>
<script src="patientajax.js"></script>
<script src="notify.min.js"></script>

</html>
<!-- HTML CODE -->