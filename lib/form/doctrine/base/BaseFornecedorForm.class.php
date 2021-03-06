<?php

/**
 * Fornecedor form base class.
 *
 * @method Fornecedor getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseFornecedorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'       => new sfWidgetFormInputHidden(),
      'nome'         => new sfWidgetFormInputText(),
      'endereco'     => new sfWidgetFormInputText(),
      'bairro'       => new sfWidgetFormInputText(),
      'cidade'       => new sfWidgetFormInputText(),
      'numero'       => new sfWidgetFormInputText(),
      'estado'       => new sfWidgetFormInputText(),
      'cep'          => new sfWidgetFormInputText(),
      'telefone'     => new sfWidgetFormInputText(),
      'contato'      => new sfWidgetFormInputText(),
      'fax'          => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'pessoafisica' => new sfWidgetFormInputText(),
      'cgc'          => new sfWidgetFormInputText(),
      'ie'           => new sfWidgetFormInputText(),
      'cpf'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo', 'required' => false)),
      'nome'         => new sfValidatorString(array('max_length' => 105)),
      'endereco'     => new sfValidatorString(array('max_length' => 90)),
      'bairro'       => new sfValidatorString(array('max_length' => 60)),
      'cidade'       => new sfValidatorString(array('max_length' => 60)),
      'numero'       => new sfValidatorString(array('max_length' => 15)),
      'estado'       => new sfValidatorString(array('max_length' => 6)),
      'cep'          => new sfValidatorString(array('max_length' => 30)),
      'telefone'     => new sfValidatorString(array('max_length' => 45)),
      'contato'      => new sfValidatorString(array('max_length' => 75)),
      'fax'          => new sfValidatorString(array('max_length' => 45)),
      'email'        => new sfValidatorString(array('max_length' => 150)),
      'pessoafisica' => new sfValidatorInteger(array('required' => false)),
      'cgc'          => new sfValidatorString(array('max_length' => 54)),
      'ie'           => new sfValidatorString(array('max_length' => 60)),
      'cpf'          => new sfValidatorString(array('max_length' => 42)),
    ));

    $this->widgetSchema->setNameFormat('fornecedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fornecedor';
  }

}
