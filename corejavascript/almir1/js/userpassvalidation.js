function validate(){
    let userInput = document.getElementById('username');
    let usermessage = document.getElementById('usermessage');   

        if(userInput.value != false){
            if(userInput.value !== " "){
                usermessage.innerHTML = userInput.value;
            }else{
                usermessage.innerHTML = "Type in your name, please!";        
            }
        }else{
            usermessage.innerHTML = "This field is required!";        
        }
}


    function validateLength(){
        let username = document.getElementById('username2');
        let img = document.getElementById('error-img');
        if(username != null){
            if(username != ""){
                if(username.value.length < 6){
                    username.style.color = "red";
                    img.style.display = "inline";
                }else{
                    username.style.color = "green";
                    img.style.display = "none";
                }
            }
        }
    }