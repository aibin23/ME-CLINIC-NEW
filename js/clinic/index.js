/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#btnAppointment").click(function(e) {
      e.preventDefault();
		$.post(
			$("#frmSchedule").attr('action'),
			{
                                
				PName: $("#txtPName").val(),
				PEmail: $("#txtPEmail").val(),
				PClinic: $("#txtClinic").val(),
				PDate: $("#txtDate").val(),
				PTime: $("#txtTime").val(),
				PNum: $("#txtPNum").val().replace(/\s/g, ''),
				PMessage: $("#txtMessage").val(),
				PStatus: "pending"
				
			},
			function(result){
				if (result=="success"){
					alert("Scheduled");
                                        window.open("index.html","_SELF");
                                        
				}
				else{
					alert("Failed");
				}
			}
		);
      
  });
});