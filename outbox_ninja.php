<?php
define("COOKIE_FILE", "cookie.txt");
$ch = curl_init("http://outbox.ninja/");
curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
$str=curl_exec($ch);

$matches = array();
    if (preg_match('/value=[0-9]+/', $str, $matches)) {
          $key=substr(($matches[0]),6);
    }
    //echo $key;

// Read the session saved in the cookie file
echo "<br/><br/>";
$file = fopen("cookie.txt", 'r');
echo fread($file, 100000000);   
echo "<br/><br/>";

  $postData = '';
  $postData=http_build_query(array(
                 "code" => "IN",
   "number" => "+917738716765",
   "msg" => "whats-next :P",
   "key" => $key,
   "send" => "Submit"

            ));


var_dump($postData);
curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_POST, count($postData));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
var_dump( curl_exec ($ch) );
curl_close($ch);
?>