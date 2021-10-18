<?php

function isClass($str) {
    $regex = "/^[A,C,P][0-9]{4}[G,H,I,K,L,M]$/";
    
    if(preg_match($regex,$str)){
        echo "Valid account";
    }else {
        echo "Invalid account";
    }
}
// isClass("C0318G");
// isClass("M0318G");
isClass("C0318A");