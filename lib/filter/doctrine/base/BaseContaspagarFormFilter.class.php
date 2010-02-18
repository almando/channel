<?php

/**
 * Contaspagar filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContaspagarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigofornecedor' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerodocumento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipodocumento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataemissao'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'datavencimento'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'valor'            => new sfWidgetFormFilterInput(),
      'controlecusto'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'historico'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datapagamento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'desconto'         => new sfWidgetFormFilterInput(),
      'juros'            => new sfWidgetFormFilterInput(),
      'multa'            => new sfWidgetFormFilterInput(),
      'caixa'            => new sfWidgetFormFilterInput(),
      'numeroconta'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerocheque'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigocompra'     => new sfWidgetFormFilterInput(),
      'predatado'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'filial'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lancamentocaixa'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigofornecedor' => new sfValidatorPass(array('required' => false)),
      'numerodocumento'  => new sfValidatorPass(array('required' => false)),
      'tipodocumento'    => new sfValidatorPass(array('required' => false)),
      'dataemissao'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'datavencimento'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'valor'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'controlecusto'    => new sfValidatorPass(array('required' => false)),
      'historico'        => new sfValidatorPass(array('required' => false)),
      'datapagamento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'desconto'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'juros'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'multa'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'caixa'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numeroconta'      => new sfValidatorPass(array('required' => false)),
      'numerocheque'     => new sfValidatorPass(array('required' => false)),
      'codigocompra'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'predatado'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'filial'           => new sfValidatorPass(array('required' => false)),
      'lancamentocaixa'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contaspagar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contaspagar';
  }

  public function getFields()
  {
    return array(
      'registro'         => 'Number',
      'codigofornecedor' => 'Text',
      'numerodocumento'  => 'Text',
      'tipodocumento'    => 'Text',
      'dataemissao'      => 'Date',
      'datavencimento'   => 'Date',
      'valor'            => 'Number',
      'controlecusto'    => 'Text',
      'historico'        => 'Text',
      'datapagamento'    => 'Date',
      'desconto'         => 'Number',
      'juros'            => 'Number',
      'multa'            => 'Number',
      'caixa'            => 'Number',
      'numeroconta'      => 'Text',
      'numerocheque'     => 'Text',
      'codigocompra'     => 'Number',
      'predatado'        => 'Date',
      'filial'           => 'Text',
      'lancamentocaixa'  => 'Text',
    );
  }
}
