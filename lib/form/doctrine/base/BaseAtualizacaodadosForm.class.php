<?php

/**
 * Atualizacaodados form base class.
 *
 * @method Atualizacaodados getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAtualizacaodadosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'nome'            => new sfWidgetFormInputText(),
      'cpf'             => new sfWidgetFormInputText(),
      'datanascimento'  => new sfWidgetFormInputText(),
      'endereco'        => new sfWidgetFormInputText(),
      'bairro'          => new sfWidgetFormInputText(),
      'cep'             => new sfWidgetFormInputText(),
      'fonefixo'        => new sfWidgetFormInputText(),
      'fonemovel'       => new sfWidgetFormInputText(),
      'emailprincipal'  => new sfWidgetFormInputText(),
      'emailsegundario' => new sfWidgetFormInputText(),
      'bancoconta'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'nome'            => new sfValidatorString(array('max_length' => 90)),
      'cpf'             => new sfValidatorString(array('max_length' => 15)),
      'datanascimento'  => new sfValidatorString(array('max_length' => 10)),
      'endereco'        => new sfValidatorString(array('max_length' => 90)),
      'bairro'          => new sfValidatorString(array('max_length' => 90)),
      'cep'             => new sfValidatorString(array('max_length' => 90)),
      'fonefixo'        => new sfValidatorString(array('max_length' => 12)),
      'fonemovel'       => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'emailprincipal'  => new sfValidatorString(array('max_length' => 60)),
      'emailsegundario' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'bancoconta'      => new sfValidatorString(array('max_length' => 12)),
    ));

    $this->widgetSchema->setNameFormat('atualizacaodados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Atualizacaodados';
  }

}
