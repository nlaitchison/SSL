<div id="main_content">
<h2> Admin Page - Albums </h2>
<?
	echo "<p class='create_new_album'><a href='?action=createAlbumForm'> create a new album</a></p>";

	//var_dump($data);

	foreach($data as $album){
		echo '<div class="admin_albums">';
		echo '<p><b>Album Name</b>:  '.$album['albumName'].'</p>';
		echo '<p><b>Artist</b>:  '.$album['albumArtist'].'</p>';
		echo '<p><b>Image</b>:  '.$album['albumImage'].'</p>';
		echo '<p><b>Description:</b>  '.$album['albumDescription'].'</p>';
		echo '<p><b>Release Date:</b>  '.$album['albumReleaseDate'].'</p>';
		echo "<p><a href='?action=deleteAlbum&albumId=".$album["albumId"]."'> delete</a>   ";
		echo "<a href='?action=updateAlbumForm&albumId=".$album["albumId"]."'>  update</a></p>";
		echo '</div>';
	}

?>
</div>