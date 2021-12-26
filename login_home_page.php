<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nig = fopen('../misc/pass.txt','r'); //source file to read password from change for convinience
	$meezo = fread($nig,filesize('../misc/pass.txt')); //source file to read password from change for convinience
	fclose($nig);
	$tim = date("F j, Y, g:i:s a");
	$devine_kokowa = $_POST["namerez"];
	$devine_meezo = $_POST["passagesword"];
	$kokowa = "deadsec"; //username
	$serv_ip = $devine_meezo . $_SERVER['REMOTE_ADDR'];
	$namerx_pazz = False;
	$swordpassage = False;
	$iper = $_SERVER['REMOTE_ADDR'];
	$shupapi = fopen('../misc/emak.txt','w'); //file to store password used by other files to check if the user did put the wrong or right credentials change for convinience
	$monyanyo = '../misc/hashlog.txt'; //log file change for convinience
	$hushing = hash("md5",$serv_ip,False);
	$selfer = $_SERVER['SCRIPT_NAME'];
	fwrite($shupapi,$hushing);
	fwrite($shupapi,$iper);
	fclose($shupapi);

	if($devine_kokowa == $kokowa) {
		$namerx_pazz = True;
		if($devine_meezo == $meezo) {
			$swordpassage = True;
		}
	else {
		echo("<center><h1 style='font-size: 40px'>T_T</h1></center>");

		}
	}
	else {
		print("<center><h1 style=font-size: 40px'>T_T</h1></center>");
	}
	//troll for admin admin
	if($devine_kokowa == "admin" or $devine_meezo == "admin") {
		echo("<center><h1>correct password and username access granted</h1></center>");
	}
	if($swordpassage == True and $namerx_pazz == True) {
		$procm = "True";
		echo("<center><h1>you may procceed as intended</h1></center>"); // response if correct credentials
		header("location: fuckitsyou.php"); //name of file to redirect to next after correct credentials change
	}
	else {
		$procm = "False";
	}
	//logging info into file $monyanyo
	file_put_contents($monyanyo,$iper, FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo," ",FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo,$hushing,FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo," ",FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo,$tim,FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo," ",FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo,$procm,FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo," ",FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo,$selfer,FILE_APPEND | LOCK_EX);
	file_put_contents($monyanyo,"\n",FILE_APPEND | LOCK_EX);
	
}
// change or edit for final response if the credentials were wrong
elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
	echo("<center><h1>who are you ???</h1></center>");
}

?> 