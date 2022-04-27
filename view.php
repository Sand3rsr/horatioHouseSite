<html>
<?php
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/68.42.237.129'));

//Show the version
//
echo "Server Version: ",$status->version;

echo '<br>';
echo '<br>';
echo '<h1>',"---Players---",'</h1>';


	//Show a list of players
foreach ($status->players->list as $player) {
	echo $player.'<br />';
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<a href = "/index.html">Back to safety</a>
</html>
