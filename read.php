<?php
$demo = 'demo.txt';
// function reading($demo){
// if (file_exists($demo)) {
//     $data = file_get_contents($demo);
//     echo nl2br($data);
// }
// }
// reading($demo);

function writing($demo, $id, $name, $sal){
        $data = "$id | $name | $sal";
        file_put_contents($demo, $data);
    echo nl2br($data);
    }
    writing($demo, 1, "Tom", 15000);



    // function append($demo, $id, $name, $sal){
    //     $data = "$id | $name | $sal";
    //     file_put_contents($demo, $data, FILE_APPEND);
    //     echo nl2br($data);
    // }
    // append($demo, 2, "Jerry", 20000);


//      function delete($demo){
//      if (file_exists($demo)) {
//          unlink($demo);
//          echo "File deleted";
//      } else {
//          echo "File not found";
//      }
//  }
// delete($demo);
?>
































