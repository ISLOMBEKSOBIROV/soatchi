<?php
define('API_KEY','1682748821:AAHT-9KmdKayNVtMoCmk2LWX6-ONx6s0VvI');  //Botiz tokeni
$admin = "1829011441"; 
$ver = "7.4.1";
$group = "1829011441";
$admin2 = "1829011441";
$kan = "22";
$usaw = "45";
$bott ="20";
$qod ="30";
$minusk ="25";
$usar = "Biz sizdan USA raqam olamiz va sizga 1ta USA raqam uchun $usaw ta olmos beramiz
DIQQAT: USA raqam berayotganizda faol seans larda 1ta siz bo'lishingiz , xar xil 🔞 gurux va kanallarga ulanmagan bo'lishi kerak";
$odamq = "@Doniyor_Soft guruhiga 50 ta odam qoshing (undan kop ham bolaveradi) va $qod ta olmos oling olmosni olish uchun @MegaSoatBotHelpBot ga yozing (ID raqam va skreen ham tashlang)";
$azok = "@KinoUZ_Gr kanaliga obuna boling va $kan ta olmos oling 10-kun davomida chiqib ketmang chiqib ketsangiz $minusk olmos hisobingizdan olinadi\nOlmosni olish uchun @MegaSoatBotHelpBot ga yozing";
$azob = "http://telegram.me/TGClever_Bot?startgroup=new ga /start bosing va botni 3+ guruhga qo'shib admin qiling va @MegaSoatBotHelpBot skreen yuboring va amalni tog'ri bajargan bo'lsangiz bot adminlari sizga $bott ta olmos berishadi ";
$sayt = 'https://user8277.smartxost.ru/Help'; 
$bot = "MegaSoatBot"; 
function del($nomi){
array_map('unlink', glob("step/$nomi.*")); 
}
function put($fayl, $nima){
file_put_contents("$fayl", "$nima");
}
function pstep($from_id,$zn){
file_put_contents("step/$from_id.step",$zn);
}
function step($from_id){
$step = file_get_contents("step/$from_id.step");
$step += 1;
file_put_contents("step/$from_id.step",$step);
}
function ty($cid){
return bot('sendChatAction', [
'chat_id' =>$cid,
'action' => 'typing',
]);
}

function ACL($callbackQueryId, $text = null, $showAlert = false)
{
return bot('answerCallbackQuery', [
'callback_query_id' => $callbackQueryId,
'text' => $text,
'show_alert' => $showAlert,
]);
}

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$from_id.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $message->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$from_id = $message->from->id;

$call = $update->callback_query;
$mes = $call->message;
$data = $call->data;
$qid = $call->id;
$callcid = $mes->chat->id;
$callmid = $mes->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;
$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$UzWebDev = file_get_contents("data/$from_id/ali.txt");
$Uzb = file_get_contents("data/$from_id/uzb.txt");
$Uzb1 = file_get_contents("data/$from_id/uzb1.txt");
$Uzb2 = file_get_contents("data/$from_id/uzb2.txt");
$Uzb3 = file_get_contents("data/$from_id/uzb3.txt");
$Uzb4 = file_get_contents("data/$from_id/uzb4.txt");
$Uzb5 = file_get_contents("data/$from_id/uzb5.txt");
$Uzb6 = file_get_contents("data/$from_id/uzb6.txt");
$Uzb7= file_get_contents("data/$from_id/uzb7.txt");
$Uzb8= file_get_contents("data/$from_id/uzb8.txt");
$Uzb9= file_get_contents("data/$from_id/uzb9.txt");
$Uzb10= file_get_contents("data/$from_id/uzb10.txt");
$Uzb11= file_get_contents("data/$from_id/uzb11.txt");
$Uzb12= file_get_contents("data/$from_id/uzb12.txt");
$Uzb13= file_get_contents("data/$from_id/uzb13.txt");
$Uzb14= file_get_contents("data/$from_id/uzb14.txt");
$Uzb15= file_get_contents("data/$from_id/uzb15.txt");
$Uzb16= file_get_contents("data/$from_id/uzb16.txt");
$Uzb17= file_get_contents("data/$from_id/uzb17.txt");
$Uzb18= file_get_contents("data/$from_id/uzb18.txt");
$Uzb19 = file_get_contents("data/$from_id/uzb19.txt");
$Uzb20 = file_get_contents("data/$from_id/uzb20.txt");
$Uzb21 = file_get_contents("data/$from_id/uzb21.txt");
$Uzb22 = file_get_contents("data/$from_id/uzb22.txt");
$Uzb23 = file_get_contents("data/$from_id/uzb23.txt");
$Uzb24 = file_get_contents("data/$from_id/uzb24.txt");
$Uzb25= file_get_contents("data/$from_id/uzb25.txt");
$Uzb26= file_get_contents("data/$from_id/uzb26.txt");
$Uzb27= file_get_contents("data/$from_id/uzb27.txt");
$Uzb28= file_get_contents("data/$from_id/uzb28.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");
$soni = file_get_contents("pul/$from_id/$uid.db");
$chan = file_get_contents("pul/$from_id.db");
$user = file_get_contents("SoatBot.ids");
$guruh = file_get_contents("pul/guruh.db");
mkdir("bot");
if ($soni == false){$soni = 0;}

mkdir("baza");
mkdir("baza/$uid");
mkdir("cron");
mkdir("pul");
mkdir("odam");
mkdir("bonus");
mkdir("data");
mkdir("data/$from_id");
$vaqt = date("d",strtotime("5 hour"));
$otex1 = "Ortga🔙";
$kalt2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📶Soatni O'rnatish Video Qo'llanma"],],
[['text'=>"🍏Apple Watch"],['text'=>"Random soat⌚"],],
[['text'=>"Delete account📵"],['text'=>"Delete photos✅"],],
[['text'=>"24 online✅"],['text'=>"🎯Xacker Soat"],],
[['text'=>"$otex1"],],
]
]);

$ret1 = bot("getChatMember",[
         "chat_id"=>"@UzbBots_Official", // secretius
         "user_id"=>$uid
         ]);
     $ret2 = bot("getChatMember",[
         "chat_id"=>"@InstaTrack", // shokvideo
         "user_id"=>$uid
         ]);
     $ret3 = bot("getChatMember",[
         "chat_id"=>"@Islomiy_SavolJavobUz", // shokvideo
         "user_id"=>$uid
         ]);
    
$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;
$stat3 = $ret3->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member") and ($stat3=="creator" or $stat3=="administrator" or $stat3=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Quyidagi kanallarimizga obuna boʻling. A'zo bo'lib qayta /start bosing! Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/InstaTrack"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/UzbBots_Official"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/Islomiy_SavolJavobUz"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/MegaSoatBotNews"],],
]
]),
]); 
return false;
}

$kalt = json_encode([
'resize_keyboard'=>false,
'keyboard'=>[
[['text'=>"Sozlash⚙ (Soat)"],['text'=>"Sozlash⚙ (Cron)"],],
[['text'=>"Referal👥"],['text'=>"Telegram fon"],],
[['text'=>"📞Support"],['text'=>"Olmosim 💎"],],
[['text'=>"Sozlamalar 🔠"],['text'=>"🚀 reklama berish"],],                                                
]
]);
$otmen = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex"],]
]
]);
$otmen1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"],]
]
]);

$kalt12 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Cron Qilish 💡"],['text'=>"Cronni Ochirish 🚮"],],
[['text'=>"$otex1"],]
]
]);

$rasmc = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👨 Erkaklar"],['text'=>"👧 Qizlar"],],
[['text'=>"$otex1"],]
]
]);

$oddiyq = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1-STIL"],['text'=>"2-STIL"],],
[['text'=>"3-STIL"],['text'=>"4-STIL"],],
[['text'=>"$otex1"],],
]
]);

$oddiyr = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1️⃣-STIL"],['text'=>"2️⃣-STIL"],],
[['text'=>"3️⃣-STIL"],['text'=>"4️⃣-STIL"],],
[['text'=>"$otex1"],],
]
]);

$admp1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Statistika 📊"],['text'=>"👥Xabar👥"],],
[['text'=>"Pul ayirish💎"],['text'=>"Pul berish💎"],],
[['text'=>"✅botni yoqish"],['text'=>"❌botni o'chirish"],],
[['text'=>"🆓Olmos tarqatish"],['text'=>"$otex1"],]
]
]);

$kalt3 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Sovga kodi 🔐"],['text'=>"Dostimga💎berish"],['text'=>"Yordam 📃"],],
[['text'=>"ball sotib olish 💷"],['text'=>"🎁Bonus"],],
[['text'=>"📰Yangiliklar"],['text'=>"♻ Yangilash"],['text'=>"📶Botni Baholash"],],
[['text'=>"Bot tezligi 🎰"],['text'=>"🔊Ovozlar"],],
[['text'=>"🗞Fudbol news"],['text'=>"Aloqa ☎️"],['text'=>"🔀Vazifa"],],
[['text'=>"$otex1"],]
]
]);

if($text=="🔊Ovozlar"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Natijalar 1-10 dan

1. Mazzami sizlarga mazzami (5.8M 32k)
2. Kulishni udari (4.1M 22k)
3. Kecha ustimdan kulganlar (5.8M 17k)
4. Gucci Flip Flap O'zbekchasi (5.8M 900k)
5. Maqtov yorliq berilar (5.8M 2k)
6. Biz bilgandik kutgandik (5.8M 12k)
7. Yo'qoool (5.8M 3442k)
8. Uzr ketipqopt (5.8M 333k)
9. Assalomu alaykum (5.8M 38k)
10. Bo'ldi bas qil (2.6M 50k)*",
'parse_mode'=>'markdoWn',
'reply_markup' => json_encode([
 'inline_keyboard'=>[
[['text'=>'1','callback_data'=>'1'],['text'=>'2','callback_data'=>'2'],['text'=>'3','callback_data'=>'3'],['text'=>'4','callback_data'=>'4'],['text'=>'5','callback_data'=>'5']],
[['text'=>'6','callback_data'=>'6'],['text'=>'7','callback_data'=>'7'],['text'=>'8','callback_data'=>'8'],['text'=>'9','callback_data'=>'9'],['text'=>'10','callback_data'=>'10']],
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]
]),
]);
}


if($data=="1"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"t.me/mening_xotinim/15",
'caption'=>"Sarlavha: Mazzami sizlarga mazzami\nYuklab olindi: 86k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="2"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/16",
'caption'=>"Sarlavha: Kulishni udari😂\nYuklab olindi: 86k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="3"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/17",
'caption'=>"Sarlavha: Kecha Ustimdan kulganlar\nYuklab olindi: 23k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="4"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/18",
'caption'=>"Gucci flep flap uzbekchasi\nYuklab olindi: 23k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="5"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/19",
'caption'=>"Sarlavha: maqtov yorliq berelar\nYuklab olindi: 23k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="6"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/20",
'caption'=>"Sarlavha: biz bilgandek kutgandek\nYuklab olindi: 29k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="7"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/21",
'caption'=>"Sarlavha: Yo'qooool\nYuklab olindi: 89k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="8"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/22",
'caption'=>"Sarlavha: Uzur Ketibqopti\nYuklab olindi: 56k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="9"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/23",
'caption'=>"Sarlavha: Assalomu Alaykum\nYuklab olindi: 42k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

if($data=="10"){
bot('sendvoice',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'voice'=>"https://t.me/Mening_Xotinim/24",
'caption'=>"Sarlavha: Boldi bas qil\nYuklab olindi: 45k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>"Kanalimiz",'url'=>"https://t.me/BestApiCodes"]],
]]),
]);
}

$kalt4 = json_encode([
'resize_keyboard'=>false,
'keyboard'=>[
[['text'=>"📬 kanallarda"],['text'=>"📬 botlarda"],],
[['text'=>"$otex1"],]
]
]);

$vazifal = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📬 kanal"],['text'=>"🚻 gurux"],['text'=>"🇺🇸USA sotish"],],
[['text'=>"$otex1"],]
]
]);


$kalt10 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"@Islomiy_SavolJavobUz"],['text'=>"@UzbBots_Official"],],
[['text'=>"@MegaSoatBotNews"],],
[['text'=>"$otex1"],]
]
]);

$DaMaS_BaSS = json_decode(file_get_contents('php://input'));
$AdvakatUz = $DaMaS_BaSS->message;
$cid = $AdvakatUz->chat->id;
$text=$AdvakatUz->text;
$type = $AdvakatUz->chat->type;
$reply = $AdvakatUz->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
 if($text == "Aloqa ☎️"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"Savolingizni kiriting!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Savolingizni kiriting!"){
			bot('sendmessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Savol keldi!</b>
      
🧒Yuboruvchi: $name

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Savol: <i>$tx</i>

⌚Soat-<b>$time</b> Bugun-<b>$date</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nSavolingiz adminlarga yoqsa 24 soat ichida kanalda javobini yozib yuboradilar!",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}


if($tx == "🔀Vazifa"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"Kanalga qoshiling va $kan ta olmos oling\nBotga /start bosing va $bott ta olmos oling ✔",
 'reply_markup'=>$vazifal,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"🔀Vazifa knopkasi bosildi
🆔 raqam $cid
Useri @$username",
]);
}

elseif(mb_stripos($text, "/tarqat")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$cid = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$cid.txt");
$miqdor = $pul+$id2;
file_put_contents("pul/$cid.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>Foydalanuvchilarga  $id2 ta olmos Berildi!\nTekshirib Ko'ring❗❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Adminlar hisobingizga$id2 ta 💎 qo'shdi tekshirib ko'ring😎.*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu tugma admin uchun!*",
'parse_mode'=>'Markdown',
]);
}
}

if($tx == "📶Soatni O'rnatish Video Qo'llanma"){
bot('sendvideo', [
'chat_id'=>$cid,
'video'=>"https://t.me/📶Soatni O'rnatish Video Qo'llanma/5",
'text'=>"Soatni qoyishdan oldin 👆👆 videoni korib chiqing.",
'reply_markup'=>$kalt2,
]);
}

if($tx == "📬 bot"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"$azob",
'parse_mode'=>"HTML",
'reply_markup'=>$vazifal,
]);
}

if($tx == "📬 kanal"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"$azok",
'reply_markup'=>$vazifal,
]);
}


if($tx == "🚻 gurux"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"$odamq",
'reply_markup'=>$vazifal,
]);
}


if($tx == "🇺🇸USA sotish"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"$usar",
'reply_markup'=>$vazifal,
]);
}

if($tx == "📬 kanallarda"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>" Kanallarimizdan birini tanlang. ✔",
'reply_markup'=>$kalt7,
]);
}

if($tx == "Sozlash⚙ (Cron)"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"Soatni Cron Qiling Yoki Soatni Ochiring.",
'reply_markup'=>$kalt12,
]);
}

if($tx == "Rasm Yasash🆕"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"Erkaklar va Qizlar uchun rasm yasang",
'reply_markup'=>$rasmc,
]);
}

if($tx == "👨 Erkaklar"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"👆👆 rasmlardan birini tanlashingiz mumkin",
'reply_markup'=>$oddiyr,
]);
}

if($text=="HABAR"){
file_put_contents("data/$from_id/uzb13.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"MENGA HABAR YOZING MEN UNI ADMINLARGA YETKAZAMMAN",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
}
elseif($Uzb13 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"",
 'parse_mode'=>"HTML"
 ]);
 sleep(0);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>'Foydalanuvchi useri $username
🆔Raqam $cid
foydalanuvchidan kelgan habar: $ex'
 ]);
 sleep(5);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Sizning habaringiz adminlarga yuboril bot adminlari sizga 12-soat ichida javob berishadi✅",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex"]],
]
])
]);
unlink("data/$from_id/uzb13.txt");
exit();
}

if($tx == "👧 Qizlar"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"👆👆 rasmlardan birini tanlashingiz mumkin",
'reply_markup'=>$oddiyq,
]);
}

$kalt8 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"@MegaSoatBot"],['text'=>"@TGClever_Bot"],],
[['text'=>"@GooglePlayMusics_Bot"],],
[['text'=>"$otex1"],]
]
]);

if($tx == "📬 botlarda"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Botlarimizdan birini tanlang. ✔",
'reply_markup'=>$kalt8,
]);
}

if(mb_stripos($text,"/start $from_id")!==false){
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Siz botga o'zingizni taklif qildingiz 😂!</b>",
      'parse_mode'=>'html',
      'reply_markup'=>$kalt1,
      ]);
}else{
      $idref = "pul/$ex.db";
      $idref2 = file_get_contents($idref);
      $id = "$from_id\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);
if(mb_stripos($idref2,$from_id) !== false ){
}else{
$pub=explode(" ",$text);
$ex=$pub[1];
$pul = file_get_contents("pul/$ex.txt");
$a=$pul+10;
file_put_contents("pul/$ex.txt","$a");
$odam = file_get_contents("odam/$ex.dat");
$b=$odam+1;
file_put_contents("odam/$ex.dat","$b");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz botimizga 1-bor tashrif buyurdingiz 😊
Kanalimizga azo bo'lmagan bolsangiz azo bo'lib botga qayta /start bosing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kaltt,
]);
bot('sendmessage',[
'chat_id'=>$ex,
'text'=>"<b>💥 Siz do'stingizni taklif qildingiz do'stingiz kanallarga azo bolmagunicha biz sizga referal olmos taqdim etmaymiz\ndo'stingiz kanallarga azo bolib qayta /start bosganda buz sizning hisobingizga 10 ta olmos o'tkazamiz!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}


$on = file_get_contents("on.txt");

if ($on == "off" && $cid = "$admin") {

bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@MegaSoatBot dam olish rejimida. Iltimos bezovta qilmang!\nBezovta qilmang</b>",
        'parse_mode'=>'html',
]);
}
if($text == "❌botni o'chirish" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Offline.</b>",
        'parse_mode'=>'html',
]);
}

if($text == "✅botni yoqish" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
        'parse_mode'=>'html',
]);
}


if($text=="/admin_panel"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>Bu tugma admin uchun</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$kalt1,
    ]);
}
if($text=="/p"){
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"<b>botning boshqaruv paneliga hush kelibsiz menularni tanlang👇</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$admp1,
    ]);
}
if($text=="/start"){
$post = file_get_contents("SoatBot.ids");
$posti = explode("\n",$post);
file_put_contents("SoatBot.ids", "$post\n$from_id");
$pul = file_get_contents("pul/$from_id.txt");
$mm=$pul+0;
file_put_contents("pul/$from_id.txt","$mm");
$odam = file_get_contents("odam/$from_id.dat");
$kkd=$odam+1;
file_put_contents("odam/$from_id.dat","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>Assalomu aleykum <a href = 'tg://user?id=$cid'>$name</a>
Quyidagi menyular orqali botdan foydalaning👇</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Yangi Foydalanuvchi 
ismi <a href = 'tg://user?id=$cid'>$name</a>
🆔 raqam $cid
Useri @$username",
]);
}

if(mb_stripos($text, "Pul Berish💎")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul Berish Uchun Quyidagi Buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir pastga qator tushib pulni yozing!
Masalan:
/pul
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($text, "/pul")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$id1.txt");
$miqdor = $pul+$id2;
file_put_contents("pul/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅ $id1 🆔️ Raqamiga $id2 ta olmos Berildi!\nTekshirib Ko'ring❗❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*Hisobingizga $id2 ta 💎 qo'shildi tekshirib ko'ring😎.*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu tugma admin uchun!*",
'parse_mode'=>'Markdown',
]);
}
}

if($text=="3️⃣-STIL"){
file_put_contents("data/$from_id/uzb21.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"],],
]
])
]);
}
elseif($Uzb21 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api2/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"],],
]
])
]);
unlink("data/$from_id/uzb21.txt");
exit();
}

if(mb_stripos($text, "Pul ayirish💎")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul ayrish Uchun Quyidagi Buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib pulni yozing!
Masalan:
/somban
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($text, "/somban")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$id1.txt");
$miqdor = $pul-$id2;
file_put_contents("pul/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅ $id1 🆔️ Raqamidan $id2 ta olmos ayrildi!\nTekshirib Ko'ring❗❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*Hisobingizdan $id2 ta 💎 olmos ayrildi tekshirib ko'ring😎.*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu tugma admin uchun! Bu knopkani faqat men @DoniyorSoft ishlatolaman 😂*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($tx,"/pulban100") !== false){ 
$ex = explode(" ",$tx);
$pul = file_get_contents("pul/$ex[1].txt");
$mm=$pul-100;
file_put_contents("pul/$ex[1].txt","$mm");
bot('sendMessage', [
'chat_id'=>$ex[1],
'text'=>"Xisobingizdan -100 ta olmos ayirildi ❌💎",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"$ex[1] raqamli ID egasidan 100 ta olmos ayirildi❌",
'parse_mode'=>'html',
]);
}
if($text == "Dostimga💎berish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Dostingizga olmos o'tkazish uchun /otkazish bitta pastga tushib id bot avtomatik tarzda foydalanuvchi hisobiga 15 ta olmos tushuradi
Misol
/otkazish
$admin
15
Shu tartibda👆</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
if($text == "Olmos ayrish"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Olmos ayrish uchun /pulban100 id(pul ayiradigan profil id raqami) shu tarzda yozing*",
'parse_mode'=>"markdown",
]);
}
}
if($tx=="Referal👥"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Referal ssilkangiz :</b>

👉 <code>https://t.me/MegaSoatBot?start=$cid</code>

<b>Do'stingiz ssilka orqali ro'yxatdan o'tsa sizga 10 ta olmos beriladi💎</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"Ulashish ♻", "url"=>"https://t.me/share/url?url=https://t.me/MegaSoatBot?start=$cid"]],
            ]
        ])
        ]);
}

if($tx == "Sozlash⚙ (Soat)"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>" Kerakli bo'limni tanlang. ✔",
'reply_markup'=>$kalt2,
]);
}

$on = file_get_contents("on.txt");

if ($on == "off" && $from_id != "$admin") {

bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️<b>@MegaSoatBot dam olish rejimida. Iltimos bezovta qilmang!</b>",    //manba @MegaSoatBot  manba bilan ol 3_harf bolsang olaver manbani manbani olsang bot ishlamidi ishonaver!!!!!!!
        'parse_mode'=>'html',
]);
}

if($message->chat->type=="group" or $message->chat->type=="supergroup"){
bot('leaveChat',[
'chat_id'=>$message->chat->id,
]);
}

if($tx =="Sozlamalar 🔠"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"asosiy bo'limdagi ayrim knopkalar bu bo'limga ko'chirildi menulardan birini tanlang.",
'reply_markup'=>$kalt3,
]);
}

if($tx =="🚀 reklama berish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"siz reklamani botlarimiz va kanallarimizda berishingiz mumkin reklama turini tanlang.",
'reply_markup'=>$kalt4,
]);
}

if(mb_stripos($text,"♻ Yangilash") !== false){ 
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 <b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(1.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(1.6);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○ 10%'
 ]);
 sleep(1.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(1.6);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(1.2);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(1.2);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(1.4);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○ 60%'
 ]);
 sleep(1.2);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(1.7);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(1.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(1.6);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(1.3);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🌐Sizning va Bot  Ma'lumotlari Yangilandi!!!✅",
       'parse_mode'=>'html',  
       'reply_markup'=>$kalt,
]);
}

if($tx == "Sovga kodi 🔐"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"🔰 Parolni kiriting va <b>1000 💎 olmos</b>ga ega bo'ling!",
'parse_mode'=>'html',
'reply_markup'=>$otmen1,
]);
}
if($tx == "Yordam 📃"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*▶️ YORDAM

🆚 Hozirgi versiya: *v$ver*

• Shartlar:
☞ Siz 1 ta profildan 1 ta soat qoʻyish imkoniyatiga egasiz. Koʻproq soat qoʻyish uchun botga boshqa profilingizdan kiring va olmoslaringizni oʻsha profilingizga oʻtkazing va siz boshqa profillaringizdan soat qoʻya olasiz.

• Ma'lumot:
☞ Botda soat qoʻyganingizda profilingizga «UZBEKISTAN-O'ZBEKISTON» deb yozib qoʻyadi. Ushbu muammoni yangi versiyalarda toʻgʻirlaymiz.

✅ Qoʻshimcha savollaringiz boʻlsa, guruhimizga murojaat yoʻllang:
☞ @Doniyor_Soft*",
'parse_mode'=>'Markdown',
'reply_markup'=>$kalt1,
]);
}

if ($tx == "📰Yangiliklar"){
$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"
🔔Eng So'ngi 📰Yangiliklar

🆕️[$line]($link)

🍃Batafsil O'qish Uchun Bosing",
'parse_mode' =>"markdown",
]);
}

if($tx == "📞Support"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"<b>Admin @DoniyorSoft\nSpamlar: @MegaSoatBotHelpBot
ish vaqti 14:00 dan 21:00 gacha</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
if($tx == "@Islomiy_SavolJavobUz"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bizning @Islomiy_SavolJavobUz kanalimizda\nreklama berishingiz mumkin\n
@Islomiy_SavolJavobUz 24-soat qiwi-35R, CLICK-3500 so`m\n@Islomiy_SavolJavobUz 48-soat qiwi-65R, CLICK-6500 so`m\n@Islomiy_SavolJavobUz 72-soat qiwi-75R, CLICK-7500 so`m\nReklama berish uchun\n@DoniyorSoft ga yozing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt7,
]);
} 

if($tx == "@UzbBots_Official"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bizning @UzbBots_Official kanalimizda\nreklama berishingiz mumkin\n
@UzbBots_Official 24-soat qiwi-35R, CLICK-3500 so`m\n@UzbBots_Official 48-soat qiwi-65R, CLICK-6500 so`m\n@UzbBots_Official 72-soat qiwi-75R, CLICK-7500 so`m\nReklama berish uchun\n@DoniyorSoft ga yozing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt7,
]);
} 

if($tx == "@MegaSoatBotNews"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bizning @MegaSoatBotNews kanalimizda\nreklama berishingiz mumkin\n
@MegaSoatBotNews 24-soat qiwi-35R, CLICK-3500 so`m\n@MegaSoatBotNews 48-soat qiwi-65R, CLICK-6500 so`m\n@MegaSoatBotNews 72-soat qiwi-75R, CLICK-7500 so`m\nReklama berish uchun\n@DoniyorSoft ga yozing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt7,
]);
} 

if($tx == "@MegaSoatBot"){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
$baza = file_get_contents("SoatBot.ids");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
$time=date('H:i',strtotime('3 hour'));
$sana=date("d.m.y",strtotime("3 hour"));
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bizning @MegaSoatBot botimizda n\nreklama berishingiz mumkin
@MegaSoatBot 24-soat qiwi-20R, CLICK-2000 so`m\n@MegaSoatBot 48-soat qiwi-25R, CLICK-2500 so`m\n@MegaSoatBot 72-soat qiwi-30R, CLICK-3000 so`m\n Reklama berish uchun\n@DoniyorSoft ga yozing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt8,
]);
} 

if($tx == "@TGClever_Bot"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bizning @TGClever_Bot botimizda n\nreklama berishingiz mumkin\nobunachisi 2890+\n
@TGClever_Bot 24-soat qiwi-50R, CLICK-5000 so`m\n@TGClever_Bot 48-soat qiwi-85R, CLICK-8500 so`m\n@TGClever_Bot 72-soat qiwi-100R, CLICK-10000 so`m\n Reklama berish uchun\n@DoniyorSoft ga yozing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt8,
]);
} 

if($tx == "@GooglePlayMusics_Bot"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bizning @GooglePlayMusics_Bot botimizda n\nreklama berishingiz mumkin\nobunachisi 450+\n
@GooglePlayMusics_Bot 24-soat qiwi-20R, CLICK-2000 so`m\n@GooglePlayMusics_Bot 48-soat qiwi-40R, CLICK-4000 so`m\n@GooglePlayMusics_Bot 72-soat qiwi-70R, CLICK-7000 so`m\n Reklama berish uchun\n@DoniyorSoft ga yozing</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt8,
]);
} 



if($tx == "ball sotib olish 💷"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>ℹ️ Siz botda olmos sotib olishingiz ham mumkin.

💵 Olmos narxlari:
• 130 ta olmos - 10 rubil
• 150 ta olmos - 15 rubil 
• 170 ta olmos - 20 rubil 
• 200 ta olmos - 25 rubil 

💳 Toʻlov turi:
• CLICK
• QIWI
• Ucell Perevod

📞 Murojaat: @DoniyorSoft</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}

if($text == "🎁Bonus"){ 
$bonustime = file_get_contents("bonus/$from_id.txt");
$bonusrand = rand(1,15);
if($bonustime == $vaqt){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*📛Siz kunlik bonusni olib bo‘lgansiz! Keyingi bonusni 24 soatdan keyin olasiz*",
'parse_mode'=>'markdown',
]);
}else{
$pul = file_get_contents("pul/$from_id.txt");
$bonus=$pul+$bonusrand;
file_put_contents("pul/$from_id.txt","$bonus");
file_put_contents("bonus/$from_id.txt","$vaqt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👏Tabriklaymiz sizga *$bonusrand*💎olmos miqdorida 🎁bonus taqdim etildi! @Doniyor_Soft ga kirib *$bonusrand* ta olmos berdi deb ayting",
'parse_mode'=>'markdown',
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bonus olindi
Miqdori *$bonusrand* ta olmos
Useri @$username",
]);
}
}

if($text == "Bot tezligi 🎰"){
$bonustime = file_get_contents("randfast/$from_id.txt");
$randfast = rand(100,240);
if($bonustime == $vaqt){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"    ",
'parse_mode'=>'markdown',
]);
}else{
$pul = file_get_contents("randfast/$from_id.txt");
$bonus=$pul+$randfast;
file_put_contents("randfast/$from_id.txt","$bonus");
file_put_contents("randfast/$from_id.txt","$vaqt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot Tezligi *$randfast* m/s",
'parse_mode'=>'markdown',
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Tezlikni Hisobladi
Tezlik*$randfast* M/s
Useri @$username",
]);
}
}

if($tx == "Olmosim 💎"){
$pul = file_get_contents("pul/$from_id.txt");
$madline = file_get_contents("cron/$from_id.txt");
$odam = file_get_contents("odam/$from_id.dat");
$baza = file_get_contents("SoatBot.ids");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
$time=date('H:i',strtotime('3 hour'));
$sana=date("d.m.y",strtotime("3 hour"));
     bot('sendmessage',[
     'chat_id'=>$cid,
     'text'=>"<b> Sizning olmosingiz : $pul 💎\n\n\nSizning ID Raqamiz <code>$from_id</code>\n\n\nSizning Foydalanuvchi Useringiz <code>@$username</code>\n\n\n⏰$time 📆$sana</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}


if($text=="1️⃣-STIL"){
file_put_contents("data/$from_id/uzb19.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb19 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api3/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb19.txt");
exit();
}
if($text == "📶Botni Baholash"){
	bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bizning Botimizni Baholang!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
                        [['text'=>'1'],['text'=>'2']],
                        [['text'=>'3'],['text'=>'4']],
                        [['text'=>'5'],['text'=>"$otex1"]]
]
]), 
]);
}
if($tx == "1"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Botimizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Botni Baholandi
Baholashi 1
Useri @$username",
]);
}
if($tx == "2"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Botimizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bot Baholandi
Baholashi 2
Useri @$username",
]);
}
if($tx == "3"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Botimizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bot Baholandi
Baholashi 3
Useri @$username",
]);
}
if($tx == "4"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Botimizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bot Baholandi
Baholashi 4
Useri @$username",
]);
}
if($tx == "5"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b> Botimizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bot Baholandi
Baholashi 5
Useri @$username",
]);
}

if($tx == "Statistika 📊"){
$baza = file_get_contents("azo.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
$time=date('H:i',strtotime('3 hour'));
$sana=date("d/m/y",strtotime("3 hour"));
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"* 👥 Bot a'zolari : * [$obsh] *tа!*\n *♻ Botni tark etganlar :* [$gruppa] *ta!*\n
     *⏰$time 📆$sana*",
     'parse_mode'=>'markdown',
     'reply_markup'=>$kalt1,
     ]);
     }

$xabar = file_get_contents("send.txt");
if($text == "👥Xabar👥"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu tugma admin uchun!*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("azo.dat");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'html'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"Hamma userlarga yuborildi!",
'parse_mode'=>'html',
]); unlink("send.txt");
}



if(mb_stripos($tx,"Delete photos✅")!==false){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=120){
$clone=file_get_contents("baza/$uid/index3.php");
    file_put_contents("baza/$uid/index3.php", file_get_contents("index3.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index3.php"));
    file_put_contents("baza/$uid/index3.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index3.php"));
    file_put_contents("baza/$uid/index3.php", "$savea");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-120;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Yaxshi siz ro'yxatga qo'shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro'yxatdan o'ting!
 - $sayt/baza/$uid/index3.php
 - Ssilkaga kirib ro'yxatdan o'ting!
🔺️🔺️🔺️🔺️🔺️
Ro'yxatdan o'tsangiz bu ssilkani nusxalab Cron ♻️ bo'limi orqali cronlab oling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo'lim 120 ta olmos uchun faoliyat olib boradi✅",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}

if(mb_stripos($tx,"🎯Xacker Soat")!==false){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=150){
$clone=file_get_contents("baza/$uid/index7.php");
    file_put_contents("baza/$uid/index7.php", file_get_contents("index7.php"));
    $savet =  str_replace("api_ism", "$name", file_get_contents("baza/$uid/index7.php"));
    file_put_contents("baza/$uid/index7.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index7.php"));
    file_put_contents("baza/$uid/index7.php", "$savea");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-150;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Yaxshi siz ro'yxatga qo'shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro'yxatdan o'ting!
 - $sayt/baza/$uid/index7.php
 - Ssilkaga kirib ro'yxatdan o'ting!
🔺️🔺️🔺️🔺️🔺️
Ro'yxatdan o'tsangiz bu ssilkani nusxalab Cron ♻️ bo'limi orqali cronlab oling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bu bo'lim 150 ta olmos uchun faoliyat olib boradi✅</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}

if($text=="4️⃣-STIL"){
file_put_contents("data/$from_id/uzb22.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb22 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb22.txt");
exit();
}

if(mb_stripos($tx,"Delete account📵")!==false){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=110){
$clone=file_get_contents("baza/$uid/index5.php");
    file_put_contents("baza/$uid/index5.php", file_get_contents("index5.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index5.php"));
    file_put_contents("baza/$uid/index5.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index5.php"));
    file_put_contents("baza/$uid/index5.php", "$savea");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-110;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Yaxshi siz ro'yxatga qo'shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro'yxatdan o'ting!
 - $sayt/baza/$uid/index5.php
 - Ssilkaga kirib ro'yxatdan o'ting!
🔺️🔺️🔺️🔺️🔺️
Ro'yxatdan o'tsangiz bu ssilkani nusxalab Cron ♻️ bo'limi orqali cronlab oling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bu bo'lim 110 ta olmos uchun faoliyat olib boradi✅</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}

//manba @MegaSoatBot  manba bilan ol 3_harf bolsang olaver manbani

if(mb_stripos($tx,"24 online✅")!==false){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=150){
$clone=file_get_contents("baza/$uid/index4.php");
    file_put_contents("baza/$uid/index4.php", file_get_contents("index4.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index4.php"));
    file_put_contents("baza/$uid/index4.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index4.php"));
    file_put_contents("baza/$uid/index4.php", "$savea");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-150;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Yaxshi siz ro'yxatga qo'shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro'yxatdan o'ting!
 - $sayt/baza/$uid/index4.php
 - Ssilkaga kirib ro'yxatdan o'ting!
🔺️🔺️🔺️🔺️🔺️
Ro'yxatdan o'tsangiz bu ssilkani nusxalab Cron ♻️ bo'limi orqali cronlab oling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bu bo'lim 150 ta olmos uchun faoliyat olib boradi✅</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}


if(mb_stripos($tx,"🍏Apple Watch")!==false){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=140){
$clone=file_get_contents("baza/$uid/index1.php");
    file_put_contents("baza/$uid/index1.php", file_get_contents("index1.php"));
    $savet =  str_replace("api_api", "$name", file_get_contents("baza/$uid/index1.php"));
    file_put_contents("baza/$uid/index1.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index1.php"));
    file_put_contents("baza/$uid/index1.php", "$savea");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-140;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Yaxshi siz ro'yxatga qo'shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro'yxatdan o'ting!
 - $sayt/baza/$uid/index1.php
 - Ssilkaga kirib ro'yxatdan o'ting!
🔺️🔺️🔺️🔺️🔺️
Ro'yxatdan o'tsangiz bu ssilkani nusxalab Cron ♻️ bo'limi orqali cronlab oling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bu bo'lim 140 ta olmos uchun faoliyat olib boradi✅</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}

//manba @MegaSoatBot  manba bilan ol 3_harf bolsang olaver manbani

if(mb_stripos($tx,"Random soat⌚")!==false){
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=150){
$clone=file_get_contents("baza/$uid/index2.php");
    file_put_contents("baza/$uid/index2.php", file_get_contents("index2.php"));
    $savet =  str_replace("api_bor", "$name", file_get_contents("baza/$uid/index2.php"));
    file_put_contents("baza/$uid/index2.php", "$savet");
    $savea =  str_replace("api_bio", "$bio", file_get_contents("baza/$uid/index2.php"));
    file_put_contents("baza/$uid/index2.php", "$savea");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-150;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Yaxshi siz ro'yxatga qo'shildingiz✅
🔻🔻🔻🔻🔻
 - Ssilkaga kirib ro'yxatdan o'ting!
 - $sayt/baza/$uid/index2.php
 - Ssilkaga kirib ro'yxatdan o'ting!
🔺️🔺️🔺️🔺️🔺️
Ro'yxatdan o'tsangiz bu ssilkani nusxalab Cron ♻️ bo'limi orqali cronlab oling!</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bu bo'lim 150 ta olmos uchun faoliyat olib boradi ✅</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}
if($tx == $otex1){
del($cid);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Bosh menyu ♻",
'reply_markup'=>$kalt,
]);
}

if($text=="Cron Qilish 💡"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>🔝Cron manzilini jo'nating!</b>",   
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
if(mb_stripos($text,"$sayt")!==false){
file_put_contents("cron/$cid.txt","$text");
$cron=file_get_contents("cron/$cid.txt");
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=15){
file_get_contents("$sayt/Cron.php?link=$cron&time=1");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-15;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Cron ornatildi soat 1daqiqada ishlaydi hisobingizdan 15 ta bal ayrildi !
Admin: @DoniyorSoft, 
Cron ishlashi uchun ssilkangizga  1 marta kiring</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> cron qimoqchi!
Cron manzili: <b>$cron</b>
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bu bo'limdan foydalanish uchun <b>15💎</b> olmos kerak. Cron manzilini tashlang</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}
if(mb_stripos($text,"https://")!==false){

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Boshqa ssilka bo'lsa cron ishlamaydi faqat biz bergan ssilka ishlaydi.* *Admin: @DoniyorSoft*",
'parse_mode'=>'markdown',
'reply_markup'=>$kalt1,
]);
}

if($text=="2️⃣-STIL"){
file_put_contents("data/$from_id/uzb20.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb20 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api4/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @UzbSooat_UzBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb20.txt");
exit();
}


if($tx == "Cronni Ochirish 🚮"){
del("baza/$uid");
unlink("baza/$uid/index.php");
unlink("baza/$uid/avto/bot.php");
unlink("baza/$uid/madeline.phar.version");
unlink("baza/$uid/madeline.phar");
unlink("baza/$uid/madeline.php");
unlink("baza/$uid/MadelineProto.log");
unlink("baza/$uid/session.madeline.lock");
unlink("baza/$uid/session.madeline");
unlink("baza/$uid/_config.php");
unlink("baza/$uid/_comandi.php");
unlink("baza/$uid/bot.php");
unlink("baza/$uid/functions.php");
unlink("baza/$uid/av.version");
unlink("baza/$uid/bot.lock");
unlink("baza/$uid/files");
unlink("baza/$uid/LICENSE");
unlink("baza/$uid/avto/bot.php");
unlink("baza/$uid/madeline.phar.version");
unlink("baza/$uid/madeline.phar");
unlink("baza/$uid/madeline.php");
unlink("baza/$uid/MadelineProto.log");
unlink("baza/$uid/session.madeline.lock");
unlink("baza/$uid/session.madeline.safe.php");
unlink("baza/$uid/session.madeline.safe.php.lock");
unlink("baza/$uid/session.madeline");
unlink("baza/$uid/DO_NOT_REMOVE_MADELINEPROTO_LOG_SESSION");
unlink("baza/$uid/goto.jpg");
unlink("baza/$uid/index.php");
unlink("baza/$uid/index1.php");
unlink("baza/$uid/index2.php");
unlink("baza/$uid/index3.php");
unlink("baza/$uid/index4.php");
unlink("baza/$uid/index5.php");
unlink("baza/$uid/index6.php");
unlink("baza/$uid/index7.php");
unlink("baza/$uid/madeline-72.phar");
unlink("baza/$uid/madeline-72.phar.version");
unlink("baza/$uid/madeline.php");
unlink("baza/$uid/_config.php");
unlink("baza/$uid/_comandi.php");
unlink("baza/$uid/bot.php");
unlink("baza/$uid/functions.php");
unlink("baza/$uid/av.version");
unlink("baza/$uid/bot.lock");
unlink("baza/$uid/files");
unlink("baza/$uid/LICENSE");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-0;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"Тozalandi 😂 Endi qaytadan bal yi'g'ib soat qoying",
'reply_markup'=>$kalt1,
]);
}

if(mb_stripos($text,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

 if($text == "send" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"*Admindan xabar*n$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }

//manba @MegaSoatBot  manba bilan ol 3_harf bolsang olaver manbani

if($tx == "sadasdasdasagggaaaggaadgga"){
del($cid);
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul+1000;
file_put_contents("pul/$cid.txt","$mm");
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Hisobingizga +1000 olmos qo'shildi 🎁💎",
'reply_markup'=>$keys,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"🎁💰Diqqat <a href = 'tg://user?id=$cid'>$cid</a> sovg'a kodini ishlatdi!
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);
}

//manba @MegaSoatBot  manba bilan ol 3_harf bolsang olaver manbani

if(mb_stripos($text,"/statistika")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx =" 📡 Bot Foydalanuvchilari
👥 Super Group: <b>$gr</b>
👤 Userlar:<b> $us</b>
👨‍👩‍👧‍👦 Jami: <b>$all</b>";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$tx,
  ]);
}

if(mb_stripos($tx,"/otkazish")!==false){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$id1.txt");
$miqdor = $pul+15;
file_put_contents("pul/$id1.txt","$miqdor");
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=15){
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-15;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Xisobizda 15 ta💎 ayrildi</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
bot('sendmessage',[
'chat_id'=>$id1,
'text'=>"<b>Xisobizga 15 ta💎 tushdi</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Sizda dostingizga olmos otqazish uchun mablag yetarli emas</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
$pul = file_get_contents("pul/$id1.txt");
$miqdor = $pul-15;
file_put_contents("pul/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Buning uchun 15💎 kerak</b>.",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}
}

if($tx=="Telegram fon"){
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://t.me/mruzbekcoder/17",
'text'=>"<b>Telegram fonlardan foydalaning</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"FON 1", "url"=>"https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs"],['text'=>"FON 2", "url"=>"https://t.me/bg/MzLRSHubAVIBAAAAqKgYQTObnhw"],],
                [['text'=>"FON 3", "url"=>"https://t.me/bg/Br6nNA9WAVIBAAAAe6AHvL7eOMM"],['text'=>"FON 4", "url"=>"https://t.me/bg/MiE64ER4AFIBAAAAHQZRZyDCfu0"],],
                [['text'=>"FON 5", "url"=>"https://t.me/bg/yf9PpmWm-FEBAAAAapSVTMR9AmA"],['text'=>"FON 6", "url"=>"https://t.me/bg/jGfmIAB6EEgFAAAAvSdItrO6cOs"],],
                [['text'=>"FON 7", "url"=>"https://t.me/bg/FJIYygt_iVIBAAAA8tzV8Ju0QvM"],['text'=>"FON 8", "url"=>"https://t.me/bg/maIM-YeHAVIBAAAAkvnFt2M-tiQ"],],
                [['text'=>"FON 9", "url"=>"https://t.me/bg/c87UFf33-VEBAAAAbg2Ohm6CkiE"],['text'=>"FON 10", "url"=>"https://t.me/bg/eb-JLvBZSUoPAAAAb22YRWAn5SI"],],
            ]
        ])
        ]);
}

if($text=="1-STIL"){
file_put_contents("data/$from_id/uzb1.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👸<b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb1 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.1);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"http://u2839.xvest6.ru/api6/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb1.txt");
exit();
}

if($text=="2-STIL"){
file_put_contents("data/$from_id/uzb2.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👸<b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb2 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.1);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"http://u2839.xvest6.ru/api5/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

??Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb2.txt");
exit();
}

if($text=="3-STIL"){
file_put_contents("data/$from_id/uzb9.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>👧 Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb9 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.1);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"http://u2839.xvest6.ru/api7/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb9.txt");
exit();
}

if($text=="2️⃣-STIL"){
file_put_contents("data/$from_id/uzb20.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb20 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.0);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.1);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.1);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api4/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @UzbSooat_UzBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb20.txt");
exit();
}

if($text=="4️⃣-STIL"){
file_put_contents("data/$from_id/uzb22.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],

]
])
]);
}
elseif($Uzb22 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"]],
]
])
]);
unlink("data/$from_id/uzb22.txt");
exit();
}

if($tx == "🗞Fudbol news"){
$url = "https://m.stadion.uz/news/rss";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"🆕️[$line]($link)",
'parse_mode' =>"markdown",
]);
}

if($text=="3️⃣-STIL"){
file_put_contents("data/$from_id/uzb21.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"],],
]
])
]);
}
elseif($Uzb21 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendmessage',[
'chat_id'=>$cid,
'photo'=>"https://u2839.xvest6.ru/api2/api.php?text=$ex",
'text'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

❤️ Tayyorlovchi: @MegaSoatBot  </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otex1"],],
]
])
]);
unlink("data/$from_id/uzb21.txt");
exit();
}

if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;
$time=date('H:i',strtotime('3 hour'));
$sana=date("d.m.y",strtotime("3 hour"));
if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Admindan Yangi Habar
Habarni o'qing

ADMIN [Doniyor](tg://user?id=$admin)

💌Habar: $sms

⌚ $time  | 📆 $sana",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩\nSiz yuborgan xabar:\n*$sms*",
'parse_mode'=>"markdown", 
]);
}
}

if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;
$time=date('H:i',strtotime('3 hour'));
$sana=date("d.m.y",strtotime("3 hour"));
if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Admindan Yangi Habar
Habarni o'qing

ADMIN [Doniyor](tg://user?id=1735355377)

💌Habar: $sms

⌚ $time  | 📆 $sana",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin2,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩\nSiz yuborgan xabar:\n*$sms*",
'parse_mode'=>"markdown", 
]);
}}