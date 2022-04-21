<?php

  require_once 'class/connect.php';
  require_once 'class/user.php';

  $user = new User();
  if(isset($_POST['submit'])){
    extract($_POST);
    $user->username = $username;
    $user->email = $email;
    $user->password = $password;
    $user->registre(); 
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
                    <a href="class/logout.php" class="nav-item nav-link text-light">login</a>
                </div>
            </div>
          </div>
       </nav>

        <div class="px-1 text-center mt-4 pt-5 ">
            <h3 class="sign"><strong>SIGN UP</strong></h3>
        <p class="enter text-muted ">Enter your credentials to access your account</p>
        </div>
        <form class="signup container " method="POST" id="form" >
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label "><strong>Username</strong></label>
                <input type="text" class="form-control" placeholder="Enter your username" id="name" name="username" >
                <small id="messagename" class="text-danger"></small>
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label "><strong>Email</strong></label>
                <input type="text" class="form-control" placeholder="Enter your username" id="email" name="email" >
                <small id="messageemail" class="text-danger"></small>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                <input type="password" class="form-control" placeholder="Enter your password" id="password"  name="password">
                <small id="messagepassword" class="text-danger "></small>
            </div>
            <div class="mb-3">    
                <label for="exampleInputPassword1" class="form-label"><strong>Confirm your Password</strong></label>
                <input type="password" class="form-control" placeholder="Confirm your  password" id="confpassword" name="confpassword">
                <small id="messageconfpassword" class="text-danger "></small>
            </div>
                <button type="submit" class="btn bg-secondary text-white w-100"  name="submit" >SIGN UP</button>
                <p class="mt-3 text-center text">already have an account ?<b><a class="text-decoration-none" href="login.php">login</a></b> here.</p>
        </form>
   
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>