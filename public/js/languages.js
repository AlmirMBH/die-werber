function checkLanguage(){
    let decodedLanguageCookie = decodeURIComponent(document.cookie);
    let languageCookieValues = decodedLanguageCookie.split(';');
    let storedLanguageString = languageCookieValues[0];
    let storedLanaguge = storedLanguageString.split('=');
    let language = storedLanaguge[1];
    changeLanguage(language)
}

function changeLanguage(language){
    // delete previous language selection (cookie)
    if(document.cookie){
        let cookieLanguage = document.cookie = "language=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }

    // set language again (cookie)
    let expirationTime = new Date(Date.now() + 1000 * 3600 * 24 * 7);
    document.cookie = "language=" + language + "; expires=" + expirationTime +" ; path=/";
    let elements = document.querySelectorAll("[data-" + language + "]");

    // translate entire website
    for(i = 0; i < elements.length; i++){
        let text = elements[i].getAttribute("data-" + language);
        elements[i].innerHTML = text;
    }
}



