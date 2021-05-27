let message = document.querySelector("#message");

function showForm(){
    let confirm = document.querySelector("#confirm");
    let form = document.querySelector("#form");

        if(confirm.checked){            
            form.style.display = "";
        }else{
            form.style.display = "none";
        }
}

function checkForm(){
    let name = document.querySelector("#name");    
    let comment = document.querySelector("#comment");

    if(name.value == "" || comment.value == ""){
        message.innerHTML = "All fields are required!";        
        return false;
    }
    return true;
}