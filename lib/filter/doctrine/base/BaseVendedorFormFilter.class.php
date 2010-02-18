<?php

/**
 * Vendedor filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVendedorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comissao' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome'     => new sfValidatorPass(array('required' => false)),
      'comissao' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vendedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

  public function getFields()
  {
    return array(
      'codigo'   => 'Text',
      'nome'     => 'Text',
      'comissao' => 'Number',
    );
  }
}
