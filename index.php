<?php
  require_once 'base/ContentEntityInterface.php';
  require_once 'base/Entity.php';
  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';

  $_POST = [
    'name' => 'JP',
    'email' => 'jp@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Paris',
    'age' => '25',
  ];

/*
print '<pre>$user => <br />';
print_r($user);
print "</pre>";
print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';
*/


$user = UserEntity::create($_POST)->save();


?>
