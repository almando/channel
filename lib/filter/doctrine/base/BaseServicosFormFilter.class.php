<?php

/**
 * Servicos filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseServicosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'valor'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'controlecusto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'valor'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'controlecusto' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicos';
  }

  public function getFields()
  {
    return array(
      'descricao'     => 'Text',
      'valor'         => 'Number',
      'controlecusto' => 'Text',
    );
  }
}
