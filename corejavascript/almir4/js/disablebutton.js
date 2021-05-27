function validate(){
    let name = document.querySelector("#name");    
    let message = document.querySelector("#message");
    
        if(name.value == ""){
            message.innerHTML = "Name is required!";
            name.focus();
            return false;
        }
    return true;
}


function checkButton(){
    let confirm = document.querySelector("#confirm");
    let button = document.querySelector("#button");
    
        if(confirm.checked){
            button.removeAttribute("disabled");
        }else{
            button.setAttribute("disabled", true);
        }
}