function selectCar(car){
    //console.log(car.value);
    let message = document.querySelector('#message');
    message.innerHTML = "";
    message.innerHTML = "You selected: " + car.value; 

    let generalMessage = "You selected ";
    let peugeot = "!<br><br> Very cool choice!<br> A classy car for a classy guy!";
    let bmw = "!<br><br> A powerful car that will never let you down!";
    let toyota = "!<br><br> Great!<br> You have just bought one of the safest cars on Earth!"; 

    if(car.value === "Peugeot"){
        message.innerHTML = generalMessage + car.value + peugeot;
    }else if(car.value === "BMW"){
        message.innerHTML = generalMessage + car.value + bmw; 
    }else if(car.value === "Toyota"){
        message.innerHTML = generalMessage + car.value + toyota; 
    }else{
        message.innerHTML = "Finally! Just one click away from your new car :)";
    }
}