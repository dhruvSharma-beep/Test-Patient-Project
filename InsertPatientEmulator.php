<?php
require_once 'PatientFunction.php';

$O_Insert_Patient_Data = new InsertPatient();
$Patient_Insert_Data = (file_get_contents("php://input"));
$Insert_Patient_Details = json_decode($Patient_Insert_Data, true);
$S_First_Name = $Insert_Patient_Details['S_First_Name'];
$S_Last_Name = $Insert_Patient_Details['S_Last_Name'];
$S_Email_Id = $Insert_Patient_Details['S_Email_Id'];
$I_Contact_No = $Insert_Patient_Details['I_Contact_No'];
$S_Address = $Insert_Patient_Details['S_Address'];
$D_Dob = $Insert_Patient_Details['D_Dob'];
$B_Gender = $Insert_Patient_Details['B_Gender'];

if (!empty($S_First_Name) && !empty($B_Gender)) {
    $Q_Insert_Sql = $O_Insert_Patient_Data->InsertPatientData($S_First_Name, $S_Last_Name, $S_Email_Id, $I_Contact_No, $S_Address, $D_Dob, $B_Gender);
    if ($Q_Insert_Sql == true) {
        echo "data successfully inserted";
    } else {
        echo "unable to insert data";
    }
} else {
    echo "please fill the field first";
}
