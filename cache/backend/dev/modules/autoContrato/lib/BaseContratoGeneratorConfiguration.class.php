<?php

/**
 * contrato module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage contrato
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContratoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getCredentials($action)
  {
    if (0 === strpos($action, '_'))
    {
      $action = substr($action, 1);
    }

    return isset($this->configuration['credentials'][$action]) ? $this->configuration['credentials'][$action] : array();
  }
  
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%numerocontrato%% - %%codigocliente%% - %%datacontrato%% - %%tipocontrato%% - %%categoria%% - %%area%% - %%numeroaparelho%% - %%numerocircuito%% - %%tipopagamento%% - %%diapagamento%% - %%valoradesao%% - %%valormanutencao%% - %%parcelasadesao%% - %%datapagamentoadesao%% - %%pontosadicionais%% - %%valorpontoadcional%% - %%observacao%% - %%suspenso%% - %%aviso1%% - %%aviso2%% - %%datacorte%% - %%dataligacao%% - %%numerocc%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Contrato List';
  }

  public function getEditTitle()
  {
    return 'Edit Contrato';
  }

  public function getNewTitle()
  {
    return 'New Contrato';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'numerocontrato',  1 => 'codigocliente',  2 => 'datacontrato',  3 => 'tipocontrato',  4 => 'categoria',  5 => 'area',  6 => 'numeroaparelho',  7 => 'numerocircuito',  8 => 'tipopagamento',  9 => 'diapagamento',  10 => 'valoradesao',  11 => 'valormanutencao',  12 => 'parcelasadesao',  13 => 'datapagamentoadesao',  14 => 'pontosadicionais',  15 => 'valorpontoadcional',  16 => 'observacao',  17 => 'suspenso',  18 => 'aviso1',  19 => 'aviso2',  20 => 'datacorte',  21 => 'dataligacao',  22 => 'numerocc',);
  }

  // LAIGU Theme
  public function getEditDetail()
  {
    return array(  'contrato' =>   array(    'module' => 'contrato',    'params' =>     array(      'numerocontrato' => 'getNumerocontrato',    ),  ),);
  }


  public function getFieldsDefault()
  {
    return array(
      'numerocontrato' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'codigocliente' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datacontrato' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tipocontrato' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'categoria' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'area' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numeroaparelho' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numerocircuito' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tipopagamento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'diapagamento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'valoradesao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'valormanutencao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'parcelasadesao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datapagamentoadesao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pontosadicionais' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'valorpontoadcional' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'observacao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'suspenso' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'aviso1' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'aviso2' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datacorte' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'dataligacao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numerocc' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'numerocontrato' => array(),
      'codigocliente' => array(),
      'datacontrato' => array(),
      'tipocontrato' => array(),
      'categoria' => array(),
      'area' => array(),
      'numeroaparelho' => array(),
      'numerocircuito' => array(),
      'tipopagamento' => array(),
      'diapagamento' => array(),
      'valoradesao' => array(),
      'valormanutencao' => array(),
      'parcelasadesao' => array(),
      'datapagamentoadesao' => array(),
      'pontosadicionais' => array(),
      'valorpontoadcional' => array(),
      'observacao' => array(),
      'suspenso' => array(),
      'aviso1' => array(),
      'aviso2' => array(),
      'datacorte' => array(),
      'dataligacao' => array(),
      'numerocc' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'numerocontrato' => array(),
      'codigocliente' => array(),
      'datacontrato' => array(),
      'tipocontrato' => array(),
      'categoria' => array(),
      'area' => array(),
      'numeroaparelho' => array(),
      'numerocircuito' => array(),
      'tipopagamento' => array(),
      'diapagamento' => array(),
      'valoradesao' => array(),
      'valormanutencao' => array(),
      'parcelasadesao' => array(),
      'datapagamentoadesao' => array(),
      'pontosadicionais' => array(),
      'valorpontoadcional' => array(),
      'observacao' => array(),
      'suspenso' => array(),
      'aviso1' => array(),
      'aviso2' => array(),
      'datacorte' => array(),
      'dataligacao' => array(),
      'numerocc' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'numerocontrato' => array(),
      'codigocliente' => array(),
      'datacontrato' => array(),
      'tipocontrato' => array(),
      'categoria' => array(),
      'area' => array(),
      'numeroaparelho' => array(),
      'numerocircuito' => array(),
      'tipopagamento' => array(),
      'diapagamento' => array(),
      'valoradesao' => array(),
      'valormanutencao' => array(),
      'parcelasadesao' => array(),
      'datapagamentoadesao' => array(),
      'pontosadicionais' => array(),
      'valorpontoadcional' => array(),
      'observacao' => array(),
      'suspenso' => array(),
      'aviso1' => array(),
      'aviso2' => array(),
      'datacorte' => array(),
      'dataligacao' => array(),
      'numerocc' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'numerocontrato' => array(),
      'codigocliente' => array(),
      'datacontrato' => array(),
      'tipocontrato' => array(),
      'categoria' => array(),
      'area' => array(),
      'numeroaparelho' => array(),
      'numerocircuito' => array(),
      'tipopagamento' => array(),
      'diapagamento' => array(),
      'valoradesao' => array(),
      'valormanutencao' => array(),
      'parcelasadesao' => array(),
      'datapagamentoadesao' => array(),
      'pontosadicionais' => array(),
      'valorpontoadcional' => array(),
      'observacao' => array(),
      'suspenso' => array(),
      'aviso1' => array(),
      'aviso2' => array(),
      'datacorte' => array(),
      'dataligacao' => array(),
      'numerocc' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'numerocontrato' => array(),
      'codigocliente' => array(),
      'datacontrato' => array(),
      'tipocontrato' => array(),
      'categoria' => array(),
      'area' => array(),
      'numeroaparelho' => array(),
      'numerocircuito' => array(),
      'tipopagamento' => array(),
      'diapagamento' => array(),
      'valoradesao' => array(),
      'valormanutencao' => array(),
      'parcelasadesao' => array(),
      'datapagamentoadesao' => array(),
      'pontosadicionais' => array(),
      'valorpontoadcional' => array(),
      'observacao' => array(),
      'suspenso' => array(),
      'aviso1' => array(),
      'aviso2' => array(),
      'datacorte' => array(),
      'dataligacao' => array(),
      'numerocc' => array(),
    );
  }


  /**
   * Gets a new form object.
   *
   * @param  mixed $object
   *
   * @return sfForm
   */
  public function getForm($object = null, $options = array())
  {
    $class = $this->getFormClass();

    $form = new $class($object, $this->getFormOptions());

    $this->fixFormFields($form);

    return $form;
  }

  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'contratoForm';
  }

  /**
   * Removes visible fields not included for display.
   *
   * @param sfForm $form
   */
  protected function fixFormFields(sfForm $form)
  {
    $fieldsets = $this->getFormFields($form, $form->isNew() ? 'new' : 'edit');

    // flatten fields and collect names
    $fields = call_user_func_array('array_merge', array_values($fieldsets));
    $names = array_map(array($this, 'mapFieldName'), $fields);

    foreach ($form as $name => $field)
    {
      if (!$field->isHidden() && !in_array($name, $names))
      {
        unset($form[$name]);
      }
    }
  }

  public function getFormOptions()
  {
    return array();
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'contratoFormFilter';
  }
  
  public function getFilterForm($filters)
  {
    $class = $this->getFilterFormClass();

    return new $class($filters, $this->getFilterFormOptions());
  }

  public function getFilterFormOptions()
  {
    return array();
  }

  public function getFilterDefaults()
  {
    return array();
  }

  // LAIGU Theme
  public function getFilterParams()
  {
    return array();
  }


  public function getPager($model)
  {
    $class = $this->getPagerClass();

    return new $class($model, $this->getPagerMaxPerPage());
  }
  
  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }


  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
