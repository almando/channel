<?php

/**
 * Os form base class.
 *
 * @method Os getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'numeroos'        => new sfWidgetFormInputText(),
      'numerocontrato'  => new sfWidgetFormInputText(),
      'dataos'          => new sfWidgetFormDateTime(),
      'horaos'          => new sfWidgetFormInputText(),
      'observacao'      => new sfWidgetFormInputText(),
      'canalalto'       => new sfWidgetFormInputText(),
      'canalbaixo'      => new sfWidgetFormInputText(),
      'tecnico'         => new sfWidgetFormInputText(),
      'conclusaodata'   => new sfWidgetFormDateTime(),
      'conclusaohora'   => new sfWidgetFormInputText(),
      'valoros'         => new sfWidgetFormInputText(),
      'tiporecebimento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'numeroos'        => new sfValidatorString(array('max_length' => 15)),
      'numerocontrato'  => new sfValidatorString(array('max_length' => 15)),
      'dataos'          => new sfValidatorDateTime(array('required' => false)),
      'horaos'          => new sfValidatorString(array('max_length' => 15)),
      'observacao'      => new sfValidatorString(array('max_length' => 240)),
      'canalalto'       => new sfValidatorInteger(array('required' => false)),
      'canalbaixo'      => new sfValidatorInteger(array('required' => false)),
      'tecnico'         => new sfValidatorString(array('max_length' => 105)),
      'conclusaodata'   => new sfValidatorDateTime(array('required' => false)),
      'conclusaohora'   => new sfValidatorString(array('max_length' => 15)),
      'valoros'         => new sfValidatorNumber(array('required' => false)),
      'tiporecebimento' => new sfValidatorString(array('max_length' => 3)),
    ));

    $this->widgetSchema->setNameFormat('os[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Os';
  }

}
