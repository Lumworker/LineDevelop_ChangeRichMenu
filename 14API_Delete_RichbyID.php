<?php
$access_token = '2QFCK2OI2TlWFKuyqCBr+iVwaVNHjOzfygclG2zfbEt37z3m3pzxGAjPx99wKZAQYujCH5gv6SsM0QBz2YPvJr+iYDu6VLDLmBRWuE/LvIzDfPxBKu143G0mEwmbqlQgkaWymJLrLRw5H9acmr60PgdB04t89/1O/w1cDnyilFU=';
$arrayHeader = array();
$Body = array();

$arrayHeader[] = "Authorization: Bearer {$access_token}";
$richMenuId ="richmenu-967abba3fad006d51c6997043ee7aba2";

$Body[] = "richMenuId:$richMenuId";
echo (endpoint("https://api.line.me/v2/bot/richmenu/$richMenuId", $arrayHeader, $Body));
  
  

  function endpoint($url, $arrayHeader, $Body)
  {
    $strUrl = $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $strUrl);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($Body));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
