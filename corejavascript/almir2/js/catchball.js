let ball = document.querySelector("#ball");
let catcher = document.querySelector("#catcher");

let ballLeft = 130;
let ballTop = 60;
let catcherLeft = 100;
let catcherTop = 300;

ball.style.left = ballLeft+"px";
ball.style.top = ballTop+"px";
catcher.style.left = catcherLeft+"px";
catcher.style.top = catcherTop+"px";

let fall = setInterval(freeFall, 100);

function moveCatcher(){        
        let key = event.keyCode;        
    if(key != 37 && key != 39){        
        return false;
    }else if(key == 37){
        catcherLeft-=10;
        catcher.style.left = catcherLeft+"px";        
    }else{
        catcherLeft+=10;    
        catcher.style.left = catcherLeft+"px";        
    }
}

function freeFall(){
    ballTop+=10;
    if(ballTop > 300){
        ballTop=-50;        
        ballLeft = Math.floor(Math.random() * 500);        
    }
    ball.style.top = ballTop+"px";    
    ball.style.left = ballLeft+"px";
    // write code for collision detection
}









