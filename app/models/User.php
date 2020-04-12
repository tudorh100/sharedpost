<?php
  class User {
    // creating a database 
    private $db;

    public function __construct(){
      // instantiaitng the database object here
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Login User
    public function login($email, $password){
      $this->db->query('SELECT * FROM users WHERE email = :email');
      $this->db->bind(':email', $email);
//selectn a single data from the database
      $row = $this->db->single();
// tying to hash the pasword from database her
      $hashed_password = $row->password;
      // checkin if the database password and the one typed in matches here
      if(password_verify($password, $hashed_password)){
        //retunong all the all the data iin ths row
        return $row;
      } else {
        return false;
      }
    }

// public function login($email, $password){
//   // $password =sha1($password);
//   $this->db->query('SELECT * FROM users WHERE email = :email &&  password =:password');
//   $this->db->bind(':email', $email);
//   $this->db->bind(':password', $password);

//   $row = $this->db->resultSet();
 


  // $hashed_password = $row->password;
  // if(password_verify($password, $hashed_password)){
  //   return $row;
  // } else {
  //   return false;
    
  // }

    // Find user by email
    public function findUserByEmail($email){
      //selecting from db using prepared stament(:email) this is established on database.php file
      $this->db->query('SELECT * FROM users WHERE email = :email');
      // Bind value to the variable. this was established inn database.pphp file
      $this->db->bind(':email', $email);
      // and calling th single method of fetch established in database.php file
      $row = $this->db->single();

      // Check row 
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }