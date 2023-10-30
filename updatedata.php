<?php 

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_add = $_POST['saddress'];
$stu_fth = $_POST['fname'];
$stu_phn = $_POST['sphone'];

include 'config.php';

$sql = "UPDATE student SET st_name = '{$stu_name}',st_address = '{$stu_add}',st_father = '{$stu_fth}',st_phone = '{$stu_phn}' WHERE st_id = {$stu_id}";
$result = mysqli_query($conn,$sql) or die('query failed');

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

 ?>