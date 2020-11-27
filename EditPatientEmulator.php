<?php
require_once 'PatientFunction.php';

$oEditPatient = new SinglePatientDetails;
$EditData = (file_get_contents("php://input"));
$jEditPatientData = json_decode($EditData, true);
$iViewPatientId = $jEditPatientData['iEditPatientId'];

$qSqlEdit = $oEditPatient->ViewSinglePatient($iViewPatientId);
$Row = mysqli_fetch_assoc($qSqlEdit);
echo json_encode($Row);
