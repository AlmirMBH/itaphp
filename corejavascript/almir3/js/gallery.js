(function myFunction(msg){
    alert(msg);
})("Hello from self-invoking function!");

let gallery = document.querySelector("#gallery");
gallery.style.cssText = "width: 500px; height: 400px; background-color: lightgray";

let currentImage = 0;

let featured = document.createElement("img");
featured.src = images[currentImage];
featured.width = "400";
featured.style.marginTop = "30px";
featured.style.marginBottom = "20px";
gallery.appendChild(featured);
gallery.appendChild(document.createElement("br"));

let timer = setInterval(changeImage, 2000);

for(i = 0; i < images.length; i++){
    let thumbnail = document.createElement("img");
    thumbnail.src = images[i];
    thumbnail.height = "50";
    thumbnail.style.margin = "5px";
    thumbnail.style.cursor = "pointer";
    thumbnail.setAttribute("data-number", i);
        thumbnail.onmouseover = function(){
            this.height = this.height+10;
        }
        thumbnail.onmouseleave = function(){
            this.height = this.height-10;
        }
        thumbnail.onclick = function(){
            clearInterval(timer);
            featured.src = this.src;
            currentImage = this.getAttribute("data-number");
            timer = setInterval(changeImage, 2000);
        }
    gallery.appendChild(thumbnail);    
}


    let stop = document.createElement("button");
    stop.innerHTML = "Stop slider";
    stop.onclick = function(){
        clearInterval(timer);
    }
    gallery.appendChild(stop);

    let start = document.createElement("button");
    start.innerHTML = "Start slider";
    start.onclick = function(){
        setInterval(changeImage, 2000);
    }
    gallery.appendChild(start);

function changeImage(){
    currentImage++;        
        if(currentImage == images.length){        
            currentImage=0;        
        }
    featured.src = images[currentImage];    
}
