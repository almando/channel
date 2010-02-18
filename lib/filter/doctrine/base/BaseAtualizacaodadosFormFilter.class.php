<?php

/**
 * Atualizacaodados filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAtualizacaodadosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cpf'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datanascimento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'endereco'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bairro'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cep'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fonefixo'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fonemovel'       => new sfWidgetFormFilterInput(),
      'emailprincipal'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'emailsegundario' => new sfWidgetFormFilterInput(),
      'bancoconta'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nome'            => new sfValidatorPass(array('required' => false)),
      'cpf'             => new sfValidatorPass(array('required' => false)),
      'datanascimento'  => new sfValidatorPass(array('required' => false)),
      'endereco'        => new sfValidatorPass(array('required' => false)),
      'bairro'          => new sfValidatorPass(array('required' => false)),
      'cep'             => new sfValidatorPass(array('required' => false)),
      'fonefixo'        => new sfValidatorPass(array('required' => false)),
      'fonemovel'       => new sfValidatorPass(array('required' => false)),
      'emailprincipal'  => new sfValidatorPass(array('required' => false)),
      'emailsegundario' => new sfValidatorPass(array('required' => false)),
      'bancoconta'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('atualizacaodados_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Atualizacaodados';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'nome'            => 'Text',
      'cpf'             => 'Text',
      'datanascimento'  => 'Text',
      'endereco'        => 'Text',
      'bairro'          => 'Text',
      'cep'             => 'Text',
      'fonefixo'        => 'Text',
      'fonemovel'       => 'Text',
      'emailprincipal'  => 'Text',
      'emailsegundario' => 'Text',
      'bancoconta'      => 'Text',
    );
  }
}
