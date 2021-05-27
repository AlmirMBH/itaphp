<?php $db = mysqli_connect("localhost", "root", "", "final_project_oopphp"); 
    mysqli_query($db, "SET NAMES utf-8");

    $query = "SELECT * FROM users ORDER BY id ASC";
    $users = mysqli_query($db, $query);

        while($user = mysqli_fetch_object($users)){
            echo "<div class='users' data-id='{$user->id}'
                                     data-name='{$user->name}'
                                     data-email='{$user->email}'
                                     data-username='{$user->username}'
                                     data-password='{$user->password}'
                                     data-role='{$user->role}'
                                     data-status='{$user->status}'>
                                        {$user->id}. {$user->name} {$user->username}
                                     </div>";
        }
?>