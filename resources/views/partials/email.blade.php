@if(isset($linkTextAsEmail) AND $linkTextAsEmail)
    <script type="text/javascript" language="javascript">
    <!--
    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
    // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
    // This code is freeware provided these four comment lines remain intact
    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
    { coded = "NBM6@T6TC0PNvcPBbTPBPGpc.TP"
      key = "IKWAjTJrG53Ows8Le0bmSBkoYvX2iz9afEuxh7F4cyZpUqHQDC61tdgNnVPMlR"
      shift=coded.length
      link=""
      for (i=0; i<coded.length; i++) {
        if (key.indexOf(coded.charAt(i))==-1) {
          ltr = coded.charAt(i)
          link += (ltr)
        }
        else {
          ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
          link += (key.charAt(ltr))
        }
      }
    document.write("<a onclick='javascript:sendEmailEvent();' href='mailto:"+link+"'>"+link+"</a>")
    }
    //-->
    </script><noscript>[Please enable javascript to see our email address, or <a href="{{ route('contact.index') }}">click here</a> to contact]</noscript>
@elseif(isset($linkTextAsIcon) AND $linkTextAsIcon)
    <script type="text/javascript" language="javascript">
    <!--
    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
    // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
    // This code is freeware provided these four comment lines remain intact
    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
    { coded = "juz4@b4bLkUjA8UuKbUuUT98.bU"
      key = "jn0IoTtGZscgeJElhfRCNHKraOFwuMQ4DkXi8bq9p2APzmyx3W7U6SYv1d5VLB"
      shift=coded.length
      link=""
      for (i=0; i<coded.length; i++) {
        if (key.indexOf(coded.charAt(i))==-1) {
          ltr = coded.charAt(i)
          link += (ltr)
        }
        else {
          ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
          link += (key.charAt(ltr))
        }
      }
    document.write("<a onclick='javascript:sendEmailEvent();' href='mailto:"+link+"'><i class=\"fa fa-envelope\"></i></a>")
    }
    //-->
    </script><noscript>[Please enable javascript to see our email address, or <a href="{{ route('contact.index') }}">click here</a> to contact]</noscript>

@else
    <script type="text/javascript" language="javascript">
    <!--
    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
    // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
    // This code is freeware provided these four comment lines remain intact
    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
    { coded = "wJh0@n0nyF7wP87JYn7J7t68.n7"
      key = "7nhpCrIoLw5Z8O2KA6vlERkg4U9TJjtdBq0acfXuHVm1ixPsSyDGe3NWbFYMQz"
      shift=coded.length
      link=""
      for (i=0; i<coded.length; i++) {
        if (key.indexOf(coded.charAt(i))==-1) {
          ltr = coded.charAt(i)
          link += (ltr)
        }
        else {
          ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
          link += (key.charAt(ltr))
        }
      }
    document.write("<a onclick='javascript:sendEmailEvent();' href='mailto:"+link+"'>Request A Quote</a>")
    }
    //-->
    </script><noscript>[Please enable javascript to see our email address, or <a href="{{ route('contact.index') }}">click here</a> to contact]</noscript>
@endif
