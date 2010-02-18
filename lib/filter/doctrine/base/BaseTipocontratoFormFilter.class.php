<?php

/**
 * Tipocontrato filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipocontratoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'valoradesao'        => new sfWidgetFormFilterInput(),
      'valormanutencao'    => new sfWidgetFormFilterInput(),
      'valorpontoadcional' => new sfWidgetFormFilterInput(),
      'quantidadecanais'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'controlecusto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'valoradesao'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valormanutencao'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valorpontoadcional' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'quantidadecanais'   => new sfValidatorPass(array('required' => false)),
      'controlecusto'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipocontrato_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipocontrato';
  }

  public function getFields()
  {
    return array(
      'tipocontrato'       => 'Text',
      'valoradesao'        => 'Number',
      'valormanutencao'    => 'Number',
      'valorpontoadcional' => 'Number',
      'quantidadecanais'   => 'Text',
      'controlecusto'      => 'Text',
    );
  }
}
