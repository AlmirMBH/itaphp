<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>COOKIE login</h1>
    <form action="clogin.php" method="post">
        <input type="text" name="korime"><br><br>
        <input type="text" name="lozinka"><br><br>
        <button>Prijavi se</button>
    </form>

    <?php
    if(isset($_POST['korime']) and isset($_POST['lozinka']))
    {
        $korime=$_POST['korime'];
        $lozinka=$_POST['lozinka'];
        if($korime!="" and $lozinka!="")
        {
            setcookie("id", "1", time()+600,"/");
            setcookie("ime", "Bosko Bogojevic", time()+600,"/");
            setcookie("status", "Administrator", time()+600,"/");
            echo "Uspesno ste se prijavili";
        }
        else
            echo "Svi podaci su obavezni";
    }
    else
        echo "Dobro dosli";
    ?>
</body>
</html>