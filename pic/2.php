<?php
$str1 = "https://pic.lksin.xyz/test1/";
$str2 = rand(10,100);
$str3 = ".jpg";

$str4 = $str1+$str2+$str3
function redirect($str4)
{
    header("Location: $str4");
    exit();
}
?>
