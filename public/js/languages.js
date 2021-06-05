let language;
function changeLanguage(language){
    let elements = document.querySelectorAll("[data-" + language + "]");

    for(i = 0; i < elements.length; i++){
        let text = elements[i].getAttribute("data-" + language);
        elements[i].innerHTML = text;
    }
}



