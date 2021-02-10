<?php
include('connect.php');

    $query = "DELETE FROM labtest WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($con, $query); 
    if ($result) {
        header("Location: show_table.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }


?>