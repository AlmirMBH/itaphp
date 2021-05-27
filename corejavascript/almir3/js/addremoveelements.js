function addDiv(){
    let div = document.createElement("div");
    div.innerHTML = "A JS div";
    div.id = "JSdiv";    
    div.setAttribute("data-name", "Almir");
    div.setAttribute("data-surname", "Mustafic");
    document.body.appendChild(div);
    div.style.color = "green";
}

function addParagraph(){
    if(document.querySelector("#JSparagraph")){
        return false;
    }else{
        let p = document.createElement("p");
        p.innerHTML = "A JS paragraph";
        p.id = "JSparagraph";
        document.body.appendChild(p);
        p.style.color = "blue";
    }    
}


function removeParagraph(){
    if(document.querySelector("#JSparagraph")){
        let par = document.querySelector("#JSparagraph");
        //par.outerHTML = "";
        document.body.removeChild(par);
    }else{
        return false;
    }    
}


function removeDiv(){
    let div = document.querySelectorAll("[data-name]");
    
    for(i = 0; i < div.length; i++){
        //div[i].outerHTML = "";
        document.body.removeChild(div[i]);
    }

        
}