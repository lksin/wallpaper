<?php
/*
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
        header("Location: $str4");
        break;
}*/
//存有链接的文件名
$filename = "RandomPic.txt";
if(!file_exists($filename)){
	die('文件不存在');
}

//从文本获取链接
$pics = [];
$fs = fopen($filename, "r");
while(!feof($fs)){
	$line=trim(fgets($fs));
	if($line!=''){
		array_push($pics, $line);
	}
}

//从数组随机获取链接
$pic = $pics[array_rand($pics)];

//返回指定格式
$type=$_GET['type'];
switch($type){

//JSON返回
case 'json':
	header('Content-type:text/json');
	die(json_encode(['pic'=>$pic]));

default:
	die(header("Location: $pic"));
}

    
# $str1 = "https://pic3.lksin.xyz/pic/main/test/";
# $str2 = rand(0,841);
# $str3 = ".jpg";
# $strn1 = "1 (";
# $strn2 = ")";
# $str4 = $str1.$strn1.$str2.$strn2.$str3;
?>
