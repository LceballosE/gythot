<?php 
include 'jsonActions.php';

$jsonManager = jsonData::Instance();
$jsonManager->updateMyJson();
$jsonManager->createNewVersion(2);
 ?>