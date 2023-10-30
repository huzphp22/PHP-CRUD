<?php  

    $stu_id = $_GET['id'];

    include 'config.php';

    $sql = "DELETE FROM student WHERE st_id = {$stu_id}";

    $result = mysqli_query($conn,$sql) or die('query failed');

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);
?>