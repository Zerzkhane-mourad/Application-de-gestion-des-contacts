<?php  
    
    class User{

        public $userid;
        public $username;
        public $email;
        public $password;
        public $signup_date;
        
        public function registre(){
           
           global $datb;
           $sql = "INSERT INTO users (username, email , password, signup_date) VALUES ('$this->username' , '$this->email' , '$this->password' , now())";
           $datb->query($sql);
           header("location: profil.php");
           

        }
        public  function get_id_user($userid){
       
          global $datb;
          $sql = "SELECT * FROM users WHERE userid = $userid";
          $query = $datb->query($sql);
          return mysqli_fetch_assoc($query);
        }
        public static function chek_login($email,$password){

            global $datb;
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
            $query = $datb->query($sql);
            if (!empty($query)) {
              return mysqli_fetch_object($query);
            } else {
              return false;
            }
        }
        public function login($user){

            if ($user) {
                session_start();
                $_SESSION["userid"] = $user->userid;
                $_SESSION["username"] = $user->username;
                $_SESSION["signup_date"] = $user->signup_date;
                $_SESSION["last_login"] = date('d/M/Y');
          
                $this->userid = $user->userid;
                $this->username = $user->username;
                $this->email = $user->email;
                $this->signup_date = $user->signup_date;
                header("location: profil.php");
        
            }
        }
        public function logout(){
     
          unset($_SESSION["username"]);
          
        } 

}
    
    
