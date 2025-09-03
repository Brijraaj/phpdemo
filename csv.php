<?php

use function PHPSTORM_META\type;

include 'conn.php';
header("Content-type:text/csv");
header("Content-disposition:attachment; filename=emp.csv");
$output = fopen("php://output","w");
fputcsv($output, array("name","location","salary"));

$result = $conn->query("select * from user");
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}



?>