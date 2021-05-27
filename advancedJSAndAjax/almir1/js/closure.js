class Calculator{
    x;
    y;
    // addingValues(){
    //     return this.x + this.y;    
    // }

    constructor(number1, number2){         
        this.x = (number1 == "" || number1 == null) ? 0 : parseInt(number1); 
        this.y = (number2 == "" || number2 == null) ? 0 : parseInt(number2);
        this.addingValues = function(){
            return this.x + this.y;    
        }
    }
}

let number1 = 7;
let number2 = 3;

let calculator = new Calculator(number1, number2);
document.write(number1 + " + " + number2 + " = " + calculator.addingValues() + "<br>");