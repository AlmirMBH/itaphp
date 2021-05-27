function execute(){
    let elements = document.getElementsByTagName("p");
    elements[0].style.color = "red";
    elements[1].innerHTML = "Lorem ipsum new";
    elements[2].style.color = "blue";
    elements[3].style.border = "2px solid purple";
    elements[3].style.width = "300px";
    elements[3].style.padding = "3px";

    let butt = document.getElementsByTagName("button");
    //butt[0].style.backgroundColour = "Black"; // cannot be accepted
    butt[0].innerHTML = "Unclick";
}


function executeName(){
    let par = document.getElementsByName("par");
    let sect = document.getElementsByName("sect");
    //alert("Paragraphs: " + par.length + "\n Sections: " + sect.length);

    for(i=0; i<par.length; i++){
        par[i].style.color = "red";
    }

    for(i=0; i<sect.length; i++){
        // sect[i].style.backgroundColor = "pink";
        // sect[i].style.margin = "5px";
        // sect[i].style.padding = "5px";
        sect[i].style.cssText = "background-color:pink; margin:5px; padding:5px";
    }
}


function executeClassName(){
    let classN = document.getElementsByClassName("class1");
    let classM = document.getElementsByClassName("class2");

    for(i=0; i<classN.length; i++){
        classN[i].style.cssText = "color: red; margin:2px; padding: 2px; border: 3px solid red";
        classN[i].innerHTML = "This is a random text " + classN[i].tagName; // writes the name of a tag
    }

    for(i=0; i<classM.length; i++){
        classM[i].style.cssText = "color: red; margin:15px; padding: 2px; border: 3px dashed red; width: 400px";

        if(classM[i].tagName == "DIV"){
            classM[i].innerHTML = "This is a " + classM[i].tagName;
        }else{
            classM[i].innerHTML = "This is a random text "; // writes the name of a tag        
        }
        
    }
}
