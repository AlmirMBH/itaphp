function cuboidSurface(){
    let length = document.querySelector("#length").value;
    let width = document.querySelector("#width").value;
    let height = document.querySelector("#height").value;
    let message = document.querySelector("#message");

    a = parseInt(length);
    b = parseInt(width);
    c = parseInt(height);

    calculateCuboidSurface(a, b, c);
}


function calculateCuboidSurface(a, b, c){
    message.innerHTML = "";
    message.innerHTML = "The surface of the cuboid is: " + 2*(a*b + a*c + b*c) + " mm";
}