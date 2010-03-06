<?php

/**
 * Cliente form.
 *
 * @package    test_laiguAdminTheme
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClienteForm extends BaseClienteForm
{
  public function configure()
  {
         $this->setWidgets(array(
              'nome'           => new sfWidgetFormInput(array(), array('maxlength' => 50)),
//              ''            => new sfWidgetFormInput(array(), array('maxlength' => 50)),
              'Cep'                => new sfWidgetFormInput(array(), array('maxlength' => 128))
            ));
  }
}
