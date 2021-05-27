let broj=document.querySelector("#broj").value;
let div=document.querySelector("#odgovor");
function ispisiFOR(){
    div.innerHTML="";
    for(i=0;i<broj;i++)
        div.innerHTML+=i + "<br>";
}

function ispisiWHILE(){
    div.innerHTML="";
    while(broj>0){
        div.innerHTML+=broj + "<br>";
        broj--;
    }
}