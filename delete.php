<?php
include_once 'db.php';

$x=$_SESSION['name'];

mysqli_query($conn,"DELETE FROM patient WHERE id='$x'");
mysqli_query($conn,"DELETE FROM amount WHERE id='$x'");
mysqli_query($conn,"DELETE FROM chief_complaint WHERE id='$x'");
mysqli_query($conn,"DELETE FROM investigation WHERE id='$x'");
mysqli_query($conn,"DELETE FROM medical_history WHERE id='$x'");
mysqli_query($conn,"DELETE FROM medication WHERE id='$x'");
mysqli_query($conn,"DELETE FROM oral_health_examination WHERE id='$x'");
mysqli_query($conn,"DELETE FROM past_dental_history WHERE id='$x'");
mysqli_query($conn,"DELETE FROM payment WHERE id='$x'");
mysqli_query($conn,"DELETE FROM total WHERE id='$x'");
echo "<script type='text/javascript'>alert('Patient Deleted..!!');</script>";
include 'viewpatients.php';

?>
