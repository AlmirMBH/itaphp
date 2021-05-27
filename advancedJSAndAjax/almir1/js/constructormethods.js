class Calculator{
    
    constructor(number1, number2){         
        this.x = (number1 == "" || number1 == null) ? 0 : parseInt(number1); 
        this.y = (number2 == "" || number2 == null) ? 0 : parseInt(number2);        
        this.addingValues = function(){
            return this.x + this.y;
        }

        this.subtractingValues = function(){
            return this.x - this.y;
        }

        this.multiplyingValues = function(){
            return this.x * this.y;
        }

        this.dividingValues = function(){
            if(this.y == 0){
                return "You are not allowed to divide numbers by zero!";
            }else{
                return this.x / this.y;
            }            
        }
    }
}

let number1 = 7;
let number2 = 3;
let calculator = new Calculator(number1, number2);
document.write(number1 + " + " + number2 + " = " + calculator.addingValues() + "<br>");
document.write(number1 + " - " + number2 + " = " + calculator.subtractingValues() + "<br>");
document.write(number1 + " * " + number2 + " = " + calculator.multiplyingValues() + "<br>");
document.write(number1 + " / " + number2 + " = " + calculator.dividingValues() + "<br>");
