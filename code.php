 <?php
$url = "http://currency-api.appspot.com/api/$_GET[field1].json?key=5964e7afe142a6594c32496470ec71a9c801e5eb&amount=$_GET[field2]";

$result = file_get_contents($url);
$result = json_decode($result);

$text_line = explode( "/" , $_GET["field1"] );


if ($result->success)
{
    echo "<input  type='text' id = 'result' readonly value = '".$result->amount. "'></input>";
}
 ?>
