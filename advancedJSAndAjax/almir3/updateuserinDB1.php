<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body{
            width: 960px;
            margin: 0px auto;
        }
        h1{
            text-align: center;
        }
        .users{
            border: 1px solid black;
            width: 300px;
            padding: 2px;
            margin: 2px;
            cursor: pointer;            
        }

        .message{
            margin-left: 330px;
            margin-top: 20px;
            margin-bottom: 20px;
            
        }
        .users:hover{
            background-color: gray;
        }

        .wrapper{
            margin-left: 410px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
    <h1>Update</h1>
    <form action=""></form> 
    <div id="message" class="message mt-3 mb-5">Info to update</div>    
    <hr>
    
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
        // fetch users from DB via adduser.php
        $("#message").load('adduser.php', function(response){
            $(".users").click(function(){
                $("#id").val($(this).data("id"));
                $("#name").val($(this).data("name"));
                $("#email").val($(this).data("email"));
                $("#username").val($(this).data("username"));
                $("#password").val($(this).data("password"));
                $("#role").val($(this).data("role"));
                $("#status").val($(this).data("status"));
            });
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