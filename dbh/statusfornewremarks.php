 <?php
                      include 'dbh.inc.php';
                       $sql = "SELECT requested_certs .*, user.firstname, user.lastname, user.middleinitial,user.user_id,user.age,requested_certs.address,requested_certs.paddress,requested_certs.pname,requested_certs.page,requested_certs.pliving,requested_certs.living,requested_certs.certificate
        FROM requested_certs requested_certs
        JOIN user user ON requested_certs.PersonID = user.user_id
        WHERE requested_certs.remarks != 'pending' 
        ORDER BY requested_certs.req_id DESC";
                      $result = mysqli_query($conn, $sql);

                      if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
  // Your existing table row content here
                          echo '
                          <tr id= '.$row['req_id'].'>
                          <td>'. $row['controlnum'].'</td>
                          <td>'. $row['name'].'</td>
                          <td>'.$row['date'].'</td>
                          <td>'.$row['address'].'</td>
                          <td>'. $row['Typecertificate'].'</td>
                          <td>'. $row['purpose'].'</td>

                          ';

                          ?>
                          <td >
                            <?php
                            if($row['remarks']=="Declined"){
                                ?>
                                <a href=""data-bs-toggle="modal" data-bs-target="#declined<?php echo $row['req_id'];?>" style="text-align:center;"><h5 class="text-danger" ><u>Declined</u></h5></a>
                                <!-- Modal declined -->
                                <?php
                    $sqldecline = "SELECT * FROM declinerequest WHERE declinepersonID = '".$row['user_id']."'";;
                      $resultdecline = mysqli_query($conn, $sqldecline);
                      while ($rows = mysqli_fetch_array($resultdecline)) {

                                ?>
<div class="modal fade" id="declined<?php echo $row['req_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reason of Decline Document</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <h6>To:Mr./Ms. <?php echo $row['name'];?></h6>
        <p>Your request was denied; please see the notice below for additional information. </p>
       <h6><?php echo $rows['message'];?></h6>
    </div>
</div>
</div>
</div><?php } ?>
                                <?php
                            }else if($row['remarks']=="Generate"){
                                ?>
                                <div class="row" style="text-align:center;">
                                      <div class="col-lg-12">
                           <input type="hidden" id="idresident" name="idresident" value="<?php echo $row['req_id'];?>">
                             <input type="hidden" id="pname" name="pname" value="<?php echo $row['pname'];?>">
                             <input type="hidden" id="paddress" name="paddress" value="<?php echo $row['paddress'];?>">
                             <input type="hidden" id="page" name="page" value="<?php echo $row['page'];?>">
                             <input type="hidden" id="pliving" name="pliving" value="<?php echo $row['pliving'];?>">
                             <input type="hidden" id="typecertificate" name="typecertificate" value="<?php echo $row['Typecertificate'];?>">
                             <input type="hidden" id="emailidres" name="emailidres" value="<?php echo $row['email'];?>">
                             <input type="hidden" id="nameapprove" name="nameapprove" value="<?php echo $row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".";?>">
                             <input type="hidden" id="age" name="age" value="<?php echo $row['age'];?>">
                             <input type="hidden" id="purpose" name="purpose" value="<?php echo $row['purpose'];?>">
                             <input type="hidden" id="remarks" name="remarks" value="<?php echo $row['remarks'];?>">
                             <button type="submit" class="btn btn-success generate-btn-set"  data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row['req_id'];?>"
                                data-idresident="<?php echo $row['req_id'];?>"
                                data-emailidres="<?php echo $row['email'];?>"
                                data-nameapprove="<?php echo $row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".";?>"
                                data-age="<?php echo $row['age'];?>"
                                data-purpose="<?php echo $row['purpose'];?>"
                                data-remarks="<?php echo $row['remarks'];?>"
                                data-address="<?php echo $row['address'];?>"
                                data-voters="<?php echo $row['voters'];?>"
                                data-typecertificate="<?php echo $row['Typecertificate'];?>"
                                data-pic="<?php echo $row['pic'];?>"
                                data-pname="<?php echo $row['pname'];?>"
                                data-paddress="<?php echo $row['paddress'];?>"
                                data-page="<?php echo $row['page'];?>"
                                data-pliving="<?php echo $row['pliving'];?>"
                                data-certificate="<?php echo $row['certificate'];?>"
                                ><div class="spinner-border text-white" role="status" id="spingen<?php echo $row['req_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statgen<?php echo $row['req_id'];?>">  Generate Certificate</button>
                                        </div>

                                <div  class="modal fade" id="staticBackdrop<?php echo $row['req_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Generate Certificate: <?php echo $row['controlnum'];?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe id="pdfViewergene<?php echo $row['req_id'];?>" width="100%" height="600px" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
   
                                </div>
                            

                            
                              <?php 
                        }else if($row['remarks']=="Ready To claim"){
                            ?>
                             <input type="hidden" id="redytoclaim" name="redytoclaim" value="Claim">
                             <input type="hidden" id="idresident" name="idresident" value="<?php echo $row['req_id'];?>">
                             <input type="hidden" id="emailidres" name="emailidres" value="<?php echo $row['email'];?>">
                             <button type="submit" class="btn btn-success readyclaim-btn" 
                              data-idresident="<?php echo $row['req_id'];?>"
                           data-emailidres="<?php echo $row['email'];?>"
                           data-redytoclaim="Claim"><div class="spinner-border text-white" role="status" id="spinready<?php echo $row['req_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statready<?php echo $row['req_id'];?>"> Ready To Claim</button>
                            <?php
                        }else if($row['remarks']=="Claim"){
                            ?>
                             <input type="hidden" id="redytoclaim" name="redytoclaim" value="Claimed">
                             <input type="hidden" id="idresident" name="idresident" value="<?php echo $row['req_id'];?>">
                             <button type="submit" class="btn btn-success claim-btn" 
                              data-idresident="<?php echo $row['req_id'];?>"
                           data-redytoclaim="Claimed"><div class="spinner-border text-white" role="status" id="spinclaim<?php echo $row['req_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statclaim<?php echo $row['req_id'];?>"> Claim</button>
                            <?php
                        }else if($row['remarks']=="Cancelled"){
                            echo ' <h5 style="text-align:center;"class="text-danger">'.$row['remarks'].'</h5>';
                        }else if($row['remarks']=="Claimed"){
                            echo ' <h5 class="text-success"style="text-align:center;">'.$row['remarks'].'</h5>';
                        }else{
                            echo ' <p class="text-danger">Something is Not Right</p>';
                        }
                        ?>

                    </td>
                </tr>
            <?php }}?>

            <script type="text/javascript"></script>