<?php
    require_once 'construct.php';
	$timezone = $_GET['timezone'];
	date_default_timezone_set('UTC');

	$time = strtotime("{$timezone} hour");
	$now = date("H:i:s A", $time);
	$time += 15*60; /*15p đánh răng*/
	$date[0] = date("H:i:s A", $time + 1.5*3600);
	$date[1] = date("H:i:s A", $time + 3.0*3600);
	$date[2] = date("H:i:s A", $time + 4.5*3600);
	$date[3] = date("H:i:s A", $time + 7.5*3600);

	$text = array();
	$text[] = "Bây giờ là {$now}. Nếu bạn đi ngủ ngay bây giờ, bạn nên cố gắng thức dậy vào một trong những thời điểm sau: \n {$date[0]}, {$date[1]}\n hoặc {$date[2]},\n hoặc {$date[3]},\n (Thức dậy giữa một chu kỳ giấc ngủ khiến bạn cảm thấy mệt mỏi, nhưng khi thức dậy vào giữa chu kỳ tỉnh giấc sẽ làm bạn cảm thấy tỉnh táo và minh mẫn.)\n";
	$text[] = 'Chúc ngủ ngon!';
	$bot->sendText($text);
?>