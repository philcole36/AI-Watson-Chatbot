<html>
<label>Question:</label>
<form name="form" action="" method="get">
  <input type="text" name="question" id="question" value="">
  <button type="submit" id="test">Send</button>
</form>
<?php 
ini_set("allow_url_fopen", 1);



if (!empty($_GET['question']))
{$questi = $_GET['question'];
$createurl = 'http://watsontutor.openode.io/create';
$messageurl = 'http://watsontutor.openode.io/message/'.$questi;
//echo $questi;
$json = file_get_contents($createurl);
$json = file_get_contents($messageurl);
$json = file_get_contents($messageurl);
$json = file_get_contents($messageurl);
$obj = json_decode($json);
foreach ($obj as $val)
{
    echo $val->text;
    echo " ";
}
}
?>

</html>

