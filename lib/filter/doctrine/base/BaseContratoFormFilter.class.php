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
      'codigocliente'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datacontrato'        => new sfWidgetFormFilterInput(),
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
      'datapagamentoadesao' => new sfWidgetFormFilterInput(),
      'pontosadicionais'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valorpontoadcional'  => new sfWidgetFormFilterInput(),
      'observacao'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'suspenso'            => new sfWidgetFormFilterInput(),
      'aviso1'              => new sfWidgetFormFilterInput(),
      'aviso2'              => new sfWidgetFormFilterInput(),
      'datacorte'           => new sfWidgetFormFilterInput(),
      'dataligacao'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerocc'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigocliente'       => new sfValidatorPass(array('required' => false)),
      'datacontrato'        => new sfValidatorPass(array('required' => false)),
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
      'datapagamentoadesao' => new sfValidatorPass(array('required' => false)),
      'pontosadicionais'    => new sfValidatorPass(array('required' => false)),
      'valorpontoadcional'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'observacao'          => new sfValidatorPass(array('required' => false)),
      'suspenso'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aviso1'              => new sfValidatorPass(array('required' => false)),
      'aviso2'              => new sfValidatorPass(array('required' => false)),
      'datacorte'           => new sfValidatorPass(array('required' => false)),
      'dataligacao'         => new sfValidatorPass(array('required' => false)),
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
      'numerocontrato'      => 'Text',
      'codigocliente'       => 'Text',
      'datacontrato'        => 'Text',
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
      'datapagamentoadesao' => 'Text',
      'pontosadicionais'    => 'Text',
      'valorpontoadcional'  => 'Number',
      'observacao'          => 'Text',
      'suspenso'            => 'Number',
      'aviso1'              => 'Text',
      'aviso2'              => 'Text',
      'datacorte'           => 'Text',
      'dataligacao'         => 'Text',
      'numerocc'            => 'Text',
    );
  }
}
