<?php

/**
 * Contrato form base class.
 *
 * @method Contrato getObject() Returns the current form's model object
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContratoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numerocontrato'      => new sfWidgetFormInputHidden(),
      'codigocliente'       => new sfWidgetFormInputText(),
      'datacontrato'        => new sfWidgetFormInputText(),
      'tipocontrato'        => new sfWidgetFormInputText(),
      'categoria'           => new sfWidgetFormInputText(),
      'area'                => new sfWidgetFormInputText(),
      'numeroaparelho'      => new sfWidgetFormInputText(),
      'numerocircuito'      => new sfWidgetFormInputText(),
      'tipopagamento'       => new sfWidgetFormInputText(),
      'diapagamento'        => new sfWidgetFormInputText(),
      'valoradesao'         => new sfWidgetFormInputText(),
      'valormanutencao'     => new sfWidgetFormInputText(),
      'parcelasadesao'      => new sfWidgetFormInputText(),
      'datapagamentoadesao' => new sfWidgetFormInputText(),
      'pontosadicionais'    => new sfWidgetFormInputText(),
      'valorpontoadcional'  => new sfWidgetFormInputText(),
      'observacao'          => new sfWidgetFormInputText(),
      'suspenso'            => new sfWidgetFormInputText(),
      'aviso1'              => new sfWidgetFormInputText(),
      'aviso2'              => new sfWidgetFormInputText(),
      'datacorte'           => new sfWidgetFormInputText(),
      'dataligacao'         => new sfWidgetFormInputText(),
      'numerocc'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'numerocontrato'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numerocontrato', 'required' => false)),
      'codigocliente'       => new sfValidatorString(array('max_length' => 15)),
      'datacontrato'        => new sfValidatorPass(array('required' => false)),
      'tipocontrato'        => new sfValidatorString(array('max_length' => 60)),
      'categoria'           => new sfValidatorString(array('max_length' => 60)),
      'area'                => new sfValidatorString(array('max_length' => 60)),
      'numeroaparelho'      => new sfValidatorString(array('max_length' => 15)),
      'numerocircuito'      => new sfValidatorString(array('max_length' => 15)),
      'tipopagamento'       => new sfValidatorString(array('max_length' => 3)),
      'diapagamento'        => new sfValidatorString(array('max_length' => 6)),
      'valoradesao'         => new sfValidatorNumber(array('required' => false)),
      'valormanutencao'     => new sfValidatorNumber(array('required' => false)),
      'parcelasadesao'      => new sfValidatorString(array('max_length' => 6)),
      'datapagamentoadesao' => new sfValidatorPass(array('required' => false)),
      'pontosadicionais'    => new sfValidatorString(array('max_length' => 9)),
      'valorpontoadcional'  => new sfValidatorNumber(array('required' => false)),
      'observacao'          => new sfValidatorString(array('max_length' => 150)),
      'suspenso'            => new sfValidatorInteger(array('required' => false)),
      'aviso1'              => new sfValidatorPass(array('required' => false)),
      'aviso2'              => new sfValidatorPass(array('required' => false)),
      'datacorte'           => new sfValidatorPass(array('required' => false)),
      'dataligacao'         => new sfValidatorPass(),
      'numerocc'            => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('contrato[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contrato';
  }

}
