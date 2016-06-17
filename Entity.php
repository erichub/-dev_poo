<?php


/**
 * class Entity
 *
 */
abstract class Entity implements ContentEntityInterface {

  // abstract : class abstract car ne sera jamais instancié ($... = new ...)
  /** Aggregations: */

  // abstract : force les developpeurs à implémenter une méthode

  /** Compositions: */

   /*** Attributes: ***/

  public $created;
  /**
   *
   *
  */
  public $update;

  private function hydrate($data, $entity) {

      foreach ($data as $property => $value) {

        if (property_exists($entity, $property)) {
          $entity->$property = $value;
        }

      }
      return $entity;
    }


  public static function create($data) {

    // $user = new UserEntity;

    $entity = get_called_class();
    return self::hydrate($data, new $entity);

  } // end of member function create
    // self est une class
    // ->this est un objet
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

      // ceci correspond à ce que fait doctrine dans symphony

      $_db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');
      $entity_class = get_class($this); // => récupère UserEntity
      $class = str_replace('Entity', 'Manager', $entity_class); // => UserManager
      $manager = new $class($db); // => récupère UserManager($db);
      $manager->flush($this); // récupère terme Symphony
      return $this;

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
