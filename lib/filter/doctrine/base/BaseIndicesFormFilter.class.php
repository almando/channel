<?php

/**
 * Indices filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseIndicesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'juros' => new sfWidgetFormFilterInput(),
      'multa' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'juros' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'multa' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('indices_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Indices';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'juros' => 'Number',
      'multa' => 'Number',
    );
  }
}
