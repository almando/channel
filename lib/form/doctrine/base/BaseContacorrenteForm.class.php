<?php

/**
 * Contacorrente form base class.
 *
 * @method Contacorrente getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContacorrenteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'registro'       => new sfWidgetFormInputHidden(),
      'numerocc'       => new sfWidgetFormInputText(),
      'tipomovbanco'   => new sfWidgetFormInputText(),
      'numero'         => new sfWidgetFormInputText(),
      'nomefavorecido' => new sfWidgetFormInputText(),
      'dataemissao'    => new sfWidgetFormDateTime(),
      'predatado'      => new sfWidgetFormDateTime(),
      'historico'      => new sfWidgetFormInputText(),
      'conferido'      => new sfWidgetFormInputText(),
      'usuario'        => new sfWidgetFormInputText(),
      'caixa'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'registro'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'registro', 'required' => false)),
      'numerocc'       => new sfValidatorString(array('max_length' => 30)),
      'tipomovbanco'   => new sfValidatorString(array('max_length' => 3)),
      'numero'         => new sfValidatorString(array('max_length' => 30)),
      'nomefavorecido' => new sfValidatorString(array('max_length' => 120)),
      'dataemissao'    => new sfValidatorDateTime(),
      'predatado'      => new sfValidatorDateTime(array('required' => false)),
      'historico'      => new sfValidatorString(array('max_length' => 240)),
      'conferido'      => new sfValidatorInteger(array('required' => false)),
      'usuario'        => new sfValidatorString(array('max_length' => 60)),
      'caixa'          => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contacorrente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contacorrente';
  }

}
