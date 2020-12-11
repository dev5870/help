<?php
$data = file_get_contents('../data/index.json');
$json = json_decode($data, true);
unset($json);

for ($i = 1; $i < 5; $i++) {
    echo $i. '<br>';
    $json[$i] = array('image'=>'id1', 'view'=>0, 'click'=>0, 'rating'=>0, 'institution'=>'id5', 'faculty'=>'id6');
}

file_put_contents('../data/index.json', json_encode($json));
unset($json);
