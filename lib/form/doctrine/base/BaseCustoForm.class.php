<?php

/**
 * Custo form base class.
 *
 * @method Custo getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descricao'     => new sfWidgetFormInputHidden(),
      'debitocredito' => new sfWidgetFormInputText(),
      'contacontabil' => new sfWidgetFormInputText(),
      'controlecusto' => new sfWidgetFormInputText(),
      'naoinserir'    => new sfWidgetFormInputText(),
      'grupo'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'descricao'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'descricao', 'required' => false)),
      'debitocredito' => new sfValidatorString(array('max_length' => 3)),
      'contacontabil' => new sfValidatorString(array('max_length' => 45)),
      'controlecusto' => new sfValidatorString(array('max_length' => 90)),
      'naoinserir'    => new sfValidatorInteger(array('required' => false)),
      'grupo'         => new sfValidatorString(array('max_length' => 60)),
    ));

    $this->widgetSchema->setNameFormat('custo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Custo';
  }

}
