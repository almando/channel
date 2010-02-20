<?php

/**
 * custo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage custo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCustoGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%descricao%% - %%debitocredito%% - %%contacontabil%% - %%controlecusto%% - %%naoinserir%% - %%grupo%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Custo List';
  }

  public function getEditTitle()
  {
    return 'Edit Custo';
  }

  public function getNewTitle()
  {
    return 'New Custo';
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
    return array(  0 => 'descricao',  1 => 'debitocredito',  2 => 'contacontabil',  3 => 'controlecusto',  4 => 'naoinserir',  5 => 'grupo',);
  }

  // LAIGU Theme
  public function getEditDetail()
  {
    return array();
  }


  public function getFieldsDefault()
  {
    return array(
      'descricao' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'debitocredito' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'contacontabil' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'controlecusto' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'naoinserir' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'grupo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'descricao' => array(),
      'debitocredito' => array(),
      'contacontabil' => array(),
      'controlecusto' => array(),
      'naoinserir' => array(),
      'grupo' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'descricao' => array(),
      'debitocredito' => array(),
      'contacontabil' => array(),
      'controlecusto' => array(),
      'naoinserir' => array(),
      'grupo' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'descricao' => array(),
      'debitocredito' => array(),
      'contacontabil' => array(),
      'controlecusto' => array(),
      'naoinserir' => array(),
      'grupo' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'descricao' => array(),
      'debitocredito' => array(),
      'contacontabil' => array(),
      'controlecusto' => array(),
      'naoinserir' => array(),
      'grupo' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'descricao' => array(),
      'debitocredito' => array(),
      'contacontabil' => array(),
      'controlecusto' => array(),
      'naoinserir' => array(),
      'grupo' => array(),
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
    return 'CustoForm';
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
    return 'CustoFormFilter';
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
