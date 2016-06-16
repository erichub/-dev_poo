<?php


/**
 * class User
 *
 */
class UserEntity
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   *
   * @access public
   */
  public $id;

  /**
   *
   * @access public
   */
  public $name;

  /**
   *
   * @access public
   */
  public $email;

  /**
   *
   * @access public
   */
  public $localisation;

  /**
   *
   * @access public
   */
  public $age;

  /**
   *
   * @access public
   */
  public $role;

  /**
   *
   * @access public
   */
  public $create;

  /**
   *
   * @access public
   */
  public $update;
    /*
    public function __construct($data) {
        $this->hydrate($data);
    }
    */
    private function hydrate($data) {

      $user = new UserEntity;

      foreach ($data as $property => $value) {

        if (property_exists(__CLASS__, $property)) {
          $user->$property = $value;
        }

      }
    }

    // __CLASS__ permet de connaître la class dans laquelle on est


    /*
    public function __construct($data) {
        $this->hydrate($data);
    }

    private function hydrate($data) {

      foreach ($data as $property => $value) {
        if (property_exists(self, $property)) {
          $this->property = $value;
        }

      }
    }

    */


  /**
   *
   *
   * @return void
   * @access public
   */
  public static function create($data) {

    $user = self::hydrate($data);
    return $user;

  } // end of member function create

  /**
   *
   *
   * @return void
   * @access public
   */
  public function delete() {
  } // end of member function delete

  /**
   *
   *
   * @return void
   * @access public
   */
  public function save() {

      $_db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');
      $manager = new UserManager($db);
      $manager->flush($this); // terme Symphony

  } // end of member function save

  /**
   *
   *
   * @return void
   * @access public
   */
  public function load() {
  } // end of member function load

  /**
   *
   *
   * @return void
   * @access public
   */
  public function connect() {
  } // end of member function connect

  /**
   *
   *
   * @return void
   * @access public
   */
  public function logout() {
  } // end of member function logout





} // end of User
?>


<?php
/*
  class User {
    public $id;
    public $name;
    public $email;
    public $localisation;
    public $age;
    public $role;
    public $create;
    public $upate;
  }
*/
?>
