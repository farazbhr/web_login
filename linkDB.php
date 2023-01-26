<?php
// Open a new connection to the MySQL server
$linkDB = mysqli_connect("localhost:6033","db_admin","2020352","webLogin_db");
if (mysqli_connect_error()){ //for connection error finding
    die ('There was an error while connecting to database');
}
?>