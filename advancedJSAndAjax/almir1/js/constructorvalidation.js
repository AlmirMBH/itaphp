document.write("Class Person<br><br>");
class Person{
    x;
}

let person1 = new Person();
person1.x = 41;
person1.y = "Almir"; // adding class field outside the class
let age = person1.x;
let fname = person1.y;

document.write(fname + " " + age);
document.write("<hr>Class Car (this)<br><br>");

class Car{
    x;
    y;

    constructor(year, model){ // this must be used in constructors, unlike the class above
        document.write("Number of arguments: " + arguments.length + "<br>");

            for(let i in arguments){
                document.write(i + ". " +arguments[i] + "<br>");
            }
        this.x = (year == "" || year == null) ? 0 : parseInt(year); 
        this.y = (model == "" || model == null) ? "no model provided!" : model;
    }
}

//let car1model = prompt("Enter model");
//let car1year = prompt("Enter year");
let car1model = "Peugeot";
let car1year = 2013;

// allowed to pass arguments that are not defined in the constructor
let car = new Car(car1year, car1model, 5, 6); 

document.write("Year: " + car.x + "<br> Model: " + car.y);