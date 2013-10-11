<!--- $views = new views();
	  $views->getView("views/header.php") --->
<cfset viewsModel = createObject("component", "models/viewsModel")>
<cfset albumsModel= createObject("component", "models/albumsModel")>

<cfset viewsModel.getView('../views/header.cfm')>

<!--- $data = array("name"=>"nicole"); --->
<!--- $views->getView("views/body.php",$data); --->

<!--- url. is get, form. is post --->
<cfif isdefined('url.action')>

	<cfif url.action is "deleteAlbum">
    	<cfset albumsModel.deleteAlbum(url.albumId)>
        <cfset data = albumsModel.getAll()>
		<cfset viewsModel.getView('../views/album_read.cfm', data)>

    	<cfelseif url.action is "createAlbumForm"> 
        <cfset viewsModel.getView('../views/album_create.cfm')>
        
        <cfelseif url.action is "createAlbum"> 
        <cfset albumsModel.createAlbum(#form.album_name#, #form.album_artist#, #form.album_image#, #form.album_description#, #form.album_release_date#, #form.artist_site#)>
        <cfset data = albumsModel.getAll()>
		<cfset viewsModel.getView('../views/album_read.cfm', data)>
        
       	<cfelseif url.action is "adminAlbumInfo"> 
        <cfset data = albumsModel.getAll()>
		<cfset viewsModel.getView('../views/album_read.cfm', data)>
        
        <cfelseif url.action is "updateAlbumForm"> 
        <cfset data = albumsModel.getAlbum(url.albumId)>
		<cfset viewsModel.getView('../views/album_update.cfm', data)>
        
        <cfelseif url.action is "updateAlbum"> 
        <cfset albumsModel.updateAlbum(#form.albumId#, #form.album_name#, #form.album_artist#, #form.album_image#, #form.album_description#, #form.album_release_date#, #form.artist_site#)>
        <cfset data = albumsModel.getAll()>
		<cfset viewsModel.getView('../views/album_read.cfm', data)>
        
	</cfif>
    
    <cfelse>
    <cfset data = albumsModel.getAll()>
	<cfset viewsModel.getView('../views/album_read.cfm', data)>
    
</cfif>

<cfset viewsModel.getView('../views/footer.cfm')>