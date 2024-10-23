<?php
    $arr1 = array("Moha","lg",22);
   
    echo '<pre>';
    print_r($arr1);
    echo '</pre>';

    foreach ($arr1 as $val ){
        echo '<pre>'.$val.'</pre>';
    }

    foreach ($arr1 as $key => $value){
        echo '<pre> ['.$key.'] => ' . $value.'</pre>';
    }


    $arr2 = array("Nom" => "LAAGUILI", "Prénom" => "Mohamed");

    echo '<pre>';
    print_r($arr2);
    echo '</pre>';

    foreach ($arr2 as $val ){
        echo '<pre>'.$val.'</pre>';
    }

    foreach ($arr2 as $key => $value){
        echo '<pre> <b> ['.$key.'] => ' . $value.'</b> </pre>';
    }

?> 