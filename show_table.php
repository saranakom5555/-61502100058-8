<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายการภาพยนต์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<?php
include('connect.php');

$sql = "SELECT * FROM labtest";
$result = $con -> query($sql);

// ส่วนของการค้นหา
if(isset ($_GET['serach_click'])){
  $sql = "SELECT * FROM test WHERE id LIKE '%{$_GET['search']}%' OR fname LIKE '%{$_GET['search']}%' ";// LIKE การหาทุกตัว
}
$result = $con->query($sql);//ดึงข้อมูล
?>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">รหัสภาพยนต์</th>
            <th scope="col">ชื่อภาพยนต์</th>
            <th scope="col">เวลาที่เริ่มฉาย</th>
            <th scope="col">ชื่อผู้ใช้งาน</th>
            <th scope="col">รหัส PIN</th>
            <th scope="col">รายการแก้ไข</th>
          </tr>
        </thead>
        <tbody>
<?php 
     while($row = mysqli_fetch_array($result)) { 
?>
          <tr>
            <th scope="row"><?php echo $row["id"];?></th>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["date"];?></td>
            <td><?php echo $row["cus"];?></td>
            <td><?php echo $row["pin"];?></td>
            <!-- รายแก้ไข /ลบ/แก้ไขข้อมูลภาพยนต์ -->
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="update_form.php?id=<?php echo $row['id'];?><button type="button" class="btn btn-warning">แก้ไข</button></a>
                    <a href="delete.php?id=<?php echo $row['id'];?>" ></a><button type="button" class="btn btn-danger">ลบ</button></a>
                  </div>
            </td>
          </tr>
          <?php
     }
?>
        </tbody>
      </table>
      <a href="insert_form.html"><button type="button" class="btn btn-primary">เพิ่มรายการภาพยนต์</button></a>
      <br>
      <br>
</body>
</html>