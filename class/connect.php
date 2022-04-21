<?php
    class   Connectdb{
    
      public $connection;
    
      function __construct(){
        $this->database_connection();
      }
    
      public function database_connection(){
         $this->connection = new  mysqli('localhost', 'root', '', 'g-contact');
      }
    
      public function query($sql){
        return $this->connection->query($sql);
      }
    
    }
      $datb = new  Connectdb(); 
    ?>

   


   

    

