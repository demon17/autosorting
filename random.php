<?php
function randomColumn ($columNumber){
    $i = 0;
    $boxsize = array();
    do {
        $weight = rand(1, 4);
        $height = 1;
        if ( $weight == 2) {
            $height = rand(1, 2);
        }
        $boxsize[] =  ["weight" => $weight,"height" => $height];
        $i++;

    } while ($i < $columNumber );

    return $boxsize;

}
$randomBoxes = randomColumn(30);