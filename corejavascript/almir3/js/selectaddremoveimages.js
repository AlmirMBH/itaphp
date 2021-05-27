
function addImage(){
    let img = document.createElement("img");
    img.src = "images/1.jpg";
    img.alt = "image";
    img.style.width = "200px";
    img.style.margin = "5px";    
    img.onclick = function(){
        if(this.getAttribute("data-selected")){
            this.style.border = "";
            this.removeAttribute("data-selected");
        }else{
            this.style.border = "2px solid blue";
            this.setAttribute("data-selected", "true");
        }        
    }
    document.body.appendChild(img);
}


function deleteImage(){
    let img = document.querySelectorAll("[data-selected]");
    for(i = 0; i < img.length; i++){        
            document.body.removeChild(img[i]);        
    }    
}