<?php

/**
 * Saldocaixa form base class.
 *
 * @method Saldocaixa getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSaldocaixaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'data'         => new sfWidgetFormDateTime(),
      'saldodia'     => new sfWidgetFormInputText(),
      'dinheiro'     => new sfWidgetFormInputText(),
      'chequevista'  => new sfWidgetFormInputText(),
      'chequedatado' => new sfWidgetFormInputText(),
      'valoroutro1'  => new sfWidgetFormInputText(),
      'valoroutro2'  => new sfWidgetFormInputText(),
      'descoutro1'   => new sfWidgetFormInputText(),
      'descoutro2'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'data'         => new sfValidatorDateTime(),
      'saldodia'     => new sfValidatorNumber(),
      'dinheiro'     => new sfValidatorNumber(array('required' => false)),
      'chequevista'  => new sfValidatorNumber(array('required' => false)),
      'chequedatado' => new sfValidatorNumber(array('required' => false)),
      'valoroutro1'  => new sfValidatorNumber(array('required' => false)),
      'valoroutro2'  => new sfValidatorNumber(array('required' => false)),
      'descoutro1'   => new sfValidatorString(array('max_length' => 90)),
      'descoutro2'   => new sfValidatorString(array('max_length' => 90)),
    ));

    $this->widgetSchema->setNameFormat('saldocaixa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Saldocaixa';
  }

}
