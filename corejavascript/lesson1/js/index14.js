function dosaoMis(a){
    a.style.backgroundColor='red';
}

function otisaoMis(a){
    a.style.backgroundColor='white';
}

function klik(obj){
    let a=obj.innerHTML;
    document.getElementById('odgovor').innerHTML=a;
}