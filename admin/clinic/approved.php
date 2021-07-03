<?php  
 $connect = mysqli_connect("localhost", "root", "", "eclinic");  
 $output = '';
 $clinicname = $_POST["clinicname"];
 $sql = "SELECT * FROM tblschedule WHERE pclinic ='".$clinicname."' AND pstatus='approved'";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="border: #7CC3B9; text-align: center;">  
                <tr>
                    <th>No.</th><th>Patient Name</th>
                    <th>Email</th>
                    <th>Clinic</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th width=250px>Actions</th>
                </tr>';  
 $rows = mysqli_num_rows($result);
$rownum = 0;
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
          $rownum++;
           $output .= '  
                <tr>  
                     <td>'.$rownum.'</td>  
                     <td class="pname" data-id1="'.$row["psid"].'" contenteditable>'.$row["pname"].'</td>  
                     <td class="pemail" data-id2="'.$row["psid"].'" contenteditable>'.$row["pemail"].'</td>  
                     <td class="pclinic" data-id3="'.$row["psid"].'" contenteditable>'.$row["pclinic"].'</td>  
                     <td class="pdate" data-id4="'.$row["psid"].'" contenteditable>'.$row["pdate"].'</td>  
                     <td class="ptime" data-id5="'.$row["psid"].'" contenteditable>'.$row["ptime"].'</td>  
                     <td class="pnum" data-id6="'.$row["psid"].'" contenteditable>'.$row["pnum"].'</td>  
                     <td class="pmsg" data-id7="'.$row["psid"].'" contenteditable>'.$row["pmsg"].'</td>  
                     <td><button type="button" name="delete_btn" data-id9="'.$row["psid"].'" class="btn btn-xs btn-danger btn_delete" style="padding: 5px">DELETE</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           
      ';  
 }  
 else  
 {  
      $output .= '
            
      ';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>