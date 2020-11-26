<?php
require_once 'PatientFunction.php';

$edit = new SinglePatientDetails;
$editdata = (file_get_contents("php://input"));
$editmydata = json_decode($editdata, true);
$viewid = $editmydata['I_Edit_Patient_id'];

$sqledit = $edit->ViewSinglePatient($viewid);
$row = mysqli_fetch_assoc($sqledit);
echo json_encode($row);
