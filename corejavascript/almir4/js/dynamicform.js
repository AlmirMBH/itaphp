function execute(){

    if(document.querySelector("#basic-data")){
        return false;
    }

    let form = document.createElement("form");
    form.action = "dynamicform.html";
    form.method = "post"; // form has file upload; use get to test the form
    form.id = "basic-data";
    form.enctype = "multipart/form-data";
    form.style.cssText = "border: 4px solid blue; padding: 40px; margin: 40px; width: 200px";

    let name = document.createElement("input");
    name.type = "text";
    name.id = "name";
    name.name = "name";
    name.placeholder = "Enter name";

    let score = document.createElement("input");
    score.type = "number";
    score.id = "score";
    score.name = "score";
    score.min = 10;
    score.max = 50;
    score.step = 10;
    score.value = 20;
    score.placeholder = "Enter score";

    let comment = document.createElement("textarea");    
    comment.id = "comment";
    comment.name = "comment";
    comment.cols = 20;
    comment.rows = 5;
    comment.placeholder = "Enter comment";

    let date = document.createElement("input");
    date.type = "date";
    date.id = "date";
    date.name = "date";
    date.value = "2021-03-03";

    let select = document.createElement("select");
    select.id = "select";
    select.name = "select";
    let option1 = document.createElement("option");
    option1.value = "1";
    option1.innerHTML = "Option 1";
    let option2 = document.createElement("option");
    option2.value = "2";
    option2.innerHTML = "Option 2";
    select.appendChild(new Option("-- Select --", "0")); // simpler way of adding options
    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(new Option("Option 3", "3")); 

    let radiobutton1 = document.createElement("input");
    radiobutton1.type = "radio";
    radiobutton1.name = "radiogroup";
    radiobutton1.id = "radio1";
    radiobutton1.value = "m";
    radiobutton1.checked = "true";
    let radiobutton2 = document.createElement("input");
    radiobutton2.type = "radio";
    radiobutton2.name = "radiogroup";
    radiobutton2.id = "radio2";
    radiobutton2.value = "f";
    let radiobutton3 = document.createElement("input");
    radiobutton3.type = "radio";
    radiobutton3.name = "radiogroup";
    radiobutton3.id = "radio3";
    radiobutton3.value = "n";
    let radioLabel1 = document.createElement("label");
    radioLabel1.innerHTML = " Male";
    let radioLabel2 = document.createElement("label");
    radioLabel2.innerHTML = " Female";
    let radioLabel3 = document.createElement("label");
    radioLabel3.innerHTML = " Neuter";

    let file = document.createElement("input");
    file.type = "file";
    file.name = "file";
    file.id = "file";

    let checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.id = "remember";
    checkbox.name = "remember";    
    checkbox.checked = "true";
    checkbox.value = "checked";
    let checkboxLabel = document.createElement("label");
    checkboxLabel.innerHTML = " Remember me on this PC";

    let button = document.createElement("button");
    button.type = "submit";
    button.innerHTML = "Submit data";

    // add all elements to the form
    form.appendChild(name);
    form.appendChild(document.createElement("br"));
    form.appendChild(score);
    form.appendChild(document.createElement("br"));
    form.appendChild(comment);
    form.appendChild(document.createElement("br"));
    form.appendChild(date);
    form.appendChild(document.createElement("br"));
    form.appendChild(select);
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));
    form.appendChild(radiobutton1);
    form.appendChild(radioLabel1);
    form.appendChild(radiobutton2);
    form.appendChild(radioLabel2);
    form.appendChild(radiobutton3);
    form.appendChild(radioLabel3);
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));
    form.appendChild(file);
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));
    form.appendChild(checkbox);
    form.appendChild(checkboxLabel);
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));
    form.appendChild(button); 

    // add form to the form placeholder
    let formPlaceholder = document.querySelector("#form");   
    formPlaceholder.appendChild(form);
    
}