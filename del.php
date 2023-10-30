<?php 

    include 'config.php';
 
    $stu_id = $_POST['sid'];

    $sql = "DELETE FROM student WHERE st_id = {$stu_id}";

    $result = mysqli_query($conn,$sql) or die('query failed');

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);

 ?>