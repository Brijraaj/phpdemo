<?php
    $demo = "demo.txt";
 function delete($demo){
     if (file_exists($demo)) {
         unlink($demo);
         echo "File deleted";
     } else {
         echo "File not found";
     }
 }
delete($demo);
?>