
function mouseClick(){
    alert("Clicked function!");
}

function mouseDblClick(selector) {    
    let title = document.getElementById(selector);
    title.outerHTML = "<p style='font-size: 24px'>1) Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, odit?</p>";
}    

function onMouseOver(selector) {    
    //let paragraph = document.getElementById(selector); // if this is not used in function call
    selector.style.fontSize = "24px";    
    selector.style.backgroundColor = "gray";
    selector.style.padding = "20px";
    selector.style.width = "500px";
    selector.style.marginLeft = "50px";
}   

function onMouseOut(selector){
    //let paragraph = document.getElementById(selector);
    selector.style.fontSize = "16px";
    selector.style.backgroundColor = "white";
    selector.style.padding = "0px";
    selector.style.width = "100%";
    selector.style.marginLeft = "0px";
}

function onMouseMove(selector){
    let paragraph = document.getElementById(selector);
    paragraph.style.fontSize = "24px";
    paragraph.style.backgroundColor = "blue";
    paragraph.style.padding = "20px";
    paragraph.style.width = "500px";       
}

function changeText(textToChange){
    let paragraph = document.getElementById(textToChange);
    paragraph.innerHTML = "New text";
}

function replaceText(textToReplace){
    let paragraph = document.getElementById(textToReplace);
    paragraph.innerHTML = "4) Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, odit?";
}

function swapText(swaptext1, swaptext2){
    let paragraph1 = document.getElementById(swaptext1);
    let paragraph2 = document.getElementById(swaptext2);    
    paragraph1.innerHTML = paragraph2.innerHTML;
}