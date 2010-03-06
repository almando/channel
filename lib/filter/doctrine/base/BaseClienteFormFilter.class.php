<?php

/**
 * Cliente filter form base class.
 *
 * @package    test_laiguAdminTheme
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClienteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'endereco'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bairro'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cidade'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cep'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transversalinicial' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transversalfinal'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefone'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contato'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fax'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pessoafisica'       => new sfWidgetFormFilterInput(),
      'cgc'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ie'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cpf'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'profissao'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'datanascimento'     => new sfWidgetFormFilterInput(),
      'rg'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nome'               => new sfValidatorPass(array('required' => false)),
      'endereco'           => new sfValidatorPass(array('required' => false)),
      'bairro'             => new sfValidatorPass(array('required' => false)),
      'cidade'             => new sfValidatorPass(array('required' => false)),
      'estado'             => new sfValidatorPass(array('required' => false)),
      'cep'                => new sfValidatorPass(array('required' => false)),
      'transversalinicial' => new sfValidatorPass(array('required' => false)),
      'transversalfinal'   => new sfValidatorPass(array('required' => false)),
      'telefone'           => new sfValidatorPass(array('required' => false)),
      'contato'            => new sfValidatorPass(array('required' => false)),
      'fax'                => new sfValidatorPass(array('required' => false)),
      'email'              => new sfValidatorPass(array('required' => false)),
      'pessoafisica'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cgc'                => new sfValidatorPass(array('required' => false)),
      'ie'                 => new sfValidatorPass(array('required' => false)),
      'cpf'                => new sfValidatorPass(array('required' => false)),
      'profissao'          => new sfValidatorPass(array('required' => false)),
      'datanascimento'     => new sfValidatorPass(array('required' => false)),
      'rg'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cliente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cliente';
  }

  public function getFields()
  {
    return array(
      'codigo'             => 'Text',
      'nome'               => 'Text',
      'endereco'           => 'Text',
      'bairro'             => 'Text',
      'cidade'             => 'Text',
      'estado'             => 'Text',
      'cep'                => 'Text',
      'transversalinicial' => 'Text',
      'transversalfinal'   => 'Text',
      'telefone'           => 'Text',
      'contato'            => 'Text',
      'fax'                => 'Text',
      'email'              => 'Text',
      'pessoafisica'       => 'Number',
      'cgc'                => 'Text',
      'ie'                 => 'Text',
      'cpf'                => 'Text',
      'profissao'          => 'Text',
      'datanascimento'     => 'Text',
      'rg'                 => 'Text',
    );
  }
}
