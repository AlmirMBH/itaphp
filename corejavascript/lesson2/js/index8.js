let a=setInterval(interval, 3000);
function interval(){
    document.querySelector("#interval").innerHTML+="Ovo je INTERVAL<br>";
}
setTimeout(timeout, 3000);
function timeout(){
    document.querySelector("#timeout").innerHTML+="Ovo je TIMEOUT<br>";
}
function zaustavi(){
    clearInterval(a);
}

function pokreni(){
    a=setInterval(interval, 3000);
}
