<?php  
include '../dbh.inc.php';
if (isset($_GET['userID'])) {
    $userID = mysqli_real_escape_string($conn, $_GET['userID']);

    $sql = "SELECT * FROM requested_certs WHERE PersonID = '$userID'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo '
        <tr id= '.$row['req_id'].'>
        <td>'. $row['controlnum'].'</td>
        <td>'.$row['date'].'</td>
        <td>'. $row['Typecertificate'].'</td>
        <td>'. $row['purpose'].'</td>';

        if($row['remarks']=="Pending"){
                            ?>
                            <td><input type="hidden" value="<?php echo $row['req_id']; ?>" name="idscancel" id="<?php echo $row['req_id']; ?>">
                                <button type="button" class="btn btn-danger cancel-btn"
                                data-idscancel="<?php echo $row['req_id']; ?>">Cancel Request</button></td>
                            </tr>
                            <?php
                        }else if($row['remarks']=="Generate"){
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-warning">Processing</p></td>
                            </tr>';
                        }else if($row['remarks']=="Ready To claim"){
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-success">Ready to claim</p></td>
                            </tr>';
                        }else if($row['remarks']=="Cancelled"){
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-danger">Cancelled</p></td>
                            </tr>';
                        }else if($row['remarks']=="Declined"){
                             $sqldecline = "SELECT * FROM declinerequest WHERE declinepersonID = '$id'";;
                                $resultdecline = mysqli_query($conn, $sqldecline);
                                while ($rows = mysqli_fetch_array($resultdecline)) {
                            echo'<td> <a href=""data-bs-toggle="modal" data-bs-target="#declined'. $row['req_id'].'" style="text-align:center;"><h5 class="text-danger" ><u>Declined</u></h5></a></td>
                            <div class="modal fade" id="declined'.$row['req_id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Reason of Decline Document</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>To:Mr./Ms. '.$lname.', '.$fname.'</h6>
                                            <p>Your request was denied; please see the notice below for additional information. </p>
                                            <h6>'.$rows['message'].'</h6>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </tr>';
                        }
                        }else{
                            echo'<td><input type="hidden" value="'.$row['req_id'].'" name="ids">
                            <p class="text-success">'.$row['remarks'].'</p></td>
                            </tr>';
                        }
    }
} 
?>