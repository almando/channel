<?php

/**
 * Banco filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBancoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titular'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banco'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chequeinicial' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'chequefinal'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldoreal'     => new sfWidgetFormFilterInput(),
      'saldobancario' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titular'       => new sfValidatorPass(array('required' => false)),
      'banco'         => new sfValidatorPass(array('required' => false)),
      'agencia'       => new sfValidatorPass(array('required' => false)),
      'chequeinicial' => new sfValidatorPass(array('required' => false)),
      'chequefinal'   => new sfValidatorPass(array('required' => false)),
      'saldoreal'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'saldobancario' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('banco_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banco';
  }

  public function getFields()
  {
    return array(
      'numerocc'      => 'Text',
      'titular'       => 'Text',
      'banco'         => 'Text',
      'agencia'       => 'Text',
      'chequeinicial' => 'Text',
      'chequefinal'   => 'Text',
      'saldoreal'     => 'Number',
      'saldobancario' => 'Number',
    );
  }
}
