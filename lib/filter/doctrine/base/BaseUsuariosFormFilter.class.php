<?php

/**
 * Usuarios filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUsuariosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'senha'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'administrador' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'senha'         => new sfValidatorPass(array('required' => false)),
      'administrador' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('usuarios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

  public function getFields()
  {
    return array(
      'senha'         => 'Text',
      'administrador' => 'Number',
      'nome'          => 'Text',
    );
  }
}
