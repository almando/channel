<?php

/**
 * Vendedor form base class.
 *
 * @method Vendedor getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVendedorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'   => new sfWidgetFormInputHidden(),
      'nome'     => new sfWidgetFormInputText(),
      'comissao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nome'     => new sfValidatorString(array('max_length' => 105)),
      'comissao' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

}
