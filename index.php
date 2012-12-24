<?php
$logged = false;
include("core/security/login.php");
include("core/security/logout.php");
include("core/security/walletselect.php");
include("html/header.php");

if ($logged===true){
}else{
	include("html/login.php");
};
if ($logged===true){
	include("html/logout.php");
	include("core/output.php");
}else{
};

include("html/footer.php");
?>