<?php 
namespace PlatziPHP;

class User {
  private $email;

  private $password;

  private $firstName;

  private $lastName;

  public function __construct($email, $password){
    $this->email = $email;
    $this->password = password_hash($password, password_default);
  }
}