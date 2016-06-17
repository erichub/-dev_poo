<?php

class UserManager {

  private $_db;

    public function __construct($db) {

    $this->_db = $db;

  }

    public function flush(UserEntity $user) {

    if ($user->id) {
      // UPDATE
      /*
      print '<pre>';
      print_r('UPDATE');
      print '</pre>';
      */
    }

      else {

        $query = $this->_db->prepare('INSERT INTO user (name, email, localisation, age, created, updated )
        VALUES (:name, :email, :localisation, :age, NOW(), NOW())');
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
