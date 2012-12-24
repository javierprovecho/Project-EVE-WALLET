<?php
if (isset($_POST['login'])) {
	if ($_POST['password'] == 'erebus') {
		if ($_POST['wallet'] == '1000'){
			$walletNumber = '1000';
		}
		elseif ($_POST['wallet'] == '1001'){
			$walletNumber = '1001';
		}
		elseif ($_POST['wallet'] == '1002'){
			$walletNumber = '1002';
		}
		elseif ($_POST['wallet'] == '1003'){
			$walletNumber = '1003';
		}
		elseif ($_POST['wallet'] == '1004'){
			$walletNumber = '1004';
		}
		elseif ($_POST['wallet'] == '1005'){
			$walletNumber = '1005';
		}
		elseif ($_POST['wallet'] == '1006'){
			$walletNumber = '1006';
		}
		else
		{
			$walletNumber = '1000';
		}
		$logged = true;
	}
}
?>