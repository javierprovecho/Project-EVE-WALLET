<?php
echo '
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Date", "Balance"]
';

foreach($outputCacheFile->result->rowset->row as $outputRow) {
	echo '
		,["'.$outputRow->attributes()->date.'", '.$outputRow->attributes()->balance.']
	';
}

echo '
        ]);

        var chart = new google.visualization.AreaChart(document.getElementById("chart_div"));
        chart.draw(data, {
			title: "",
			chartArea: {width: "100%", height: "100%"},
			hAxis: {direction: "-1", textPosition: "none"},
			vAxis: {textPosition: "none", gridlines: {count: 0}},
			backgroundColor: "black",
			legend: {position: "none"},
		});
      }
    </script>
  </head>
  <body>
    <hr><div id="chart_div" style="width: 100%; height: 500px;"></div><hr>
  </body>
</html>
';
?>