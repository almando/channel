<?php

/**
 * Servicos form base class.
 *
 * @method Servicos getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseServicosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descricao'     => new sfWidgetFormInputHidden(),
      'valor'         => new sfWidgetFormInputText(),
      'controlecusto' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'descricao'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'descricao', 'required' => false)),
      'valor'         => new sfValidatorNumber(),
      'controlecusto' => new sfValidatorString(array('max_length' => 90)),
    ));

    $this->widgetSchema->setNameFormat('servicos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicos';
  }

}
