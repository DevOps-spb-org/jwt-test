<?php
// показывать сообщения об ошибках
// Установить в 0 на продакшене
ini_set('display_errors', 1);
error_reporting(E_ALL);

// установить часовой пояс по умолчанию
date_default_timezone_set('Europe/Moscow');

// переменные, используемые для JWT
$key = '';
$iss = '';
$aud = '';
$iat = 1356999524;
$nbf = 1357000000;
