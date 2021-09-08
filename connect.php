<?php
$conn = new mysqli('406068087.student.yru.ac.th','406068087','','project');

if ($conn->connect_error) {
   die("Error: There is something error".$conn->connect_error);
} else {
    echo "Database connect successfuly";
}
?>