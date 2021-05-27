
//let title = document.getElementById("title");
//title.innerHTML = "This is a new JS title"; // manipulate inner HMTL / content
title.innerHTML = "This is a new JS title (ECMA 6)";

function smallTitle(selector) {
    let smallTitle = document.getElementsByTagName(selector)[0];
    smallTitle.outerHTML = "<h5>This is a new JS title</h5>"; // manipulate html selectors
}

function bigTitle(selector) {
    let title = document.getElementsByTagName(selector)[0];
    title.outerHTML = "<h1>This is a new JS title</h1>";
}    

function red(selector){
    let element = document.getElementById(selector);
    element.style.color = "red";
}

function green(selector){
    let element = document.getElementById(selector);
    element.style.backgroundColor = "green";
    element.style.width = "450px";
    element.style.padding = "10px";
    // paragraph1.style.backgroundColor = "green"; // hard-coded
    // paragraph1.style.width = "450px";
    // paragraph1.style.padding = "10px";
}

function border(selector){
    let element = document.getElementById(selector);
    element.style.border = "solid 1px blue";
    element.style.padding = "20px";
    element.style.width = "500px";
    element.style.marginTop = "50px";
    element.style.marginLeft = "50px";
}
