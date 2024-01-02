<?php
                      include '../dbh/dbh.inc.php';
                      $sql = "SELECT requested_certs .*, user.firstname, user.lastname, user.middleinitial,user.user_id,user.age,requested_certs.address,requested_certs.paddress,requested_certs.pname,requested_certs.page,requested_certs.pliving,requested_certs.living,requested_certs.certificate
                      FROM requested_certs requested_certs
                      JOIN user user ON requested_certs.PersonID = user.user_id
                      WHERE requested_certs.remarks = 'pending' ";
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

                                                  <td>
                                                     <div class="btn-group" role="group" aria-label="Basic example">
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
                             <button type="submit" class="btn btn-warning view-btn" id="view" data-bs-toggle="modal" data-bs-target="#exampleModalview<?php echo $row['req_id'];?>"
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
                                > View</button>

<div class="modal fade" id="exampleModalview<?php echo $row['req_id'];?>"aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">VIEW: <?php echo $row['controlnum'];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe id="pdfViewer<?php echo $row['req_id'];?>" width="100%" height="600px" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>

                             <input type="hidden" value="Approve" name="approve" id="approve">
                           <input type="hidden" id="emailstats" name="emailstats" value="<?php echo $row['email'];?>">
                           <input type="hidden" id="nameapprove" name="nameapprove" value="<?php echo $row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".";?>">
                           <input type="hidden" id="age" name="age" value="<?php echo $row['age'];?>">
                           <input type="hidden" id="purpose" name="purpose" value="<?php echo $row['purpose'];?>">
                           <input type="hidden" id="remarks" name="remarks" value="<?php echo $row['remarks'];?>">
                           <input type="hidden" id="address" name="address" value="<?php echo $row['address'];?>">
                           <input type="hidden" id="idemailstats" name="idemailstats" value="<?php echo $row['req_id'];?>">
                           <input type="hidden" id="user_id" name="user_id" value="<?php echo $row['user_id'];?>">
                           <button type="button" class="btn btn-success approve-btn"
    data-idemailstats="<?php echo $row['req_id'];?>"
    data-emailstats="<?php echo $row['email'];?>"
    data-nameapprove="<?php echo $row['lastname'].", ".$row['firstname']." ".$row['middleinitial'].".";?>"
    data-age="<?php echo $row['age'];?>"
    data-address="<?php echo $row['address'];?>"
    data-purpose="<?php echo $row['purpose'];?>"
    data-remarks="<?php echo $row['remarks'];?>"
    data-approve="Approve"><div class="spinner-border text-white" role="status" id="spin<?php echo $row['req_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="stat<?php echo $row['req_id'];?>">Approve</div></button>


                           <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['req_id'];?>"><div class="spinner-border text-white" role="status" id="spindel<?php echo $row['req_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statdel<?php echo $row['req_id'];?>">Decline</div></button>
                       </div>
                       </td>
                   </tr>
                   <?php } }?>