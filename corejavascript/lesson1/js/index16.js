function provera(){
    let a=document.getElementById('korime');
    let b=document.getElementById('odgovor');
    if(a.value==""){
        b.innerHTML="<span style='color:red'>Morate uneti korisnicko ime</span>";
        return false;
    }
    b.innerHTML="<span style='color:green'>Vase korisnicko ime je: "+a.value+"</span>";
}

function proveriDuzinu(){
    let a=document.getElementById('korime2');
    if(a.value.length<6) a.style.color='red';
    else a.style.color='green';
}