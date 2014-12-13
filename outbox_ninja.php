<?php
$ch = curl_init("http://outbox.ninja/");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
$str=curl_exec($ch);

$matches = array();
    if (preg_match('/value=[0-9]+/', $str, $matches)) {
          $key=substr(($matches[0]),6);
    }

  $no="+91".$argv[1];
    if( strlen($no) != 13 )
        { echo "Invalid Number"; exit;}
  $msg=$argv[2];
      if( strlen($msg) > 160 )
        { echo "Message too Long.160 Characters Only."; exit;}
  $postData = '';
  $postData=http_build_query(array(
                 "code" => "IN",
  "number" => $no,
   "msg" => $msg,
   "key" => $key,
   "send" => "Submit"

            ));
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_POST, count($postData));
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
//var_dump( curl_exec ($ch) );
curl_exec ($ch);
curl_close($ch);
echo "Success!!";
exit;
?>