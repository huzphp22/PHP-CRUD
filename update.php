<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER=['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    

    <?php 

    if (isset($_POST['showbtn'])) {
        
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM student WHERE st_id = {$stu_id}";

        $result = mysqli_query($conn,$sql) or die('query failed');

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

     ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['st_id']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['st_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['st_address']; ?>" />
        </div>
        <div class="form-group">
            <label>Father</label>
            <input type="text" name="fname" value="<?php echo $row['st_father']; ?>" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['st_phone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
           }
        }
    } 

    ?>
</div>
</body>
</html>
