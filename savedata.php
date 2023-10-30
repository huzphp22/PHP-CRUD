<?php 

$stu_name = $_POST['sname'];
$stu_add = $_POST['saddress'];
$stu_fth = $_POST['fname'];
$stu_phn = $_POST['sphone'];

include 'config.php';

$sql = "INSERT INTO student(st_name,st_address,st_father,st_phone) VALUES ('{$stu_name}','{$stu_add}','{$stu_fth}','{$stu_phn}')";
$result = mysqli_query($conn,$sql) or die('query failed');

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>