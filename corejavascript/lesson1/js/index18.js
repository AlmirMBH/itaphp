function prebaci(){
    //let a=document.getElementById('tekst');
    let a=document.querySelector('#tekst');
    //let b=document.getElementById('kojidiv');
    let b=document.querySelector('#kojidiv');
    //let c=document.getElementById(b.value);
    let c=document.querySelector('#'+b.value);
    c.innerHTML=a.value;
}