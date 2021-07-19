<?php
$sexy=$_GET["id"];
switch ($sexy) {
    case "all_pic":
        $str1 = "https://pic3.lksin.xyz/pic/main/test/";
        $str2 = rand(1,841);
        $str3 = ".jpg";
        $strn1 = "1 (";
        $strn2 = ")";
        $str4 = $str1.$strn1.$str2.$strn2.$str3;
        header("Location: $str4");
    break;
    case "honkai_impact":
        $str1 = "https://pic3.lksin.xyz/pic/pic/test1/";
        $str2 = rand(1,30);
        $str3 = ".jpg";
        $strn1 = "honkai_impact (";
        $strn2 = ")";
        $str4 = $str1.$strn1.$str2.$strn2.$str3;
        header("Location: $str4");
        break;
    case "blog_top":
        $str1 = "https://cdn.jsdelivr.net/gh/PRWYQ/fantasy@1.0/top/";
        $str2 = rand(1,20);
        $str3 = ".jpg";
        $str4 = $str1.$str2.$str3;
        echo $str4;
        header("Location: $str4");
        break;
}

    
# $str1 = "https://pic3.lksin.xyz/pic/main/test/";
# $str2 = rand(0,841);
# $str3 = ".jpg";
# $strn1 = "1 (";
# $strn2 = ")";
# $str4 = $str1.$strn1.$str2.$strn2.$str3;
?>
