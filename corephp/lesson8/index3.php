<?php
require_once("funkcije.php");
$db=konekcija();
if(!$db)exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="index3.php" method="post">
    <input type="text" name="email" placeholder="Unesite email"><br><br>
    <input type="password" name="lozinka" placeholder="Unesite lozinku"><br><br>
    <button>Prijavite se</button>
    </form>
    <hr>
    <?php
    if(isset($_POST['email']) and isset($_POST['lozinka']))
    {
        $email=$_POST['email'];
        $lozinka=$_POST['lozinka'];
        if($email!="" and $lozinka!="")
        {
            if(validanString($email) and validanString($lozinka))
            {
                $upit="SELECT * FROM korisnici WHERE email='{$email}'";
                $rez=mysqli_query($db, $upit);
                if(mysqli_num_rows($rez)==1)
                {
                    $red=mysqli_fetch_assoc($rez);
                    if($red['aktivan']==1)
                    {
                        if($lozinka==$red['lozinka'])
                        {
                            echo "Prijavljeni ste kao korisnik: {$red['ime']} {$red['prezime']} ({$red['status']})<br>";
                        }
                        else
                            echo "Pogresna lozinka za korisnika";
                    }
                    else
                        echo "Korisnik '$email' postoji ali je neaktivan<br>".$red['komentar'];
                }
                else
                    echo "Korisnik '$email' ne postoji!!!!";
            }
            else
                echo "Podaci sadrze nedozvoljene karaktere!!!!";
        }
        else
            echo "Svi podaci su obavezni!!!!";
    }
    else
        echo "Dobro dosli na stranicu za logovanje!!!!";
    ?>
</body>
</html>