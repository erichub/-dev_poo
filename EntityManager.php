<?php


/**
 * class EntityManager
 *
 */
abstract class EntityManager {

  // abstract : class abstract car ne sera jamais instancié ($... = new ...)
  /** Aggregations: */

  // abstract : force les developpeurs à implémenter une méthode

  /** Compositions: */

   /*** Attributes: ***/


   private $_db;

   public function __construct($db) {

       $this->_db = $db;


     }

   public function flush(UserEntity $entity) {

       if ($entity->id) {
         // UPDATE
         /*
         print '<pre>';
         print_r('UPDATE');
         print '</pre>';
         */
       }

         else {

           $query = $this->_db->prepare('INSERT INTO user (title, duration, program, price, type, created, updated )
           VALUES (:title, :duration, :program, :price, :type, NOW(), NOW())');
           }

           /*
           // INSERT
           print '<pre>';
           print_r('INSERT');
           print '</pre>';
           */

           $query->bindParam(':name', $user->name);
           $query->bindParam(':email', $user->email);
           $query->bindParam(':localisation', $user->localisation);
           $query->bindParam(':age', $user->age);
           //$query->bindParam(':create', $user->create);
           //$query->bindParam(':update', $user->update);
           $query->execute();

         }
       }
?>
