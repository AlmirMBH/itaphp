obj = {x:5, y:12, z:-98}; // anonymous object
console.log("Value of the element x: " + obj['x']);// not an array
console.log("Value of the element x: " + obj.x);
document.write("x: " + obj.x + "<br>y: " + obj.y);


let personArr = [];

function addPerson(){
    let name = document.querySelector("#addname").value;
    let surname = document.querySelector("#addsurname").value;
    let age = document.querySelector("#addage").value;
    
    person = {name: name, surname: surname, age: age};
    personArr.push(person);
    printArr();    
}

function printArr(){
    let message = document.querySelector("#message");
    message.innerHTML = "";
    for(i=0; i<personArr.length; i++){
        message.innerHTML+=i + ": " + personArr[i].name + " " + personArr[i].surname + " " + personArr[i].age + "<br>";        
    }
}