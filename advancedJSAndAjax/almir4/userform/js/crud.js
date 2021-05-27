$(function(){
    fetchUsers();
    clearForm(); // prevents loading users in the form without selection, users not allowed to change email

        $("#btn1").click(function(){                
            clearForm(); 
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
                $.post("crudjs.php?action=insert", {name:name, email:email, username:username, password:password, role:role, status:status}, function(response){
                    $("#info").html(response);
                    fetchUsers(); // reload users after insert
                    clearForm(); 
                })
            }
            if(id != ""){                    
                $.post("crudjs.php?action=update", {id:id, name:name, email:email, username:username, password:password, role:role, status:status}, function(response){
                    $("#info").html(response);
                    fetchUsers();
                    clearForm();
                })
            }
        });


        $("#btn3").click(function(){
            if($("#id").val() == ""){
                alert("Select a user");
                return false;
            }
            if(!confirm("Are you sure you want to delete the selected user?")){
                return false;
            }
            let id = $("#id").val();
            let name = $("#name").val();
            $.post("crudjs.php?action=delete", {id:id, name:name}, function(response){
                $("#info").html(response);
                fetchUsers();
                clearForm();
            })
        });
})

function fetchUsers(){
    $.get("crudjs.php?action=select", function(response){
        let obj = JSON.parse(response);
        let str = "";
            for(elem of obj){
                str+="<div class='users' data-id='"+elem.id+"' data-name='"+elem.name+"' data-email='"+elem.email+"' data-username='"+elem.username+"' data-password='"+elem.password+"' data-role='"+elem.role+"' data-status='"+elem.status+"'>" + elem.id + ". " + elem.name + " " + elem.username + "</div>";
            }
        $("#message").html(str);
        $(".users").click(function(){
            $("#id").val($(this).data("id"));
            $("#name").val($(this).data("name"));                
            $("#username").val($(this).data("username"));
            $("#password").val($(this).data("password"));
            $("#role").val($(this).data("role"));
            $("#status").val($(this).data("status"));
            $("#email").val($(this).data("email"));
            $("#email").attr("disabled", "disabled");
            // users shouldn't be allowed to edit username or email (unique)
        });
    });
}

function clearForm(){
    $("input").val("");
    $("#status").val("0"); // select is not an input element
    $("#email").removeAttr("disabled");
}