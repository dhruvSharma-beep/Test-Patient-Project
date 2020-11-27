<?php require_once 'PatientFunction.php';

$oPatientDetail = new PatientDetails();
$qPatientSql = $oPatientDetail->FetchPatientDetails();



while ($row = mysqli_fetch_array($qPatientSql)) {
    $Patientdata[] = $row;
}

echo json_encode($Patientdata);
