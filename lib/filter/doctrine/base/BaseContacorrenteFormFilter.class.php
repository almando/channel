<?php

/**
 * Contacorrente filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContacorrenteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numerocc'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipomovbanco'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nomefavorecido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataemissao'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'predatado'      => new sfWidgetFormFilterInput(),
      'historico'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'conferido'      => new sfWidgetFormFilterInput(),
      'usuario'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'caixa'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'numerocc'       => new sfValidatorPass(array('required' => false)),
      'tipomovbanco'   => new sfValidatorPass(array('required' => false)),
      'numero'         => new sfValidatorPass(array('required' => false)),
      'nomefavorecido' => new sfValidatorPass(array('required' => false)),
      'dataemissao'    => new sfValidatorPass(array('required' => false)),
      'predatado'      => new sfValidatorPass(array('required' => false)),
      'historico'      => new sfValidatorPass(array('required' => false)),
      'conferido'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'usuario'        => new sfValidatorPass(array('required' => false)),
      'caixa'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('contacorrente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contacorrente';
  }

  public function getFields()
  {
    return array(
      'registro'       => 'Number',
      'numerocc'       => 'Text',
      'tipomovbanco'   => 'Text',
      'numero'         => 'Text',
      'nomefavorecido' => 'Text',
      'dataemissao'    => 'Text',
      'predatado'      => 'Text',
      'historico'      => 'Text',
      'conferido'      => 'Number',
      'usuario'        => 'Text',
      'caixa'          => 'Number',
    );
  }
}
