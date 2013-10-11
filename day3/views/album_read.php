<div id="main_content">
<h2> Admin Page - Albums </h2>
<?
	echo "<p class='create_new_album'><a href='?action=createAlbumForm'> create a new album</a></p>";

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
		echo '</ul>';
		echo "<div class='album_buttons'>";
		echo "<a class='custom_button' href='?action=deleteAlbum&albumId=".$album["albumId"]."'> delete</a>";
		echo "<a class='custom_button' href='?action=updateAlbumForm&albumId=".$album["albumId"]."'>  update</a>";
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