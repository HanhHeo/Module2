<?php

function isCheckPhone($str) {
    $regex = "/^\([0-9]{2}\)\-\(0[0-9]{9}\)$/";
    
    if(preg_match($regex,$str)){
        echo "Valid Phone";
    }else {
        echo "Invalid Phone";
    }
}
isCheckPhone("(84)-(0978489648)");
// echo "<br>";
isCheckPhone(" (a8)-(22222222)");