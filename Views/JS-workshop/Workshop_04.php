<!DOCTYPE html>
<html>
<head>
<title>Workshop_04</title>
</head>
<body>
<img src="https://i.pinimg.com/564x/43/b5/5e/43b55e456d205f94c2a1ea4c1c916794.jpg" lenght="150" width="150" onmouseover="venti()" onmouseout="venti_out()">
<img src="https://i.pinimg.com/564x/71/87/b4/7187b4f537d3594fcf5aebd5fc59c9ee.jpg" lenght="150" width="150" onmouseover="chile()" onmouseout="chile_out()">
<img src="https://i.pinimg.com/564x/b8/51/37/b85137826a5c067b87b39206071225a5.jpg" lenght="150" width="150" onmouseover="hutao()" onmouseout="hutao_out()">
<script>   
        function venti(){
            document.getElementsByTagName("img")[0].style.boxShadow= "0px 0px 10px";                
        }

        function chile(){
          document.getElementsByTagName("img")[1].style.boxShadow= "0px 0px 10px";          
        }

        function hutao(){
          document.getElementsByTagName("img")[2].style.boxShadow= "0px 0px 10px";              
        } 

        function venti_out(){
          document.getElementsByTagName("img")[0].style.boxShadow= "0px 0px 0px";             
        }

        function chile_out(){
          document.getElementsByTagName("img")[1].style.boxShadow= "0px 0px 0px";          
        }

        function hutao_out(){
          document.getElementsByTagName("img")[2].style.boxShadow= "0px 0px 0px";              
        } 

</script> 
</body>
</html>