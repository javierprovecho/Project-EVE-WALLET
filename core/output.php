<?php
include('fetcher.php');
echo ' || wallet:number?='.$walletNumber.' || version:v?=0.3<br><br><hr>';

if ($localCache == true)
{
	$outputCacheFile = simplexml_load_file($path);
	$outputServerStatus = simplexml_load_file($serverStatusUrl);
	$outputCacheFileDate = $outputCacheFile->cachedUntil;
	$outputServerStatusDate = $outputServerStatus->currentTime;
}else{
	$outputCacheFile = simplexml_load_file($url);
	$outputServerStatus = simplexml_load_file($serverStatusUrl);
	$outputCacheFileDate = $outputCacheFile->cachedUntil;
	$outputServerStatusDate = $outputServerStatus->currentTime;
}

echo '
<mdk style="color:white"><center>
Next Update: '.$outputCacheFileDate.'<br>
Actual Time: '.$outputServerStatusDate.'<br>
Actual Balance: <bdk title="'.$outputCacheFile->result->rowset->row->attributes()->balance.' ISK">'.round($outputCacheFile->result->rowset->row->attributes()->balance,-4)*$multiplicate.' Millions of ISK</bdk></center></mdk>
';


include('chart.php');


echo '
<table class="table table-bordered table-condensed">
	<tr style="color:white">
		<th>Date</th>
		<th>From</th>
		<th>To</th>
		<th>Amount</th>
		<th>Balance</th>
	</tr>
';
foreach($outputCacheFile->result->rowset->row as $outputRow) {
	if ( $outputRow->attributes()->amount < '0' ) {
		$color = 'error';
	}
	if ( $outputRow->attributes()->amount > '0' ) {
		$color = 'success';
	}
	echo '
	<tr class="'.$color.'">
		<td>'.$outputRow->attributes()->date.'</td>
		<td>'.$outputRow->attributes()->ownerName1.'</td>
		<td>'.$outputRow->attributes()->ownerName2.'</td>
		<td><p title="'.$outputRow->attributes()->amount.' ISK">'.round($outputRow->attributes()->amount,-4)*$multiplicate.' M ISK</p></td>
		<td><p title="'.$outputRow->attributes()->balance.' ISK">'.round($outputRow->attributes()->balance,-4)*$multiplicate.' M ISK</p></td>
	</tr>
	';
}
echo '
</table>
';
?>