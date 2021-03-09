<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Привіт', function ($bot) {
    $bot->reply('Вітаю!');
});

$botman->hears('Добрий ранок', function ($bot) {
    $bot->reply('Доброго ранку!');
});

$botman->hears('Добрий день', function ($bot) {
    $bot->reply('Доброго дня!');
});

$botman->hears('Добрий вечір', function ($bot) {
    $bot->reply('Доброго вечора!');
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');
