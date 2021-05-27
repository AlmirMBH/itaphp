
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
    <?php
        $db=mysqli_connect("localhost", "root", "", "g2");
        mysqli_query($db, "SET NAMES utf8");
        $sql="SELECT * FROM korisnici order by id ASC";
        $rez=mysqli_query($db, $sql);
        while($red=mysqli_fetch_object($rez))
            echo "<div class='korisnici' data-id='{$red->id}' data-ime='{$red->ime}' data-prezime='{$red->prezime}' data-komentar='{$red->komentar}' data-status='{$red->status}'>{$red->id}: {$red->ime} {$red->prezime}</div>";

    ?>
    <hr>
    <div id="odgovor">Ovde idu neke informacije</div>
    <input type="text" id="id" placeholder="Unesite id" disabled><br><br>
    <input type="text" id="ime" placeholder="Unesite ime"><br><br>
    <input type="text" id="prezime" placeholder="Unesite prezime"><br><br>
    <input type="text" id="komentar" placeholder="Unesite komentar"><br><br>
    <input type="text" id="status" placeholder="Unesite status"><br><br>
    <button id="d1">Ocisti</button> <button id="d2">Snimi</button>
</body>
</html>
<script>
$(function(){
    //alert("dfsdfsd");
    $(".korisnici").click(function(){
        let div=$("#odgovor");
        let ime=$(this).data("ime");
        let id=$(this).data("id");
        let prezime=$(this).data("prezime");
        let komentar=$(this).data("komentar");
        let status=$(this).data("status");
        div.html(id+" "+ime+" "+ prezime+" "+komentar+" "+status);
        $("#ime").val(ime);
        $("#id").val(id);
        $("#prezime").val(prezime);
        $("#komentar").val(komentar);
        $("#status").val(status);
    })
    $("#d1").click(function(){
        $("input").val("");
    })
})

</script>