<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Contaspagar', 'doctrine');

/**
 * BaseContaspagar
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $registro
 * @property string $codigofornecedor
 * @property string $numerodocumento
 * @property string $tipodocumento
 * @property timestamp $dataemissao
 * @property timestamp $datavencimento
 * @property decimal $valor
 * @property string $controlecusto
 * @property string $historico
 * @property timestamp $datapagamento
 * @property decimal $desconto
 * @property decimal $juros
 * @property decimal $multa
 * @property integer $caixa
 * @property string $numeroconta
 * @property string $numerocheque
 * @property integer $codigocompra
 * @property timestamp $predatado
 * @property string $filial
 * @property string $lancamentocaixa
 * 
 * @method integer     getRegistro()         Returns the current record's "registro" value
 * @method string      getCodigofornecedor() Returns the current record's "codigofornecedor" value
 * @method string      getNumerodocumento()  Returns the current record's "numerodocumento" value
 * @method string      getTipodocumento()    Returns the current record's "tipodocumento" value
 * @method timestamp   getDataemissao()      Returns the current record's "dataemissao" value
 * @method timestamp   getDatavencimento()   Returns the current record's "datavencimento" value
 * @method decimal     getValor()            Returns the current record's "valor" value
 * @method string      getControlecusto()    Returns the current record's "controlecusto" value
 * @method string      getHistorico()        Returns the current record's "historico" value
 * @method timestamp   getDatapagamento()    Returns the current record's "datapagamento" value
 * @method decimal     getDesconto()         Returns the current record's "desconto" value
 * @method decimal     getJuros()            Returns the current record's "juros" value
 * @method decimal     getMulta()            Returns the current record's "multa" value
 * @method integer     getCaixa()            Returns the current record's "caixa" value
 * @method string      getNumeroconta()      Returns the current record's "numeroconta" value
 * @method string      getNumerocheque()     Returns the current record's "numerocheque" value
 * @method integer     getCodigocompra()     Returns the current record's "codigocompra" value
 * @method timestamp   getPredatado()        Returns the current record's "predatado" value
 * @method string      getFilial()           Returns the current record's "filial" value
 * @method string      getLancamentocaixa()  Returns the current record's "lancamentocaixa" value
 * @method Contaspagar setRegistro()         Sets the current record's "registro" value
 * @method Contaspagar setCodigofornecedor() Sets the current record's "codigofornecedor" value
 * @method Contaspagar setNumerodocumento()  Sets the current record's "numerodocumento" value
 * @method Contaspagar setTipodocumento()    Sets the current record's "tipodocumento" value
 * @method Contaspagar setDataemissao()      Sets the current record's "dataemissao" value
 * @method Contaspagar setDatavencimento()   Sets the current record's "datavencimento" value
 * @method Contaspagar setValor()            Sets the current record's "valor" value
 * @method Contaspagar setControlecusto()    Sets the current record's "controlecusto" value
 * @method Contaspagar setHistorico()        Sets the current record's "historico" value
 * @method Contaspagar setDatapagamento()    Sets the current record's "datapagamento" value
 * @method Contaspagar setDesconto()         Sets the current record's "desconto" value
 * @method Contaspagar setJuros()            Sets the current record's "juros" value
 * @method Contaspagar setMulta()            Sets the current record's "multa" value
 * @method Contaspagar setCaixa()            Sets the current record's "caixa" value
 * @method Contaspagar setNumeroconta()      Sets the current record's "numeroconta" value
 * @method Contaspagar setNumerocheque()     Sets the current record's "numerocheque" value
 * @method Contaspagar setCodigocompra()     Sets the current record's "codigocompra" value
 * @method Contaspagar setPredatado()        Sets the current record's "predatado" value
 * @method Contaspagar setFilial()           Sets the current record's "filial" value
 * @method Contaspagar setLancamentocaixa()  Sets the current record's "lancamentocaixa" value
 * 
 * @package    test_laiguAdminTheme
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseContaspagar extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contaspagar');
        $this->hasColumn('registro', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('codigofornecedor', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '15',
             ));
        $this->hasColumn('numerodocumento', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('tipodocumento', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('dataemissao', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('datavencimento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('valor', 'decimal', 21, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '21',
             'scale' => ' 4',
             ));
        $this->hasColumn('controlecusto', 'string', 90, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '90',
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
        $this->hasColumn('datapagamento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('desconto', 'decimal', 21, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '21',
             'scale' => ' 4',
             ));
        $this->hasColumn('juros', 'decimal', 21, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '21',
             'scale' => ' 4',
             ));
        $this->hasColumn('multa', 'decimal', 21, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '21',
             'scale' => ' 4',
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
        $this->hasColumn('numeroconta', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('numerocheque', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
        $this->hasColumn('codigocompra', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
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
        $this->hasColumn('filial', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('lancamentocaixa', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '30',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}