<?php
include("dbh.inc.php");
if (isset($_POST['archiveannouncement'])) {
    $statsres = "archived"; 
    $setres = $_POST['idarchiveannouncement']; 
    $queryres = "UPDATE announcements SET a_display='$statsres' WHERE a_id ='".$setres."'";
    mysqli_query($conn, $queryres);
}	

if (isset($_POST['resotreannouncement'])) {
    $setres = $_POST['idrestore'];
    $statsres = "display";
/*$sql "SELECT * FROM announcements WHERE a_id = '$setres'";
 $sqlresultupdate = mysqli_query($conn, $sqlupdate);
     while ($row = mysqli_fetch_assoc($sqlresultupdate)) { 
    // Check if a_startdate and a_enddate are not empty
    if ($row['a_status'] == "Announcement") {
        $statsres = "Announcement";
    }elseif ($row['a_status'] == "Event") {
        $statsres = "Event";
    } else {
        $statsres = "Project";
    }
}*/
    $queryres = "UPDATE announcements SET a_display='$statsres' WHERE a_id ='".$setres."'";
    mysqli_query($conn, $queryres);
}


?>