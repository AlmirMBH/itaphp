function onMouseEnter(selector){
    selector.style.backgroundColor='red';
}

function onMouseOut(selector){
    selector.style.backgroundColor='white';
}

function onClick(obj){
    let selector = obj.innerHTML;
    if(selector == "2) Lorem ipsum dolor sit amet."){
        document.getElementById('answer').innerHTML = "<p style='color:blue; margin-top:30px; font-size: 30px;'>Congrats!</p>";
    }else{        
        document.getElementById('answer').innerHTML = "<p style='color:red; margin-top:30px; font-size: 30px;'>Your answer is not correct <br>" + selector + "</p>";
    }
    
}