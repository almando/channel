<?php

/**
 * Banco form base class.
 *
 * @method Banco getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBancoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numerocc'      => new sfWidgetFormInputHidden(),
      'titular'       => new sfWidgetFormInputText(),
      'banco'         => new sfWidgetFormInputText(),
      'agencia'       => new sfWidgetFormInputText(),
      'chequeinicial' => new sfWidgetFormInputText(),
      'chequefinal'   => new sfWidgetFormInputText(),
      'saldoreal'     => new sfWidgetFormInputText(),
      'saldobancario' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'numerocc'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numerocc', 'required' => false)),
      'titular'       => new sfValidatorString(array('max_length' => 120)),
      'banco'         => new sfValidatorString(array('max_length' => 105)),
      'agencia'       => new sfValidatorString(array('max_length' => 75)),
      'chequeinicial' => new sfValidatorString(array('max_length' => 30)),
      'chequefinal'   => new sfValidatorString(array('max_length' => 30)),
      'saldoreal'     => new sfValidatorNumber(array('required' => false)),
      'saldobancario' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('banco[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banco';
  }

}
