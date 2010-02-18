<?php

/**
 * Contasreceber filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContasreceberFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numerocontrato'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataemissao'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'datavencimento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'valor'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'controlecusto'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'historico'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datapagamento'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'desconto'        => new sfWidgetFormFilterInput(),
      'juros'           => new sfWidgetFormFilterInput(),
      'multa'           => new sfWidgetFormFilterInput(),
      'caixa'           => new sfWidgetFormFilterInput(),
      'numeroconta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cliente'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipocobranca'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lancamentocaixa' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'numerocontrato'  => new sfValidatorPass(array('required' => false)),
      'dataemissao'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'datavencimento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'valor'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'controlecusto'   => new sfValidatorPass(array('required' => false)),
      'historico'       => new sfValidatorPass(array('required' => false)),
      'datapagamento'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'desconto'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'juros'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'multa'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'caixa'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numeroconta'     => new sfValidatorPass(array('required' => false)),
      'cliente'         => new sfValidatorPass(array('required' => false)),
      'tipocobranca'    => new sfValidatorPass(array('required' => false)),
      'lancamentocaixa' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contasreceber_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contasreceber';
  }

  public function getFields()
  {
    return array(
      'numerodocumento' => 'Text',
      'numerocontrato'  => 'Text',
      'dataemissao'     => 'Date',
      'datavencimento'  => 'Date',
      'valor'           => 'Number',
      'controlecusto'   => 'Text',
      'historico'       => 'Text',
      'datapagamento'   => 'Date',
      'desconto'        => 'Number',
      'juros'           => 'Number',
      'multa'           => 'Number',
      'caixa'           => 'Number',
      'numeroconta'     => 'Text',
      'cliente'         => 'Text',
      'tipocobranca'    => 'Text',
      'lancamentocaixa' => 'Text',
    );
  }
}
