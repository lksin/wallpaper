<?php
$str1 = "https://pic.lksin.xyz/test1/";
$str2 = rand(0,29);
$str3 = ".jpg";

$str4 = $str1.$str2.$str3;
echo $str4;
header("Location: $str4");
?>
