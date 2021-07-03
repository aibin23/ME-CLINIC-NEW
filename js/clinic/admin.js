/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





$(document).ready(function(){
	
	
});







var accUn = ["franco","poly","morales","estrella","ecsra","malabon"];
var accPw = ["franco","poly","morales","estrella","ecsra","malabon"];

function account(un,pass){
   un = un.toLowerCase();
   pass = pass.toLowerCase();
    if(un.trim()=="admin" || pass.trim()=="admin"){
                localStorage.setItem("username", un);
                localStorage.setItem("password", pass);

                window.open("admin","_SELF");
        }
    if(un.trim()=="" || pass.trim()==""){
                $("#result").text("Fill Blanks");
        }
    else{
        for(var a=0; a<accUn.length; a++){

            if(un.trim()==accUn[a] && pass.trim()==accPw[a]){
                localStorage.setItem("username", un);
                localStorage.setItem("password", pass);

                window.open("admin/clinic","_SELF");
            }
         };
         $("#result").text("Incorrect Username or Password");
    }
}



$("#dumbtn").click(function(){
    alert("ADMIN");
});
var StdSubj = "";
$("#btnLogin").click(function(e){
        account($("#txtUsername").val(),$("#txtPassword").val());   
	});
        