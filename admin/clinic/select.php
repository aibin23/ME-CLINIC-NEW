<?php  
 $connect = mysqli_connect("localhost", "root", "", "eclinic");  
 $output = '';
 $clinicname = $_POST["clinicname"];
 $sql = "SELECT * FROM tblschedule WHERE pclinic ='".$clinicname."' AND pstatus='pending'";  
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
                     <td><button type="button" name="delete_btn" data-id8="'.$row["psid"].'" class="btn btn-xs btn-info btn_accept" style="padding: 5px">ACCEPT</button>
                         <button type="button" name="delete_btn" data-id9="'.$row["psid"].'" class="btn btn-xs btn-danger btn_delete" style="padding: 5px">REJECT</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td>'.++$rownum.'</td>  
                <td id="pname" contenteditable></td>  
                <td id="pemail" contenteditable></td>  
                <td id="pclinic" contenteditable></td>  
                <td id="pdate" contenteditable></td>  
                <td id="ptime" contenteditable></td>  
                <td id="pnum" contenteditable></td>  
                <td id="pmsg" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success" style="padding: 5px">ADD</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
            <tr>  
                <td>'.++$rownum.'</td>  
                <td id="" contenteditable></td>  
                <td id="" contenteditable></td>  
                <td id="" contenteditable></td>  
                <td id="" contenteditable></td>  
                <td id="" contenteditable></td>  
                <td id="" contenteditable></td>  
                <td id="" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success" style="padding: 5px">ADD</button></td>  
           </tr>  
      ';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>