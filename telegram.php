<?php

function telega(){
    
$token = ""; //В переменную $token нужно вставить токен, который нам прислал @botFather

$chat_id = ""; // Сюда вставляем chat_id

if (mb_substr($_SERVER["REQUEST_URI"], 0, 25) == "/checkout/order-received/") { 

$txt = "На вашем сайте оформлен заказ"; // отправляемое сообщение

return fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r"); //Передаем данные боту
}
}