function AddRegister2021()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/student.php',
        type: "POST",
        data :  $('#addForm2021').serialize(),
		beforeSend: function(){		
			$("#addStudent").hide();
			$("#loader").html(LOADER3);
		},
        success: function(data)
        {
			console.log(data)
			$("#loader").html('');
			var splitResponse = data.split("[#]");
			if($.trim(splitResponse[0]) == "ok"){
				ShowStatus($(splitResponse[1]));
				CloseFview();
                $('#tblContent').html(splitResponse[2]);
			}else{
				$("#addStudent").show();
                ShowStatusPopUp($(splitResponse[1]));
			}
        },
    });
}