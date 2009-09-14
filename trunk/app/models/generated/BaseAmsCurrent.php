<?php

/**
 * BaseAmsCurrent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property float $current
 * @property integer $be_ams_id
 * @property integer $al_ams_id
 * @property BeAms $BeAms
 * @property AlAms $AlAms
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class BaseAmsCurrent extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ams_current');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => '1',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('current', 'float', 2147483647, array(
             'type' => 'float',
             'unsigned' => 0,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2147483647',
             ));
        $this->hasColumn('be_ams_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => '1',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('al_ams_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => '1',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        $this->hasOne('BeAms', array(
             'local' => 'be_ams_id',
             'foreign' => 'id'));

        $this->hasOne('AlAms', array(
             'local' => 'al_ams_id',
             'foreign' => 'id'));
    }
}