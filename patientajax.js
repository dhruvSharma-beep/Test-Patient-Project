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
                        // fname   = x[i].First_Name;
                        // lname   = x[i].Last_Name;
                        // email   = x[i].E_mail;
                        // contact = x[i].Mobile_Number;
                        // address = x[i].A_ddress;
                        // dob     = x[i].D_ob;
                        // gender  = x[i].G_ender;
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
            S_First_Name     = $("#First_Name").val();
            S_Last_Name     = $("#Last_Name").val();
            S_Email_Id   = $("#Email_Id").val();
            I_Contact_No = $("#Contact_No").val();
            S_Address   = $("#A_ddress").val();
            D_Dob       = $("#D_ob").val();
            B_Gender    = $('input[name=Ge_nder]:checked').val();
            A_Insert_Data    ={
                S_First_Name: S_First_Name,
                S_Last_Name: S_Last_Name,
                S_Email_Id: S_Email_Id,
                I_Contact_No: I_Contact_No,
                S_Address: S_Address,
                D_Dob: D_Dob,
                B_Gender: B_Gender
                     };
            $.ajax({
                    url:"InsertPatientEmulator.php",
                    type:'POST',
                    data:JSON.stringify(A_Insert_Data),
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
            I_Patient_id = $(this).attr("sid");
            A_Delete_Data ={I_Patient_Delete_Id:I_Patient_id};
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
                            data:JSON.stringify(A_Delete_Data),
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
            I_Edit_Patient_id = $(this).attr('sid');
            A_Patient={I_Edit_Patient_id:I_Edit_Patient_id};
            $.ajax({
                    url:"EditPatientEmulator.php",
                    method:"POST",
                    dataType:"json",
                    data:JSON.stringify(A_Patient),
                    success:function(data){            
                         location.href="Update.php?sid="+I_Edit_Patient_id;         
                   },
                  });
    });
// EDIT DATA FUNCTION END 

// VIEW DATA FUNCTION START
    $('#tbody').on("click", ".viewid", function()
    {
            console.log("view button is clicked");
            I_Edit_Patient_id= $(this).attr('sid'); 
            mydata={I_Edit_Patient_id:I_Edit_Patient_id};  
            $.ajax({
                    url:"EditPatientEmulator.php",
                    method:"POST",
                    dataType:"json",
                    data: JSON.stringify(mydata),
                    success:function(data){
                         location.href="View.php?sid="+I_Edit_Patient_id;
                    },
                   });
          
    });
// VIEW DATA FUNCTION END

// UPDATE DATA FUNCTION START
    $('#Update').click(function(e) 
    {
        e.preventDefault();
        console.log("update button is click");
        I_Patient_id = $("#Patient_Id").val();
        S_First_Name = $("#First_Name").val();
        S_Last_Name = $("#Last_Name").val();
        S_Email_Id = $("#Email_Id").val();
        I_Contact_No = $("#Contact_No").val();
        S_Address = $("#A_ddress").val();
        D_Dob = $("#D_ob").val();
        B_Gender = $('input[name=G_ender]:checked').val();
        A_Update_Data ={
            I_Patient_id: I_Patient_id,
            S_First_Name: S_First_Name,
            S_Last_Name: S_Last_Name,
            S_Email_Id: S_Email_Id,
            I_Contact_No: I_Contact_No,
            S_Address: S_Address,
            D_Dob: D_Dob,
            B_Gender: B_Gender
        };
        $.ajax({
            url: "UpdatePatientEmulator.php",
            type: 'POST',
            data: JSON.stringify(A_Update_Data),
            success: function(data){
                $.notify(data, "data updated successfully", "autoHideDelay:500", {
                 position: "top right"
});
                    location.href = "View.php?sid=" + I_Patient_id;
                },
            });
    });
// UPDATE DATA FUNCTION END