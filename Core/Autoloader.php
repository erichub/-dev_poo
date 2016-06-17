

<?php
 class autoloader {

   public function register() {
     spl_autoload_register(array(__CLASS__)('autoload'));
   }
 }


?>
