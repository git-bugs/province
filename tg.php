<?php

$name = trim(strtoupper(htmlspecialchars($_POST['name'])));
$phone = trim(htmlspecialchars($_POST['phone']));
$token = '1446743915:AAGmyhRaqEqd6oCTV8bP1kpTlvKF6vmvGU4';
$chat_id = '-532090107';

$array = array(
  'Имя' => $name,
  'Телефон' => $phone
);

$txt = "<b>Имя</b>: <strong>$name</strong> %0A<b>Телефон: $phone</b>";

// foreach ($array as $key => $val) {
//   $txt .= "<b>" . $key . "</b> " . $val  . "%0A";
// };

$sendToTg = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


if (!$sendToTg) echo '%Ошибка. Попробуйте еще';




