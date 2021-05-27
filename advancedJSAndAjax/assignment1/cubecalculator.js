function Cube(side){
            this._side = side;            

            this.volume = function(){
                return this._side * this._side * this._side;
            }

            this.sides = function(){
                return 12 * this._side;
            }
        }
        

function calculateVolume(object){
    let obj = object.getAttribute("id");
    let boxVolume = document.getElementById("box-volume");
    let diceVolume = document.getElementById("dice-volume");            

        if(obj == "box"){
            let box = new Cube(object.value);  
            boxVolume.innerHTML = box.volume();              
        }else if (obj == "dice"){
            let dice = new Cube(object.value);
            diceVolume.innerHTML = dice.volume();
        }                       
}


function calculateSidesLength(object){
    let obj = object.getAttribute("id");
    let boxSides = document.getElementById("box-sides");
    let diceSides = document.getElementById("dice-sides");            

        if(obj == "box"){
            let box = new Cube(object.value);  
            boxSides.innerHTML = box.sides();              
        }else if (obj == "dice"){
            let dice = new Cube(object.value);
            diceSides.innerHTML = dice.sides();
        }                       
}