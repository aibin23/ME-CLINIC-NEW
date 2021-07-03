<html>  
    <head>  
        <title>ADMIN PORTAL</title>
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
     
        <link rel="icon" href="../images/icon.png" type="image/x-icon">
        
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.js"></script>
    </head>  
    <body>
        <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">


               <a href="index.html" class="navbar-brand">Malabon E-Clinic</a>
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" id="adminName">ADMIN:</a></li>
                        <li><a href="#" id="logout">Log out</a></li>
                    </ul>
               </div>

          </div>
     </section>
        <div class="table-responsive  center-block" style="width: 1200px; width: 1300px">  
            <h3 align="center">ADMIN PORTAL</h3><br />
            <span id="result"></span>
            <div id="live_data"></div>
        </div>
    </body>  
</html>  
<script>
     $("#adminName").text("ADMIN Name: "+localStorage.getItem("username"));
        $("#logout").click(function(){
        localStorage.clear();
        window.open("../admin.html","_SELF");
    });
$(document).ready(function(){
    

    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var pname = $('#pname').text();  
        var pemail = $('#pemail').text();  
        var pclinic = $('#pclinic').text();  
        var pdate = $('#pdate').text();  
        var ptime = $('#ptime').text();  
        var pnum = $('#pnum').text();  
        var pmsg = $('#pmsg').text();
        if(pname == '')  
        {  
            alert("Enter Patient Name");  
            return false;  
        }  
        if(pemail == '')
        {  
            alert("Enter Email");  
            return false;  
        }
        if(pclinic == '')
        {  
            alert("Enter Clinic");  
            return false;  
        }
        if(pdate == '')
        {  
            alert("Enter Date");  
            return false;  
        }
        if(ptime == '')
        {  
            alert("Enter Time");  
            return false;  
        }
        if(pnum == '')
        {  
            alert("Enter Number");  
            return false;  
        }
        if(pmsg == '')
        {  
            alert("Enter Message");  
            return false;  
        }
        
        
        
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{pname:pname, pemail:pemail, pclinic:pclinic, pdate:pdate, ptime:ptime, pnum:pnum, pmsg:pmsg},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
//                alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.pname', function(){  
        var id = $(this).data("id1");
        var name = $(this).text();
        edit_data(id, name, "pname");  
    });  
    $(document).on('blur', '.pemail', function(){  
        var id = $(this).data("id2");  
        var email = $(this).text();  
        edit_data(id,email, "pemail");  
    });  
    $(document).on('blur', '.pclinic', function(){  
        var id = $(this).data("id3");  
        var clinic = $(this).text();  
        edit_data(id,clinic, "pclinic");  
    });  
    $(document).on('blur', '.pdate', function(){  
        var id = $(this).data("id4");  
        var date = $(this).text();  
        edit_data(id,date, "pdate");  
    });  
    $(document).on('blur', '.ptime', function(){  
        var id = $(this).data("id5");  
        var time = $(this).text();  
        edit_data(id,time, "ptime");  
    });  
    $(document).on('blur', '.pnum', function(){  
        var id = $(this).data("id6");  
        var num = $(this).text();  
        edit_data(id,num, "pnum");  
    });  
    $(document).on('blur', '.pmsg', function(){  
        var id = $(this).data("id7");  
        var msg = $(this).text();  
        edit_data(id,msg, "pmsg");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id8");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>