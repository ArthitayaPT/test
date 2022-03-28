<!DOCTYPE html>
<html>

<head>
    <title>Workshop_03</title>
</head>

<body>
   <input type="password" Id = "pass">
   <button onclick="show()">Show password</button> 
   <p>The text is : </p>
   <script>   
        function show(){
            let pass = document.getElementById('pass').value;
            document.getElementsByTagName("p")[0].innerHTML = "The text is : "+ pass;            
        }
    </script>
</body>

</html>