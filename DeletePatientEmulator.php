<?php require_once 'PatientFunction.php';

$oDeletePatient = new DeletePatient;
$PatientDelete = (file_get_contents("php://input"));
$jPatientDelete = json_decode($PatientDelete, true);
$iDeleteId = $jPatientDelete['iPatientDeleteId'];


if (!empty($iDeleteId)) {
    $qSqlDelete = $oDeletePatient->DeletePatientData($iDeleteId);
    if ($qSqlDelete == true) {
        echo "data deleted successfully";
    } else {
        echo "unable to delete data";
    }
}
