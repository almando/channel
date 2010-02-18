<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('State', 'doctrine');

/**
 * BaseState
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $state
 * @property Doctrine_Collection $Town
 * 
 * @method integer             getId()    Returns the current record's "id" value
 * @method string              getState() Returns the current record's "state" value
 * @method Doctrine_Collection getTown()  Returns the current record's "Town" collection
 * @method State               setId()    Sets the current record's "id" value
 * @method State               setState() Sets the current record's "state" value
 * @method State               setTown()  Sets the current record's "Town" collection
 * 
 * @package    test_laiguAdminTheme
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseState extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('state');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('state', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '150',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Town', array(
             'local' => 'id',
             'foreign' => 'state_id'));
    }
}