<?php 
/* link: http://62091c52.ngrok.io/API/tao-chu-long.php?me={{me}}&you={{you}}&gender={{gender}}
 * 
 * 
 * 
 * 
 * 
 */
	require_once 'construct.php';
	require_once 'lib/convertUnicode.php';
	$i  = $_REQUEST['i'];
	$you = $_REQUEST['you'];

	$i  = stripUnicode($i)[0];
	$you = stripUnicode($you)[0];

	$i  = strtoupper($i);
	$you = strtoupper($you);

	if(in_array($i, $ascii) && in_array($you, $ascii))
	{
		$image  = "https://tentstudy.github.io/images/tao-chu-long/{$i}_{$you}.jpg";
		$title = "Của {$gender} đây ạ.";
		$subTitle = '';
		// $bot->sendText($text);
		// $bot->sendImage($url);

		$bot->sendGallery(
			$bot->createElement($title, $image, $subTitle,
				array(
					$bot->createButtonToURL(
						'Share on Facebook',
						"https://www.facebook.com/sharer/sharer.php?u={$image}"
					)
				)
			)
		);
	}else{
		$bot->sendText("Hiện tại {$me} chỉ hỗ trợ tên Tiếng Việt thôi ạ.");
	}
?>