let tekst=document.querySelector("#unos");
let odgovor=document.querySelector("#odgovor");
let dugme=document.querySelector("#dugme");
function proveri(){
    if(tekst.value==""){
        alert("Niste uneli nikakav podatak");
        tekst.focus();
        return false;
    }
    //dugme.value="Kliknut sam";
    dugme.innerHTML="Kliknut sam";
    odgovor.innerHTML="Uneli ste: "+tekst.value;
}

function vrati(){
    //odgovor.innerHTML="Uneli ste: "+tekst.value;
    //dugme.value="Vracen tekst";
    dugme.innerHTML="Vracen tekst";
    tekst.value=odgovor.innerHTML
}