<?php

/**
 * BaseProjectSample
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $project_id
 * @property integer $sample_id
 * @property Project $Project
 * @property Sample $Sample
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProjectSample extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('project_sample');
        $this->hasColumn('project_id', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             ));
        $this->hasColumn('sample_id', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Project', array(
             'local' => 'project_id',
             'foreign' => 'id'));

        $this->hasOne('Sample', array(
             'local' => 'sample_id',
             'foreign' => 'id'));
    }
}