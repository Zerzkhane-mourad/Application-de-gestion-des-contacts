<?php
    require '../class/connect.php';
    require '../class/user.php';
    require '../class/contact.php';
    session_start();
        $contact = new Contact();
        $id = $_GET["updateid"];
        $dbcontact = $contact->get_id_contact($id);
        

    if (isset($_POST["update"])) {

        $userid = $_SESSION["userid"];
        extract($_POST);
        $contact->name = $name;
        $contact->email = $email;
        $contact->phone = $phone;
        $contact->address = $address;
        $contact->updatecontact($id);
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
    <title>Editer</title>
</head>
<body>
    <div class="container w-50 px-5 py-5 mt-5 pt-5 bg-light">
        <div>
                <h3 class="border-start border-secondary  border-5 mt-1 mx-5 px-1  "><strong>G-contact</strong></h3>
        </div>
        <div class="px-4 text-center">
                <p class="sign"><strong>Update Contact</strong></p>
        </div>
        <form class="d-flex flex-column" method="POST" name="form">
            <label class="form-label">name</label>
            <input type="text"  class="form-control " name="name" placeholder="Entrer le nom" value="<?php echo $dbcontact["name"]   ?>">
            <label class="form-label">email</label>
            <input type="text"  class="form-control " name="email" placeholder="Enter l'email" value="<?php echo $dbcontact["email"] ?>">
            <label class="form-label">Phone</label>
            <input type="tel"  class="form-control " name="phone" placeholder="Enter phone" value="<?php echo $dbcontact["phone"] ?>">
            <label class="form-label">Adresse</label>
            <input type="Adresse"  class="form-control " name="address" placeholder="Enter Adresse" value="<?php echo $dbcontact["address"] ?>">
            <input class="container btn bg-secondary text-white text-center mt-3 " type="submit" value="Update" name="update" >  
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>