function validate(){
    let password = document.querySelector("#password");
    let confirm = document.querySelector("#confirmpassword");
    let message = document.querySelector("#message");
    
        if(password.value == "" || confirm.value == ""){
            message.innerHTML = "All fields are required!";
            password.focus();
            return false;
        }

        if(password.value != confirm.value){
            message.innerHTML = "Password and confirmation must match";
            confirm.focus();
            return false;
        }

    return true;    
}
