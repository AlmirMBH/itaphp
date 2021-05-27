let i = 2;
function addFile(){
    let form = document.querySelector("#form");
    let file = document.createElement("input");
    file.type = "file";
    file.name = "image"+i;
    file.id = file.name; 
    form.appendChild(file);
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));
    i++;
}