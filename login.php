<?php

$uss = $_POST['uss'];
$pass = $_POST['pas'];


$data = $_POST;
if (empty($data['uss']) ||
    empty($data['pass'])) {
        die('Please fill all required fields');
    }

    
?>