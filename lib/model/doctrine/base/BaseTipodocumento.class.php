<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Tipodocumento', 'doctrine');

/**
 * BaseTipodocumento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $descricao
 * 
 * @method string        getDescricao() Returns the current record's "descricao" value
 * @method Tipodocumento setDescricao() Sets the current record's "descricao" value
 * 
 * @package    test_laiguAdminTheme
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTipodocumento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipodocumento');
        $this->hasColumn('descricao', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}