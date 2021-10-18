<?php

function isAccount($str) {
    $regex = "/^[_a-z0-9]{6,}$/";
    
    if(preg_match($regex,$str)){
        echo "Account hợp lệ";
    }else {
        echo "Account không hợp lệ";
    }
}
isAccount("123abc_");
isAccount("12345");
isAccount("_abc123");
isAccount(".@");