<?php

/**
 * Custo filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'debitocredito' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contacontabil' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'controlecusto' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'naoinserir'    => new sfWidgetFormFilterInput(),
      'grupo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'debitocredito' => new sfValidatorPass(array('required' => false)),
      'contacontabil' => new sfValidatorPass(array('required' => false)),
      'controlecusto' => new sfValidatorPass(array('required' => false)),
      'naoinserir'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grupo'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('custo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Custo';
  }

  public function getFields()
  {
    return array(
      'descricao'     => 'Text',
      'debitocredito' => 'Text',
      'contacontabil' => 'Text',
      'controlecusto' => 'Text',
      'naoinserir'    => 'Number',
      'grupo'         => 'Text',
    );
  }
}
