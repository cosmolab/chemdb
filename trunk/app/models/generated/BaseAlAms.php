<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AlAms', 'dev_al_be_quartz_chem');

/**
 * BaseAlAms
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $analysis_id
 * @property integer $al_ams_std_id
 * @property integer $ams_lab_id
 * @property date $date
 * @property string $lab_num
 * @property float $r_to_rstd
 * @property float $interror
 * @property float $exterror
 * @property float $truefrac
 * @property string $notes
 * @property Analysis $Analysis
 * @property AlAmsStd $AlAmsStd
 * @property AmsLab $AmsLab
 * @property Doctrine_Collection $AmsCurrent
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAlAms extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('al_ams');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('analysis_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('al_ams_std_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('ams_lab_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('lab_num', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('r_to_rstd', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('interror', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('exterror', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('truefrac', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('notes', 'string', 700, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '700',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Analysis', array(
             'local' => 'analysis_id',
             'foreign' => 'id'));

        $this->hasOne('AlAmsStd', array(
             'local' => 'al_ams_std_id',
             'foreign' => 'id'));

        $this->hasOne('AmsLab', array(
             'local' => 'ams_lab_id',
             'foreign' => 'id'));

        $this->hasMany('AmsCurrent', array(
             'local' => 'id',
             'foreign' => 'al_ams_id'));
    }
}