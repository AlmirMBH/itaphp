<?php
$poruka="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multiple Upload slika sa proverama i generisanjem imena</h1>
    <form action="index6.php" method="post" enctype="multipart/form-data">
        <input type="file" name="dat[]" multiple><br><br>
        <button>Prebaci datoteku</button>
    </form>
    <hr>
    <?php
    //phpinfo();
    if(isset($_FILES['dat']))
    {
        //print_r($_FILES['dat']);
        for($i=0;$i<count($_FILES['dat']['name']);$i++)
        {
            //echo $_FILES['dat']['name'][$i]."<br>";
            //$ime="uploads/".$_FILES['dat']['name'];
            $ime="uploads/".microtime(true).".".pathinfo($_FILES['dat']['name'][$i], PATHINFO_EXTENSION);
            $tmp=$_FILES['dat']['tmp_name'][$i];
            $greska=$_FILES['dat']['error'][$i];
            $velicina=$_FILES['dat']['size'][$i];
            if(!file_exists($ime))
            {
                if($velicina<2000000)
                {
                    $dozvoljeno=array("jpg", "jpeg", "webp", "gif", "png", "bmp");
                    if(in_array(pathinfo($ime, PATHINFO_EXTENSION), $dozvoljeno))
                    {
                        $slika=getimagesize($tmp);
                        var_dump($slika);
                        if($slika)
                        {
                            //print_r($slika);
                            if($slika[0]<=1200 and $slika[1]<=768)
                            {
                                if(@move_uploaded_file($tmp, $ime))
                                    $poruka.= "Uspesan upload na server<br>";
                                else
                                    $poruka.= "NEUSPESAN upload na server<br>";
                            }
                            else
                                $poruka.="Rezolucija slike je veca od 1200x768<br>";
                        }
                        else
                            $poruka.="Datoteka definitivno nije slika<br>";
                    }
                    else
                        $poruka .="Datoteka nije slika<br>";
                    
                }
                else
                    $poruka.="Datoteka je prevelika<br>";
                
            }
            else
                $poruka.="Datoteka sa istim imenom vec postoji<br>";
        }
        
    }
    else
        $poruka= "Dobro dosli na stranicu!!!<br>";
        
    ?>
  <div><?= $poruka?></div>
</body>
</html>