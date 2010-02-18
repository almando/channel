<?php

/**
 * Tipodocumento form base class.
 *
 * @method Tipodocumento getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipodocumentoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descricao' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'descricao' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'descricao', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipodocumento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipodocumento';
  }

}
