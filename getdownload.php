<?php
$number = $_GET["number"];
$type = $_GET["type"];
//获取get参数
$filename= $number.".pdf";
$url="http://47.92.68.174/Applications/TestFlow/ReportPrint/Ajax_reportPrint.aspx/?reportNum=$number&printDirect=2&isNeedRealPrint=1&regCode=&itemCode=$type&reportClass=报告";
header( "Content-Disposition:  attachment;  filename=".$filename); //告诉浏览器通过附件形式来处理文件
header('Content-Length: ' . filesize($url)); //下载文件大小
readfile($url);  //读取文件内容
?>