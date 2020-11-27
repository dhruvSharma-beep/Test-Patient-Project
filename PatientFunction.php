<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'oopscrud');

class DB_con
{
	public function __construct()
	{
		$Con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		$this->dbh = $Con;

		if (mysqli_connect_errno()) {
			echo "connection failed" . mysqli_connect_error();
		}
	}
}

class InsertPatient extends DB_con
{
	public function InsertPatientData($vFirstName, $vLastName, $vEmailId, $vContactNo, $vAddress, $dDob, $eGender)
	{
		$qInsertPatient = mysqli_query($this->dbh, "insert into tbl_users(First_Name,Last_Name,Email,Mobile_Number,Address,Dob,Gender) values('$vFirstName','$vLastName','$vEmailId','$vContactNo','$vAddress','$dDob','$eGender')");
		return $qInsertPatient;
	}
}

class PatientDetails extends DB_con
{
	public function FetchPatientDetails()
	{
		$qPatientDetails = mysqli_query($this->dbh, "select * from tbl_users where Deleted=0 ORDER BY First_Name ASC");
		return $qPatientDetails;
	}
}

class SinglePatientDetails extends DB_con
{
	public function ViewSinglePatient($iSinglePatientId)
	{
		$qSinglePatientResult = mysqli_query($this->dbh, "select * from tbl_users where id=$iSinglePatientId");
		return $qSinglePatientResult;
	}
}

class UpdatePatientDetails extends DB_con
{
	public function PatientUpdate($vFirstName, $vLastName, $vEmailId, $vContactNo, $vAddress, $dDob, $eGender, $iPatientId)
	{
		$qUpdateRecord = mysqli_query($this->dbh, "update  tbl_users set First_Name='$vFirstName',Last_Name='$vLastName',Email='$vEmailId',Mobile_Number='$vContactNo',Address='$vAddress',Dob='$dDob',Gender='$eGender' where id='$iPatientid' ");
		return $qUpdateRecord;
	}
}

class DeletePatient extends DB_con
{
	public function DeletePatientData($iPatientDeleteId)
	{
		$qDeleteRecord = mysqli_query($this->dbh, "update  tbl_users set Deleted=1, Added_By=1 where id=$iPatientDeleteId");
		return $qDeleteRecord;
	}
}
