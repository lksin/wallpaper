<?php
$str1 = "https://pic3.lksin.xyz/pic/main/test/";
$str2 = rand(0,841);
$str3 = ".jpg";
$strn1 = "1 (";
$strn2 = ")";
$str4 = $str1.$strn1.$str2.$strn2.$str3;
echo $str4;
header("Location: $str4");
exit();
?>
