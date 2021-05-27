let a = setInterval(interval, 500); // starts automatically
setTimeout(timeout, 1000);

function interval(){
    document.querySelector("#interval").innerHTML += "This is a JS interval function!<br>";    
}

function timeout(){
    document.querySelector("#timeout").innerHTML += "This is a JS timeout function!<br>";    
}

function start(){
    setInterval(interval, 500);
}

function stop(){
    clearInterval(a);
}