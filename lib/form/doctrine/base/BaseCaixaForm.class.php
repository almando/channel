<?php

/**
 * Caixa form base class.
 *
 * @method Caixa getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCaixaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'lancamento'            => new sfWidgetFormInputHidden(),
      'custo'                 => new sfWidgetFormInputText(),
      'numerodocumento'       => new sfWidgetFormInputText(),
      'valor'                 => new sfWidgetFormInputText(),
      'data'                  => new sfWidgetFormDateTime(),
      'historico'             => new sfWidgetFormInputText(),
      'usuario'               => new sfWidgetFormInputText(),
      'contrato'              => new sfWidgetFormInputText(),
      'contacorrente'         => new sfWidgetFormInputText(),
      'registrocontacorrente' => new sfWidgetFormInputText(),
      'cheque'                => new sfWidgetFormInputText(),
      'bompara'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'lancamento'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'lancamento', 'required' => false)),
      'custo'                 => new sfValidatorString(array('max_length' => 90)),
      'numerodocumento'       => new sfValidatorString(array('max_length' => 30)),
      'valor'                 => new sfValidatorNumber(),
      'data'                  => new sfValidatorDateTime(),
      'historico'             => new sfValidatorString(array('max_length' => 240)),
      'usuario'               => new sfValidatorString(array('max_length' => 60)),
      'contrato'              => new sfValidatorString(array('max_length' => 15)),
      'contacorrente'         => new sfValidatorString(array('max_length' => 30)),
      'registrocontacorrente' => new sfValidatorInteger(array('required' => false)),
      'cheque'                => new sfValidatorInteger(array('required' => false)),
      'bompara'               => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('caixa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Caixa';
  }

}
