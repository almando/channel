<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Atualizacaodados', 'doctrine');

/**
 * BaseAtualizacaodados
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nome
 * @property string $cpf
 * @property string $datanascimento
 * @property string $endereco
 * @property string $bairro
 * @property string $cep
 * @property string $fonefixo
 * @property string $fonemovel
 * @property string $emailprincipal
 * @property string $emailsegundario
 * @property string $bancoconta
 * 
 * @method integer          getId()              Returns the current record's "id" value
 * @method string           getNome()            Returns the current record's "nome" value
 * @method string           getCpf()             Returns the current record's "cpf" value
 * @method string           getDatanascimento()  Returns the current record's "datanascimento" value
 * @method string           getEndereco()        Returns the current record's "endereco" value
 * @method string           getBairro()          Returns the current record's "bairro" value
 * @method string           getCep()             Returns the current record's "cep" value
 * @method string           getFonefixo()        Returns the current record's "fonefixo" value
 * @method string           getFonemovel()       Returns the current record's "fonemovel" value
 * @method string           getEmailprincipal()  Returns the current record's "emailprincipal" value
 * @method string           getEmailsegundario() Returns the current record's "emailsegundario" value
 * @method string           getBancoconta()      Returns the current record's "bancoconta" value
 * @method Atualizacaodados setId()              Sets the current record's "id" value
 * @method Atualizacaodados setNome()            Sets the current record's "nome" value
 * @method Atualizacaodados setCpf()             Sets the current record's "cpf" value
 * @method Atualizacaodados setDatanascimento()  Sets the current record's "datanascimento" value
 * @method Atualizacaodados setEndereco()        Sets the current record's "endereco" value
 * @method Atualizacaodados setBairro()          Sets the current record's "bairro" value
 * @method Atualizacaodados setCep()             Sets the current record's "cep" value
 * @method Atualizacaodados setFonefixo()        Sets the current record's "fonefixo" value
 * @method Atualizacaodados setFonemovel()       Sets the current record's "fonemovel" value
 * @method Atualizacaodados setEmailprincipal()  Sets the current record's "emailprincipal" value
 * @method Atualizacaodados setEmailsegundario() Sets the current record's "emailsegundario" value
 * @method Atualizacaodados setBancoconta()      Sets the current record's "bancoconta" value
 * 
 * @package    test_laiguAdminTheme
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAtualizacaodados extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('atualizacaodados');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('nome', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('cpf', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('datanascimento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('endereco', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('bairro', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('cep', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('fonefixo', 'string', 12, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('fonemovel', 'string', 12, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '12',
             ));
        $this->hasColumn('emailprincipal', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('emailsegundario', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('bancoconta', 'string', 12, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '12',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}