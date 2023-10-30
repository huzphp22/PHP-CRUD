<?php  

$st_id = $_POST['st_id']; 
$st_fname = $_POST['st_fname']; 
$st_lname = $_POST['st_lname'];

$conn = mysqli_connect("localhost","root","","ajax") or die("Connection Failed.");

$sql = "UPDATE student SET First_name = '{$st_fname}',Last_name = '{$st_lname}'
       WHERE id = {st_id}"; 
echo $sql;
die();

if (mysqli_query($conn,$sql)) {
	echo 1;
} else {
	echo 0;
}

?>