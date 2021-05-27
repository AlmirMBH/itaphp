<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .users{
            border: 1px solid black;
            width: 300px;
            padding: 2px;
            margin: 2px;
            cursor: pointer;
            margin-left: 500px;
        }

        .message{
            margin-left: 600px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .users:hover{
            background-color: gray;
        }

        .wrapper{
            margin-left: 570px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Update</h1>
    <form action=""></form> 

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
    <hr>
    <div id="message" class="message mt-3 mb-5">Info to update</div>
    <div class="wrapper mt-5">
        <!-- a user cannot be allowed to enter id, just to see it, use disabled -->
        <input type="text" id="id" placeholder="Enter ID" disabled><br>
        <input type="text" id="name" placeholder="Enter name"><br>
        <input type="text" id="email" placeholder="Enter email"><br>
        <input type="text" id="username" placeholder="Enter username"><br>
        <input type="text" id="password" placeholder="Enter password"><br>
        <input type="text" id="role" placeholder="Enter role"><br>
        <input type="text" id="status" placeholder="Enter status"><br>
        <button id="btn1">Clear</button>
        <button id="btn2">Save</button>
    </div>
    
</body>
</html>
<script>
    $(function(){
        $(".users").click(function(){
            //let message = $("#message");
            let id = $(this).data("id");
            let name = $(this).data("name");
            let email = $(this).data("email");
            let username = $(this).data("username");
            let password = $(this).data("password");
            let role = $(this).data("role");
            let status = $(this).data("status");

            //message.html(id + " " + name + " " + username + " " + status);

            $("#id").val(id);
            $("#name").val(name);
            $("#email").val(email);
            $("#username").val(username);
            $("#password").val(password);
            $("#role").val(role);
            $("#status").val(status);
        });

        $("#btn1").click(function(){
                // $("#id").val("");
                // $("#name").val("");
                // $("#email").val("");
                // $("#username").val("");
                // $("#password").val("");
                // $("#role").val("");
                // $("#status").val("");
                $("input").val("");
            });
    })
</script>