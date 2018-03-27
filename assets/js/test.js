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

function test() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            var content = '';
            for (var i = 0; i < data.length; i++) {
                content += " <div id='picture-wrapper'>";
                content += "<div class='products'><a href='#'>"
                    + "<img src ='../assets/media/"+ data[i].book_image + "'  alt='snimka'>" +"<br/>"
                        // "<img src ='../assets/media/lib3.jpg'  alt='snimka'>" +"<br/>"
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

    xhr.open('GET','../controller/searchController.php', true);
    xhr.send();
}