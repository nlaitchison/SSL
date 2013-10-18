<?
	
	// $r = array("name"=>"nicole", "lname"=>"aitchison");

	// header("Content-Type: application/json");

	// echo json_encode($r);

	// $xmlStr = file_get_contents("http://weather.yahooapis.com/forecastrss?w=2522318");
	// $xml = new SimpleXMLElements($xmlStr);
	// $res = $xml->xpath("/field[@name='name']/string");

	// foreach($res as $r){
	// 	echo $r[0]."<br>";
	// }
	
	$xml=simplexml_load_file("http://www.rollingstone.com/siteServices/rss/allNews");
	$ch = $xml->channel;
	foreach($ch->item as $article):
		$title=$article->title;
		$link=$article->link;
		$descri=$article->description;
		$date=$article->pubDate;
		echo $title. '<br>';
	endforeach;
?>