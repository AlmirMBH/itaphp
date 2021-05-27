<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .korisnici{
            border:1px solid black;
            width:200px;
            padding: 2px;
            margin: 2px;
            cursor: pointer;
        }
        .korisnici:hover{
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h1>Update</h1>
    <div id="sviKorisnici"></div>
    <hr>
    
    <input type="text" id="id" placeholder="Unesite id" disabled><br><br>
    <input type="text" id="ime" placeholder="Unesite ime"><br><br>
    <input type="text" id="prezime" placeholder="Unesite prezime"><br><br>
    <input type="text" id="komentar" placeholder="Unesite komentar"><br><br>
    <input type="text" id="status" placeholder="Unesite status"><br><br>
    <button id="d1">Ocisti</button> <button id="d2">Snimi</button>
    <hr>
    <div id="odgovor"></div>
</body>
</html>
<script>
$(function(){
    //alert("dfsdfsd");
    $.get("popuniKorisnike3.php", function(response){
        let obj=JSON.parse(response);
        let str="";
        for(el of obj)
            str+="<div class='korisnici' data-id='"+el.id+"' data-prezime='"+el.prezime+"' data-ime='"+el.ime+"' data-komentar='"+el.komentar+"' data-status='"+el.status+"'>"+el.id+": "+el.ime+" "+el.prezime+"</div>";
        $("#sviKorisnici").html(str);
        $(".korisnici").click(function(){
            $("#ime").val($(this).data("ime"));
            $("#id").val($(this).data("id"));
            $("#prezime").val($(this).data("prezime"));
            $("#komentar").val($(this).data("komentar"));
            $("#status").val($(this).data("status"));
        })
    });
    
    $("#d1").click(function(){
        $("input").val("");
    })
    $("#d2").click(function(){
        let ime= $("#ime").val();
        let id=$("#id").val();
        let prezime=$("#prezime").val();
        let komentar=$("#komentar").val();
        let status=$("#status").val();
        if(id=="")
        {

        }
        else
        {
            $.post("snimikorisnike3.php?opcija=update", {id:id, ime:ime, prezime:prezime, komentar:komentar, status:status}, function(response){
                $("#odgovor").html(response);
            })
        }
    })
})

</script>