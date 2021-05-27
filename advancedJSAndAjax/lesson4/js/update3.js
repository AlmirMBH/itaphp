$(function(){
    //alert("dfsdfsd");
    popuniSveKorisnike();
    
    $("#d1").click(function(){
       ocistiSve();
    })
    $("#d3").click(function(){
        if($("#id").val()==""){
            alert("Niste izabrali korisnika za brisanje");
            return false;
        }
        if(!confirm("Da li ste sigurni da zelite da obrisete korisnika?")) return false;
        $.post("ajax/snimikorisnike3.php?opcija=delete", {id:$("#id").val()}, function(response){
            $("#odgovor").html(response);
            popuniSveKorisnike();
            ocistiSve();
        })
    })
    $("#d2").click(function(){
        let ime= $("#ime").val();
        let id=$("#id").val();
        let prezime=$("#prezime").val();
        let komentar=$("#komentar").val();
        let status=$("#status").val();
        let email=$("#email").val();
        if(id=="")
        {
            $.post("ajax/snimikorisnike3.php?opcija=insert", {ime:ime, prezime:prezime, komentar:komentar, status:status, email:email}, function(response){
                $("#odgovor").html(response);
                popuniSveKorisnike();
                ocistiSve();
            })
        }
        else
        {
            $.post("ajax/snimikorisnike3.php?opcija=update", {id:id, ime:ime, prezime:prezime, komentar:komentar, status:status, email:email}, function(response){
                $("#odgovor").html(response);
                popuniSveKorisnike();
                ocistiSve();
            })
        }
    })
})
function popuniSveKorisnike(){
    $.get("ajax/snimikorisnike3.php?opcija=select", function(response){
        let obj=JSON.parse(response);
        let str="";
        for(el of obj)
            str+="<div class='korisnici' data-id='"+el.id+"' data-prezime='"+el.prezime+"' data-ime='"+el.ime+"' data-email='"+el.email+"' data-komentar='"+el.komentar+"' data-status='"+el.status+"'>"+el.id+": "+el.ime+" "+el.prezime+"</div>";
        $("#sviKorisnici").html(str);
        $(".korisnici").click(function(){
            $("#ime").val($(this).data("ime"));
            $("#id").val($(this).data("id"));
            $("#prezime").val($(this).data("prezime"));
            $("#komentar").val($(this).data("komentar"));
            $("#status").val($(this).data("status"));
            $("#email").val($(this).data("email"));
            $("#email").attr("disabled", "disabled");
        })
    });
}
function ocistiSve(){
    $("input").val("");
    $("#status").val("0");
    $("#email").removeAttr("disabled");
}