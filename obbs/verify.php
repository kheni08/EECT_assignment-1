<?php
include('includes/dbconnection.php');

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if token exists
    $sql = "SELECT * FROM tbluser WHERE Token=:token AND Verified=0";
    $query = $dbh->prepare($sql);
    $query->bindParam(':token', $token, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        // Activate user account
        $sql = "UPDATE tbluser SET Verified=1 WHERE Token=:token";
        $query = $dbh->prepare($sql);
        $query->bindParam(':token', $token, PDO::PARAM_STR);
        $query->execute();

        echo "<script>alert('Your email has been verified! You can now log in.');</script>";
        echo "<script>window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Invalid or expired token.');</script>";
    }
} else {
    echo "<script>alert('No token provided.');</script>";
}
?>
