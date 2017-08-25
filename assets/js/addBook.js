/**
 * Created by user on 8/25/2017.
 */
var titleField = document.getElementById('title');
var resumeField = document.getElementById('genre');
var pagesField = document.getElementById('pages');
var pDateField = document.getElementById('pDate');
var imageField = document.getElementById('image');

var submit = document.getElementById('save');



var titleError = false;


titleField.onblur = function(){

    if (titleField.value.trim().length < 3)  {

        var container = document.getElementById("titleDiv");
        var errorMessage = document.createElement('span');
        errorMessage.className = 'errorr';
        errorMessage.textContent = 'Books title shoud be at least 3 letters!';
        container.appendChild(errorMessage);
        titleError = true;
    } else {
        titleError = false;

    }

};

titleField.onfocus = function() {
    var errorMessage = document.querySelector("#titleDiv > .errorr");
    if (errorMessage) {
        errorMessage.parentNode.removeChild(errorMessage);
        titleError = false;
    }
};

document.forms[0].onsubmit = function(event) {

    if ((isbnError)|| (titleError) || (authorError) ){

        event.preventDefault();
    }


};