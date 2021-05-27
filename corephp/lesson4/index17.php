<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment - Manipulacija nizovima</title>
</head>
<body>
    
<?php 

$array = array(
    
    array('id' => 1, 'fname' => 'Peter', 'lname' => 'Andersen', 'email' => 'peter@gmail.com' ),
    array('id' => 2, 'fname' => 'John', 'lname' => 'Miller', 'email' => 'john@gmail.com' ),
    array('id' => 3, 'fname' => 'Thomas', 'lname' => 'Swift', 'email' => 'thomas@gmail.com' ),
    
);

echo "<div style='text-align:center'><h1>Assignment - Manipulacija nizovima</h1></div>";

echo "<div style='margin-left:100px; margin-right:100px; margin-top:50px'>
      <table border='1' style='border-collapse:collapse; text-align:center'>";

echo "<tr> <th>id</th> <th>fname</th> <th>lname</th> <th>email</th> </tr>";

    foreach($array as $person){
        echo "<tr>  
                <td style='width:30%'>{$person['id']}</td> 
                <td style='width:30%'>{$person['fname']}</td> 
                <td style='width:30%'>{$person['lname']}</td> 
                <td style='width:30%'>{$person['email']}</td>
            </tr>";
    }
    
echo "</table></div>";

?>



</body>
</html>