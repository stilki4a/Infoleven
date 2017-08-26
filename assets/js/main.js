

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
    function listAllBooks() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
         if (xhr.readyState == 4 && xhr.status == 200) {


               var data = JSON.parse(xhr.responseText);

             // successfuly received response
              console.log(xhr.responseText);

             // createDiv(data);

            var content = '';
             for (var i = 0; i < data.length; i++) {
                 content += ' <div id="picture-wrapper">';
                 content += "<div class='products'><a href='#'>"
                          + "<img src ='../media/"+ data[i].book_image + "'  alt='snimka'>" +"<br/>"
                         // + "<img src ='../media/lib3.jpg'  alt='snimka'>" +"<br/>"
                              +"Заглавие: " + data[i].book_title + "<br/> "
                             +"Страници :" + data[i].book_pages + "<br/> "
                             +"Категория:" + data[i].book_genre + "<br/> "

                              + data[i].publish_date + " <br/>";
                  content += "</div>";
                 content += "</div>";
             }


             document.getElementById('result').innerHTML = content;

         }
     }

     xhr.open('GET','../controller/ajaxController.php', true);
     xhr.send();
}


    // function showGenre() {
    //     var xhr = new XMLHttpRequest();
    //     xhr.onreadystatechange = function() {
    //         if (xhr.readyState == 4 && xhr.status == 200) {
    //
    //
    //             var data = JSON.parse(xhr.responseText);
    //
    //             // successfuly received response
    //             console.log(xhr.responseText);
    //
    //             // createDiv(data);
    //
    //             document.getElementById("result").innerHTML=this.responseText;
    //             document.getElementById("result").style.border="1px solid #A5ACB2";
    //
    //
    //             var content = '';
    //             for (var i = 0; i < data.length; i++) {
    //                 content += ' <div id="picture-wrapper">';
    //                 content += "<div class='products'><a href='#'>"
    //                     + "<img src ='../media/"+ data[i].book_image + "'  alt='snimka'>" +"<br/>"
    //                     // + "<img src ='../media/lib3.jpg'  alt='snimka'>" +"<br/>"
    //                     +"Заглавие: " + data[i].book_title + "<br/> "
    //                     +"Страници :" + data[i].book_pages + "<br/> "
    //                     +"Категория:" + data[i].book_genre + "<br/> "
    //
    //                     + data[i].publish_date + " <br/>";
    //                 content += "</div>";
    //                 content += "</div>";
    //             }
    //
    //
    //             document.getElementById('result').innerHTML = content;
    //
    //         }
    //     }
    //     xhr.open('GET','../controller/searchController.php', true);
    //     xhr.send();
    // }



    // function showResult(str) {
    //     if (str.length==0) {
    //         document.getElementById("result").innerHTML="";
    //         document.getElementById("result").style.border="0px";
    //         return;
    //     }
    //     if (window.XMLHttpRequest) {
    //         // code for IE7+, Firefox, Chrome, Opera, Safari
    //         xmlhttp=new XMLHttpRequest();
    //     } else {  // code for IE6, IE5
    //         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    //     }
    //     console.log(xmlhttp)
    //     xmlhttp.onreadystatechange=function() {
    //         if (this.readyState==4 && this.status==200) {
    //             document.getElementById("result").innerHTML=this.responseText;
    //             document.getElementById("result").style.border="1px solid #A5ACB2";
    //         }
    //     }
    //     xmlhttp.open("GET","../controller/searchController.php?q="+str,true);
    //     xmlhttp.send();
    // }