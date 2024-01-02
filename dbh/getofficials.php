<!--  <div class="row  g-4" style="margin-top:.5rem; text-align:center;"id="getofficials">
    <div class="row">
    <div style="max-height: 50vh; overflow-y: auto;" class="col-lg-12">
        <table class="table" id="archivetable">
          <thead>
            <tr>
              <th scope="col">Profile</th>
              <th scope="col">Name</th>
              <th scope="col">Position</th>
              <th scope="col">Action</th>
          </tr>
      </thead> -->
      <tbody id="listofarchives">

        <?php
        include '../dbh/dbh.inc.php';
        $sql = "SELECT * FROM barangay_officials";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){
            $fileName = basename($row['bo_pic']);
// Construct the URL to the image
            $imageURL = "../pic/" . $fileName;
            ?>

            <tr>
                <td style="text-align:center;"><?php echo '<img src="../pic/' . $imageURL . '" class="rounded-circle" alt="Cinque Terre" width="45" height="45">'; ?></td>
                <td><?php echo $row['bo_name']; ?></td>
                <td><?php echo $row['bo_position']; ?></td>
                <td> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalupdateofficials<?php echo $row['bo_id'];?>">Update</button>
                    <?php
                    if($row['officialstatus'] == "official"){
                        ?>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#archiveofficial<?php echo $row['bo_id'];?>">Archive </button>
                        <?php
                    }else{
                        ?>
                        <input type="hidden" name="restore" value="official" id="restore<?php echo $row['bo_id']; ?>">
                        <input type="hidden" name="idrestore" value="<?php echo $row['bo_position']; ?>" id="<?php echo $row['bo_id']; ?>">
                        <input type="hidden" name="position" value="<?php echo $row['bo_position']; ?>" id="pos<?php echo $row['bo_id']; ?>">
                        <button type="button" class="btn btn-warning restore-btn"
                        data-idrestore="<?php echo $row['bo_id'];?>"id="restoreButton<?php echo $row['bo_id']; ?>"
                        data-restore="#restore"
                        data-position="#pos"
                        >Restore</button>
                        <?php
                    }

                    ?>
                </td>
            </tr>
            <!--  -->

            <?php 
            $sqlupdate = "SELECT * FROM barangay_officials WHERE bo_id = '".$row['bo_id']."'";
            $resultupdate = mysqli_query($conn, $sqlupdate);
            while ($rowupdate = mysqli_fetch_array($resultupdate)){?>
                <!-- update officialsw -->
                <div class="modal fade" id="exampleModalupdateofficials<?php echo $rowupdate['bo_id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update <?php echo $rowupdate['bo_position'];?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12" id="alertstatus_update<?php echo $rowupdate['bo_id'];?>">
                                        <div class="alert alert-primary" role="alert">
                                            Fill up the Information
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="hidden" name="hiddeniupdate" id="<?php echo $rowupdate['bo_id'];?>" value="<?php echo $rowupdate['bo_id'];?>">
                                            <input type="text" class="form-control" id="name_update<?php echo $rowupdate['bo_id'];?>" placeholder="Place your Title here" value="<?php echo $rowupdate['bo_name'];?>" name="nameofficialsupdate">
                                            <label for="name_update<?php echo $rowupdate['bo_id'];?>">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="position_update<?php echo $rowupdate['bo_id'];?>" placeholder="Place your Title here" value="<?php echo $rowupdate['bo_position'];?>" name="positionofficialsupdate">
                                            <label for="position_update<?php echo $rowupdate['bo_id'];?>">Position</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="filetype_update<?php echo $rowupdate['bo_id'];?>" placeholder="Upload Picture" name="picofficialsupdate" value="<?php echo $rowupdate['bo_pic'];?>">
                                            <label for="filetype_update<?php echo $rowupdate['bo_id'];?>">Upload Picture</label>
                                        </div>
                                        <div class="col-lg-12" style="text-align:left;">
                                            <p class="font-monospace">Maximum file size: 50 MB, maximum number of files: 1<br>
                                            Accepted file types: .png .jpg .jpeg</p>
                                        </div>
                                    </div>
                                    <div id="preview-container_update<?php echo $rowupdate['bo_id'];?>" class="mt-2">
                                        <?php
                                        if (!empty($rowupdate['bo_pic'])) {
                                            $fileName = basename($rowupdate['bo_pic']);
                                            ?>
                                            <img src="../pic/<?php echo $fileName; ?>" alt="Preview" style="max-width: 100px; max-height: 100px;">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="font-monospace">Current Image: <?php echo $fileName?></p>
                                        <p class="font-monospace bg-warning">If you wish to change your profile, upload a photo.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary updateofficial-btn"
                                    data-hiddeniupdate="<?php echo $rowupdate['bo_id'];?>"
                                    data-name="#name_update"
                                    data-position="#position_update"
                                    data-pic="#filetype_update"
                                    data-bs-dismiss="modal">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Archive offcials -->
                <div class="modal fade" id="archiveofficial<?php echo $rowupdate['bo_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                    <h1>Your sure want to Archive <?php echo $rowupdate['bo_name'];?> as a <?php echo $rowupdate['bo_position'];?> ?</h1>
                                </div>
                                <div class=" d-grid gap-2 col-6 mx-auto" >
                                    <input type="hidden" value="archive" name="archiveofficials" id="stats<?php echo $rowupdate['bo_id'];?>">
                                    <input type="hidden" value="<?php echo $rowupdate['bo_id'];?>" name="idofficials" id="<?php echo $rowupdate['bo_id'];?>">
                                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cancel</button><button type="button" class="btn btn-danger archiveofficial-btn"
                                    data-archive="#stats"
                                    data-idofficials="<?php echo $rowupdate['bo_id'];?>"
                                    data-bs-dismiss="modal">ARCHIVE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }}?>
</tbody>
</table>
<!-- </div>
</div>
</div> -->
</div>
     
    </div>