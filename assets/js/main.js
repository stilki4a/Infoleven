

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
                 content += "<div class='products'><a href='#'>"
                              +"Заглавие: " + data[i].book_title + "<br/>"
                             +"Страници :" + data[i].book_pages + "<br/> "
                              + data[i].book_genre + "<br/> "
                             + "<img src =' "+ data[i].book_image + "'  alt='tv'>" +"<br/>"
                              + data[i].publish_date + " <br/>"
                             +"<h3>" + data[i].model + "</h3></a>";
                 content += "</div>";
             }


             document.getElementById('result').innerHTML = content;

         }
     }

     xhr.open('GET','../controller/ajaxController.php', true);
     xhr.send();
}



    // function createDiv(data) {
    //
    //     var htmlString = "";
    //
    //
    //     for (var i =0; i< data.length; i++){
    //         htmlString +="<div class='products'><a href='#'>"
    //              + data[i].book_title + " "
    //              + data[i].book_pages + " "
    //              + data[i].book_genre + " "
    //             + "<img src =' "+ data[i].book_image + "'  alt='tv'>"
    //              + data[i].publish_date + " "
    //             +"<h3>" + data[i].model + "</h3></a>";
    //         htmlString += "</div>";
    //     }
    //
    //     div.insertAdjacentHTML('beforeend',htmlString);
    //
    // }