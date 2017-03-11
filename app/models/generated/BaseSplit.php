<?php

/**
 * BaseSplit
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $analysis_id
 * @property integer $split_bkr_id
 * @property integer $split_num
 * @property string $split_bkr_name
 * @property double $wt_split_bkr_tare
 * @property double $wt_split_bkr_split
 * @property double $wt_split_bkr_icp
 * @property Analysis $Analysis
 * @property SplitBkr $SplitBkr
 * @property Doctrine_Collection $IcpRun
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSplit extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('split');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('analysis_id', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             'notnull' => true,
             ));
        $this->hasColumn('split_bkr_id', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             ));
        $this->hasColumn('split_num', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             'default' => '1',
             'notnull' => true,
             ));
        $this->hasColumn('split_bkr_name', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('wt_split_bkr_tare', 'double', 53, array(
             'type' => 'double',
             'default' => '0',
             'notnull' => true,
             'length' => '53',
             'scale' => '30',
             ));
        $this->hasColumn('wt_split_bkr_split', 'double', 53, array(
             'type' => 'double',
             'default' => '0',
             'notnull' => true,
             'length' => '53',
             'scale' => '30',
             ));
        $this->hasColumn('wt_split_bkr_icp', 'double', 53, array(
             'type' => 'double',
             'default' => '0',
             'notnull' => true,
             'length' => '53',
             'scale' => '30',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Analysis', array(
             'local' => 'analysis_id',
             'foreign' => 'id'));

        $this->hasOne('SplitBkr', array(
             'local' => 'split_bkr_id',
             'foreign' => 'id'));

        $this->hasMany('IcpRun', array(
             'local' => 'id',
             'foreign' => 'split_id'));
    }
}