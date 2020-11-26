<?php
require_once 'PatientFunction.php';

$O_Update_Patient = new UpdatePatientDetails();
$Patient_Update_Details = (file_get_contents("php://input"));
$Update_patient_Details = json_decode($Patient_Update_Details, true);
$I_Patient_id = $Update_patient_Details['I_Patient_id'];
$S_First_Name = $Update_patient_Details['S_First_Name'];
$S_Last_Name = $Update_patient_Details['S_Last_Name'];
$S_Email_Id = $Update_patient_Details['S_Email_Id'];
$I_Contact_No = $Update_patient_Details['I_Contact_No'];
$S_Address = $Update_patient_Details['S_Address'];
$D_Dob = $Update_patient_Details['D_Dob'];
$B_Gender = $Update_patient_Details['B_Gender'];

if (!empty($I_Patient_id)) {
    $Q_Patient_Sql = $O_Update_Patient->PatientUpdate($S_First_Name, $S_Last_Name, $S_Email_Id, $I_Contact_No, $S_Address, $D_Dob, $B_Gender, $I_Patient_id);
    if ($Q_Patient_Sql) {

        echo "data is updated successfully";
    } else {
        echo "not able to update data";
    }
} else {
    echo "id is invalid";
}
