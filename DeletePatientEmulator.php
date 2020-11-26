<?php require_once 'PatientFunction.php';

$O_Delete_Patient = new DeletePatient;
$Patient_Delete_Data = (file_get_contents("php://input"));
$J_Patient_Delete_Data = json_decode($Patient_Delete_Data, true);
$Patient_Delete_Id = $J_Patient_Delete_Data['I_Patient_Delete_Id'];


if (!empty($Patient_Delete_Id)) {
    $Q_Sql_Delete = $O_Delete_Patient->DeletePatientData($Patient_Delete_Id);
    if ($Q_Sql_Delete == true) {
        echo "data deleted successfully";
    } else {
        echo "unable to delete data";
    }
}
