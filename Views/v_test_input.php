<!DOCTYPE html>
<html>

<head>
  <title>แบบประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19)</title>
</head>

<body>
  <h1>แบบประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19)</h1>
  <hr>
  <h2>ส่วนที่ 1 ข้อมูลทั่วไป</h2>
  <form method="POST" action="<?sore echo site_url() . '/student/show_value'; ?>" enctype="multipart/form-data">
    <br>
    คำนำหน้า
    <select name="name_title">
      <option value="นาย"> นาย </option>
      <OPTION value="นาง"> นาง </option>
      <option value="นางสาว"> นางสาว </option>
    </select>
    &emsp; เพศ
    <input type="Radio" name="sex" value="ชาย"> ชาย
    <input type="Radio" name="sex" value="หญิง"> หญิง
    <input type="Radio" name="sex" value="ไม่ระบุ"> ไม่ระบุ

    <br><br>

    ชื่อจริง <input type="text" name="Fname" size="10"  />
    &nbsp; นามสกุล <input type="text" name="Lname" size="10"  /> <br><br>

    วันเกิด <input type="date" name="date" size="10"  />
    &nbsp; อายุ <input type="number" name="number" /> ปี <br><br>

    เบอร์โทรศัพท์ <input type="number" name="phone" />
    &nbsp; อีเมล <input type="Email" name="email" size="10" /> <br><br>

    จังหวัด <input type="text" name="province" size="10"  />
    &nbsp; อำเภอ <input type="text" name="district" size="10"  /> <br><br>

    ที่อยู่ <br> <textarea name="area"> </textarea> <br><br>

    รูปภาพประจำตัว <input type="file" name="image" accept="image/*"> <br><br>
    <hr>


    <h2>ส่วนที่ 2 ข้อมูลการสัมผัสโรค</h2>
    1. ท่านมีประวัติเดินทางไปต่างประเทศ หรือพื้นที่ ที่มีการระบาดของโรคติดเชื้อไวรัสโคโรนา
    2019 (COVID-19) ในช่วงเวลา 14 วัน ก่อนหน้านี้ ใช่หรือไม่ ?<br>
    <input type="Radio" name="1" value="ใช่"> ใช่
    <input type="Radio" name="1" value="ไม่ใช่"> ไม่ใช่ <br><br>
    2. ท่านสัมผัสใกล้ชิดกับประชาชนที่มาจากพื้นที่ที่มีรายงานการระบาดต่อเนื่องของโรคติด
    เชื้อไวรัสโคโรนา 2019 (COVID-19) ใช่หรือไม่ ?<br>
    <input type="Radio" name="2" value="ใช่"> ใช่
    <input type="Radio" name="2" value="ไม่ใช่"> ไม่ใช่<br><br>
    3. ท่านมีประวัติใกล้ชิดหรือสัมผัสกับผู้ป่วยเข้าข่ายหรือยืนยันโรคติดเชื้อไวรัสโคโรนา 2019
    (COVID-19) ใช่หรือไม่ ?<br>
    <input type="Radio" name="3" value="ใช่"> ใช่
    <input type="Radio" name="3" value="ไม่ใช่"> ไม่ใช่<br><br>
    4. ท่านหรือบุคคลใกล้ชิดเข้าร่วมกิจกรรมที่มีผู้ชุมนุมเกิน 100 คน ในช่วงเวลา 14 วัน ก่อน
    หน้านี้ ใช่หรือไม่ ?<br>
    <input type="Radio" name="4" value="ใช่"> ใช่
    <input type="Radio" name="4" value="ไม่ใช่"> ไม่ใช่<br><br>

    <hr>
    <h2>ส่วนที่ 3 ข้อมูลอาการที่ตรวจพบ</h2>

    กรุณาเลืกคำตอบที่ตรงกับท่านมากที่สุด<br>
    <input type="checkbox" name="flu" value="flu"> มีไข้ (37.5 oC ขึ้นไป)
    <br>
    <input type="checkbox" name="cough" value="cough"> ไอ
    <br>
    <input type="checkbox" name="snot" value="snot"> มีน้ำมูก
    <br>
    <input type="checkbox" name="sore" value="sore"> เจ็บคอ
    <br>
    <input type="checkbox" name="breath" value="breath"> หายใจเร็ว หรือ หายใจลำบาก หรือ หายใจไม่สะดวก
    <br>
    <input type="checkbox" name="smell" value="smell"> จมูกไม่ได้กลิ่น<br>
    <hr>
    <input type="reset" name="ยกเลิก" value="ยกเลิก">
    <input type="submit" value="บันทึก">
  </form>
</body>

</html>