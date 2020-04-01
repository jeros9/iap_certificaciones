$(document).ready(function(){
	
	$("#pais").change(function(){ dependencia_estado();});
	$("#estado").change(function(){ dependencia_ciudad();});
	$("#estado").attr("disabled",true);
	$("#ciudad").attr("disabled",true);
});


function LoadCities()
{
 var idState = $("stateId").value;
 

 
}
//combo lugar de trabajo
function estado_dependenciat()
{
   var paisId = $("paist").value;
   new Ajax.Request(WEB_ROOT+'/ajax/dependencia-estadot.php',{
   method:'post',
   parameters: {type: "loadCities", paisId: paisId},
   
   onSuccess: function(transport){
    var response = transport.responseText || "no response text";    
    var splitResponse = response.split("[#]");
  
     $('Statepositiont').innerHTML = splitResponse[0];
    
    
   },
  onFailure: function(){ alert('Something went wrong...') }
   });
}

function ciudad_dependenciat()
{
   var estadoId = $("estadot").value;
	 new Ajax.Request(WEB_ROOT+'/ajax/dependencia-ciudadest.php',{
   method:'post',
   parameters: {type: "loadCities", estadoId: estadoId},
   
   onSuccess: function(transport){
    var response = transport.responseText || "no response text";    
    var splitResponse = response.split("[#]");
  
     $('Citypositiont').innerHTML = splitResponse[0];
    
    
   },
  onFailure: function(){ alert('Something went wrong...') }
   });
}







////////// combox de usurio 

function estado_dependencia()
{
   var paisId = $("pais").value;
   new Ajax.Request(WEB_ROOT+'/ajax/dependencia-estado.php',{
   method:'post',
   parameters: {type: "loadCities", paisId: paisId},

   onSuccess: function(transport){
    var response = transport.responseText || "no response text";
    var splitResponse = response.split("[#]");

     $('Stateposition').innerHTML = splitResponse[0];


   },
  onFailure: function(){ alert('Something went wrong...') }
   });
}

function ciudad_dependencia()
{
   var estadoId = $("estado").value;
	 new Ajax.Request(WEB_ROOT+'/ajax/dependencia-ciudades.php',{
   method:'post',
   parameters: {type: "loadCities", estadoId: estadoId},
   
   onSuccess: function(transport){
    var response = transport.responseText || "no response text";    
    var splitResponse = response.split("[#]");
  
     $('Cityposition').innerHTML = splitResponse[0];
    
    
   },
  onFailure: function(){ alert('Something went wrong...') }
   });
}


function AddStudentRegister()
{
//alert("hola");
	new Ajax.Request(WEB_ROOT+'/ajax/student.php', 
	{
		method:'post',
		parameters: $('addStudentForm').serialize(true),
		onSuccess: function(transport){
			var response = transport.responseText || "no response text";
			
			var splitResponse = response.split("[#]");
 //alert(response);
			if(splitResponse[0] == "fail")
			{
             $('redireccion').value=0;
             console.log(splitResponse[1]);
				ShowStatus(splitResponse[1]);
			}
			else
			{
			    $('redireccion').value=1;
				ShowStatus(splitResponse[1]);
			
				
				//reload event listeners here
			}

		},
    onFailure: function(){ alert('Something went wrong...') }
  });
}



