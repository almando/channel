<?php

/**
 * SfGuardUser filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSfGuardUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'algorithm'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salt'           => new sfWidgetFormFilterInput(),
      'password'       => new sfWidgetFormFilterInput(),
      'is_active'      => new sfWidgetFormFilterInput(),
      'is_super_admin' => new sfWidgetFormFilterInput(),
      'last_login'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'username'       => new sfValidatorPass(array('required' => false)),
      'algorithm'      => new sfValidatorPass(array('required' => false)),
      'salt'           => new sfValidatorPass(array('required' => false)),
      'password'       => new sfValidatorPass(array('required' => false)),
      'is_active'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_super_admin' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_login'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SfGuardUser';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'username'       => 'Text',
      'algorithm'      => 'Text',
      'salt'           => 'Text',
      'password'       => 'Text',
      'is_active'      => 'Number',
      'is_super_admin' => 'Number',
      'last_login'     => 'Date',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
