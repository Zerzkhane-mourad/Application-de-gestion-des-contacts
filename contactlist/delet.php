<?php 
      require '../class/connect.php';
      require '../class/user.php';
      require '../class/contact.php';
      
      $contact = new Contact;
    
      if (isset($_GET["deliteid"])) {
        
        $id = $_GET["deliteid"];
        $contact->deletecontact($id);
        header("location: contactlist.php");
    }
?>      