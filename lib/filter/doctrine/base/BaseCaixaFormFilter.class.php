<?php

/**
 * Caixa filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCaixaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'custo'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerodocumento'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'data'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'historico'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contrato'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contacorrente'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'registrocontacorrente' => new sfWidgetFormFilterInput(),
      'cheque'                => new sfWidgetFormFilterInput(),
      'bompara'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'custo'                 => new sfValidatorPass(array('required' => false)),
      'numerodocumento'       => new sfValidatorPass(array('required' => false)),
      'valor'                 => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'data'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'historico'             => new sfValidatorPass(array('required' => false)),
      'usuario'               => new sfValidatorPass(array('required' => false)),
      'contrato'              => new sfValidatorPass(array('required' => false)),
      'contacorrente'         => new sfValidatorPass(array('required' => false)),
      'registrocontacorrente' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cheque'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bompara'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('caixa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Caixa';
  }

  public function getFields()
  {
    return array(
      'lancamento'            => 'Text',
      'custo'                 => 'Text',
      'numerodocumento'       => 'Text',
      'valor'                 => 'Number',
      'data'                  => 'Date',
      'historico'             => 'Text',
      'usuario'               => 'Text',
      'contrato'              => 'Text',
      'contacorrente'         => 'Text',
      'registrocontacorrente' => 'Number',
      'cheque'                => 'Number',
      'bompara'               => 'Date',
    );
  }
}
