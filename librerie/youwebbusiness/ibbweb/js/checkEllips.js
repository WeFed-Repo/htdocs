 /**
  *	
  *	Ellips Library
  * 
  * 	Javascript Library for form ellips applet version checking
  *
  *
  *	Copyright (c) 2001 Cedac
  *
  */
    
    // Check for see if Java it's enabled
    if (!navigator.javaEnabled())
    {
        alert("Java not enabled");
    }
    else if (navigator.appName.indexOf("Netscape")!=-1)
    {
        trigger = netscape.softupdate.Trigger;
        if (trigger.UpdateEnabled())
        {
            var docURL = new String(document.URL);
            var strings = docURL.split("/");
            var jarURL = new String(strings[0] + "//" + strings[2] + "/" + strings[3] + "/sw/plugins/Cedac-CryptoSign-win-1.1.0.0-3.2.1.7-TEST.jar");

            vi = new netscape.softupdate.VersionInfo(1,1,0,0);
            trigger.ConditionalSoftwareUpdate(
                        jarURL,
                        "plugins/CedacSoftware/EllipsCSApplet",
                        vi, trigger.DEFAULT_MODE);
        }
        else
        {
            alert("SmartUpdate must be installed");
        }
    }
    else
    {
        if(navigator.appName.indexOf("Microsoft")!=-1)
        {
            isMicrosoft=1;
            if (navigator.userAgent.indexOf("Mozilla/4.")!=-1)
            {
            }
            else 
            {
                alert("No support for Java");
            }
        }
        else
        {
            alert("No support for Java");
        }
    }
