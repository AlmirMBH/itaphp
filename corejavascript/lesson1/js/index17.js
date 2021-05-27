function proveri(){
    let a=document.getElementById('korime');
    let slika=document.getElementById('slika');
    if(a.value.length<6) slika.style.display="";
    else slika.style.display="none";
}