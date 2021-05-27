let a = document.querySelector("#number").value;
let answer = document.querySelector("#message");

function writeFor(){    
    answer.innerHTML = "";
    for(i=0; i<a; i++){
        answer.innerHTML+=i + "<br>";
    }
}

// In ECMA6 and newer versions, the entire above
// code can be written in the following way
function writeFor(){    
    message.innerHTML = "";
    for(i=0; i<number.value; i++){
        message.innerHTML+=i + "<br>";
    }
}


function writeWhile(){
    let a = document.querySelector("#number");
    let answer = document.querySelector("#message");
    message.innerHTML = "";
    
    while(a.value > 0){
        message.innerHTML += a.value + "<br>";        
        a.value--;
    }
}