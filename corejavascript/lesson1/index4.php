<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index4</h1>
    <script>
        let a=prompt("Unesite sajt");
        if(a==null) console.log("Korisnik je izabrao cancel");
        else if(a=="") console.log("Korisnik nije uneo nikakav podatak");
        else {
            console.log("Korisnik je uneo: " + a);
            window.location.assign("https://" + a);
        }
        
        
    </script>
</body>
</html>