<?php 
	/* host/API/talk.php?text={{text}}*/
	require_once __DIR__ . '/construct.php';
	require_once '../lib/curl.php';

	$textUserSend = $_REQUEST['text'];
	$textUserSend = urlencode($textUserSend);

	$url = "http://api.mobico.info/messenger/ask/content/{$textUserSend}/format/json";
	$text = getJSON($url)->content;
	$bot->sendText($text);
?>