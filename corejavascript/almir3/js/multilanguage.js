createAll()

function changeLanguage(language){
    let elements = document.querySelectorAll("[data-" + language + "]");
    
        for(i = 0; i < elements.length; i++){
            let text = elements[i].getAttribute("data-" + language);
            elements[i].innerHTML = text;
        }
}


function createAll(){
    let h1 = document.createElement("h1");
    h1.setAttribute("data-eng", "Multilanguage");
    h1.setAttribute("data-bos", "Visejezicnost");
    h1.innerHTML = h1.getAttribute("data-bos");
    document.body.appendChild(h1);

    let div = document.createElement("div");
    div.setAttribute("data-eng", "Text in div");
    div.setAttribute("data-bos", "Tekst u divu");
    div.innerHTML = div.getAttribute("data-bos");
    document.body.appendChild(div);

    let par = document.createElement("p");
    par.setAttribute("data-eng", "Text in paragraph");
    par.setAttribute("data-bos", "Tekst u paragrafu");
    par.innerHTML = par.getAttribute("data-bos");
    document.body.appendChild(par);
}