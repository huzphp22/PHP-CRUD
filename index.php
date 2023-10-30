<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php  
     include 'config.php';

     $sql = "SELECT * FROM student";

     $result = mysqli_query($conn,$sql) or die('query failed');

     if (mysqli_num_rows($result) > 0) {
         
     ?>

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Father</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php  
              while ($row = mysqli_fetch_assoc($result)) {      
            ?>
            <tr>
                <td><?php echo $row['st_id'] ?></td>
                <td><?php echo $row['st_name'] ?></td>
                <td><?php echo $row['st_address'] ?></td>
                <td><?php echo $row['st_father'] ?></td>
                <td><?php echo $row['st_phone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['st_id'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['st_id'] ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php     
    
    } else {
    echo 'No Record Found.';
    }  
    mysqli_close($conn);
    ?> 
    
     
</div>
</body>
</html>
