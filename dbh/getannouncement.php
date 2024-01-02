<?php

include 'dbh.inc.php';
$sql = "SELECT * FROM announcements";
            $sqlresult = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($sqlresult)) { 
            $selected_time = new DateTime($row['a_date'] . ' ' . $row['a_time']);
            $current_time = new DateTime('now');
            $time_difference = $current_time->diff($selected_time);
            if ($time_difference->y > 0) {
                $timestatus =  'Last updated '.$time_difference->y . ' year(s) ago';
            } elseif ($time_difference->m > 0) {
               $timestatus =  'Last updated '.$time_difference->m . ' month(s) ago';
            } elseif ($time_difference->d > 0) {
                if ($time_difference->d == 1) {
                   $timestatus =  'Last updated Yesterday at ' . $selected_time->format('h:i A');
                } else {
                    $timestatus =  'Last updated '.$time_difference->d . ' day(s) ago';
                }
            } elseif ($time_difference->h > 0) {
                $timestatus =  'Last updated '.$time_difference->h . ' hours ago';
            } elseif ($time_difference->i > 0) {
                $timestatus = 'Last updated '. $time_difference->i . ' minute(s) ago';
            } else {
                $timestatus = 'Just now';
            }
             $fileName = basename($row['a_pic']);
    if (!empty($fileName) && $fileName != 'uploads') {
        $setfilename = $fileName;
    }
                             if($row['a_display']=="archived"){
        ?>
        <tr class="bg-danger text-white">
        <?php }else{ ?>
            <tr>
            <?php } ?>
            <td><?php echo $row['a_status'];?></td>
            <td style="text-align:center;"><?php  echo '<img src="../pic/'. $setfilename.'" class="rounded-circle" alt="Cinque Terre" width="45" height="45">'; ?></td>
            <td><?php echo $row['a_title'];?></td>
            <td><?php echo $row['a_date'];?></td>
            <td><?php echo $timestatus;?></td>
            <td>        <?php
            if($row['a_display']!="archived"){
                ?>
                <input type="hidden" name="idannouncementcall" id="id<?php echo $row['a_id'];?>"  value="<?php echo $row['a_id'];?>"> 
                <?php
                if ($row['a_status'] == "Event") {?>
                 <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropforeventsupdate<?php echo $row['a_id'];?>">Edit</button>
                 
                    <?php
                }else{
                ?>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#aanouncementedit<?php echo $row['a_id'];?>" data-idannouncementcall="id<?php echo $row['a_id'];?>">Edit</button>
            <?php } ?>
                <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#Archiveannouncement<?php echo $row['a_id'];?>">Archive</a></li>
                <?php } else{?>
                   <input type="hidden" name="idrestore" id="<?php echo $row['a_id'];?>" value="<?php echo $row['a_id'];?>"> 
                   <button type="button" class="btn btn-warning restore-btn"
                   data-idrestore="<?php echo $row['a_id'];?>"
                   >restore</button>
               <?php } ?>
           </td>
       </tr>

            
<?php }?>