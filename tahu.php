<?php
require_once("function.php");
while (TRUE) {
for ($page=1; $page <20; $page++) { 
  $dd = json_decode(getCid(urlencode($member_token),urlencode($device_id)),true);
foreach ($dd['data'] as $keyz => $valz) {
$cid = $valz['category_id'];
$re = '/"category_id": (.*?),/m';
  $decode = json_decode(getList($cid,$page,urlencode($member_token),urlencode($device_id)),true);
  $data = $decode['data']['content'];
  $re = '/content_id=(.*?);/m';
  preg_match_all($re, $data, $matches, PREG_SET_ORDER, 0);
  foreach ($matches as $key => $value) {
    $cat_id[] = $value[1];
  }
  $idd = array_unique($cat_id);
 foreach ($idd as $k => $ctn_id) {
   $claim = claim($ctn_id,urlencode($member_token),urlencode($device_id));
   echo "$claim => Content : $ctn_id| CID  : $cid | Page : $page\n";
   sleep($jeda);
 }
}
}
}
