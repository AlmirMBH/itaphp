function execute(){
    let div = document.querySelectorAll("div");
    div[0].style.cssText = "color: red; border: 1px solid red; padding: 2px; width: 300px";

    let class1 = document.querySelectorAll(".class1");
    class1[0].style.cssText = "color: green; border: 1px solid green; padding: 2px; width: 300px";

    let par = document.querySelectorAll("[data-name=par]"); // or take all: document.querySelectorAll("[name]");
    par[0].style.cssText = "color: blue; border: 1px solid blue; padding: 2px; width: 300px";

    let elements = document.querySelectorAll("[data-name]");

        for(i = 1; i < elements.length; i++ ){
            elements[i].style.color = "green";
        }
    
}