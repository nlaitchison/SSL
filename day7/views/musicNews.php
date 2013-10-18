
<div id="main_content">

	<h2> Music News from Rolling Stone </h2>
	<br>

	<?
		$xml=simplexml_load_file("http://www.rollingstone.com/siteServices/rss/allNews");
		$ch = $xml->channel;
		foreach($ch->item as $article):
			$title=$article->title;
			$link=$article->link;
			$descri=$article->description;
			$date=$article->pubDate;
			echo '<div class="admin_albums">';
			echo '<h3><a href="'.$link.'">'.$title.'</a><br></h3>';
			echo $date . '<br>';
			echo '<p>'.$descri.'</p>';
			echo '</div>';
		endforeach;
	?>

</div>