<?php
define('API_KEY','1698964313:AAHsLDcS10G-326LJxwLF5IjHoO-yhxqGs4');  //Botiz tokeni
$admin = "1612870920"; 
$ver = "7.4.1";
$group = "1612870920";
$admin2 = "1612870920";
$kan = "22";
$usaw = "45";
$bott ="20";
$qod ="30";
$minusk ="25";
$usar = "Biz sizdan USA raqam olamiz va sizga 1ta USA raqam uchun $usaw ta olmos beramiz
DIQQAT: USA raqam berayotganizda faol seans larda 1ta siz bo'lishingiz , xar xil 🔞 gurux va kanallarga ulanmagan bo'lishi kerak";
$odamq = "@Doniyor_Soft guruhiga 50 ta odam qoshing (undan kop ham bolaveradi) va $qod ta olmos oling olmosni olish uchun @Soatchi_botHelpBot ga yozing (ID raqam va skreen ham tashlang)";
$azok = "@TikTokUchunVideolar kanaliga obuna boling va $kan ta olmos oling 10-kun davomida chiqib ketmang chiqib ketsangiz $minusk olmos hisobingizdan olinadi\nOlmosni olish uchun @Soatchi_botHelpBot ga yozing";
$azob = "http://telegram.me/TGClever_Bot?startgroup=new ga /start bosing va botni 3+ guruhga qo'shib admin qiling va @Soatchi_botHelpBot skreen yuboring va amalni tog'ri bajargan bo'lsangiz bot adminlari sizga $bott ta olmos berishadi ";
$sayt = 'https://u3113.xvest6.ru/Soatchi'; 
$bot = "Soatchi_bot"; 
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
$vaqt = date("d",strtotime("2 hour"));
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
         "chat_id"=>"@kinolar_asilmedia_uzmovi", // secretius
         "user_id"=>$uid
         ]);
     $ret2 = bot("getChatMember",[
         "chat_id"=>"@Membersgram_Uzbek_TG", // shokvideo
         "user_id"=>$uid
         ]);
     $ret3 = bot("getChatMember",[
         "chat_id"=>"@Reklamalar_Tekin_GR", // shokvideo
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
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/kinolar_asilmedia_uzmovi"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/Membersgram_Uzbek_TG"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/Reklamalar_Tekin_GR"],],
]
]),
]); 
return false;
}

$kalt = json_encode([
'resize_keyboard'=>false,
'keyboard'=>[
[['text'=>"Sozlash⚙️ (⏰Soat)"],['text'=>"Sozlash⚙️ (⏳Cron)"],],
[['text'=>"👥Referal👥"],['text'=>"🎑Telegram fon🎑"],],
[['text'=>"Sozlamalar 🔠"],['text'=>"💎Olmosim💎"],],                                              
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
[['text'=>"Dostimga💎berish"],['text'=>"Yordam 📃"],],
[['text'=>"Bot tezligi 🎰"],['text'=>"🎁Bonus"],],
[['text'=>"♻ Yangilash"],['text'=>"$otex1"],]
],
]);




if(mb_stripos($text, "/tarqat")!==false){
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
'text'=> "**Adminlar hisobingizga$id2 ta 💎 qo'shdi tekshirib ko'ring😎.**",
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
'video'=>"https://t.me/Soatchi_Bot_help/5",
'text'=>"Soatni qoyishdan oldin 👆👆 videoni korib chiqing.",
'reply_markup'=>$kalt2,
]);
}



if($tx == "Sozlash⚙️ (⏳Cron)"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"Soatni Cron Qiling Yoki Soatni Ochiring.",
'reply_markup'=>$kalt12,
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
	'text'=>"⚠️<b>@Soatchi_bot dam olish rejimida. Iltimos bezovta qilmang!\nBezovta qilmang</b>",
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
'text'=> "**Hisobingizga $id2 ta 💎 qo'shildi tekshirib ko'ring😎.**",
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
'text'=> "**Hisobingizdan $id2 ta 💎 olmos ayrildi tekshirib ko'ring😎.**",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "**Bu tugma admin uchun! Bu knopkani faqat men @DoniyorSoft ishlatolaman 😂**",
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
if($tx=="👥Referal👥"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Referal ssilkangiz :</b>

👉 <code>https://t.me/Soatchi_bot?start=$cid</code>

<b>Do'stingiz ssilka orqali ro'yxatdan o'tsa sizga 10 ta olmos beriladi💎</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"Ulashish ♻", "url"=>"http://t.me/share/url?url=%2A%2ASalom%20bu%20bo't%20orqali%20siz%20profilingizga%20soat%20qo'yishingiz%20mumkin%2A%2A.%20__%20%0A%2A%2ABo'tga%20kirish:%0A%2A%2A%20https://t.me/Soatchi_bot?start=$cid"]],
            ]
        ])
        ]);
}

if($tx == "Sozlash⚙️ (⏰Soat)"){
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
	'text'=>"⚠️<b>@Soatchi_bot dam olish rejimida. Iltimos bezovta qilmang!</b>",    //manba @Soatchi_bot  manba bilan ol 3_harf bolsang olaver manbani manbani olsang bot ishlamidi ishonaver!!!!!!!
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


if($tx == "Yordam 📃"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"**▶️ YORDAM

🆚 Hozirgi versiya: *v$ver*

• Shartlar:
☞ Siz 1 ta profildan 1 ta soat qoʻyish imkoniyatiga egasiz. Koʻproq soat qoʻyish uchun botga boshqa profilingizdan kiring va olmoslaringizni oʻsha profilingizga oʻtkazing va siz boshqa profillaringizdan soat qoʻya olasiz.

• Ma'lumot:
☞ Botda soat qoʻyganingizda profilingizga «UZBEKISTAN-O'ZBEKISTON» deb yozib qoʻyadi. Ushbu muammoni yangi versiyalarda toʻgʻirlaymiz.

**",
'parse_mode'=>'Markdown',
'reply_markup'=>$kalt1,
]);
}





 

if($text == "🎁Bonus"){ 
$bonustime = file_get_contents("bonus/$from_id.txt");
$bonusrand = rand(1,15);
if($bonustime == $vaqt){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"**📛Siz kunlik bonusni olib bo‘lgansiz! Keyingi bonusni 24 soatdan keyin olasiz**",
'parse_mode'=>'markdown',
]);
}else{
$pul = file_get_contents("pul/$from_id.txt");
$bonus=$pul+$bonusrand;
file_put_contents("pul/$from_id.txt","$bonus");
file_put_contents("bonus/$from_id.txt","$vaqt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👏Tabriklaymiz sizga **$bonusrand**💎olmos miqdorida 🎁bonus taqdim etildi! **",
'parse_mode'=>'markdown',
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bonus olindi
Miqdori **$bonusrand** ta olmos
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
Tezlik**$randfast** M/s
Useri @$username",
]);
}
}

if($tx == "💎Olmosim💎"){
$pul = file_get_contents("pul/$from_id.txt");
$madline = file_get_contents("cron/$from_id.txt");
$odam = file_get_contents("odam/$from_id.dat");
$baza = file_get_contents("SoatBot.ids");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
$time=date('H:i',strtotime('2 hour'));
$sana=date("d.m.y",strtotime("2 hour"));
     bot('sendmessage',[
     'chat_id'=>$cid,
     'text'=>"<b> Sizning olmosingiz : $pul 💎\n\n\nSizning ID Raqamiz <code>$from_id</code>\n\n\nSizning Foydalanuvchi Useringiz <code>@$username</code>\n\n\n⏰$time 📆$sana</b>",
'parse_mode'=>'html',
'reply_markup'=>$kalt1,
]);
}





if($tx == "Statistika 📊"){
$baza = file_get_contents("azo.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
$time=date('H:i',strtotime('2 hour'));
$sana=date("d/m/y",strtotime("2 hour"));
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"** 👥 Bot a'zolari : ** [$obsh] **tа!**\n **♻ Botni tark etganlar :** [$gruppa] *ta!*\n
     **⏰$time 📆$sana**",
     'parse_mode'=>'markdown',
     'reply_markup'=>$kalt1,
     ]);
     }

$xabar = file_get_contents("send.txt");
if($text == "👥Xabar👥"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"**Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.**",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "**Bu tugma admin uchun!**",
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

//manba @Soatchi_bot  manba bilan ol 3_harf bolsang olaver manbani

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

//manba @Soatchi_bot  manba bilan ol 3_harf bolsang olaver manbani

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
'text'=>"**Boshqa ssilka bo'lsa cron ishlamaydi faqat biz bergan ssilka ishlaydi.**",
'parse_mode'=>'markdown',
'reply_markup'=>$kalt1,
]);
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
      'text'=>"**Admindan xabar**n$text",
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

//manba @Soatchi_bot  manba bilan ol 3_harf bolsang olaver manbani

if($tx == "Sobirov Islombel"){
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

//manba @Soatchi_bot  manba bilan ol 3_harf bolsang olaver manbani

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

if($tx=="🎑Telegram fon🎑"){
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
