<?php

/**
 * Servicosos form base class.
 *
 * @method Servicosos getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseServicososForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numeroos'      => new sfWidgetFormInputHidden(),
      'descricao'     => new sfWidgetFormInputText(),
      'valor'         => new sfWidgetFormInputText(),
      'caixa'         => new sfWidgetFormInputText(),
      'contasreceber' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'numeroos'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numeroos', 'required' => false)),
      'descricao'     => new sfValidatorString(array('max_length' => 90)),
      'valor'         => new sfValidatorNumber(array('required' => false)),
      'caixa'         => new sfValidatorString(array('max_length' => 18)),
      'contasreceber' => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('servicosos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicosos';
  }

}
