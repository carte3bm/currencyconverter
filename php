

 <?php
$url = "http://currency-api.appspot.com/api/$_GET[field1].json?key=5964e7afe142a6594c32496470ec71a9c801e5eb";

$result = file_get_contents($url);
$result = json_decode($result);

$text_line = explode( "/" , $_GET["field1"] );
$amount = 5;
$rate = floatval($result->rate);
$newrate = $amount*$rate;
if ($result->success)
{
    echo "<p>1 ".$text_line[0]. " is worth ".$newrate." " .$text_line[1]. "</p>";
}
 ?>
