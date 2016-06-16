<?php
/**
 * class FormLogin
 *
 */
class FormRegister extends Form
{
  /** Aggregations: */
  /** Compositions: */
   /*** Attributes: ***/
  /**
   *
   * @access public
   */
  public $email = [
    'field' => 'input',
    'type' => 'email',
    'name' => 'email',
    'attributes' => [
      'placeholder' => 'Votre e-mail',
      'require' => TRUE,
    ],
  ];
  /**
   *
   * @access public
   */
  public $password = [
    'field' => 'input',
    'type' => 'password',
    'name' => 'password',
    'attributes' => [
      'placeholder' => 'Votre mot de passe',
      'require' => TRUE,
    ],
  ];
  /**
   *
   * @access public
   */
  public $name = [
    'field' => 'input',
    'type' => 'text',
    'name' => 'name',
    'attributes' => [
      'placeholder' => 'Votre nom complet',
    ],
  ];
  /**
   *
   * @access public
   */
  public $localisation = [
    'field' => 'input',
    'type' => 'text',
    'name' => 'localisation',
    'attributes' => [
      'placeholder' => 'Votre ville',
    ],
  ];
  /**
   *
   * @access public
   */
  public $age = [
    'field' => 'input',
    'type' => 'number',
    'name' => 'age',
    'attributes' => [
      'placeholder' => 'Votre age',
    ],
  ];
} // end of FormLogin
?>
