<?php

require_once 'base/UserManager.php';
require_once 'base/UserEntity.php';
require_once 'base/UserEntityCompany.php';


$_POST = [
  'name' => 'eric',
  'email' => 'email@mail.com',
  'password'=> 'p@$$w0rd',
  'localisation' => 'paris',
  'age' => '25',
];

$user = UserEntity::create($_POST);
$user = new userEntity($_POST);
$user = new UserEntityCompany($_POST);

// $user = new UserEntity();

$user->name = $_POST['name'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->localisation = $_POST['localisation'];
$user->age = $_POST['age'];

$user->create = time();
$user->update = time();

/*
print '<pre>';
print_r($user);
print '</pre>';
*/

$user->save();

?>
