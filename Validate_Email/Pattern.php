<?php

function isEmail($str) {
    $regex = '/^[a-zA-Z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/'; 
    // $regex = '/^[a-z]{1}+\@[a-z]+\.[a-z]$/';
    // $regex = '/^[a-z]{2}+\@[a-z]{1,5}\.[a-z]$/';
    if(preg_match($regex,$str)){
        echo "Email hợp lệ";
    }else {
        echo "Email không hợp lệ";
    }
}
isEmail("a@gmail.com");
// isEmail("ab@gmail.com");
// isEmail("abc@hotmail.com");

