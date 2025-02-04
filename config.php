<?php
// Настройка подключения к бд
$server = "127.0.0.1"; // Адрес бд | По умолчанию: "127.0.0.1"
$login = "root"; // Логин бд | По умолчанию: "trinity"
$pass = "root"; // Пароль бд | По умолчанию: "trinity"
$bd_char = "characters"; // Имя бд персонажей | По умолчанию:  "characters"
$bd_auth = "auth"; // Имя бд аккаунтов | По умолчанию: "auth"

//Настройки сервера
$current_realmlist = "lo123gon.wow.ru"; // Ваш реалмлист. Без Set realmlist (он будет добавлен автоматически)

/* 

Настройка списка услуг для персонажа:

1 - услуга включена
0 - услуга отключена

*/
$config_change_nick = 1; // Смена ника
$config_change_race = 1; // Смена рассы
$config_change_fraction = 1; // Смена фракции
$config_teleport = 1; // Телепорт в таверну


/* 

Настройка списка услуг для аккаунта:

1 - услуга включена
0 - услуга отключена

*/
$config_change_pass = 1; // Смена пароля
$config_mail = "mail@mail.ru";  // Почта куда будут приходить заявки с обратной связи

//Настройки голосования mmotop
$mmotop_vote_count = 2; // ТОЛЬКО ЧИСЛО. Количество бонусов за голосования mmotop. Будет умножаться на количество голосов с mmotopa
$file_path_mmotop = "https://mmotop.ru/votes/gk95jG894klF4.txt?agrsuiho49jg"; // Файл статистики голосов (ссылка находится в личном кабинете mmotop)
$mmotop_link = "https://wow.mmotop.ru/servers/"; // Ссылка на голосование mmotop

// Настройка часового пояса
date_default_timezone_set("Europe/Moscow");
