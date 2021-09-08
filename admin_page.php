<?php
    require("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Basic</title>
</head>
    <body>
    <h1>Employees Page</h1>
        <!--<a href ="add_form.php">สมัครสมาชิก</a>
        <br>
        <a href ="process/product.php">เพิ่มข้อมูล</a> -->
        <table border="1">

            <tr>
                <th width="5%">ลำดับ</th>
                <th width="12%">รหัสนักศึกษา</th>
                <th width="30%">ชื่อ - สกุล</th>
                <th width="30%">อีเมล</th>
                <th width="12%">ยอดเงินคงเหลือ</th>

            </tr>
            <?php

                $sql = "SELECT * FROM member";

                $result = mysqli_query($conn,$sql);
                $i = 1;

                if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_assoc($result)){
                        echo"<tr>";
                            echo"<td>".$i."</td>";
                            echo"<td>".$row['Username']."</td>";
                            echo"<td>".$row['Name']."</td>";
                            echo"<td>".$row['E-Mail']."</td>";
                            echo"<td>".$row['Salary']."</td>";
                            echo"<td><a href='process/product.php?id=".$row['id']."'>ฝาก</a></td>";
                            echo"<td><a href='edit_form.php?id=".$row['id']."'>แก้ไข</a></td>";
                            echo"<td><a href='index.php?delete_id=".$row['UserID']."'

                            onclick='return confirm(\"คุณต้องการลบข้อมูลหรือไม่\")'>ลบ</a>

                            </td>";

                        echo "</tr>";

                        $i++;
                    }
                
                }else{

                    echo "EMPTY DATA";
                }

                ?> 
            </table>
        </body>
    </html>