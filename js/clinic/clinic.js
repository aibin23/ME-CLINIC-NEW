/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function Clinic(name){
    switch (name){
        case "Franco Clinic and Hospital":
            name="Franco";
            break;
        case "Poly Health Practice Corp":
            name="Poly";
            break;
        case "M. Morales Maternal & Adult Clinic":
            name="Morales";
            break;
        case "Estrella Dental Clinic":
            name="Estrella";
            break;   
        case "ECSRA Medical Clinic":
            name="ECSRA";
            break;   
        case "Malabon Doctors Specialty and Diagnostic Center":
            name="Malabon";
            break;
    }
    return name;
}
$(document).ready(function(){
    $("#btnAppointment").click(function(e) {
      e.preventDefault();
      
      var clinicname = $("#txtClinicName").text();
		$.post(
			$("#frmSchedule").attr('action'),
			{
                                
				PName: $("#txtPName").val(),
				PEmail: $("#txtPEmail").val(),
				PClinic: Clinic(clinicname),
				PDate: $("#txtDate").val(),
				PTime: $("#txtTime").val(),
				PNum: $("#txtPNum").val().replace(/\s/g, ''), 
				PMessage: $("#txtMessage").val(),
				PStatus: "pending"
				
			},
			function(result){
				if (result=="success"){
					alert("Scheduled");
                                        window.open("../index.html","_SELF");
                                        
				}
				else{
					alert("Failed");
				}
			}
		);
      
  });
});
