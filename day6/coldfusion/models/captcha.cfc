<cfcomponent>

	<cffunction name="cap" returntype="void" access="public">
    
    	<cfset var chars = "23456789ABCDEFGHJKMNPQRS">
        <cfset var length = randRange(4,6)>
        <cfset var msg = "">
        <cfset var i = "">
        <cfset var char = "">
            
        <cfscript>
			for(i=1; i <= length; i++) {
				char = mid(chars, randRange(1, len(chars)),1);
				msg&=char;
			}
        </cfscript>
        
        <cfoutput>
        	<br /><br />
        </cfoutput>
    	<cfimage action="captcha" fontsize="25" width="162" height="75" text="#msg#" fonts="Verdana, Arial, Courier New, Courier">
        
        <CFSET session.captchaMsg="#msg#">
        
    </cffunction>
    
</cfcomponent>