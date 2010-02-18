<?php

/**
 * Usuarios form base class.
 *
 * @method Usuarios getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'senha'         => new sfWidgetFormInputText(),
      'administrador' => new sfWidgetFormInputText(),
      'nome'          => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'senha'         => new sfValidatorString(array('max_length' => 45)),
      'administrador' => new sfValidatorInteger(array('required' => false)),
      'nome'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nome', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

}
