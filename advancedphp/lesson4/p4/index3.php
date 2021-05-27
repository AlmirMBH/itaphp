<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Citanje iz datoteke red po red do NULL podatka</h1>
    <?php
        $ime="index3.php";
        if(file_exists($ime))
        {
           $f=fopen($ime, "r");
           $i=1;
           while(!feof($f))
           {
               $red=fgets($f);
               echo $i.": ".$red."<br>";
               $i++;
           }
           fclose($f);
        }
        else
            echo "Ne postoji datoteka";
        
    ?>
    <hr>
   
    
</body>
</html>