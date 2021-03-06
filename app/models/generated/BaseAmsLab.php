<?php

/**
 * BaseAmsLab
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $full_name
 * @property Doctrine_Collection $AlAms
 * @property Doctrine_Collection $BeAms
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAmsLab extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ams_lab');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('full_name', 'string', 700, array(
             'type' => 'string',
             'length' => '700',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AlAms', array(
             'local' => 'id',
             'foreign' => 'ams_lab_id'));

        $this->hasMany('BeAms', array(
             'local' => 'id',
             'foreign' => 'ams_lab_id'));
    }
}