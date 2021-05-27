let osobe=[];
let div=document.querySelector("#odgovor");
function ispisiNiz(){
    div.innerHTML="";
    for(i=0;i<osobe.length;i++)
        div.innerHTML+=i + ": " + osobe[i].ime + ' ' + osobe[i].prezime + " (" + osobe[i].godine + ")<br>";

}

function dodajEl(){
    ime=document.querySelector("#ime").value;
    prezime=document.querySelector("#prezime").value;
    godine=document.querySelector("#godine").value;
    osoba={ime:ime, prezime:prezime, godine:godine};
    osobe.push(osoba);
    ispisiNiz();
}