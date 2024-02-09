<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 'ars' );
if(!$conn){
    die("Error :". mysqli_connect_error());
}
?>
