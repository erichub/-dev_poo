<?php


/**
 * class FormLogin
 *
 */
class FormLogin
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**

   *
   * @access public
   */
  <input type ="email", name="email", placeholder="Votre e-mail"/>;

  public $email = [
    'field' => 'input';
    'type' => 'email';
    'name' => 'email';
    'Attributes' => [
      'placeholder' => 'Votre e-mail';
    ];

  ];

  /**
   *
   * @access public
   */
  <input type ="password", name="password", placeholder="Votre mot de passe"/>

  public $pass = [
    'field' => 'input';
    'type' => 'password';
    'name' => 'password';
    'Attributes' => [
      'placeholder' => 'Votre mot de passe';
    ];

  ];

  public function render() {
      $form_markup = '<form method='post'>';
      $form_markup .= $this->generateField($this->email);
      $form_markup .= $this->generateField($this->pass);
      $form_markup .= '</form>';

      return $form_markup;
  }




  private function generateField($field) {
  $field_markup .= '<' . $field['field']
  . ' type="' . $this->email['type']
  . '" name="' . $this->email['name'] . '" />';

  return $field_markup;
  }

  ?>





} // end of FormLogin
?>
