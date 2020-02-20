<?php
require 'header.php';
require 'config.php';

//input :username, firstname, lastname, email, password, confirmpassword
//algorithm :step by step solution to a problem
//1. define empty values to store incoming data

$username=$firstname=$lastname=$email=$password1 = $password2='';

//2.define empty variables to store errors
$username_err= $firstname_err= $lastname_err=$email_err=$success_msg=$password1_err= $password2_err='';

//3. check the request method
if($_SERVER['REQUEST_METHOD']=='POST') {
    //grab data using the $_post superglobal
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];


    //check whether a variable is empty
    if (empty($username)) {
        //check if empty
        $username_err = "Please fill in a Username";
    } else {
        $username = cleanData($username);
    }
    if (empty($firstname)) {
        //check if empty
        $firstname_err = "Please fill in a First Name";
    } else {
        $firstname = cleanData($firstname);
    }
    if (empty($lastname)) {
        //check if empty
        $lastname_err = "Please fill in a Last Name";
    } else {
        $lastname = cleanData($lastname);
    }
    if (empty($email)) {
        //check if empty
        $email_err = "Please fill in an email address";
    } else {
        $email = cleanData($email);
    }
    if (empty($password1)) {
        //check if empty
        $password1_err = "Password field cannot be empty";
    }
    if (empty($password2)) {
        //check if empty
        $password2_err = "Please confirm your password";
    }

//check if passwords match
    if ($password1 != $password2) {
        $password2_err = "Oops! Your passwords don't seem to match";
    } else {
        //check the number of characters in the password
        if (strlen($password1) < 8) {
            $password1_err = "Password is less than 8 characters";
        } else {
            //hash password
            $password1 = md5($password1);
            //sql query to insert data from form into db. SQL query MUST be in double quotes.
            $sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL ,'$username','$firstname','$lastname','$email','$password1')";

            if (mysqli_query($conn, $sql)) {
                //echo "<ion-icon style = 'color: cornflowerblue; font-size: 25px;' name='cloud-upload-outline'></ion-icon>" . " Database updated!<br>";
                header('location:index.php');
            } else {
                echo "Data not added." . mysqli_error($conn) . "$sql<br>";
            }
        }
    }
}
function cleanData($data){
    //remove white spaces
    //why are we removing whitespaces and special characters from names?
    $data= trim($data);
    //remove slashes
    $data = stripslashes($data);
    //remove special characters
    $data = htmlspecialchars($data);
    //return clean data
    return $data;
}
//htmlspecialchar - removes special characters
//strslashes - remove back slashes
//trim removes - empty space
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
    <fieldset class="container">
            <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <span style="color:red">*</span>
                <small style="color:orangered!important;" class="text-muted"><?php echo $username_err?></small>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputFirstName">First Name</label>
                <span style="color:red">*</span>
                <small style="color:orangered!important;" class="text-muted"><?php echo $firstname_err?></small>
                <input type="text" class="form-control" name="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputLastName">Last Name</label>
                <span style="color:red">*</span>
                <small style="color:orangered!important;" class="text-muted"><?php echo $lastname_err?></small>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <span style="color:red">*</span>
                <small style="color:orangered!important;" class="text-muted"><?php echo $email_err?></small>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email address">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <span style="color:red">*</span>
                <small style="color:orangered!important;" class="text-muted"><?php echo $password1_err?></small>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password1" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword12">Confirm Password</label>
                <span style="color:red">*</span>
                <small style="color:orangered!important;" class="text-muted"><?php echo $password2_err?></small>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password2" placeholder="Confirm password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>



<?php
    require 'footer.php';
?>