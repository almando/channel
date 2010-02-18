<?php

/**
 * Custocc filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustoccFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'registro' => new sfWidgetFormFilterInput(),
      'custo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'registro' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'custo'    => new sfValidatorPass(array('required' => false)),
      'valor'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('custocc_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Custocc';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'registro' => 'Number',
      'custo'    => 'Text',
      'valor'    => 'Number',
    );
  }
}
