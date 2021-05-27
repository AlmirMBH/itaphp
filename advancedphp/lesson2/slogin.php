<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SESSION login</h1>
    <form action="slogin.php" method="post">
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
            $_SESSION['id']="1";
            $_SESSION['ime']="Bosko Bogojevic";
            $_SESSION['status']="Administrator";
            //echo "Uspesno ste se prijavili";
            header("location: sstranica.php");
        }
        else
            echo "Svi podaci su obavezni";
    }
    else
        echo "Dobro dosli";
    ?>
</body>
</html>