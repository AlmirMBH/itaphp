<?php
$poruka="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload slike sa generisanjem imena</title>
</head>
<body>
    <h1>Upload slika sa provjerama, generisanjem imena i visestrukim porukama</h1>
    <form action="index5.php" method="post" enctype="multipart/form-data">
        <input type="file" name="dat" accept="image/png, image/jpeg"><br><br>
        <button>Prebaci datoteku</button>
    </form>
    <hr>
    <?php
    //phpinfo();
    if(isset($_FILES['dat']['name']) and $_FILES['dat']['name']!="")
    {
        //print_r($_FILES['dat']);
        //$ime="uploads/".$_FILES['dat']['name'];
        $ime="uploads/".microtime(true).".".pathinfo($_FILES['dat']['name'], PATHINFO_EXTENSION);
        $tmp=$_FILES['dat']['tmp_name'];
        $greska=$_FILES['dat']['error'];
        $velicina=$_FILES['dat']['size'];
        if(!file_exists($ime))
        {
            if($velicina<2000000)
            {
                $dozvoljeno=array("jpg", "jpeg", "webp", "gif", "png", "bmp");
                if(in_array(pathinfo($ime, PATHINFO_EXTENSION), $dozvoljeno))
                {
                    $slika=getimagesize($tmp);
                    if($slika)
                    {
                        //print_r($slika);
                        if($slika[0]<=1200 and $slika[1]<=768)
                        {
                             if(@move_uploaded_file($tmp, $ime))
                                $poruka= "Uspesan upload na server";
                            else
                                $poruka= "NEUSPESAN upload na server";
                        }
                       else
                            $poruka="Rezolucija slike je veca od 1200x768";
                    }
                    else
                        $poruka="Datoteka definitivno nije slika";
                }
                else
                    $poruka ="Datoteka nije slika";
                
            }
            else
                $poruka="Datoteka je prevelika";
             
        }
       else
        $poruka="Datoteka sa istim imenom vec postoji";
    }
    else
        $poruka= "Dobro dosli na stranicu!!!";
        
    ?>
  <div><?= $poruka?></div>
</body>
</html>