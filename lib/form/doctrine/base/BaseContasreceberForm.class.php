<?php

/**
 * Contasreceber form base class.
 *
 * @method Contasreceber getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContasreceberForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numerodocumento' => new sfWidgetFormInputHidden(),
      'numerocontrato'  => new sfWidgetFormInputText(),
      'dataemissao'     => new sfWidgetFormInputText(),
      'datavencimento'  => new sfWidgetFormInputText(),
      'valor'           => new sfWidgetFormInputText(),
      'controlecusto'   => new sfWidgetFormInputText(),
      'historico'       => new sfWidgetFormInputText(),
      'datapagamento'   => new sfWidgetFormInputText(),
      'desconto'        => new sfWidgetFormInputText(),
      'juros'           => new sfWidgetFormInputText(),
      'multa'           => new sfWidgetFormInputText(),
      'caixa'           => new sfWidgetFormInputText(),
      'numeroconta'     => new sfWidgetFormInputText(),
      'cliente'         => new sfWidgetFormInputText(),
      'tipocobranca'    => new sfWidgetFormInputText(),
      'lancamentocaixa' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'numerodocumento' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numerodocumento', 'required' => false)),
      'numerocontrato'  => new sfValidatorString(array('max_length' => 15)),
      'dataemissao'     => new sfValidatorPass(),
      'datavencimento'  => new sfValidatorPass(),
      'valor'           => new sfValidatorNumber(),
      'controlecusto'   => new sfValidatorString(array('max_length' => 90)),
      'historico'       => new sfValidatorString(array('max_length' => 240)),
      'datapagamento'   => new sfValidatorPass(array('required' => false)),
      'desconto'        => new sfValidatorNumber(array('required' => false)),
      'juros'           => new sfValidatorNumber(array('required' => false)),
      'multa'           => new sfValidatorNumber(array('required' => false)),
      'caixa'           => new sfValidatorInteger(array('required' => false)),
      'numeroconta'     => new sfValidatorString(array('max_length' => 30)),
      'cliente'         => new sfValidatorString(array('max_length' => 15)),
      'tipocobranca'    => new sfValidatorString(array('max_length' => 3)),
      'lancamentocaixa' => new sfValidatorString(array('max_length' => 18)),
    ));

    $this->widgetSchema->setNameFormat('contasreceber[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contasreceber';
  }

}
