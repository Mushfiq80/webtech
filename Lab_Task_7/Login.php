<?php
    session_start();

    $username = "David";
    $password = "asas";

    if(isset($_POST['username'])){
        if($_POST['username']==$username && $_POST['password']){
            $_SESSION['username'] = $username;
            // header("location:Controller\Login_Con.php");
            header("location:Lawyerdash.php");

        }
        else{
            $msg = "Invalid Input";
        }
        
    }
    

?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ max-width: 300px;margin: auto;position: center; padding: 20px; text-align: center; }

        .title {
  color: red;
  font-size: 18px;
}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Lawyer Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php if(isset($_COOKIE['uname'])) {echo $_COOKIE['username'];} ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['password'];} ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <input id="remember" type="checkbox" name="remember"  <?php if(isset($_COOKIE['uname'])) {echo "checked";} ?>> 
            <label for="remember">Remember me</label>  
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <br>
            <div class="title">
            <span><?php
                if(isset($msg)){
                    echo $msg;
                }
            ?></span>
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>