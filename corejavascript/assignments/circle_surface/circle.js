function cradius(id){
    const PI = 3.14;
    let radius = document.querySelector("#" + id);
    let circSurface = Math.pow(radius.value, 2) * PI;

    let message = document.querySelector("#message");
    message.innerHTML = "<p style='color:red; font-size:20px'>The surface of the cirle is: " + circSurface + " cm</p>";
}

