<?php
use App\Http\Controllers\BotManController;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;



$botman = resolve('botman');

$botman->hears('/start', function ($bot){ 
	$bot->reply('Вітаю! Я  бот психолога та психотерапевта Наталії Раїник. Тут ви зможете отримати відповіді на найпопулярніші запитання щодо консультацій та терапії.');
	$keyboard = Keyboard::create(Keyboard::TYPE_INLINE)->oneTimeKeyboard(false)
	->addRow(KeyboardButton::create('Консультація')->callbackData('Консультація'))
	->addRow(KeyboardButton::create('Психотерапія')->callbackData('Психотерапія'))
	->addRow(KeyboardButton::create('Про мене')->callbackData('Про мене'))
	->addRow(KeyboardButton::create('Контакти')->callbackData('Контакти')
	);
	$bot->reply('Оберіть розділ', $keyboard->toArray()); 
});

// $botman->hears('.(.*)', function ($bot) {
//     $bot->reply('Будь ласка, використовуйте кнопки для навігації та запитань!');
// }); 


$botman->hears('Консультація', function($bot){
	$bot->reply('Вартість індивідуальної консультації 600 - 800 грн. 

Тривалість однієї сесії - 50хв, періодичність - один-два рази на тиждень. 

Консультація пар - 900 грн. тривалість 1 год. 20 хв.

Можлива консультація по скайпу.

Усі консультації конфіденційні.');
	$home = Keyboard::create(Keyboard::TYPE_INLINE)->oneTimeKeyboard(false)
	->addRow(KeyboardButton::create('Home')->callbackData('Home')
	);
	$bot->reply('Повернутися на головну', $home->toArray()); 

});

$botman->hears('Психотерапія', function($bot){
	$bot->reply('Психотерапія - процес, в якому клієнт за допомогою психотерапевта працює над розвінчуванням патологічних переконань, які перешкоджають повноцінному життю, справляють негативний вплив на самооцінку, не дають досягти бажаних цілей та завдають страждання.

Психотерапія потрібна тоді, коли вас турбує більш чи менш виражене відчуття душевного дискомфорту.

Під час першої зустрічі між психотерапевтом і клієнтом обговорюються умови так званого психотерапевтичного контракту: запит клієнта, його готовність говорити про все відкрито і відверто, рівень освіти і досвіду психотерапевта, яким методом він працює і у чому цей метод полягає, частота зустрічей, розмір оплати, як сторони розуміють кінцевий результат психотерапії.

Як пише американський психотерапевт Гленн Габбард, результатом психотерапії повинно бути відчуття, що людина живе у своій «власній шкірі» і є справжньою. 

Надаю психологічну допомогу в індивідуальній формі, також працюю із парами, веду групову психотерапію. ');
		$home = Keyboard::create(Keyboard::TYPE_INLINE)->oneTimeKeyboard(false)
	->addRow(KeyboardButton::create('Home')->callbackData('Home')
	);
	$bot->reply('Повернутися на головну', $home->toArray()); 
});


$botman->hears('Про мене', function($bot){
	$bot->reply('Базову освіту психолога отримала в Українському Католицькому Університеті - магістр, клінічний психолог.
Психотерапевтичну практику почала у 2017 році. Практикую приватно, також маю досвід роботи у Психоневрологічному диспансері Львова, стаціонар №1.
Регулярно проходжу супервізії. Використовую методи гештальт терапії, психоаналітично орієнтованої терапії та когнітивно-поведінкової терапії.');
		$home = Keyboard::create(Keyboard::TYPE_INLINE)->oneTimeKeyboard(false)
	->addRow(KeyboardButton::create('Home')->callbackData('Home')
	);
	$bot->reply('Повернутися на головну', $home->toArray()); 
});

$botman->hears('Контакти', function($bot){
	$bot->reply('Адреса: вулиця Стуса, 4, м. Львів. https://g.page/PsyHelpRainyk?share');
	$bot->reply('Телефон: +380(97)86-86-420');
	$bot->reply('Моя сторінка на facebook: https://www.facebook.com/RainykPsyHelp/');
	$bot->reply('Блог: https://blog.nataliarainyk.com/');
		$home = Keyboard::create(Keyboard::TYPE_INLINE)->oneTimeKeyboard(false)
	->addRow(KeyboardButton::create('Home')->callbackData('Home')
	);
	$bot->reply('Повернутися на головну', $home->toArray()); 
});

$botman->hears('Home', function($bot){
	$keyboard = Keyboard::create(Keyboard::TYPE_INLINE)->oneTimeKeyboard(false)
	->addRow(KeyboardButton::create('Консультація')->callbackData('Консультація'))
	->addRow(KeyboardButton::create('Психотерапія')->callbackData('Психотерапія'))
	->addRow(KeyboardButton::create('Про мене')->callbackData('Про мене'))
	->addRow(KeyboardButton::create('Контакти')->callbackData('Контакти')
	);
	$bot->reply('Оберіть розділ', $keyboard->toArray()); 
});



// $botman->hears('Start conversation', BotManController::class.'@startConversation');
