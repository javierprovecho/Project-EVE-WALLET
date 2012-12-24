<?php
if (isset($_POST['select'])) {
	if ($_POST['walletselect'] == '1000'){
		$walletNumber = '1000';
		$logged = true;
	}
//	elseif ($_POST['walletselect'] == '1001'){
//		$walletNumber = '1001';
//		$logged = true;
//	}
	elseif ($_POST['walletselect'] == '1002'){
		$walletNumber = '1002';
		$logged = true;
	}
	elseif ($_POST['walletselect'] == '1003'){
		$walletNumber = '1003';
		$logged = true;
	}
//	elseif ($_POST['walletselect'] == '1004'){
//		$walletNumber = '1004';
//		$logged = true;
//	}
	elseif ($_POST['walletselect'] == '1005'){
		$walletNumber = '1005';
		$logged = true;
	}
	elseif ($_POST['walletselect'] == '1006'){
		$walletNumber = '1006';
		$logged = true;
	}
	else
	{
		$walletNumber = '1000';
		$logged = true;
	}
}
?>