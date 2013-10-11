<div id="main_content">
	<p class='create_new_album'><a href='?action=createAlbumForm'>create a new album</a></p>
	<h2> Admin Album List </h2>
    
	<!--- <cfdump var="#data#"> --->
    
    <cfloop query="#data#">
    <cfoutput>
    	<div class="admin_albums">
			<p><b>Album Name</b>:  #albumName# </p>
			<p><b>Artist</b>:  #albumArtist# </p>
			<p><b>Image</b>:  #albumImage# </p>
			<p><b>Description:</b>  #albumDescription# </p>
			<p><b>Release Date:</b>  #albumReleaseDate# </p>
			<p><a href='?action=deleteAlbum&albumId=<cfoutput>#albumId#</cfoutput>'> delete</a>
			<a href='?action=updateAlbumForm&albumId=<cfoutput>#albumId#</cfoutput>'>  update</a></p>
			</div>
	</cfoutput>
    </cfloop>
</div>