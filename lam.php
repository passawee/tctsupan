<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>lam</title>
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
              <h1><strong>ชุมชนที่บ้านแหลม</strong></h1>
 
              <p><img src="picture/lam.jpg" width="848" height="546" alt=""/></p>
              <p><strong>ชุมชนตำบลบ้านแหลม</strong> เป็นแหล่งท่องเที่ยว เรียนรู้ และเกิดเป็นสถานที่ท่องเที่ยวในชุมชน ที่จะทำให้นักท่องเที่ยวเพลิดเพลินกับกิจกรรมดีๆ มากมายภายในชุมชน เช่น วิธีการทำธูปหอม ขั้นตอนการแปรรูปผักตบชวาให้กลายเป็นผลิตภัณฑ์ต่างๆ พายเรือเล่นชมวิถีสองฝั่งแม่น้ำสุพรรณ หัดทำขนมไทยโบราณ รวมถึงที่นี่ยังมีโฮมสเตย์เรือนไทยริมน้ำให้เราได้สัมผัสใกล้ชิดกับบรรยากาศของชุมชนอีกด้วย</p>
              </center>              
            <center>
                <p><img src="picture/0f26b990-db55-11e9-b8c7-092c7731b6e2_original.jpg" width="848" height="565" alt=""/></p>
                <p>&nbsp;</p>
              </center></td>
            </tr>
          <tr>
            <td><center>
              <a href="insert3.html">เพิ่มรีวิว </a>
            </center></td>
            </tr>
          <tr>
            <td>
				<?php
	require('connect.php');			
	$sql = "SELECT * FROM lam";	
	$result = mysqli_query($conn, $sql);
				
	while($row = mysqli_fetch_assoc($result)) {
		echo "<br>".
			 "ID: ". $row['ID']."<br>".
			 "Name: ".$row['Name']."<br>".
			 "Star: ".$row['Star']."<br>".
			 "คอมเมนต์: ".$row['Review']."<br>".
			"<a href='delete3.php?id=".$row['ID']."' 
            onclick='return confirm(\"คุณแน่ใจหรือไม่ว่าต้องการลบรีวิวนี้?\")'>
            <button>ลบรีวิว</button>
          </a>".
         "<a href='update3.php?id=".$row['ID']."'>
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