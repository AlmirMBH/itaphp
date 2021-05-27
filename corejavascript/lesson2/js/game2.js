let padac=document.querySelector("#padac");
let hvatac=document.querySelector("#hvatac");
let hvatacLeft=20;
let hvatacTop=400;
let padacLeft=20;
let padacTop=-50;
padac.style.left=padacLeft+"px";
padac.style.top=padacTop+"px";
hvatac.style.left=hvatacLeft+"px";
hvatac.style.top=hvatacTop+"px";
let tiktok=setInterval(padanje, 100);
function pomeri(){
    //alert(event.keyCode)
    if(event.keyCode!=37 && event.keyCode!=39) return false;
    //alert(event.keyCode)
    if(event.keyCode==37){
        hvatacLeft-=10;
        hvatac.style.left=hvatacLeft+"px";
    }
    else
    {
        hvatacLeft+=10;
        hvatac.style.left=hvatacLeft+"px";
    }
}

function padanje(){
    padacTop+=10;
    if(padacTop>480){
        padacTop=-50;
        padacLeft=Math.floor(Math.random() * 500);
    }
    padac.style.top=padacTop+"px";
    padac.style.left=padacLeft+"px";
    //Detekcija kolizije
}

