<?php

/**
 * cliente module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage cliente
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClienteGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%Codigo%% - %%=Nome%% - %%Telefone%% - %%Transversalinicial%% - %%Transversalfinal%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Cliente List';
  }

  public function getEditTitle()
  {
    return 'Edit Cliente';
  }

  public function getNewTitle()
  {
    return 'New Cliente';
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
    return array(  0 => 'Codigo',  1 => '=Nome',  2 => 'Telefone',  3 => 'Transversalinicial',  4 => 'Transversalfinal',);
  }

  // LAIGU Theme
  public function getEditDetail()
  {
    return array();
  }


  public function getFieldsDefault()
  {
    return array(
      'codigo' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nome' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'endereco' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'bairro' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cidade' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'estado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cep' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'transversalinicial' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'transversalfinal' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'telefone' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'contato' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fax' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pessoafisica' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cgc' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ie' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cpf' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'profissao' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'datanascimento' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'rg' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'Transversalinicial' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Transversal Inicial',),
      'Transversalfinal' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Transversal Final',),
      'Datanascimento' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Data Nascimento',),
      'Rg' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Número do RG',),
      'Pessoafisica' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Pessoa Fisica',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'codigo' => array(),
      'nome' => array(),
      'endereco' => array(),
      'bairro' => array(),
      'cidade' => array(),
      'estado' => array(),
      'cep' => array(),
      'transversalinicial' => array(),
      'transversalfinal' => array(),
      'telefone' => array(),
      'contato' => array(),
      'fax' => array(),
      'email' => array(),
      'pessoafisica' => array(),
      'cgc' => array(),
      'ie' => array(),
      'cpf' => array(),
      'profissao' => array(),
      'datanascimento' => array(),
      'rg' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'codigo' => array(),
      'nome' => array(),
      'endereco' => array(),
      'bairro' => array(),
      'cidade' => array(),
      'estado' => array(),
      'cep' => array(),
      'transversalinicial' => array(),
      'transversalfinal' => array(),
      'telefone' => array(),
      'contato' => array(),
      'fax' => array(),
      'email' => array(),
      'pessoafisica' => array(),
      'cgc' => array(),
      'ie' => array(),
      'cpf' => array(),
      'profissao' => array(),
      'datanascimento' => array(),
      'rg' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'codigo' => array(),
      'nome' => array(),
      'endereco' => array(),
      'bairro' => array(),
      'cidade' => array(),
      'estado' => array(),
      'cep' => array(),
      'transversalinicial' => array(),
      'transversalfinal' => array(),
      'telefone' => array(),
      'contato' => array(),
      'fax' => array(),
      'email' => array(),
      'pessoafisica' => array(),
      'cgc' => array(),
      'ie' => array(),
      'cpf' => array(),
      'profissao' => array(),
      'datanascimento' => array(),
      'rg' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'codigo' => array(),
      'nome' => array(),
      'endereco' => array(),
      'bairro' => array(),
      'cidade' => array(),
      'estado' => array(),
      'cep' => array(),
      'transversalinicial' => array(),
      'transversalfinal' => array(),
      'telefone' => array(),
      'contato' => array(),
      'fax' => array(),
      'email' => array(),
      'pessoafisica' => array(),
      'cgc' => array(),
      'ie' => array(),
      'cpf' => array(),
      'profissao' => array(),
      'datanascimento' => array(),
      'rg' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'codigo' => array(),
      'nome' => array(),
      'endereco' => array(),
      'bairro' => array(),
      'cidade' => array(),
      'estado' => array(),
      'cep' => array(),
      'transversalinicial' => array(),
      'transversalfinal' => array(),
      'telefone' => array(),
      'contato' => array(),
      'fax' => array(),
      'email' => array(),
      'pessoafisica' => array(),
      'cgc' => array(),
      'ie' => array(),
      'cpf' => array(),
      'profissao' => array(),
      'datanascimento' => array(),
      'rg' => array(),
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
    return 'clienteForm';
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
    return 'clienteFormFilter';
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
    return array('Nome', 'asc');
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
