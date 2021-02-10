<?php
include('connect.php');
$sql = "UPDATE labtest SET
name = '{$_POST['name']}',
date = '{$_POST['date']}',
WHERE id = '{$_POST['id']}' ";
 if ($con->query($sql) === TRUE) {
    header("Location: show_table.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$conn->close();
?>