<?php
$url = 'https://o3dqhz0k4c.execute-api.us-west-2.amazonaws.com/test';

$ch = curl_init($url);

$data = $_POST;

$payload = json_encode($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);
if($result){
   echo(

      "<h1> Thank You For submitting</h1>"
   );
}

?>
