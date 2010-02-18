<?php

/**
 * Town filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTownFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zip'      => new sfWidgetFormFilterInput(),
      'town'     => new sfWidgetFormFilterInput(),
      'state_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('State'), 'add_empty' => true)),
      'country'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'zip'      => new sfValidatorPass(array('required' => false)),
      'town'     => new sfValidatorPass(array('required' => false)),
      'state_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('State'), 'column' => 'id')),
      'country'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('town_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Town';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'zip'      => 'Text',
      'town'     => 'Text',
      'state_id' => 'ForeignKey',
      'country'  => 'Text',
    );
  }
}
