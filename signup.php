<?php

$fName = $_POST['fName'];
$ls = $_POST['ls'];
$user= $_POST['user'];
$ps= $_POST['ps'];



$conn = new mysqli('localhost', 'root', '', 'cloud');
if($conn->connect_error) {
    die('connection Failed :' .$conn->connect_error);
}
 else {
    $stmt = $conn->prepare("insert into signup(fName, ls, user, ps)values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fName, $ls, $user, $ps);
    $stmt->execute();
    include("landingPage.html");
    Echo ("Signup Successful");
    $stmt->close();
    $conn->close();
}

?>


