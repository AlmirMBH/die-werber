function checkLanguage(){
    let decodedLanguageCookie = decodeURIComponent(document.cookie);
    let languageCookieValues = decodedLanguageCookie.split(';');
    let storedLanguageString = languageCookieValues[0];
    let storedLanaguge = storedLanguageString.split('=');
    let language = storedLanaguge[1];
    changeLanguage(language)
}

function changeLanguage(language){
    let date = new Date();
    let expirationTime = date.setTime(date.getTime() + 7*24*60*60*1000);
    document.cookie = "language=" + language + "; expires=" + expirationTime +" ; path=/";
    let elements = document.querySelectorAll("[data-" + language + "]");

    for(i = 0; i < elements.length; i++){
        let text = elements[i].getAttribute("data-" + language);
        elements[i].innerHTML = text;
    }
}



