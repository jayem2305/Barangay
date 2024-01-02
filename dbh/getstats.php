<?php
include 'dbh.inc.php';

$sql = "SELECT * FROM user WHERE status = 'pending'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
  // Your existing table row content here
  echo '
  <tr id= '.$row['user_id'].'>
        <td style="text-align:center;"><img src="../pic/'.$row['picture_2x2'].'" class="rounded-circle" alt="Cinque Terre" width="45" height="45"></td>
        <td>'. $row['lastname'].','.$row['firstname'].'</td>
        <td>'.$row['age'].'</td>
        <td>'.$row['address'].'</td>
        <td>'. $row['gender'].'</td>';
if($row['status'] == "pending"){
    echo " <td class='text-warning'>".$row['status']."</td>";
}else if($row['status'] == "Decline"){
    echo " <td class='text-danger'>".$row['status']."</td>";
}else{
    echo " <td class='text-white'>".$row['status']."</td>";
}
 echo'
    <td><input type="hidden" value="'.$row['user_id'].'" name="ids">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropforproject'.$row['user_id'].'" value="'.$row['user_id'].'" name="viewid"><div class="spinner-border text-white" role="status" id="spinunrestrict'. $row['user_id'].'" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statunrestrict'. $row['user_id'].'">View</div></button><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalarchive'.$row['user_id'].'" value="'.$row['user_id'].'" name="arvhiveid"><div class="spinner-border text-white" role="status" id="spindecline'. $row['user_id'].'" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statdecline'. $row['user_id'].'">Decline</div></button></td>
    </tr>';
}
?>
