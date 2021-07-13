<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$hour = date("H",strtotime("2 hour")); 
$h = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["⓪","➊","➋","➌","➍","➎","➏","➐","➑","➒","➊⓪","➊➊","➊➋","➊➌","➊➍","➊➎","➊➏","➊➐","➊➑","➊➒","➋⓪","➋➊","➋➋","➋➌"], $hour);

$minut = date("i",strtotime("2 hour"));
$m = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⓪","➊","➋","➌","➍","➎","➏","➐","➑","➒","➊⓪","➊➊","➊➋","➊➌","➊➍","➊➎","➊➏","➊➐","➊➑","➊➒","➋⓪","➋➊","➋➋","➋➌","➋➍","➋➎","➋➏","➋➐","➋➑","➋➒","➌⓪","➌➊","➌➋","➌➌","➌➍","➌➎","➌➏","➌➐","➌➑","➌➒","➍⓪","➍➊","➍➋","➍➌","➍➍","➍➎","➍➏","➍➐","➍➑","➍➒","➎⓪","➎➊","➎➋","➎➌","➎➍","➎➎","➎➏","➎➐","➎➑","➎➒","⓪⓪"], $minut);

$kun1 = date('H',strtotime('2 hour')); 
$soati = 23;
$soat1 = $soati-$kun1;
$kun2 = date('i',strtotime('2 hour')); 
$minuti = 59;
$minut = $minuti-$kun2;
$kun3 = date('s',strtotime('2 hour')); 
$sekundi = 59;
$sekund = $sekundi-$kun3;

$ricon = array('01d'=>'🌞','02d'=>'🌤','03d'=>'☁️','04d'=>'🌥','09d'=>'🌦','10d'=>'🌧','11d'=>'⛈','13d'=>'❄️','50d'=>'💨','01n'=>'🌙','02n'=>'☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');

$obuhavo = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Qashqadaryo,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);

$temp = $obuhavo['main']['temp'];
$icon = $obuhavo['weather'][0]['icon'];

$okun=date("n");
$oynoms = "1𝕐𝕒𝕟𝕧𝕒𝕣1 2𝙵𝚎𝚟𝚛𝚊𝚕2 3𝑴𝒂𝒓𝒕3 4ᴀᴘʀᴇʟ4 5𝕄𝕒𝕪5 6ⒾⓎⓊⓃ6 7|ㄚㄩㄥ7 8A̸v̸g̸u̸s̸t̸8 9𝘚𝘦𝘯𝘵𝘺𝘢𝘣𝘳9 10𝐎𝐤𝐭𝐲𝐚𝐛𝐫10 11ℕ𝕠𝕪𝕒𝕓𝕣11 12𝑫𝒆𝒌𝒂𝒃𝒓12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$oynomi = date('F', strtotime('2 hour'));
$haf = date('N',strtotime('2 hour'));
      $haft="1𝔻𝕦𝕤𝕙𝕒𝕟𝕓𝕒1 2𝕊𝕖𝕤𝕙𝕒𝕟𝕓𝕒2 3ℂ𝕙𝕠𝕣𝕤𝕙𝕒𝕟𝕓𝕒3 4ℙ𝕒𝕪𝕤𝕙𝕒𝕟𝕓𝕒4 5𝕁𝕦𝕞𝕒5 6𝕊𝕙𝕒𝕟𝕓𝕒6 7𝕐𝕒𝕜𝕤𝕙𝕒𝕟𝕓𝕒7";
      $ex=explode("$haf",$haft);
      $hafta="$ex[1]";

$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["⓪","①","②","③","④","⑤","⑥","❼","⑧","❾","①⓿","①❶","①❷","①❸","①❹","①❺","①❻","①❼","①❽","①❾","②⓿","②❶","②❷","②❸","②❹","②❺","②❻","②❼","②❽","②❾","③⓿","③❶"], $kun);
$yil = date("Y",strtotime("2 hour"));
$Y = str_replace(["2020","2021","2022"],["❷⓿②⓪","❷⓿②①","❷⓿②②"], $yil);
//shavkat Yoqsa xursandman😉 @KingsOfPhp Kanali Uchun

//shavkat Yoqsa xursandman😉 @KingsOfPhp Kanali Uchun
$input =["⌚️$h:$m 🗓$d 🌙$oy  📆$hafta","🌚𝙀𝙍𝙏𝘼𝙉𝙂 𝙆𝙐𝙉𝙂𝘼: ⏰$soat1-𝕊𝕆𝔸𝕋,🌷$minut-🅜🅘🅝🅤🅣, 🥀𝗤𝗢𝗟𝗗𝗜 @MegaSoatBot","@MegaSoatBot Orqali Profilingizga Osongiz Soat Qo'ying"];
  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["𖣘 ηιк яємση ✯","♔ ηιк яємση∂ ᵃᵈᵐⁱⁿ"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";  
$MadelineProto->account->updateProfile(['first_name'=>"$h:$m $niktxt $temp °C $ricon[$icon]",'about'=>"$text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
$tim=date("H:i",strtotime("2 hour"));
header('Content-type: image/jpg');
$logolist = ["http://creative.xost-uz.ru/apilar/other/smatrw/index.php?text=UzbBots_News","http://u1237.xvest1.ru/ApiTeleg/Api/api.php?name=NikRemond&user=MegaSoatBot&nomer=@MegaSoatBot+da+osongina+profilingizga+soat+qoying&id=1735355377&tema=5"];
$logos = array_rand($logolist);
$logo = "$logolist[$logos]";
file_put_contents("rasm.jpg",file_get_contents("$logo"));

$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
$MadelineProto->photos->uploadProfilePhoto(['file' => "rasm.jpg"]);
unlink("MadelineProto.log");
unlink("session.madeline");
?>