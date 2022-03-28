<!DOCTYPE html>
<html>

<head>
    <title>Workshop_02</title>
</head>

<body>
    <button onclick="red()">Red</button>
    <button onclick="blue()">Blue</button>
    <button onclick="green()">Green</button>
    <h1> The Text </h1>
    <script>   
        function red(){
            const ELEM = document.getElementsByTagName("h1")[0]; 
            ELEM.style.color = "red";                    
        }

        function blue(){
            const ELEM = document.getElementsByTagName("h1")[0]; 
            ELEM.style.color = "blue";                    
        }

        function green(){
            const ELEM = document.getElementsByTagName("h1")[0]; 
            ELEM.style.color = "green";                    
        }
    </script>
</body>

</html>