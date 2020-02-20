<?php
require 'header.php';
require 'config.php';
require 'footer.php';
$username=$email=$password1=$password2=$user_type='';
$username_err=$email_err=$password1_err=$password2_err='';

//steps
//1.Grab user data from form
if(isset($_POST['btn_signup'])) {
//2.Clean data
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    } else {
        $username_err = "Fill this field";
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = "Fill this field";
    }
    if (isset($_POST['user-type'])) {
        $user_type = $_POST['user-type'];
    }
    if (isset($_POST['password1'])) {
        $password1 = $_POST['password1'];
    } else {
        $password1_err_err = "Fill this field";
    }
    if (isset($_POST['password2'])) {
        $password2 = $_POST['password2'];
    } else {
        $password2_err = "Fill this field";
    }

//3.Check password matched
    if ($password1 != $password2) {
        $password1_err = "password did not match";
    } else {

//4.Check if user exists

//5.Add user into db
        //5.1 hash password
        $password1 = md5($password1);
        $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`, `user_type`) VALUES (NULL,'$username','$email','$password1','$user_type')";
        if(mysqli_query($conn,$sql)) {
        //6.Take user to login page
            header('location:login.php');
            exit();
        }else{
            echo"Error:".mysqli_error($conn);
        }

    }
}



?>
<!--reg form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="form-section">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>

                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password1" class="form-control" required>
                        </div>

                        </div><div class="form-group">
                            <label for="">Confirm password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>

                        <div class="input-group">
                            <span>
                                Supper <input type="radio" name="user-=type"value="supplier">
                            </span>
                            <span>
                                Customer <input type="radio"  checked name="user-type" value="customer" >
                            </span>
                        </div>

                        <button class="btn btn-warning btn-block" name="btn_signup">Create Account</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>
<?php
require 'footer.php';
?>

