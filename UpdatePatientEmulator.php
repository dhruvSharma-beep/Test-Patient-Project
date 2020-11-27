<?php
require_once 'PatientFunction.php';

$oUpdatePatient = new UpdatePatientDetails();
$PatientUpdateDetails = (file_get_contents("php://input"));
$jUpdatePatientDetails = json_decode($PatientUpdateDetails, true);
$iPatientId = $jUpdatePatientDetails['iPatient_id'];
$sFirstName = $jUpdatePatientDetails['First_Name'];
$sLastName = $jUpdatePatientDetails['Last_Name'];
$sEmailId = $jUpdatePatientDetails['Email'];
$iContactNo = $jUpdatePatientDetails['MobileNumber'];
$sAddress = $jUpdatePatientDetails['Address'];
$dDob = $jUpdatePatientDetails['Dob'];
$bGender = $jUpdatePatientDetails['Gender'];

if (!empty($iPatientId)) {
    $qPatientSql = $oUpdatePatient->PatientUpdate($sFirstName, $sLastName, $sEmailId, $iContactNo, $sAddress, $dDob, $bGender, $iPatientId);
    if ($qPatientSql) {

        echo "data is updated successfully";
    } else {
        echo "not able to update data";
    }
} else {
    echo "id is invalid";
}
