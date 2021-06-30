$(document).ready(function() {
    $('#btnAddStudent').click(function() {
        AddStudentRegister();
    });
});


function AddStudentRegister()
{
    $.ajax({
        url : WEB_ROOT+'/ajax/student.php',
        type: "POST",
        data :  $('#addStudentForm').serialize(),
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
                //$('#tblContent').html(splitResponse[2]);
                window.open(WEB_ROOT + '/ajax/datas.php?id=' + splitResponse[2] + '&key=' + splitResponse[3], '_blank');
				setTimeout("recargarPage()",5000);
			}
            else
            {
				$("#addStudent").show();
                ShowStatusPopUp($(splitResponse[1]));
                window.open(WEB_ROOT + '/ajax/datas.php?id=' + splitResponse[2] + '&key=' + splitResponse[3], '_blank');
			}
        },
        error: function ()
        {
            alert("Ocurrió un error, intenta más tarde..");
        }
    });


}

function recargarPage()
{
	WEB_ROOTDoc = WEB_ROOT+'/login';
	$(location).attr('href',WEB_ROOTDoc);
}




