<?php require_once 'PatientFunction.php';

$Fetch_Patient_Detail = new PatientDetails();
$O_Patient_Sql = $Fetch_Patient_Detail->FetchPatientDetails();



while ($row = mysqli_fetch_array($O_Patient_Sql)) {
    $Patient_data[] = $row;
}

echo json_encode($Patient_data);
