<?php

/* https://api.telegram.org/bot1330594141:AAHbbxpy_exyvSpu9ohHupEMqi-VkZ9RWRs/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$token = "1330594141:AAHbbxpy_exyvSpu9ohHupEMqi-VkZ9RWRs";
$chat_id = "-407055564";
$arr = array(
  'Name ' => $name,
  'Phone: ' => $email,
  'Email' => $phone,
  'Message' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>