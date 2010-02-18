<?php

/**
 * Tipocontrato form base class.
 *
 * @method Tipocontrato getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipocontratoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipocontrato'       => new sfWidgetFormInputHidden(),
      'valoradesao'        => new sfWidgetFormInputText(),
      'valormanutencao'    => new sfWidgetFormInputText(),
      'valorpontoadcional' => new sfWidgetFormInputText(),
      'quantidadecanais'   => new sfWidgetFormInputText(),
      'controlecusto'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tipocontrato'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tipocontrato', 'required' => false)),
      'valoradesao'        => new sfValidatorNumber(array('required' => false)),
      'valormanutencao'    => new sfValidatorNumber(array('required' => false)),
      'valorpontoadcional' => new sfValidatorNumber(array('required' => false)),
      'quantidadecanais'   => new sfValidatorString(array('max_length' => 9)),
      'controlecusto'      => new sfValidatorString(array('max_length' => 90)),
    ));

    $this->widgetSchema->setNameFormat('tipocontrato[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipocontrato';
  }

}
