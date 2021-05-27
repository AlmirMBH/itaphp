function check(){
    let age = document.querySelector("#age");
    let message = document.querySelector("#message");

    switch(age.value){
        case "1":
            message.innerHTML = "You're under 18";
            break;
        case "2":
            message.innerHTML = "You're under 45";
            break;
        case "3":
            message.innerHTML = "You're under 66";
            break;
        case "4":
            message.innerHTML = "You're under 80";
            break;
        case "5":
            message.innerHTML = "You're 80 or older";
            break;
        default:
            message.innerHTML = "";
       

    }
}