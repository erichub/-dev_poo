<?php


/**
 * class User
 *
 */
class Entity
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/


  private function hydrate($data, $entity) {

      foreach ($data as $property => $value) {

        if (property_exists(__CLASS__, $property)) {
          $entity->$property = $value;
        }

      }
      return $entity;
    }



  /**
   *
   *
   * @return void
   * @access public
   */
  public static function create($data) {

    // $user = new UserEntity;

    $user = self::hydrate($data, new UserEntity);

  } // end of member function create
    // self est une class
    // ->this est un objet
  /**
   *
   *
   * @return void
   * @access public
   */
  public function delete($data) {
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



} // end of User
?>
