<?php
$access_token = '2QFCK2OI2TlWFKuyqCBr+iVwaVNHjOzfygclG2zfbEt37z3m3pzxGAjPx99wKZAQYujCH5gv6SsM0QBz2YPvJr+iYDu6VLDLmBRWuE/LvIzDfPxBKu143G0mEwmbqlQgkaWymJLrLRw5H9acmr60PgdB04t89/1O/w1cDnyilFU=';
$arrayHeader = array();

$richMenuId ="richmenu-59ffe9c3783e81704c4a633592c44d76";
$Body = "../Images/test2.png";
$arrayHeader[] = "Content-Type: image/png";
$arrayHeader[] = "Authorization: Bearer {$access_token}";
$c = file_get_contents($Body,true);
  echo (endpoint("https://api-data.line.me/v2/bot/richmenu/$richMenuId/content", $arrayHeader ,$c ));

function endpoint($url, $arrayHeader,$Body)
{
  $strUrl = $url;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $strUrl);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $Body);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

