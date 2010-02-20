<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Cliente', 'doctrine');

/**
 * BaseCliente
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codigo
 * @property string $nome
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $transversalinicial
 * @property string $transversalfinal
 * @property string $telefone
 * @property string $contato
 * @property string $fax
 * @property string $email
 * @property integer $pessoafisica
 * @property string $cgc
 * @property string $ie
 * @property string $cpf
 * @property string $profissao
 * @property timestamp $datanascimento
 * @property string $rg
 * 
 * @method string    getCodigo()             Returns the current record's "codigo" value
 * @method string    getNome()               Returns the current record's "nome" value
 * @method string    getEndereco()           Returns the current record's "endereco" value
 * @method string    getBairro()             Returns the current record's "bairro" value
 * @method string    getCidade()             Returns the current record's "cidade" value
 * @method string    getEstado()             Returns the current record's "estado" value
 * @method string    getCep()                Returns the current record's "cep" value
 * @method string    getTransversalinicial() Returns the current record's "transversalinicial" value
 * @method string    getTransversalfinal()   Returns the current record's "transversalfinal" value
 * @method string    getTelefone()           Returns the current record's "telefone" value
 * @method string    getContato()            Returns the current record's "contato" value
 * @method string    getFax()                Returns the current record's "fax" value
 * @method string    getEmail()              Returns the current record's "email" value
 * @method integer   getPessoafisica()       Returns the current record's "pessoafisica" value
 * @method string    getCgc()                Returns the current record's "cgc" value
 * @method string    getIe()                 Returns the current record's "ie" value
 * @method string    getCpf()                Returns the current record's "cpf" value
 * @method string    getProfissao()          Returns the current record's "profissao" value
 * @method timestamp getDatanascimento()     Returns the current record's "datanascimento" value
 * @method string    getRg()                 Returns the current record's "rg" value
 * @method Cliente   setCodigo()             Sets the current record's "codigo" value
 * @method Cliente   setNome()               Sets the current record's "nome" value
 * @method Cliente   setEndereco()           Sets the current record's "endereco" value
 * @method Cliente   setBairro()             Sets the current record's "bairro" value
 * @method Cliente   setCidade()             Sets the current record's "cidade" value
 * @method Cliente   setEstado()             Sets the current record's "estado" value
 * @method Cliente   setCep()                Sets the current record's "cep" value
 * @method Cliente   setTransversalinicial() Sets the current record's "transversalinicial" value
 * @method Cliente   setTransversalfinal()   Sets the current record's "transversalfinal" value
 * @method Cliente   setTelefone()           Sets the current record's "telefone" value
 * @method Cliente   setContato()            Sets the current record's "contato" value
 * @method Cliente   setFax()                Sets the current record's "fax" value
 * @method Cliente   setEmail()              Sets the current record's "email" value
 * @method Cliente   setPessoafisica()       Sets the current record's "pessoafisica" value
 * @method Cliente   setCgc()                Sets the current record's "cgc" value
 * @method Cliente   setIe()                 Sets the current record's "ie" value
 * @method Cliente   setCpf()                Sets the current record's "cpf" value
 * @method Cliente   setProfissao()          Sets the current record's "profissao" value
 * @method Cliente   setDatanascimento()     Sets the current record's "datanascimento" value
 * @method Cliente   setRg()                 Sets the current record's "rg" value
 * 
 * @package    test_laiguAdminTheme
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCliente extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('clientes');
        $this->hasColumn('codigo', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('nome', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '120',
             ));
        $this->hasColumn('endereco', 'string', 120, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '120',
             ));
        $this->hasColumn('bairro', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('cidade', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('estado', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('cep', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('transversalinicial', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('transversalfinal', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
             ));
        $this->hasColumn('telefone', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('contato', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '75',
             ));
        $this->hasColumn('fax', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '150',
             ));
        $this->hasColumn('pessoafisica', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('cgc', 'string', 54, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '54',
             ));
        $this->hasColumn('ie', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('cpf', 'string', 42, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '42',
             ));
        $this->hasColumn('profissao', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '75',
             ));
        $this->hasColumn('datanascimento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('rg', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '75',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}