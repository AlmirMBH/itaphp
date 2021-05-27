let persons = [
    {name: "Almir", surname: "Mustafic", email: "almir@almir.ba", status: "admin"},
    {name: "Samer", surname: "Sacic", email: "samer@samer.ba", status: "user"},
    {name: "Seha", surname: "Zek", email: "seha@seha.ba", status: "user"},
    {name: "Moa", surname: "Jusupovic", email: "moa@moa.ba", status: "user"},
    {name: "Nadira", surname: "Puskar", email: "nadira@nadira.ba", status: "user"},
];

function create(){
    let parent = document.querySelector("#message");
    let view = document.querySelector("#view");

        for(i = 0; i<persons.length; i++){
            div = document.createElement("div");
            div.setAttribute("data-name", persons[i].name);
            div.setAttribute("data-surname", persons[i].surname);
            div.setAttribute("data-email", persons[i].email);
            div.setAttribute("data-status", persons[i].status);
            div.innerHTML = (i+1) + ". " + persons[i].name + " " + persons[i].surname;// + " " + persons[i].email + " " + persons[i].status;
                div.onclick = function(){
                    //alert(this.getAttribute("data-name"));
                    view.innerHTML += this.getAttribute("data-name") + " " + 
                                    this.getAttribute("data-surname") + " | " + 
                                    this.getAttribute("data-email") + " | " + 
                                    this.getAttribute("data-status") + "<br>";
                }

                div.onmouseenter = function(){
                    this.style.cssText = "background-color: grey; padding:2px; margin: 2px; width:300px";
                    this.style.cursor = "pointer";
                }

                div.onmouseout = function(){
                    this.style.cssText = "";
                }
            parent.appendChild(div);
        }
}