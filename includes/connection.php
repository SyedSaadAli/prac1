<?php

$con = mysqli_connect("localhost","root","", "elearn");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>