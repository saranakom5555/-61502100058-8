<?php
include('connect.php');

$query =  "INSERT INTO labtest (id, name, date, cus, pin)
VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['date']}', '{$_POST['cus']}', '{$_POST['pin']}')";
$result = mysqli_query($con,$query);
if($result == TRUE){
 header("Location: show_table.php");
}else{
echo "ไม่สามารถเพิ่มรายการภาพยนต์ได้";
}

?>