<?php

/**
 * BaseAlStdSeries
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $code
 * @property string $notes
 * @property Doctrine_Collection $AlAmsStd
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseAlStdSeries extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('al_std_series');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => '1',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('code', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '60',
             ));
        $this->hasColumn('notes', 'string', 2147483647, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
    }

    public function setUp()
    {
        $this->hasMany('AlAmsStd', array(
             'local' => 'id',
             'foreign' => 'al_std_series_id'));
    }
}