<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
// <<< @php_coderchik tomonidan yozildi >>> <<< @phpdevelopersuz kanalida tarqatildi >>> 
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$ricon = array('01d'=>'🌞','02d'=>'🌤','03d'=>'☁️','04d'=>'🌥','09d'=>'🌦','10d'=>'🌧','11d'=>'⛈','13d'=>'❄️','50d'=>'💨','01n'=>'🌙','02n'=>'☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');
// <<< @php_coderchik tomonidan yozildi >>> <<< @phpdevelopersuz kanalida tarqatildi >>>
$obuhavo = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Zarkent,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);
$temp = $obuhavo['main']['temp'];
$icon = $obuhavo['weather'][0]['icon'];
$r1=date("H:i",strtotime("2 hour"));
$r1 = str_replace('1', '1', $r1);
$r1 = str_replace('2', '2', $r1);
$r1 = str_replace('3', '3', $r1);
$r1 = str_replace('4', '4', $r1);
$r1 = str_replace('5', '5', $r1);
$r1 = str_replace('6', '6', $r1);
$r1 = str_replace('7', '7', $r1);
$r1 = str_replace('8', '8', $r1);
$r1 = str_replace('9', '9', $r1);
$r1 = str_replace('0', '0', $r1);

$r1s=date("s",strtotime("2 hour"));
$r1s = str_replace('1', '1', $r1s);
$r1s = str_replace('2', '2', $r1s);
$r1s = str_replace('3', '3', $r1s);
$r1s = str_replace('4', '4', $r1s);
$r1s = str_replace('5', '5', $r1s);
$r1s = str_replace('6', '6', $r1s);
$r1s = str_replace('7', '7', $r1s);
$r1s = str_replace('8', '8', $r1s);
$r1s = str_replace('9', '9', $r1s);
$r1s = str_replace('0', '0', $r1s);
/* @php_coderchik @phpdevelopersuz kanalida tarqatdi */
$r2=date("H:i",strtotime("2 hour"));
$r2 = str_replace('1', '1', $r2);
$r2 = str_replace('2', '2', $r2);
$r2 = str_replace('3', '3', $r2);
$r2 = str_replace('4', '4', $r2);
$r2 = str_replace('5', '5', $r2);
$r2 = str_replace('6', '6', $r2);
$r2 = str_replace('7', '7', $r2);
$r2 = str_replace('8', '8', $r2);
$r2 = str_replace('9', '9', $r2);
$r2 = str_replace('0', '0', $r2);

$r2s=date("s",strtotime("2 hour"));
$r2s = str_replace('1', '1', $r2s);
$r2s = str_replace('2', '2', $r2s);
$r2s = str_replace('3', '3', $r2s);
$r2s = str_replace('4', '4', $r2s);
$r2s = str_replace('5', '5', $r2s);
$r2s = str_replace('6', '6', $r2s);
$r2s = str_replace('7', '7', $r2s);
$r2s = str_replace('8', '8', $r2s);
$r2s = str_replace('9', '9', $r2s);
$r2s = str_replace('0', '0', $r2s);
/* @php_coder_chik tomonidan
@phpdevelopersuz kanalida tarqatildi*/
$r3=date("H:i",strtotime("2 hour"));
$r3 = str_replace('1', '¹', $r3);
$r3 = str_replace('2', '²', $r3);
$r3 = str_replace('3', '³', $r3);
$r3 = str_replace('4', '⁴', $r3);
$r3 = str_replace('5', '⁵', $r3);
$r3 = str_replace('6', '⁶', $r3);
$r3 = str_replace('7', '⁷', $r3);
$r3 = str_replace('8', '⁸', $r3);
$r3 = str_replace('9', '⁹', $r3);
$r3 = str_replace('0', '⁰', $r3);

$r3s=date("s",strtotime("2 hour"));
$r3s = str_replace('1', '¹', $r3s);
$r3s = str_replace('2', '²', $r3s);
$r3s = str_replace('3', '³', $r3s);
$r3s = str_replace('4', '⁴', $r3s);
$r3s = str_replace('5', '⁵', $r3s);
$r3s = str_replace('6', '⁶', $r3s);
$r3s = str_replace('7', '⁷', $r3s);
$r3s = str_replace('8', '⁸', $r3s);
$r3s = str_replace('9', '⁹', $r3s);
$r3s = str_replace('0', '⁰', $r3s);
/* @php_coder_chik tomonidan
@phpdevelopersuz kanalida tarqatildi*/
$r4=date("H:i",strtotime("2 hour"));
$r4 = str_replace('1', '1', $r4);
$r4 = str_replace('2', '2', $r4);
$r4 = str_replace('3', '3', $r4);
$r4 = str_replace('4', '4', $r4);
$r4 = str_replace('5', '5', $r4);
$r4 = str_replace('6', '6', $r4);
$r4 = str_replace('7', '7', $r4);
$r4 = str_replace('8', '8', $r4);
$r4 = str_replace('9', '9', $r4);
$r4 = str_replace('0', '0', $r4);
// @php_coder_chik
$r4s=date("s",strtotime("2 hour"));
$r4s = str_replace('1', '1', $r4s);
$r4s = str_replace('2', '2', $r4s);
$r4s = str_replace('3', '3', $r4s);
$r4s = str_replace('4', '4', $r4s);
$r4s = str_replace('5', '5', $r4s);
$r4s = str_replace('6', '6', $r4s);
$r4s = str_replace('7', '7', $r4s);
$r4s = str_replace('8', '8', $r4s);
$r4s = str_replace('9', '9', $r4s);
$r4s = str_replace('0', '0', $r4s);

$sana1=date("H:i",strtotime("2 hour"));
$sana1 = str_replace('1', '1', $sana1);
$sana1 = str_replace('2', '2', $sana1);
$sana1 = str_replace('3', '3', $sana1);
$sana1 = str_replace('4', '4', $sana1);
$sana1 = str_replace('5', '5', $sana1);
$sana1 = str_replace('6', '6', $sana1);
$sana1 = str_replace('7', '7', $sana1);
$sana1 = str_replace('8', '8', $sana1);
$sana1 = str_replace('9', '9', $sana1);
$sana1 = str_replace('0', '0', $sana1);

$raqamlist = ["$r1","$r2","$r3","$r4"];
$raqamm = array_rand($raqamlist);
$raqam = "$raqamlist[$raqamm]";
$randoms = ["$r1:$r2s","$r2:$r3s","$r3:$r4s","$r4:$r1s"];
$randomm = array_rand($randoms);
$random = "$randoms[$randomm]";

 $nik = ["api_api"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]"; 
  
$MadelineProto->account->updateProfile(['first_name'=>"$raqam $niktxt $random",'about'=>"O'zbekistonda soat: $sana1 $ricon[$icon]"]);

$vaqt = date('H:i', strtotime('2 hour'));
$logo = ["https://Otabekov.fastxost.ru/api1/api.php?text=$vaqt","http://Otabekov.fastxost.ru/api/api.php?text=$vaqt"];
  $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

file_put_contents("goto.jpg",file_get_contents($logopic));
$Rasm = $MadelineProto->photos->updateProfilePhoto(['file' => "goto.jpg" ]);

if($Rasm){
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
unlink("MadelineProto.log");
unlink("session.madeline");
unlink("goto.jpg");
?>