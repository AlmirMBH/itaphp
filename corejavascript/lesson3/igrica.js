let padac=document.querySelector("#padac");
let hvatac=document.querySelector("#hvatac");
let bodovi=document.querySelector("#bodovi");
let vreme=document.querySelector("#vreme");

let poen=0;
let sekunde=60;
vreme.innerHTML="Vase preostalo vreme je: "+ sekunde; 

let hvatacLeft=20;
let hvatacTop=400;

let padacLeft=20;
let padacTop=10;

padac.style.left=padacLeft+"px";
padac.style.top=padacTop+"px";

hvatac.style.left=hvatacLeft+"px";
hvatac.style.Top=hvatacTop+"px";

let intervalPadanje=setInterval(padanje, 100);
let intervalVreme=setInterval(tiktok, 1000);

function tiktok(){
    sekunde-=1;
    if(sekunde==0){
        document.write("GAME OVER!!!<br> Osvojili ste: "+poen+" poen");
    }
    vreme.innerHTML="Vase preostalo vreme je: "+sekunde;
    
}
function pause(){
    clearInterval(intervalPadanje);
    clearInterval(intervalVreme);
}

function start(){
    clearInterval(intervalPadanje);
    clearInterval(intervalVreme);
    intervalPadanje=setInterval(padanje, 100);
    intervalVreme=setInterval(tiktok, 1000);
}

function pomeri(){
    if(event.keyCode!=37 && event.keyCode!=39){
        return false;
    }
    if(event.keyCode==37){
        hvatacLeft-=10;
        hvatac.style.left=hvatacLeft+"px";
    }
    else{
        hvatacLeft+=10;
        hvatac.style.left=hvatacLeft+"px";
    }
}

function padanje(){
    padacTop+=20;
    if(padacTop>480){
        padacTop=10;
        padacLeft=Math.floor(Math.random() * 500);
        poen-=1;
        bodovi.innerHTML="Score: "+poen;
    }
    if(hvatacLeft>padacLeft-40 && hvatacLeft<padacLeft+40 && hvatacTop<padacTop-8){
        padacTop=10;
        padacLeft=Math.floor(Math.random() * 500);
        poen+=1;
        bodovi.innerHTML="Score: "+poen;
    }

    padac.style.top=padacTop+"px";
    padac.style.left=padacLeft+"px";   
}