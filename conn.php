
<?php 
$server = 'localhost';
$uname = 'root';
$pass = '';
$db = 'phpdemo1';

$conn = new mysqli($server, $uname, $pass, $db);
if (!$conn) {
    echo "Not connected";
}


?>