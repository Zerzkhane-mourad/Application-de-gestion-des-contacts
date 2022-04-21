<?php 
    require_once 'class/connect.php'; 
    require_once 'class/user.php'; 
    session_start();

    if (isset($_SESSION["username"])){
        header("location: profil.php"); 
    } 
    $user = new User();
    $error="";
    if (isset($_POST['submit'])){
        extract($_POST);
        $dbuser =$user->chek_login($email, $password);
        if ($dbuser) {
            $user->userid = $dbuser->userid;
            $user->username = $dbuser->username;
            $user->email = $dbuser->email;
            $user->signup_date = $dbuser->signup_date;
            $user->login($user);
            
        } else {
            
            $error = "Invalid username or password";
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>cantact</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-light">Profil</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="logout.php" class="nav-item nav-link text-light">logout</a>
                </div>
            </div>
          </div>
    </nav>
    <div class="px-1 text-center mt-5 pt-5 ">
        <h4 class="sign"><strong>LOG IN</strong></h4>
    <p class="enter text-muted ">Enter your credentials to access your account</p>
    </div>
    <form class="signup container " method="POST" id="form" name="login" >     
    <div class="mb-3">
        <div class="text-danger text-center"><?php echo $error ?></div>
        <label for="exampleInputEmail1" class="form-label "><strong>Email</strong></label>
        <input type="text" class="form-control" placeholder="Enter your Email" id="email" name="email" >
        <small id="messageemail" class="text-danger"></small>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
        <input type="password" class="form-control" placeholder="Enter your password" id="password"  name="password">
        <small id="messagepassword" class="text-danger "></small>
    </div>
        <button type="submit" class="btn bg-secondary text-white w-100" name="submit" >Log in</button>
        <p class="mt-3 text-center text">No account ?<b><a class="text-decoration-none" href="signup.php">sign up</a></b> here.</p>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>