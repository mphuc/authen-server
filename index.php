<?php
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

if ($_GET['action'] == 'create')
{
	echo $secret = $ga->createSecret();;
}
if ($_GET['action'] == 'qr')
{
	echo $ga->getQRCodeGoogleUrl($_GET['key'],$_GET['name']);
}
if ($_GET['action'] == 'gecode')
{
	echo $ga->getCode($_GET['key']);
}

?>
