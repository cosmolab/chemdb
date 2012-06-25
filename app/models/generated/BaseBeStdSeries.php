<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('BeStdSeries', 'dev_al_be_quartz_chem');

/**
 * BaseBeStdSeries
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $code
 * @property string $notes
 * @property Doctrine_Collection $BeAmsStd
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseBeStdSeries extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('be_std_series');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('code', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('notes', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('BeAmsStd', array(
             'local' => 'id',
             'foreign' => 'be_std_series_id'));
    }
}