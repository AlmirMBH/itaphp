<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    
    <h1>Gallery</h1>
        <input type="text" name="name" id="name" placeholder="Enter gallery name"><br>
        <input type="text" name="comment" id="comment" placeholder="Enter comment"><br>
        <button id="btn">Save</button>
    <div></div>
    <hr>
    <select name="gallery" id="gallery"></select>
    <hr>
    <div id="message"></div>
</body>
</html>
<script>
    fetchGalleries();
    $(function(){        
        $("#btn").click(function(){
            $.post("creategallery.php?action=store", {name: $("#name").val(), comment: $("#comment").val()}, function(response){
                $("#message").html(response);
            })
        });
    })

    function fetchGalleries(){
        $.get("creategallery.php?action=select", function(response){
            let options = JSON.parse(response);
                $("#gallery").append("<option value='0'>-- Select option --</option>");
            for(let option of options){
                $("#gallery").append("<option value='" + option.id + "'>" + option.name + "</option>");
            }
            
            //$("gallery")
        });
    }
</script>