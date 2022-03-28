<!DOCTYPE html>
<html>
<head>
<title>form 05</title>
</head>
<body>
<h1>แบบสอบถามข้อมูลส่วนบุคคล</h1>
<hr size="5">
<form>
<br>
คำนำหน้า :
  <select>
  <option value="1"> นาย </OPTION> <br>
  <OPTION value="2"> นาง </option> <br>
  <option value="3"> นางสาว </option> <br>
  </select><br><br>

  ชื่อจริง : <input type="text" name="Fname"  size="10" maxlength="5" /> 
  นามสกุล :  <input type="text" name="Lname"  size="10" maxlength="5" /> <br><br>
  วันเกิด : <input type="date" name="date" size="10" maxlength="10"/> <br><br>
  รหัสนิสิต : <input type="number" name="id"><br><br>
  อีเมล : <input type="Email" name="email"  size="10"/> <br><br>
  รหัสผ่าน :  <input type="Password" name="pass"  size="10"/> <br><br>
  <hr size="5" /><br>
  คณะ : 
  <select  disabled>
  <option value="1"> คณะแพทยศาสตร์ </OPTION> <br>
  <OPTION value="2"> คณะพยาบาลศาสตร์ </option> <br>
  <option value="3" selected="3"> คณะวิทยาการสารสนเทศ </option> <br>
  </select><br><br>
  นิสิตชั้นปี : 
  <input type="number"  min="2" max="4" value="2" disabled><br><br>
  มกุล <br>
  <input type="Radio" name="Cluster" value="Cluster 1 - Cluster 3" selectedonly> Cluster 0 - Cluster 3 <br>
  <input type="Radio" name="Cluster" value="Cluster 4 - Cluster 6"> Cluster 4 - Cluster 6 <br>
  <input type="Radio" name="Cluster" value="Cluster 7 - Cluster 9"> Cluster 7 - Cluster 9 <br>
  <br> ภาษาที่ถนัด :  <br>
  <input type="checkbox" name="HTML" value="HTML" > HTML
  <br>
  <input type="checkbox" name="CSS" value="CSS" > CSS
  <br>
  <input type="checkbox" name="PHP" value="PHP" > MySQL
  <br>
  <input type="checkbox" name="PHP" value="PHP" > JS
  <br>
  <input type="checkbox" name="PHP" value="PHP" > PHP



  <br><br>
  <input type="button" name="ยกเลิก" value="ยกเลิก">
  <input type="submit" name="บันทึก" value="บันทึก">
</form>
</body>
</html>