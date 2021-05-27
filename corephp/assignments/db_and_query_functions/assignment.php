<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require('database.php');?>

<!-- ADD PHONE FORM -->
<h3>Add phone</h3>
<form method="POST" action="#">
    <input type="text" name="name" placeholder=" name"><br>
    <input type="text" name="description" placeholder=" description"><br>
    <input type="text" name="price" placeholder=" price"><br>
    <input type="submit" name="insert" value="Save">
</form>
<hr>

<?php 

function db_query($query){
    $connection = db_connect();
    $result = mysqli_query($connection, $query);
    return $result;
}


function db_select($query){
    $rows = array();
    $result = db_query($query);
        if($result === false){
            return false;
        }
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
}

function db_insert($query){
    $result = db_query($query);
        if($result === false){
            return false;
        }
}


// list phones from DB
$query = "SELECT * FROM phones where name LIKE '%Xiaomi%'";
$rows = db_select($query);
    if($rows === false){
        die('Error');
    }else{
        foreach($rows as $row){
            foreach($row as $key => $value){
                echo ucfirst($key) . ": " . $value . "<br>";
                
            }
            echo "-----------------------------------------<br>";
        }
    }

// add phone to DB
if( isset($_POST['insert'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $query = "INSERT INTO phones (name, description, price) values('{$name}', '{$description}', '{$price}')";
    $addedphone = db_insert($query);
        if($addedphone === TRUE){
        echo "Phone added to your shop";
    }else{
        echo "Phone has not been added to your shop";
    }
    }

//mysqli_close($connection);

?>


    
</body>
</html>


