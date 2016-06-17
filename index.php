
<?php
/*
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


<?php
  /*
  function __autoload ($class_name) {


  print '<pre>$var => <br />';
  print_r($class_name);
  print "</pre>";
  print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';

  require_once 'base/' . $class_name . '.php';
  die();

  }

  require_once 'base/ContentEntityInterface.php';
  require_once 'base/EntityManager.php';
  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';
  require_once 'base/UserEntityCompany.php';
  */
  require_once 'base/Entity.php';


  function autoload ($class) {
/*
    print '<pre>$var => <br />';
    print_r($class);
    print "</pre>";
    print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';
*/
      }


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

$user = new UserEntity();

//$user = UserEntity::create($_POST)->save();


?>
