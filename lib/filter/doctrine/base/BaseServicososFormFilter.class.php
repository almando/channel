<?php

/**
 * Servicosos filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseServicososFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descricao'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor'         => new sfWidgetFormFilterInput(),
      'caixa'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contasreceber' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'descricao'     => new sfValidatorPass(array('required' => false)),
      'valor'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'caixa'         => new sfValidatorPass(array('required' => false)),
      'contasreceber' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicosos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servicosos';
  }

  public function getFields()
  {
    return array(
      'numeroos'      => 'Text',
      'descricao'     => 'Text',
      'valor'         => 'Number',
      'caixa'         => 'Text',
      'contasreceber' => 'Text',
    );
  }
}
