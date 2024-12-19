<?php

function show($stuff)
{
    echo "<prev>";
    print_r($stuff);
    echo "</prev>";
}

function get_random_string_max($length){

    $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $text = "";

    $length = rand(4,$length);

    for($i=0;$i<$length;$i++){

        $random = rand(0,61);

        $text .= $array[$random];
    }

    return $text;
}

function check_message()
{

    if(isset($_SESSION['error']) && $_SESSION['error'] != "")
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
}