let broj=document.querySelector("#broj");
let div=document.querySelector("#odgovor");
function brojDana(){
    switch(parseInt(broj.value)){
        case 1: case 3:case 5:case 7:case 8:case 10:case 12:
            div.innerHTML="Mesec ima 31 dan";
        break;
        case 2:
            div.innerHTML="Mesec ima 28 dan";
        break;
        case 4:case 6:case 9:case 11:
            div.innerHTML="Mesec ima 30 dan";
        break;
        default:
            div.innerHTML="Ovo nije redni broj meseca";
    }
}