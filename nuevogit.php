<?php

include 'jsonActions.php';
include 'eliminar.php';
include 'folderPath.php';

$variable=$_POST["lab"];

$jsonManager = jsonData::Instance($pos);
$jsonManager->updateMyJson();
$jsonManager->setPlocation($variable);

	$path = "./data/";
	$dh = opendir($path);
	
 if (($file = readdir($dh)) == false) {
 		$jsonManager->createNewVersion(0);

	echo "<meta http-equiv='refresh' content='0;URL=sinrepositorio.php'/>";
} 
	
if (($file = readdir($dh)) !== false) {
	$jsonManager->createNewVersion(0);
	echo '<meta http-equiv="refresh" content="0;URL=cambio.php" />';
	

}


?>



