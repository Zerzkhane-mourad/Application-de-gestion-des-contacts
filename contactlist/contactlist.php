<?php  
   require '../class/connect.php';
   require '../class/user.php';
   require '../class/contact.php';
   session_start();
   if (!isset($_SESSION["username"])){
    header("location: ../login.php");

   } 

   $userid = $_SESSION["userid"];
   $contact = new Contact();
   $cont = $contact->get_contact($userid);
   
   if (isset($_POST["add"])) {
      $userid = $_SESSION["userid"];
      extract($_POST);
      $contact->name = $name;
      $contact->email = $email;
      $contact->phone = $phone;
      $contact->address = $address;

      $contact->addcontact($userid);
      header("location: contactlist.php");

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
    <title>Contacts List</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand text-light">Contact</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                <a href="../profil.php" class="nav-item nav-link text-light">Profil</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="../logout.php" class="nav-item nav-link text-light">logout</a>
                </div>
            </div>
          </div>
       </nav>
    <main class="w-75 m-auto">

    <div class="d-flex align-items-center justify-content-between m-5">
        <h1>Contacts List :</h1>
       <button class=" btn bg-secondary text-white " data-bs-toggle="modal" data-bs-target="#exampleModal" >Add new contact</button>
    </div>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col"></th>
            <th scope="col" ></th>
          </tr>
        </thead>
        <tbody>
        <?php  
            foreach($cont as $contact ){
            echo '<tr>';
            echo '<td class="align-middle">'.$contact["name"].'</td>';
            echo '<td class="align-middle">'.$contact["email"].'</td>';
            echo '<td class="align-middle">'.$contact["phone"].'</td>';
            echo '<td class="align-middle">'.$contact["address"].'</td>';
            echo '<td class="align-middle"><a href="edit.php?updateid='.$contact["id"].'">Edit</a></td>';
            echo '<td class="align-middle"><a href="delet.php?deliteid='.$contact["id"].'">Delete</a></td>';
            echo '</tr>';
            }
          
        ?>
        </tbody>
      </table>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="signinf bg-white">
                    <div>
                            <h3 class="border-start border-light border-5 mt-1 mx-5 px-1  "><strong>G-contact</strong></h3>
                    </div>
                    <div class="px-4 text-center">
                            <p class="sign"><strong>Add Contact</strong></p>
                    </div>
                      <form class="d-flex flex-column" method="POST" name="form">
                        <label class="form-label">name</label>
                        <input type="text"  class="form-control " name="name" placeholder="Entrer le nom">
                        <label class="form-label">email</label>
                        <input type="text"  class="form-control " name="email" placeholder="Enter l'email">
                        <label class="form-label">Phone</label>
                        <input type="tel"  class="form-control " name="phone" placeholder="Enter phone">
                        <label class="form-label">Addresse</label>
                        <input type="Adresse"  class="form-control "  name="address" placeholder="Enter Adresse">
                        <input class="container btn bg-secondary text-white text-center mt-3" type="submit" value="Add" name="add" >  
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div> 
  </div>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>