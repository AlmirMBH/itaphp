let colors = ["aqua", "black", "chartreuse", "chocolate", "deeppink", "darkblue", "darkmagenta", "darkred", "forestgreen"];
let primer = document.querySelector("#primer");

setColor()

let duration = 1000;
let setTime = 10;
let setPoints = 0;

let colorChange = setInterval(setColor, duration);
let timeChange = setInterval(changeTime, 1000);

let time = document.querySelector("#time");
let points = document.querySelector("#points");

time.innerHTML = setTime;
points.innerHTML = setPoints;

function setColor(){
    primer.style.backgroundColor = colors[Math.floor(Math.random() * 9)];
    console.log(colors[Math.floor(Math.random() * 9)]);
}

function changeTime(){
    current = parseInt(time.innerHTML);
    if(current === 0){
        clearInterval(colorChange);
        clearInterval(timeChange)
        document.querySelector("#message").innerHTML = "GAME OVER!<br>Your score is: " + setPoints;
        return false;
    }
    current-=1;
    time.innerHTML = current;
}

function check(obj){
    if(primer.style.backgroundColor == obj.style.backgroundColor){
        setPoints+=1;
        points.innerHTML = setPoints;        
        // in order to prevent multiple clicks in one guess, we need a block of code below
        // replace this code with e.g. boolean to prevent playing after the time is up
        //clearInterval(colorChange);
        //setColor();
        //colorChange = setInterval(setColor, duration);
    }else{
        setPoints-=1;
        points.innerHTML = setPoints;
    }
}