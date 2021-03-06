<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addbeams extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('be_ams', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 4,
              'fixed' => false,
              'unsigned' => true,
              'primary' => true,
              'autoincrement' => true,
             ),
             'analysis_id' => 
             array(
              'type' => 'integer',
              'length' => 2,
              'fixed' => false,
              'unsigned' => true,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'be_ams_std_id' => 
             array(
              'type' => 'integer',
              'length' => 4,
              'fixed' => false,
              'unsigned' => true,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'ams_lab_id' => 
             array(
              'type' => 'integer',
              'length' => 4,
              'fixed' => false,
              'unsigned' => true,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'date' => 
             array(
              'type' => 'date',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 25,
             ),
             'lab_num' => 
             array(
              'type' => 'string',
              'length' => 255,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'r_to_rstd' => 
             array(
              'type' => 'float',
              'length' => 18,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'interror' => 
             array(
              'type' => 'float',
              'length' => 18,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'exterror' => 
             array(
              'type' => 'float',
              'length' => 18,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'truefrac' => 
             array(
              'type' => 'float',
              'length' => 18,
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
             ),
             'notes' => 
             array(
              'type' => 'string',
              'fixed' => false,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => NULL,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('be_ams');
    }
}