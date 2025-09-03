<?php
$demo = 'demo.txt';
    function writing($demo, $id, $name, $sal){
        $data = "$id | $name | $sal";
        file_put_contents($demo, $data);
    echo nl2br($data);
    }
    writing($demo, 1, "Tom", 15000);

    ?>

