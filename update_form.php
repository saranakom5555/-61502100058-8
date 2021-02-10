<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายการภาพยนต์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<?php
    include("connect.php");
    $sql = "SELECT * FROM labtest WHERE id = '{$_GET['id']}'";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>
<body>
    <form action="update.php" method="POST">
    <label for="id">รหัสภาพยนต์</label>
    <?php echo $row['id'];?>
        <div class="mb-3">
          <input type="text" class="form-control" id="id" name="id" placeholder="กรุณากรอกรหัสภาพยนต์">
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="กรุณากรอกชื่อภาพยนต์">
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" id="date" name="date" placeholder="กรุณากรอกวันที่">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" id="cus" name="cus"placeholder="กรุณากรอกชื่อผู้ใช้" >
        </div>
    
        <div class="mb-3">
            <input type="text" class="form-control" id="pin" name="pin" placeholder="กรุณากรอก PIN">
        </div>
        
        <button type="submit" class="btn btn-primary">ยืนยันการแก้ไขรายการภาพยนต์</button>
      </form>
</body>
</html>