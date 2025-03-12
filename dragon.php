<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>หมู่บ้านมังกรสวรรค์</title>
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
              <h1><strong>หมู่บ้านมังกรสวรรค์</strong></h1>
              <p><img src="picture/dragon.jpg" width="848" height="566" alt=""/></p>
              <p><strong>หมู่บ้านมังกรสวรรค์</strong> ตั้งอยู่ภายใน<strong> อุทยานมังกรสวรรค์</strong> และ <strong>พิพิธภัณฑ์ลูกหลานพันธุ์มังกร</strong> ที่นี่เป็นหมู่บ้านจีนโบราณที่จำลอง <strong>ลี่เจียง</strong> เมืองเก่าแก่โบราณกว่า 800 ปีของประเทศจีนมาไว้ที่สุพรรณบุรีแห่งนี้อย่างประณีต ภายในหมู่บ้านมีบ้านเรือนที่ตกแต่งอย่างสวยงามด้วยสถาปัตยกรรมจีน มีร้านค้า ร้านอาหารต่างๆ มากมาย ทำให้เป็น ที่เที่ยวสุพรรณบุรี อีกแห่งที่เป็นจุดแลนด์มาร์คยอดนิยมของนักท่องเที่ยว มีมุมสวยๆ ให้เดินเล่นถ่ายรูป รวมไปถึงมีหอคอยชมวิวที่จะเห็นวิวสวยๆ ได้ถึง 360 องศาเลยทีเดียว</p>
              </center>              
            <center>
                <p><img src="picture/e5546cf0-36b4-11ea-96b9-fb57831f8879_original.jpg" width="848" height="566" alt=""/></p>
                <p>&nbsp;</p>
              </center></td>
            </tr>
          <tr>
            <td><center>
              <a href="insert2.html">เพิ่มรีวิว </a>
            </center></td>
            </tr>
          <tr>
            <td>
				<?php
	require('connect.php');			
	$sql = "SELECT * FROM dragon";	
	$result = mysqli_query($conn, $sql);
				
	while($row = mysqli_fetch_assoc($result)) {
		echo "<br>".
			 "ID: ". $row['ID']."<br>".
			 "Name: ".$row['Name']."<br>".
			 "Star: ".$row['Star']."<br>".
			 "คอมเมนต์: ".$row['Review']."<br>".
			"<a href='delete2.php?id=".$row['ID']."' 
            onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าต้องการลบรีวิวนี้?\")'>
            <button>ลบรีวิว</button>
          </a>".
         "<a href='update2.php?id=".$row['ID']."'>
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