<?php

/**
 * Saldocaixa filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSaldocaixaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'data'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'saldodia'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dinheiro'     => new sfWidgetFormFilterInput(),
      'chequevista'  => new sfWidgetFormFilterInput(),
      'chequedatado' => new sfWidgetFormFilterInput(),
      'valoroutro1'  => new sfWidgetFormFilterInput(),
      'valoroutro2'  => new sfWidgetFormFilterInput(),
      'descoutro1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descoutro2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'data'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'saldodia'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dinheiro'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'chequevista'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'chequedatado' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valoroutro1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valoroutro2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'descoutro1'   => new sfValidatorPass(array('required' => false)),
      'descoutro2'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('saldocaixa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Saldocaixa';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'data'         => 'Date',
      'saldodia'     => 'Number',
      'dinheiro'     => 'Number',
      'chequevista'  => 'Number',
      'chequedatado' => 'Number',
      'valoroutro1'  => 'Number',
      'valoroutro2'  => 'Number',
      'descoutro1'   => 'Text',
      'descoutro2'   => 'Text',
    );
  }
}
