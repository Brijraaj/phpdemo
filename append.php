
<?php
$demo = 'demo.txt';
    function append($demo, $id, $name, $sal){
        $data = "$id | $name | $sal";
        file_put_contents($demo, $data, FILE_APPEND);
        echo nl2br($data);
    }
    append($demo, 2, "Jerry", 20000);

    ?>