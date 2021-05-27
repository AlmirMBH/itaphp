function pokreniAlert(){
    alert("Kliknuli ste na dugme Alert");
}

function pokreniConfirm(){
    let a;
    let div=document.querySelector("#odgovor");
    a=confirm("Da li ste sigurni?");
    console.log("Korisnik je izabrao: " + a);
    if(a==true) 
        div.innerHTML="<span style='color:green'>Bravo</span>";
    else
        div.innerHTML="<span style='color:red'>Steta!!!!</span>";
}

function pokreniPrompt(){
    let a;
    let div=document.querySelector("#odgovor");
    a=prompt("Unesite Vase ime", "Ovde unesite Vase ime");
    console.log("Korisnik je izabrao: " + a);
    if(a==null) div.innerHTML="<span style='color:red'>Kliknuli ste na CANCEL</span>";
    else if(a=="")
    {
        div.innerHTML="<span style='color:green'>Kliknuli ste na OK</span><br>";
        div.innerHTML+="<span style='color:blue'>Niste uneli nikakv podatak</span>";
    }
    else
    {
        div.innerHTML="<span style='color:blue'>Kliknuli ste na OK</span><br>";
        div.innerHTML+="<span style='color:blue'>Uneli ste: " + a + "</span>";
    }
}