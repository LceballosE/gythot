<?php

include 'jsonActions.php';



$jsonManager = jsonData::Instance();


if (($jsonManager->getPlocation())=="./data") {
		
		echo "<meta http-equiv='refresh' content='0;URL=sinrepositorio.php'/>";

}
else
{
	
$jsonManager->updateMyJson();
$jsonManager->createNewVersion(1);
echo " <meta http-equiv='refresh' content='0;URL=cambio.php' />";
}	

 //
 ?>

