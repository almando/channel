<?php

/**
 * Os filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseOsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numeroos'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numerocontrato'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataos'          => new sfWidgetFormFilterInput(),
      'horaos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacao'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'canalalto'       => new sfWidgetFormFilterInput(),
      'canalbaixo'      => new sfWidgetFormFilterInput(),
      'tecnico'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'conclusaodata'   => new sfWidgetFormFilterInput(),
      'conclusaohora'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valoros'         => new sfWidgetFormFilterInput(),
      'tiporecebimento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'numeroos'        => new sfValidatorPass(array('required' => false)),
      'numerocontrato'  => new sfValidatorPass(array('required' => false)),
      'dataos'          => new sfValidatorPass(array('required' => false)),
      'horaos'          => new sfValidatorPass(array('required' => false)),
      'observacao'      => new sfValidatorPass(array('required' => false)),
      'canalalto'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'canalbaixo'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tecnico'         => new sfValidatorPass(array('required' => false)),
      'conclusaodata'   => new sfValidatorPass(array('required' => false)),
      'conclusaohora'   => new sfValidatorPass(array('required' => false)),
      'valoros'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tiporecebimento' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('os_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Os';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'numeroos'        => 'Text',
      'numerocontrato'  => 'Text',
      'dataos'          => 'Text',
      'horaos'          => 'Text',
      'observacao'      => 'Text',
      'canalalto'       => 'Number',
      'canalbaixo'      => 'Number',
      'tecnico'         => 'Text',
      'conclusaodata'   => 'Text',
      'conclusaohora'   => 'Text',
      'valoros'         => 'Number',
      'tiporecebimento' => 'Text',
    );
  }
}
