<?php
// ****************
// STATIC VARIABLES
// ****************
$localCache = false;
$keyID = null;
$vCode = null;

$type = 'corp';
$rowCount = '2560';

$walletVar = '&accountKey='.$walletNumber;
$vCodeVar = '&vCode='.$vCode;
$rowCountVar = '&rowCount='.$rowCount;
$keyIDVar = 'keyID='.$keyID;

$url = 'https://api.eveonline.com/'.$type.'/WalletJournal.xml.aspx?'.$keyIDVar.$vCodeVar.$walletVar.$rowCountVar;
$serverStatusUrl = 'https://api.eveonline.com/server/ServerStatus.xml.aspx/';

$color = 'success';
$multiplicate = '0.000001';
$path = 'data/wallet'.$walletNumber.'.xml';
?>