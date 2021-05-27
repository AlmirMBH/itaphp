function moveText(){
    //let text = document.getElementById('text');
    //let div = document.getElementById('dropdown');
    //let targetDiv = document.getElementById(div.value);
    let text = document.querySelector('#text');
    let div = document.querySelector('#dropdown');
    let targetDiv = document.querySelector('#' + div.value);
    targetDiv.innerHTML = text.value;   
}



function changeFunc(car){
        let message = document.querySelector('#message');
            message.innerHTML = car; //car.value if object received            
            alert(car + ' is selected.');
        }