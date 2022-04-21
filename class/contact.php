<?php

    class Contact{
        
        public $id;
        public $name;
        public $phone;
        public $email;
        public $address;

     public function addcontact($userid){

        global $datb;
        $sql ="INSERT INTO contact (userid, name, phone, email, address) VALUES ('$userid', '$this->name', '$this->phone' , '$this->email' , '$this->address')";
        $datb->query($sql);
    }

     public function get_contact($userid){
       
       global $datb;
       $sql = "SELECT * FROM contact WHERE userid = $userid";
       $query = $datb->query($sql);
       return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

     public function get_id_contact($id){
      
       global $datb;
       $sql = "SELECT * FROM contact WHERE id = $id";
       $query = $datb->query($sql);
       return mysqli_fetch_assoc($query);
    }

     public function updatecontact($id){
       
       global $datb;
       $sql = "UPDATE contact SET name = '$this->name', email = '$this->email', phone='$this->phone', address = '$this->address' WHERE id = $id";
       $datb->query($sql);
    }

     public function deletecontact($id){

        global $datb;
        $sql = "DELETE FROM contact WHERE id = $id";
        $datb->query($sql);
    

    }

}


