<?php
include('settings.php');
if ($localCache == true)
{
	$fetcherCacheFile = simplexml_load_file($path);
	$fetcherServerStatus = simplexml_load_file($serverStatusUrl);
	$fetcherCacheFileDate = $fetcherCacheFile->cachedUntil;
	$fetcherServerStatusDate = $fetcherServerStatus->currentTime;

	echo 'update:';
	if (strtotime($fetcherCacheFileDate) < strtotime($fetcherServerStatusDate))
	{
		echo 'needed?=';		
		// get data
		$data = file_get_contents($url);
		
		// saves data to file
		file_put_contents($path, $data);
	
		echo 'yes';
		unset($data);
	}else{
		echo 'needed?=no';
	}

	unset($fetcherCacheFile,$fetcherServerStatus,$fetcherCacheFileDate,$fetcherServerStatusDate);
}
?>