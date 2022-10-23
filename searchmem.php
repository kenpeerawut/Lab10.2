<?php
    $keyword = $_GET["keyword"];
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) {
        mysqli_select_db($conn,"blueshop");
        mysqli_query($conn,"SET NAMES utf8");
    } else {
        echo mysql_errno();
}
    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $objQuery = mysqli_query($conn,$sql);
?>
     <br>สมาชิกที่ค้นหาเจอ:<br>
    <?php while($row = mysqli_fetch_array($objQuery)){?>
       
        <div style="padding:15px">
            <h2>username  <?=$row["username"]?></h2>
            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            Email: <?=$row["email"]?><br>
            เบอร์: <?=$row["mobile"]?><br>
            <img src="img/<?=$row["username"]?>.jpg" width='100'>
            <hr>
        </div>
    <?php } ?>