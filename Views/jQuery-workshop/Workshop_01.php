<!DOCTYPE html>
<html>

<head>
    <title>Workshop_01</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    
<button id = "addrow">เพิ่มแถว</button>

<table id="Table"></table>
<script>

         $(document).ready(function() {
         let i = "0";
         var tb = $('#Table').children('tb');
         var table = tb.length ? tb : $('#Table');

         $('#addrow').click(function(){
         i++;
         table.append('คนที่ ' + i + ' ชื่อ <input type="text"> นามสกุล <input type="text"> <br>');
         })
         });
      </script>
</body>

</html>