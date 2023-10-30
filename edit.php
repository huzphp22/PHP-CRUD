<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2> 
    <?php  

     include 'config.php';
     
     $student_id = $_GET['id'];

     $sql = "SELECT * FROM student WHERE st_id = {$student_id}";

     $result = mysqli_query($conn,$sql) or die('query failed');

     if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['st_id']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['st_name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['st_address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Father</label>
          <input type="text" name="fname" value="<?php echo $row['st_father']; ?>" />
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['st_phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
    }
  } 
  ?>
</div>
</body>
</html>
