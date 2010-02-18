<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Contacorrente', 'doctrine');

/**
 * BaseContacorrente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $registro
 * @property string $numerocc
 * @property string $tipomovbanco
 * @property string $numero
 * @property string $nomefavorecido
 * @property timestamp $dataemissao
 * @property timestamp $predatado
 * @property string $historico
 * @property integer $conferido
 * @property string $usuario
 * @property integer $caixa
 * 
 * @method integer       getRegistro()       Returns the current record's "registro" value
 * @method string        getNumerocc()       Returns the current record's "numerocc" value
 * @method string        getTipomovbanco()   Returns the current record's "tipomovbanco" value
 * @method string        getNumero()         Returns the current record's "numero" value
 * @method string        getNomefavorecido() Returns the current record's "nomefavorecido" value
 * @method timestamp     getDataemissao()    Returns the current record's "dataemissao" value
 * @method timestamp     getPredatado()      Returns the current record's "predatado" value
 * @method string        getHistorico()      Returns the current record's "historico" value
 * @method integer       getConferido()      Returns the current record's "conferido" value
 * @method string        getUsuario()        Returns the current record's "usuario" value
 * @method integer       getCaixa()          Returns the current record's "caixa" value
 * @method Contacorrente setRegistro()       Sets the current record's "registro" value
 * @method Contacorrente setNumerocc()       Sets the current record's "numerocc" value
 * @method Contacorrente setTipomovbanco()   Sets the current record's "tipomovbanco" value
 * @method Contacorrente setNumero()         Sets the current record's "numero" value
 * @method Contacorrente setNomefavorecido() Sets the current record's "nomefavorecido" value
 * @method Contacorrente setDataemissao()    Sets the current record's "dataemissao" value
 * @method Contacorrente setPredatado()      Sets the current record's "predatado" value
 * @method Contacorrente setHistorico()      Sets the current record's "historico" value
 * @method Contacorrente setConferido()      Sets the current record's "conferido" value
 * @method Contacorrente setUsuario()        Sets the current record's "usuario" value
 * @method Contacorrente setCaixa()          Sets the current record's "caixa" value
 * 
 * @package    test_laiguAdminTheme
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseContacorrente extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contacorrente');
        $this->hasColumn('registro', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('numerocc', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('tipomovbanco', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '3',
             ));
        $this->hasColumn('numero', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('nomefavorecido', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '120',
             ));
        $this->hasColumn('dataemissao', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('predatado', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('historico', 'string', 240, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '240',
             ));
        $this->hasColumn('conferido', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('usuario', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('caixa', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}