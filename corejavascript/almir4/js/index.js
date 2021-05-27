function checkRadio(gend){
    let gender = gend.value;
    
    if(gender == "m"){
        message.innerHTML = "Male";
    }else if(gender == "f"){
        message.innerHTML = "Female";
    }else if(gender == "n"){
        message.innerHTML = "Neutral";
    }
}