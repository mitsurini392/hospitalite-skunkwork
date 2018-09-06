<?php
include("connections.php");

if($_POST['rowid']){
    $eventid = $_POST['rowid'];
    $fetch_events = mysqli_query($connections, "SELECT * from tblevent WHERE intEventId = $eventid ");

    if (mysqli_num_rows($fetch_events) > 0 ){
        $output = "";
    
        while ($row = mysqli_fetch_assoc($fetch_events)) {
            $id = $row["intEventId"];
            $eventname = $row["strEventName"];
            $eventdescription = $row["txtEventDesc"];
            $date = $row["datPaymentDue"];
    
            $output .= "
            <h4>$eventname</h4>
            <br>
            <div>$eventdescription</div>
            ";
        }
        $output .= "</table>";
        echo $output;
    }
}
?>