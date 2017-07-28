<?php
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

if ($_GET['action'] == 'create')
{
	$json['key'] = $secret = $ga->createSecret();
	$json['qr'] = $ga->getQRCodeGoogleUrl($_GET['name'],$json['key']);
	echo json_encode($json);
}
if ($_GET['action'] == 'qr')
{
	echo $ga->getQRCodeGoogleUrl($_GET['key'],$_GET['name']);
}
if ($_GET['action'] == 'getcode')
{
	echo $ga->getCode($_GET['key']);
}

?>
