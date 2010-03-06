<?php

/**
 * Contaspagar form base class.
 *
 * @method Contaspagar getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContaspagarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'registro'         => new sfWidgetFormInputHidden(),
      'codigofornecedor' => new sfWidgetFormInputText(),
      'numerodocumento'  => new sfWidgetFormInputText(),
      'tipodocumento'    => new sfWidgetFormInputText(),
      'dataemissao'      => new sfWidgetFormInputText(),
      'datavencimento'   => new sfWidgetFormInputText(),
      'valor'            => new sfWidgetFormInputText(),
      'controlecusto'    => new sfWidgetFormInputText(),
      'historico'        => new sfWidgetFormInputText(),
      'datapagamento'    => new sfWidgetFormInputText(),
      'desconto'         => new sfWidgetFormInputText(),
      'juros'            => new sfWidgetFormInputText(),
      'multa'            => new sfWidgetFormInputText(),
      'caixa'            => new sfWidgetFormInputText(),
      'numeroconta'      => new sfWidgetFormInputText(),
      'numerocheque'     => new sfWidgetFormInputText(),
      'codigocompra'     => new sfWidgetFormInputText(),
      'predatado'        => new sfWidgetFormInputText(),
      'filial'           => new sfWidgetFormInputText(),
      'lancamentocaixa'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'registro'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'registro', 'required' => false)),
      'codigofornecedor' => new sfValidatorString(array('max_length' => 15)),
      'numerodocumento'  => new sfValidatorString(array('max_length' => 30)),
      'tipodocumento'    => new sfValidatorString(array('max_length' => 45)),
      'dataemissao'      => new sfValidatorPass(array('required' => false)),
      'datavencimento'   => new sfValidatorPass(array('required' => false)),
      'valor'            => new sfValidatorNumber(array('required' => false)),
      'controlecusto'    => new sfValidatorString(array('max_length' => 90)),
      'historico'        => new sfValidatorString(array('max_length' => 240)),
      'datapagamento'    => new sfValidatorPass(array('required' => false)),
      'desconto'         => new sfValidatorNumber(array('required' => false)),
      'juros'            => new sfValidatorNumber(array('required' => false)),
      'multa'            => new sfValidatorNumber(array('required' => false)),
      'caixa'            => new sfValidatorInteger(array('required' => false)),
      'numeroconta'      => new sfValidatorString(array('max_length' => 30)),
      'numerocheque'     => new sfValidatorString(array('max_length' => 30)),
      'codigocompra'     => new sfValidatorInteger(array('required' => false)),
      'predatado'        => new sfValidatorPass(array('required' => false)),
      'filial'           => new sfValidatorString(array('max_length' => 6)),
      'lancamentocaixa'  => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('contaspagar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contaspagar';
  }

}
