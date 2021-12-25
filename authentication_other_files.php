<?php
$nig = fopen('../misc/pass.txt','r');
$meow = fread($nig,filesize('../misc/pass.txt'));
fclose($nig);
$love = fopen('./meowmeow_images/ipz.txt',"r");
$hate = fread($love,filesize('./meowmeow_images/ipz.txt'));
fclose($love);
echo("<h2>>&nbsp;</h2><a href='http://$hate:8080/fuckitsyou.php' style='text-decoration:none'>INDEX/HOME</a>");
$shupapi = fopen('../misc/emak.txt','r');
$meowmeow = $meow . $_SERVER['REMOTE_ADDR'];
$hushing = hash("md5",$meowmeow,False) . $_SERVER['REMOTE_ADDR'];
$minyo = fread($shupapi,filesize('../misc/emak.txt'));
$passor = "subject did pass";
if($minyo != $hushing) {
	$passor = "subject rejected";
	header("location: welcome.php");
}
$tim = date("F j, Y, g:i:s a");
$mony = '../misc/hashlog.txt';
$selfer = $_SERVER['SCRIPT_NAME'];
file_put_contents($mony,$_SERVER['REMOTE_ADDR'], FILE_APPEND | LOCK_EX);
file_put_contents($mony," ",FILE_APPEND | LOCK_EX);
file_put_contents($mony,$hushing,FILE_APPEND | LOCK_EX);
file_put_contents($mony," ",FILE_APPEND | LOCK_EX);
file_put_contents($mony,$tim,FILE_APPEND | LOCK_EX);
file_put_contents($mony," ",FILE_APPEND | LOCK_EX);
file_put_contents($mony,$selfer,FILE_APPEND | LOCK_EX);
file_put_contents($mony," ",FILE_APPEND | LOCK_EX);
file_put_contents($mony,$passor,FILE_APPEND | LOCK_EX);
file_put_contents($mony,"\n",FILE_APPEND | LOCK_EX);
?>