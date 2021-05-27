function validate(){
    let name = document.querySelector("#name");
    let confirm = document.querySelector("#confirm");    
    let message = document.querySelector("#message");
    
    if(!confirm.checked){
        message.innerHTML = "You have to confirm!";
        return false;
    }

    if(name.value == ""){
        message.innerHTML = "Name is required!";
        return false;
    }

    return true;
}