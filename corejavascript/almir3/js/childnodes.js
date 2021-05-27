function executeNode(){
    //let div = document.getElementById("wrapper");
    //let par = div.childNodes; // issue! empty spaces between elements count as elements

    let par = document.querySelectorAll("div > p");
    for(i = 0; i <par.length; i++){
        if(par[i].tagName){
            par[i].style.color = "blue";
        }
    }
    //alert(par.length);
}