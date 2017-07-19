<?php
	require_once __DIR__ . '/../API/construct.php';
	$action = 'test';
	if(!empty($_GET['action']))
		$action = $_GET['action'];

	$arrAction = array(
		'sendText',
		'sendImage',
		'sendFile',
		'sendVideo',
		'sendAudio',
		'sendGallery',
		'sendList'
	);
	$urlAPIDemo = 'http://26c0f9e4.ngrok.io/chatbot/demo/bot-demo.php';

	$arrQuickReply = array();
	foreach ($arrAction as $key => $actionTg) {
		$title = $actionTg;
		$url = "{$urlAPIDemo}?action={$actionTg}";
		$arrQuickReply[] = $bot->createButtonPostBack($title, $url);
	}



	switch ($action) {
		case 'test':
			$text = 'demo sendQuickReply';
			$bot->sendQuickReply($text, $arrQuickReply);
			break;
		case 'sendText':
			$text = 'demo sendText';
			$bot->sendText($text);
			break;
		case 'sendImage':
			$image = 'http://i.imgur.com/bW7nDDG.jpg';
			$bot->sendImage($image);
			break;
		case 'sendFile':
			$file = '';
			$bot->sendFile($file);
			break;
		case 'sendVideo':
			$video = '';
			$bot->sendVideo($video);
			break;
		case '':
			break;
		case '':
			break;
		case '':
			break;
		case '':
			break;
		case '':
			break;
		case '':
			break;
		case '':
			break;
		case '':
			break;
		
		default:
			break;
	}
?>