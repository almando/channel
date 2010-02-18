<?php

/**
 * Contrato filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContratoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numerocontrato'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigocliente'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cliente'), 'add_empty' => true)),
      'datacontrato'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tipocontrato'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'categoria'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'area'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numeroaparelho'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerocircuito'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipopagamento'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diapagamento'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valoradesao'         => new sfWidgetFormFilterInput(),
      'valormanutencao'     => new sfWidgetFormFilterInput(),
      'parcelasadesao'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datapagamentoadesao' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pontosadicionais'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valorpontoadcional'  => new sfWidgetFormFilterInput(),
      'observacao'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suspenso'            => new sfWidgetFormFilterInput(),
      'aviso1'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'aviso2'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'datacorte'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'dataligacao'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'numerocc'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'numerocontrato'      => new sfValidatorPass(array('required' => false)),
      'codigocliente'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cliente'), 'column' => 'codigo')),
      'datacontrato'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tipocontrato'        => new sfValidatorPass(array('required' => false)),
      'categoria'           => new sfValidatorPass(array('required' => false)),
      'area'                => new sfValidatorPass(array('required' => false)),
      'numeroaparelho'      => new sfValidatorPass(array('required' => false)),
      'numerocircuito'      => new sfValidatorPass(array('required' => false)),
      'tipopagamento'       => new sfValidatorPass(array('required' => false)),
      'diapagamento'        => new sfValidatorPass(array('required' => false)),
      'valoradesao'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valormanutencao'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'parcelasadesao'      => new sfValidatorPass(array('required' => false)),
      'datapagamentoadesao' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'pontosadicionais'    => new sfValidatorPass(array('required' => false)),
      'valorpontoadcional'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'observacao'          => new sfValidatorPass(array('required' => false)),
      'suspenso'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aviso1'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'aviso2'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'datacorte'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dataligacao'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'numerocc'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contrato_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contrato';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'numerocontrato'      => 'Text',
      'codigocliente'       => 'ForeignKey',
      'datacontrato'        => 'Date',
      'tipocontrato'        => 'Text',
      'categoria'           => 'Text',
      'area'                => 'Text',
      'numeroaparelho'      => 'Text',
      'numerocircuito'      => 'Text',
      'tipopagamento'       => 'Text',
      'diapagamento'        => 'Text',
      'valoradesao'         => 'Number',
      'valormanutencao'     => 'Number',
      'parcelasadesao'      => 'Text',
      'datapagamentoadesao' => 'Date',
      'pontosadicionais'    => 'Text',
      'valorpontoadcional'  => 'Number',
      'observacao'          => 'Text',
      'suspenso'            => 'Number',
      'aviso1'              => 'Date',
      'aviso2'              => 'Date',
      'datacorte'           => 'Date',
      'dataligacao'         => 'Date',
      'numerocc'            => 'Text',
    );
  }
}
