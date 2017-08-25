 function listAllBooks() {

    if(typeof XMLHttpRequest !== 'undefined') xhttp = new XMLHttpRequest();
     else {
         var versions = ["MSXML2.XmlHttp.5.0",
             "MSXML2.XmlHttp.4.0",
             "MSXML2.XmlHttp.3.0",
             "MSXML2.XmlHttp.2.0",
             "Microsoft.XmlHttp"]

         for(var i = 0; i < versions.length; i++) {
             try {
                 xhttp = new ActiveXObject(versions[i]);
                 break;
             }
             catch(e){}
         }
     }

     xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
             // successfuly received response
             console.log(xhttp.responseText);
             var ourData = JSON.parse(xhttp.responseText);
             console.log(xhttp.responseText);
         }
     }



}


