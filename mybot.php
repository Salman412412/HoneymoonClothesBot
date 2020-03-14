<?php

include("Telegram.php");
date_default_timezone_set("asia/tehran");

// Set the bot TOKEN
$bot_id = "";

// Instances the class
$telegram   = new Telegram($bot_id);
$text       = $telegram->Text(); // متنی که کاربر ارسال میکنه
$username   = $telegram->Username(); // نام کاربری کاربر
$name       = $telegram->FirstName();
$family     = $telegram->LastName();
$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد
$user_id    = $telegram->UserID(); // آیدی یکتای کاربر
$chat_id    = $telegram->ChatID(); // آیدی مکانی که چت صورت میگیرد، مثل خود بات یا آیدی گروه

if(!is_null($text) && !is_null($chat_id)){
    $content = array('chat_id' => $chat_id, 'text' => $text);
    $telegram->sendMessage($content);
}
