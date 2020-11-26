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
	public function InsertPatientData($V_First_Name, $V_Last_Name, $V_Email_Id, $V_Contact_No, $V_Address, $D_Dob, $E_Gender)
	{
		$Q_Insert_Patient = mysqli_query($this->dbh, "insert into tbl_users(First_Name,Last_Name,E_mail,Mobile_Number,A_ddress,D_ob,G_ender) values('$V_First_Name','$V_Last_Name','$V_Email_Id','$V_Contact_No','$V_Address','$D_Dob','$E_Gender')");
		return $Q_Insert_Patient;
	}
}

class PatientDetails extends DB_con
{
	public function FetchPatientDetails()
	{
		$Q_Patient_Details = mysqli_query($this->dbh, "select * from tbl_users where Deleted=0 ORDER BY First_Name ASC");
		return $Q_Patient_Details;
	}
}

class SinglePatientDetails extends DB_con
{
	public function ViewSinglePatient($Single_Patient_Id)
	{
		$Single_Patient_Result = mysqli_query($this->dbh, "select * from tbl_users where id=$Single_Patient_Id");
		return $Single_Patient_Result;
	}
}

class UpdatePatientDetails extends DB_con
{
	public function PatientUpdate($V_First_Name, $V_Last_Name, $V_Email_Id, $V_Contact_No, $V_Address, $D_Dob, $E_Gender, $Patientid)
	{
		$Q_Update_Record = mysqli_query($this->dbh, "update  tbl_users set First_Name='$V_First_Name',Last_Name='$V_Last_Name',E_mail='$V_Email_Id',Mobile_Number='$V_Contact_No',A_ddress='$V_Address',D_ob='$D_Dob',G_ender='$E_Gender' where id='$Patientid' ");
		return $Q_Update_Record;
	}
}

class DeletePatient extends DB_con
{
	public function DeletePatientData($Patient_Delete_Id)
	{
		$Q_Delete_Record = mysqli_query($this->dbh, "update  tbl_users set Deleted=1, Added_By=1 where id=$Patient_Delete_Id");
		return $Q_Delete_Record;
	}
}
