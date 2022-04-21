<?php 
      require 'class/connect.php'; 
      require 'class/user.php'; 
       session_start(); 
         if (!isset($_SESSION["username"])){
           header("location: login.php");
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
    <title>Cantact</title>
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
                  <a href="contactlist/contactlist.php" class="nav-item nav-link text-light">Contact</a>
                  </div>
                  <div class="navbar-nav ms-auto">
                      <a href="logout.php" class="nav-item nav-link text-light">logout</a>
                  </div>
              </div>
          </div>
  </nav>

  <div class="container">
    <h3 class="mt-5"><b>Welcome, </b></h3>
    <h4 class="mt-4"><strong>Your Profil:</strong></h4>
    <table class="table">
        <thead>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Username:
              <span><strong><?php echo $_SESSION['username']  ?></strong></span>
            </th>
            <td></td> 
          </tr>
          <tr>
            <th scope="row">Signup Date:
              <span><strong><?php echo $_SESSION['signup_date'] ?></strong></span>
            </th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Last Login:
               <span><strong><?php echo $_SESSION['last_login'] ?></strong></span>
            </th>
            <td colspan="2"></td>
          </tr>
        </tbody>
      </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>