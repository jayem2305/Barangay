                 <?php
                      include 'dbh.inc.php';
                                $sql = "SELECT * FROM user WHERE status='resident' OR status='archive'";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)){

                                    ?>
                                <tr>
                                  <td><?php echo $row['lastname'].','.$row['firstname'];?></td>
                                  <td><?php echo $row['age']; ?></td>
                                  <td><?php echo $row['address'];?></td>
                                  <td><?php echo $row['gender'];?></td>
                                  <td><?php echo $row['civilstats'];?></td>
                                  <td>
                                    <input type='hidden' value="<?php echo $row['user_id'];?>" name='ids'>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropforproject<?php echo $row['user_id'];?>" value="<?php echo $row['user_id'];?>" name="viewid">View</button>
                                <?php
                                if($row['status']== "resident"){ ?>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalarchive<?php echo $row['user_id'];?>" value="<?php  echo $row['user_id'];?>" name="arvhiveid"><div class="spinner-border text-white" role="status" id="spinrestrict<?php echo $row['user_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statrestrict<?php echo $row['user_id'];?>">Restrict</div></button>
                                <?php }else{ ?>
                        <input type="hidden" name="residentrestor" value="resident" id="residentrestor<?php echo $row['user_id']; ?>">
                        <input type="hidden" name="idrestore" value="<?php echo $row['user_id']; ?>" id="<?php echo $row['user_id']; ?>">
                        <input type="hidden" name="emailrestor" value="<?php echo $row['email']; ?>" id="emailrestor<?php echo $row['user_id']; ?>">
                        <button type="button" class="btn btn-warning restoreuser-btn"
                        data-idrestore="<?php echo $row['user_id'];?>"
                        data-residentrestor="#residentrestor"
                        data-emailrestor="#emailrestor"
                        ><div class="spinner-border text-white" role="status" id="spinunrestrict<?php echo $row['user_id'];?>" style="display: none;">
  <span class="visually-hidden">Loading...</span>
</div> <div id="statunrestrict<?php echo $row['user_id'];?>">Unrestrict</div>
</button>
                                <?php } ?>
                                </td>
                              </tr>

                                  <!-- MOdal for project -->
                                  <?php
                                  if (isset($_POST['viewid']));
                                  $id_queryrows = "SELECT * FROM user WHERE user_id = ".$row['user_id']."";
                                  $id_queryrows_viewpageQuery = mysqli_query($conn, $id_queryrows );
                                  while ($idrow = mysqli_fetch_assoc($id_queryrows_viewpageQuery)){

                                    $uery = "SELECT * FROM user WHERE user_id = '".$idrow['user_id']."'";
                                    $results = mysqli_query($conn, $uery);
                                    while ($rows = mysqli_fetch_array($results)){
                                      ?>              

                                      <div class="modal fade " id="staticBackdropforproject<?php  echo $row['user_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">PROFILE</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                     <div class="card w-100 mb-3">
                                                      <div class="card-body">
                                                        <h3>Profile Information</h3>
                                                        <div class="row" style="text-transform: capitalize;">
                                                            <div class="col-lg-6">
                                                               <div class="row" style="margin-bottom: -1rem;">
                                                                <div class="col-lg-8">
                                                                    <b><?php echo $row['lastname'].','.$row['firstname']." ".$row['middleinitial'].".";?></b>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b><?php echo $row['gender'];?></b>
                                                                </div>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <p>Name:</p>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <p>Gender:</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12" style="margin-bottom: -1rem;">
                                                                <b><?php echo $row['address'];?></b>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <p>Address:</p>
                                                            <div class="row" style="margin-bottom: -1rem;">
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['profession'];?></b>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['place'];?></b>
                                                                </div>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>Profession:</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>Place of Work / School</p>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: -1rem;">
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['relation'];?></b>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['religion'];?></b>
                                                                </div>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>Relation to the Head Of the Family:</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>Religion:</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="row" style="margin-bottom: -1rem;">
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['bday'];?></b>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['age'];?></b>
                                                                </div>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>Birthday:</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>Age:</p>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-12" style="margin-bottom: -1rem;">
                                                                <b><?php echo $row['email'];?></b>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <p>Email Address:</p>
                                                            <div class="row" style="margin-bottom: -1rem;">
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['civilstats'];?></b>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['mobilenum'];?></b>
                                                                </div>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>Civil Status:</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>Mobile Number:</p>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: -1rem;">
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['locality'];?></b>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b><?php echo $row['educattainment'];?></b>
                                                                </div>
                                                            </div>
                                                            <hr class="border border-secondary border-2 opacity-50">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <p>Locality:</p>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <p>Educational Attainment:</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }} 
            if (isset($_POST['arvhiveid']));
            $id_archivequeryrows = "SELECT * FROM user WHERE user_id = ".$row['user_id']."";
            $id_archivequeryrows_viewpageQuery = mysqli_query($conn, $id_archivequeryrows );
            while ($archiveid = mysqli_fetch_assoc($id_archivequeryrows_viewpageQuery)){
                $archivequery = "SELECT * FROM user WHERE user_id = '".$archiveid['user_id']."'";
                $results = mysqli_query($conn, $archivequery);
                while ($arcviherow = mysqli_fetch_array($results)){
                    ?>
                    <!-- Archive residence -->
                    <div class="modal fade" id="exampleModalarchive<?php  echo $row['user_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12" style="text-align: center;">
                                        <h1>Your sure want to Archive <?php echo $arcviherow['lastname'].",".$arcviherow['firstname']." ".$arcviherow['middleinitial']."."?>?</h1>
                                    </div>
                                    <div class=" d-grid gap-2 col-6 mx-auto" >
                                       <input type="hidden" id="emailarchiveset" name="emailarchiveset" value="<?php echo $row['email'];?>">
                                       <input type="hidden" id="idarchiveset" name="idarchiveset" value="<?php echo $row['user_id'];?>">
                                       <input type="hidden" id="archivename" name="archivename" value="archive">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                       <button type="button" class="btn btn-danger decline-btn"
                                       data-emailarchiveset="<?php echo $row['email'];?>"
                                       data-idarchiveset="<?php echo $row['user_id'];?>"
                                       data-archivename="archive"
                                       data-bs-dismiss="modal">
                                       Archive
                                   </button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <?php 

   }
}
}
  /*}
                  $sql_view = "SELECT * FROM user WHERE user_id = '".$row['user_id']."'";
// Execute the query
$resultview = mysqli_query($conn, $sql_view);
while ($row_view = mysqli_fetch_array($resultview)){*/

 ?>