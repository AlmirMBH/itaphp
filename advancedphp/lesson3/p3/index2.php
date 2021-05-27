<?php
$poruka="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajlovi</title>
</head>
<body>
    <h1>Upload datoteka sa proverama</h1>
    <form action="index2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="dat"><br><br>
        <button>Prebaci datoteku</button>
    </form>
    <hr>
    <?php
    //phpinfo();
    if(isset($_FILES['dat']))
    {
        //print_r($_FILES['dat']);
        $ime="uploads/".$_FILES['dat']['name'];
        $tmp=$_FILES['dat']['tmp_name'];
        $greska=$_FILES['dat']['error'];
        $velicina=$_FILES['dat']['size'];
        if(!file_exists($ime))
        {
            if($velicina<2000000)
            {
                $dozvoljeno=array("pdf", "sql");
                if(in_array(pathinfo($ime, PATHINFO_EXTENSION), $dozvoljeno))
                {
                    if(@move_uploaded_file($tmp, $ime))
                        $poruka= "Uspesan upload na server";
                    else
                        $poruka= "NEUSPESAN upload na server";
                }
                else
                    $poruka ="Datoteka nije odgovarajuca";
                
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