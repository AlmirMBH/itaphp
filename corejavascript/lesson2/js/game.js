let boje=["aqua","lime","magenta","blue","black","green","yellow","red","gray"];
let primer=document.querySelector("#primer");
menjajBoju();
let vremeTrajanja=1000;
let promenaBoje=setInterval(menjajBoju, vremeTrajanja);
let vreme=60;
let promenaVremena=setInterval(menjajVreme, 1000);
let bodovi=0;
let divVreme=document.querySelector("#vreme");
let divBodovi=document.querySelector("#bodovi");
divVreme.innerHTML=vreme;
divBodovi.innerHTML=bodovi;
function menjajBoju(){
    console.log("Okinuo");
    primer.style.backgroundColor=boje[Math.floor(Math.random() * 9)];
}

function menjajVreme(){
    tekuce=parseInt(divVreme.innerHTML);
    if(tekuce==0)
    {
        clearInterval(promenaBoje);
        clearInterval(promenaVremena);
        document.write("GAME OVER<br>Vas broj bodova je: " + bodovi);
        return false;
    }
    tekuce-=1;
    divVreme.innerHTML=tekuce;
}

function proveri(obj){
    if(primer.style.backgroundColor==obj.style.backgroundColor)
    {
        bodovi+=1;
        divBodovi.innerHTML=bodovi;
        clearInterval(promenaBoje);
        menjajBoju();
        promenaBoje=setInterval(menjajBoju, vremeTrajanja);
    }
    else
    {
        bodovi-=1;
        divBodovi.innerHTML=bodovi;
    }
}