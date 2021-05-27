function startAlert(){
    alert("You clicked on Alert!");
}


function startConfirm(){
    let a = confirm("Are you sure?");
    if(a == true){
        let answer = document.querySelector('#answer');
        answer.innerHTML = "OK";        
    }else{
        let answer = document.querySelector('#answer');
        answer.innerHTML = "Cancel!";
    }
}


function startPrompt(){
    let a = prompt("Enter your name");
    console.log(a);
    if(a == null){
        let answer = document.querySelector('#answer');
        answer.innerHTML = "You clicked on cancel";        
    }else if(a == ""){
        let answer = document.querySelector('#answer');
        answer.innerHTML = "You did not enter any value";
    }else{            
        let answer = document.querySelector('#answer');
        answer.innerHTML = a;
    }
}