<?php

/* https://api.telegram.org/bot760394847:AAGMBHCUsrlA6fcloNUPJv7eV1lD1gHHfFQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_number'];
$price = $_POST['price'];
$token = "760394847:AAGMBHCUsrlA6fcloNUPJv7eV1lD1gHHfFQ";
$chat_id = "-358303121";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Price:' => $price
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
header("Location:http://airsoft-kharkov.zzz.com.ua");

?>