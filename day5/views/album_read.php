<div id="main_content">
	<div id="page_header">
		<h2 id="page_title"> Manage Albums </h2>
		<a class='custom_button' href='?action=createAlbumForm'> add album</a>
	</div>
<div class='clear_fix'></div>
<?


	//var_dump($data);

	foreach($data as $album){
		echo '<div class="admin_albums">';
		echo '<div class="album_headers">';
		echo '<span class="album_name_header">'.$album['albumName'].'</span>';
		echo '<span class="album_artist_header">'.$album['albumArtist'].'</span>';
		echo '</div>';
		echo "<div class='album_divider'></div>";
		echo '<ul>';
		echo '<li><span class="album_label">Image:</span> <span class="album_value">  '.$album['albumImage'].'</span></li>';
		echo '<li><span class="album_label">Description:</span> <span class="album_value">  '.$album['albumDescription'].'</span></li>';
		echo '<li><span class="album_label">Release Date:</span> <span class="album_value">  '.$album['albumReleaseDate'].'</span></li>';
		echo '<li><span class="album_label">Artist Website:</span> <span class="album_value">  '.$album['albumWebsite'].'</span></li>';
		echo '<div class="clear_fix"></div>';
		echo '</ul>';
		echo "<div class='album_buttons'>";
		echo "<a class='custom_button' href='?action=updateAlbumForm&albumId=".$album["albumId"]."'>  update</a>";
		echo "<a class='custom_button' href='?action=deleteAlbum&albumId=".$album["albumId"]."'> delete</a>";
		echo '<div class="clear_fix"></div>';
		echo "</div>";
		echo '<div class="clear_fix"></div>';
		echo '</div>';
	}

?>
</div>
<!-- 
		echo '<li><span class="album_label">Album Name:</span> <span class="album_value">  '.$album['albumName'].'</span></li>';
		echo '<li><span class="album_label">Artist:</span> <span class="album_value">  '.$album['albumArtist'].'</span></li>'; -->