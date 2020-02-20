<?php

require 'header.php';
//pull all data from the database
require 'config.php';
$id = $username = $firstname = $lastname = $email = '';
$username_err = $firstname_err = $lastname_err = $email = '';

if (isset($_GET['msg'])) {
    echo "<div class='alert alert-success'>Data deleted successfully</div>";
}
$sql = "SELECT * FROM `users` ";
$users = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($users)) {
    $id = $row['id'] ;
    $username = $row['username'] ;
    $firstname = $row['firstname'] ;
    $lastname = $row['lastname'] ;
    $email = $row['email'] ;


}
require 'footer.php';
?>
<form action="update_handler.php" method="post">
      <fieldset>
          <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username" value="<?php echo $username?>">
          <input type="text" hidden name="user_id" value="<?php echo $id?>">
        </div>
        <div class="form-group">
        <label for="">Firstname</label>
        <input type="text" name="firstname"value="<?php echo $firstname?>">
        </div>
        <div class="form-group">
        <label for="">Lastname</label>
        <input type="text" name="lastname" value="<?php echo $lastname?>">
        </div>
        <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" value="<?php echo $email?>">
        </div>
        <button type="submit" name="btn_update" class="btn btn-info">Update</button>
</fieldset>
  </form>
