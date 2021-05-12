<?php
/* Adatbázis kezelés, Ranglista a dashboardra */
define('DB_SERVER', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_NAME', '');
 
// FOR ANY OTHER IMPLEMENTS CONTACT ME!
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Ellenorzes
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>