<cfcomponent>

	<cffunction name="getAll" returntype="query">
    	<cfquery datasource="ssl" name="albums">
        	select * from albums 
        </cfquery>
        <cfreturn albums>
    </cffunction>
    
    <cffunction name="getAlbum" returntype="query">
    	<cfquery datasource="ssl" name="albums">
        	select * from albums where albumId = 
            <cfqueryparam value="#albumId#">
        </cfquery>
        <cfreturn albums>
    </cffunction>
    
    <cffunction name="deleteAlbum" returntype="void">
    	<cfargument name="albumId" required="yes">
        	<cfquery datasource="ssl" name="albums">
            	delete from albums where albumId = 
                <cfqueryparam value="#albumId#">
            </cfquery>
     </cffunction>
     
      <cffunction name="createAlbum" returntype="void">
        <cfargument name="albumName" required="yes">
        <cfargument name="albumArtist" required="yes">
        <cfargument name="albumImage" required="yes">
        <cfargument name="albumDescription" required="yes">
        <cfargument name="albumReleaseDate" required="no">
        <cfargument name="albumWebsite" required="no">
        <cfquery datasource="ssl" name="albums">
            insert into albums (albumName, albumArtist, albumImage, albumDescription, albumReleaseDate, albumWebsite)
            values (<cfqueryparam value="#albumName#">, <cfqueryparam value="#albumArtist#">, <cfqueryparam value="#albumImage#">,
            <cfqueryparam value="#albumDescription#">, <cfqueryparam value="#albumReleaseDate#">, <cfqueryparam value="#albumWebsite#">)
        </cfquery>
     </cffunction>
     
     <cffunction name="updateAlbum" returntype="void">
     	<cfargument name="albumId" required="yes">
        <cfargument name="albumName" required="yes">
        <cfargument name="albumArtist" required="yes">
        <cfargument name="albumImage" required="yes">
        <cfargument name="albumDescription" required="yes">
        <cfargument name="albumReleaseDate" required="no">
        <cfargument name="albumWebsite" required="no">
        <cfquery datasource="ssl" name="albums">
            update albums set albumName = <cfqueryparam value="#albumName#">, albumArtist = <cfqueryparam value="#albumArtist#">, 
            albumImage = <cfqueryparam value="#albumImage#">, albumDescription = <cfqueryparam value="#albumDescription#">, 
            albumReleaseDate = <cfqueryparam value="#albumReleaseDate#">, albumWebsite = <cfqueryparam value="#albumWebsite#"> 
            where albumId = <cfqueryparam value="#albumId#">
        </cfquery>
     </cffunction>
     
</cfcomponent>