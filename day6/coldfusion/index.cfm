<CFAPPLICATION NAME="captchaMsg"
SESSIONMANAGEMENT="Yes">

<cfset captchaModel = createObject("component", "models/captcha")>
<cfset viewsModel = createObject("component", "models/viewsModel")>
<cfset imageModel = createObject("component", "models/imageModels")>

<cfif isdefined('url.action')>

	<cfif url.action is "captchaVerify">
    	<cfif #captcha_input# is #session.captchaMsg# >
            Captcha is VALID.
            <cfelse>
            Captcha is INVALID.
        </cfif>
	</cfif>
    
	<cfif url.action is "uploadImage">
    	<cfif #form.album_image# != "" >
        	<cfset imageModel.up(#form.album_image#)>
            The image has been uploaded.
            <cfelse>
            Please select an image to upload.
        </cfif>
	</cfif>
    
</cfif>

<!--- <cfset msg = captchaModel.getMsg()> --->
<cfset captchaModel.cap()>
<cfset viewsModel.getView('../views/uploadForm.cfm')>

<cfset imageFile = ImageNew("/Applications/railo-express-4.0.4.001-macosx/webapps/www/SSL/day6/images/jonnycraig.png")>
<cfset ImageResize(imageFile, "220", "220")>
	<cfImage source="#imageFile#" action="write" destination="/Applications/railo-express-4.0.4.001-macosx/webapps/www/SSL/day6/images/jonnycraig_220.png" overwrite="yes">