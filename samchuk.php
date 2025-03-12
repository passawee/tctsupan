<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สามชุก</title>
</head>

<body>
	
<table width="100%" border="1" cellspacing="2" cellpadding="0">
  <tbody>
    <tr>
      <td colspan="4" bgcolor="#52DFA8"><center><img src="picture/banner.png" width="100%" height="100%" alt=""/>
      </center></td>
    </tr>
    <tr>
      <td width="33%" bgcolor="#FFFFFF"><center>
        <a href="index.html"><img src="picture/home.png" width="10%" height="10%" alt=""/></a>
      </center></td>
      <td bgcolor="#FFFFFF"><p>
        <center>
          <a href="tourist attraction.html"><img src="picture/tourist.png" width="10%" height="10%" alt=""/></a>
          </center>
        </p>        <center>
      </center></td>
      <td width="33%" bgcolor="#FFFFFF"><center>
        <a href="team.html"><img src="picture/phone.png" width="10%" height="10%" alt=""/></a>
      </center></td>
    </tr>

    <tr>
      <td colspan="4" bgcolor="#FFFFFF"><table width="100%" border="2" cellspacing="0" cellpadding="0">
        <tbody>
			
          <tr>
            <td><center>
              <h1><strong>ตลาดสามชุก</strong></h1>
              <p><img src="picture/samchok.jpg" width="848" height="564" alt=""/></p>
              <p><strong>ตลาดสามชุก</strong> ตลาดร้อยปี ที่เรียกได้ว่าเป็น พิพิธภัณฑ์ที่มีชีวิต เพราะในตลาดนั้นยังคงเสน่ห์ เอกลักษณ์ และวิถีชีวิตแบบไทยๆ ไว้ที่นี่ มีอาคารไม้โบราณ ที่เป็นสถาปัตยกรรมลายขนมปังขิง กว่า 19 ที่หาดูได้ยาก</p>
              </center>              <center>
                <p><img src="picture/samcok2.jpg" width="848" height="564" alt=""/></p>
                <p>รวมถึงด้านในตลาดยังคึกคักไปด้วยผู้คน มีร้านค้า ร้านอาหาร ขนมโบราณต่างๆ รวมไปถึงมี พิพิธภัณฑ์บ้านขุนจำนงจีนารักษ์ ซึ่งเป็นศูนย์เรียนรู้วิถีชีวิตของชาวสามชุกในอดีตอีกด้วย</p>
                <p>&nbsp;</p>
              </center></td>
            </tr>
          <tr>
            <td><center>
              <a href="insert1.html">เพิ่มรีวิว </a>
            </center></td>
            </tr>
          <tr>
            <td>
				<?php
	require('connect.php');			
	$sql = "SELECT * FROM samchuk";	
	$result = mysqli_query($conn, $sql);
				
	while($row = mysqli_fetch_assoc($result)) {
		echo "<br>".
			 "ID: ". $row['ID']."<br>".
			 "Name: ".$row['Name']."<br>".
			 "Star: ".$row['Star']."<br>".
			 "คอมเมนต์: ".$row['Review']."<br>".
			"<a href='delete1.php?id=".$row['ID']."' 
            onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าต้องการลบรีวิวนี้?\")'>
            <button>ลบรีวิว</button>
          </a>".
         "<a href='update1.php?id=".$row['ID']."'>
            <button>แก้ไขรีวิว</button>
          </a>".
         "<br><hr>";
		
		
	}
				
				?>

          </tr>
         
      </table></td>
    </tr>
  </tbody>
</table>

</body>
</html>