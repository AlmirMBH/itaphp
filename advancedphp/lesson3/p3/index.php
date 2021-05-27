<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload datoteka</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="dat"><br><br>
        <button>Prebaci sliku</button>
    </form>
    <hr>
    <?php
    //phpinfo();
    if(isset($_FILES['dat']))
    {
        //print_r($_FILES['dat']);
        $ime="uploadsdfsdfsdfsdf/".$_FILES['dat']['name'];
        $tmp=$_FILES['dat']['tmp_name'];
        $greska=$_FILES['dat']['error'];
        $velicina=$_FILES['dat']['size'];
        if(@move_uploaded_file($tmp, $ime))
            echo "Uspesan upload na server";
        else
            echo "NEUSPESAN upload na server";
    }
    else
        echo "Dobro dosli na stranicu!!!";
        
    ?>
</body>
</html>