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
        $.get("adduser1.php", function(response){
            let obj = JSON.parse(response);
            let str = "";

            for(elem of obj){
                str+="<div class='users' data-id='"+elem.id+"' data-name='"+elem.name+"' data-email='"+elem.email+"' data-username='"+elem.username+"' data-password='"+elem.password+"' data-role='"+elem.role+"' data-status='"+elem.status+"'>" + elem.id + ". " + elem.name + " " + elem.username + "</div>";
            }
            $("#message").html(str);

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
                $("input").val("");
            });

            $("#btn2").click(function(){
                let id = $("#id").val();
                let name = $("#name").val();
                let email = $("#email").val();
                let username = $("#username").val();
                let password = $("#password").val();
                let role = $("#role").val();
                let status = $("#status").val();

                if (id == ""){
                    console.log(id, name, email, username, password, role, status);
                    $.post("adduser1.php?action=insert", {name:name, email:email, username:username, password:password, role:role, status:status}, function(response, xhr){
                        $("#message").html(xhr.statusText);
                    })
                }
                if(id != ""){                    
                    $.post("adduser1.php?action=update", {id:id, name:name, email:email, username:username, password:password, role:role, status:status}, function(response, ){
                        $("#message").html(xhr.statusText);
                    })
                }
            });
    })
</script>