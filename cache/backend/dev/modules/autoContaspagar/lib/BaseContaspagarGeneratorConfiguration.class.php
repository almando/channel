<?php

/**
 * contaspagar module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage contaspagar
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseContaspagarGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%registro%% - %%codigofornecedor%% - %%numerodocumento%% - %%tipodocumento%% - %%dataemissao%% - %%datavencimento%% - %%valor%% - %%controlecusto%% - %%historico%% - %%datapagamento%% - %%desconto%% - %%juros%% - %%multa%% - %%caixa%% - %%numeroconta%% - %%numerocheque%% - %%codigocompra%% - %%predatado%% - %%filial%% - %%lancamentocaixa%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Contaspagar List';
  }

  public function getEditTitle()
  {
    return 'Edit Contaspagar';
  }

  public function getNewTitle()
  {
    return 'New Contaspagar';
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
    return array(  0 => 'registro',  1 => 'codigofornecedor',  2 => 'numerodocumento',  3 => 'tipodocumento',  4 => 'dataemissao',  5 => 'datavencimento',  6 => 'valor',  7 => 'controlecusto',  8 => 'historico',  9 => 'datapagamento',  10 => 'desconto',  11 => 'juros',  12 => 'multa',  13 => 'caixa',  14 => 'numeroconta',  15 => 'numerocheque',  16 => 'codigocompra',  17 => 'predatado',  18 => 'filial',  19 => 'lancamentocaixa',);
  }

  // LAIGU Theme
  public function getEditDetail()
  {
    return array();
  }


  public function getFieldsDefault()
  {
    return array(
      'registro' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'codigofornecedor' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numerodocumento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tipodocumento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'dataemissao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'datavencimento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'valor' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'controlecusto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'historico' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datapagamento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'desconto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'juros' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'multa' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'caixa' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numeroconta' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'numerocheque' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'codigocompra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'predatado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'filial' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'lancamentocaixa' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'registro' => array(),
      'codigofornecedor' => array(),
      'numerodocumento' => array(),
      'tipodocumento' => array(),
      'dataemissao' => array(),
      'datavencimento' => array(),
      'valor' => array(),
      'controlecusto' => array(),
      'historico' => array(),
      'datapagamento' => array(),
      'desconto' => array(),
      'juros' => array(),
      'multa' => array(),
      'caixa' => array(),
      'numeroconta' => array(),
      'numerocheque' => array(),
      'codigocompra' => array(),
      'predatado' => array(),
      'filial' => array(),
      'lancamentocaixa' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'registro' => array(),
      'codigofornecedor' => array(),
      'numerodocumento' => array(),
      'tipodocumento' => array(),
      'dataemissao' => array(),
      'datavencimento' => array(),
      'valor' => array(),
      'controlecusto' => array(),
      'historico' => array(),
      'datapagamento' => array(),
      'desconto' => array(),
      'juros' => array(),
      'multa' => array(),
      'caixa' => array(),
      'numeroconta' => array(),
      'numerocheque' => array(),
      'codigocompra' => array(),
      'predatado' => array(),
      'filial' => array(),
      'lancamentocaixa' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'registro' => array(),
      'codigofornecedor' => array(),
      'numerodocumento' => array(),
      'tipodocumento' => array(),
      'dataemissao' => array(),
      'datavencimento' => array(),
      'valor' => array(),
      'controlecusto' => array(),
      'historico' => array(),
      'datapagamento' => array(),
      'desconto' => array(),
      'juros' => array(),
      'multa' => array(),
      'caixa' => array(),
      'numeroconta' => array(),
      'numerocheque' => array(),
      'codigocompra' => array(),
      'predatado' => array(),
      'filial' => array(),
      'lancamentocaixa' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'registro' => array(),
      'codigofornecedor' => array(),
      'numerodocumento' => array(),
      'tipodocumento' => array(),
      'dataemissao' => array(),
      'datavencimento' => array(),
      'valor' => array(),
      'controlecusto' => array(),
      'historico' => array(),
      'datapagamento' => array(),
      'desconto' => array(),
      'juros' => array(),
      'multa' => array(),
      'caixa' => array(),
      'numeroconta' => array(),
      'numerocheque' => array(),
      'codigocompra' => array(),
      'predatado' => array(),
      'filial' => array(),
      'lancamentocaixa' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'registro' => array(),
      'codigofornecedor' => array(),
      'numerodocumento' => array(),
      'tipodocumento' => array(),
      'dataemissao' => array(),
      'datavencimento' => array(),
      'valor' => array(),
      'controlecusto' => array(),
      'historico' => array(),
      'datapagamento' => array(),
      'desconto' => array(),
      'juros' => array(),
      'multa' => array(),
      'caixa' => array(),
      'numeroconta' => array(),
      'numerocheque' => array(),
      'codigocompra' => array(),
      'predatado' => array(),
      'filial' => array(),
      'lancamentocaixa' => array(),
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
    return 'ContaspagarForm';
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
    return 'ContaspagarFormFilter';
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
