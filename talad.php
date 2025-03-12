<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>talad</title>
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
              <h1><strong>ตลาดน้ำสะพานโค้ง</strong></h1>
 
              <p><img src="picture/sapamkoong.jpg" width="848" height="565" alt=""/></p>
              <p><strong>ตลาดน้ำสะพานโค้ง</strong> แลนด์มาร์คต้องเช็คอินในสุพรรณบุรี ไฮไลท์ของที่นี่ก็คือ <strong>สุ่มปลายักษ์</strong> ซึ่งด้านบนของสุ่มปลายักษ์นี้เป็นจุดชมวิวสวยๆ 360 องศานั่นเอง ภายในตลาดก็จะมีร้านค้า ร้านอาหารต่างๆ ที่ไม่เหมือนที่ไหนด้วยค่ะ เพราะจะเป็นร้านแบบเรือพายขายอาหารบ้าง เป็นแคร่ไม้ไผ่บ้าง รวมไปถึงมี คาเฟ่เก๋ๆ ให้ได้จิบกาแฟอีกด้วยนะ มาเที่ยวที่นี่ มีทั้งของอร่อยให้ชิม แถมยังได้ถ่ายรูปสวยๆ อีกด้วย</p>
              </center>              
            <center>
                <p><img src="picture/2b5e4400-36b5-11ea-ba25-f3dc3bd21411_original.jpg" width="848" height="565" alt=""/></p>
                <p>&nbsp;</p>
              </center></td>
            </tr>
          <tr>
            <td><center>
              <a href="insert4.html">เพิ่มรีวิว </a>
            </center></td>
            </tr>
          <tr>
            <td>
				<?php
	require('connect.php');			
	$sql = "SELECT * FROM talad";	
	$result = mysqli_query($conn, $sql);
				
	while($row = mysqli_fetch_assoc($result)) {
		echo "<br>".
			 "ID: ". $row['ID']."<br>".
			 "Name: ".$row['Name']."<br>".
			 "Star: ".$row['Star']."<br>".
			 "คอมเมนต์: ".$row['Review']."<br>".
			"<a href='delete4.php?id=".$row['ID']."' 
            onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าต้องการลบรีวิวนี้?\")'>
            <button>ลบรีวิว</button>
          </a>".
         "<a href='update4.php?id=".$row['ID']."'>
            <button>แก้ไขรีวิว</button>
          </a>".
         "<br><hr>";
	}
				
				
?></td>
          </tr>
         
      </table></td>
    </tr>
  </tbody>
</table>

</body>
</html>