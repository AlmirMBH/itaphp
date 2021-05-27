let a = document.querySelector("#input");
let answer = document.querySelector("#answer");

function check(){
    if(a.value == ""){
        alert("You have to enter at least one character!");
        input.focus();
        return false;
    }
    answer.innerHTML = "You entered: " + a.value;
}


function returnValue(){    
    a.value = answer.innerHTML;    
}