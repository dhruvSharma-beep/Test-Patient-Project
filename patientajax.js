// DATATABLES FUNCTION START
    
// DATATABLES FUNCTION END 

// SHOW DATA FUNCTION START

    function Fetch_Patient_Details()
    {
        output = "";
            var limit = 0;
            $.ajax({
                    url:"ShowPatientEmulator.php",
                    method:"GET",
                    dataType:"json",
                    success:function(data){
                    if(data){
                        x = data;
                    }else{
                        x = "";
                    }
                    for(i=0; i<x.length; i++){
                        limit   = limit + 1;
                        id      = x[i].id ;
                        output += "<tr><td>" + limit + "</td><td>" + x[i].First_Name + "</td><td>" +x[i].Last_Name+ "</td><td>" + x[i].E_mail + "</td><td>" + x[i].Mobile_Number+ "</td><td>" +x[i].A_ddress+ "</td><td>" +x[i].D_ob+ "</td><td>" + x[i].G_ender + 
                                "</td><td> <button class='btn btn-danger btn-sm deleteid' sid="+id+"><i style='font-size:20px; color:black;' class='fa fa-trash-o'></i></button> <button class='btn btn-warning btn-sm edit' sid="+id+"><a><i style=' font-size:20px; color:black' class='fa fa-pencil fa-fw'></i></a></button>  <button class='btn btn-info btn-sm viewid' sid="+id+"><i style='font-size:20px; color:black' class='fa fa-eye' aria-hidden='true'></i></button></td></tr>";
                    
                        }
                    $('#tbody').html(output);
                    },
                });
    }
    Fetch_Patient_Details();
// SHOW DATA FUNCTION END

// INSERT DATA FUNCTION START
    $("#Submit").click(function(e)
    {
            e.preventDefault();
            console.log("saave button clicked");
            First_Name     = $("#First_Name").val();
            Last_Name     = $("#Last_Name").val();
            Email   = $("#Email_Id").val();
            Contact_No = $("#Contact_No").val();
            Address   = $("#Address").val();
            Dob       = $("#Dob").val();
            Gender    = $('input[name=Gender]:checked').val();
            aInsertData    ={
                sFirstName: First_Name,
                sLastName: Last_Name,
                sEmailId: Email,
                iContactNo: Contact_No,
                sAddress: Address,
                dDob: Dob,
                bGender: Gender
                     };
            $.ajax({
                    url:"InsertPatientEmulator.php",
                    type:'POST',
                    data:JSON.stringify(aInsertData),
                    success:function(data){
                        $("#form")[0].reset();
                        $.notify(data,"success","autoHideDelay:500",{position:"top right"});
                        location.href="Show.php";
                    },
                });
    });
// INSERT DATA FUNCTION START

// DELETE DATA FUNCTION START
    $('#tbody').on("click", ".deleteid", function()
    {
            console.log("delete button is click");
            iPatientId = $(this).attr("sid");
            aDeleteData ={iPatientDeleteId:iPatientId};
            Patient_this = this;
            bootbox.confirm({
            message: " Are you sure you want to delete?",
            buttons:{
                    cancel: {label: '<i class="fa fa-times"></i> Cancel'},
                    confirm: {label: '<i class="fa fa-check"></i> Confirm'}
                    },
            callback: function (Result){
                if(Result == true)
                {
                    $.ajax({
                            url:"DeletePatientEmulator.php",
                            method:"POST",
                            data:JSON.stringify(aDeleteData),
                            success:function(data){
                                $(Patient_this).closest("tr").fadeOut();
                                setInterval('location.reload()', 50);
                                Fetch_Patient_Details();
                            }
                           });
                }else{
                    $.notify("Not deleted","autoHideDelay:500",{position:"top right"});
                    setInterval('location.reload()', 50);
                }
            }
            });
    });
// DELETE DATA FUNCTION END

// EDIT DATA FUNCTION START
    $('tbody').on("click", ".edit", function()
    {
            console.log('Edit Button is clicked');
            EditPatientId = $(this).attr('sid');
            aPatient={iEditPatientId:EditPatientId};
            $.ajax({
                    url:"EditPatientEmulator.php",
                    method:"POST",
                    dataType:"json",
                    data:JSON.stringify(aPatient),
                    success:function(data){            
                         location.href="Update.php?sid="+iEditPatientId;         
                   },
                  });
    });
// EDIT DATA FUNCTION END 

// VIEW DATA FUNCTION START
    $('#tbody').on("click", ".viewid", function()
    {
            console.log("view button is clicked");
            iEditPatientId= $(this).attr('sid'); 
            aPatient={iEditPatientId:EditPatientId};  
            $.ajax({
                    url:"EditPatientEmulator.php",
                    method:"POST",
                    dataType:"json",
                    data: JSON.stringify(aPatient),
                    success:function(data){
                         location.href="View.php?sid="+iEditPatientId;
                    },
                   });
          
    });
// VIEW DATA FUNCTION END

// UPDATE DATA FUNCTION START
    $('#Update').click(function(e) 
    {
        e.preventDefault();
        console.log("update button is click");
        iId = $("#Patient_Id").val();
        sFirstName = $("#First_Name").val();
        sLastName = $("#Last_Name").val();
        sEmail = $("#Email_Id").val();
        iContactNo = $("#Contact_No").val();
        sAddress = $("#A_ddress").val();
        dDob = $("#D_ob").val();
        bGender = $('input[name=G_ender]:checked').val();
        aUpdateData ={
            iPatientId: iId,
            First_Name: sFirstName,
            Last_Name: sLastName,
            Email: sEmail,
            MobileNumber: iContactNo,
            Address: sAddress,
            Dob: dDob,
            Gender: bGender
        };
        $.ajax({
            url: "UpdatePatientEmulator.php",
            type: 'POST',
            data: JSON.stringify(aUpdateData),
            success: function(data){
                $.notify(data, "data updated successfully", "autoHideDelay:500", {
                 position: "top right"
});
                    location.href = "View.php?sid=" + iId;
                },
            });
    });
// UPDATE DATA FUNCTION END
