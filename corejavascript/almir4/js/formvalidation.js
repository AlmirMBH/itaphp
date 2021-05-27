function validate(){
    //alert("works");
   // return true;
    let name = document.querySelector("#name");
    let surname = document.querySelector("#surname");
    let form = document.querySelector("#form");
    let message = document.querySelector("#message");    
    
    if(name.value == ""){
        message.innerHTML = "Name is required";
        name.focus();        
        return false;
    }

    if(surname.value == ""){
        message.innerHTML = "Surname is required";
        surname.focus();        
        return false;
    }
    
    return true;
}