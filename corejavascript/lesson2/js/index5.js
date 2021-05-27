let div=document.querySelector("#odgovor");
x=[25,26,54,-98,89];
y=new Array(21,6,8,7,23);
div.innerHTML="Broj elemenata niza x: " + x.length;
console.log(x);
//console.log(y);
x[x.length]=56;
x.push(99);
//x[23]=56;
console.log(x);

function ispisiNiz(){
    div.innerHTML="";
    for(i=0;i<x.length;i++)
        div.innerHTML+=i + ": " + x[i] + "<br>";
}

function dodajElement(){
    novibroj=parseInt(document.querySelector("#noviElement").value);
    x.push(novibroj);
    ispisiNiz();
}
