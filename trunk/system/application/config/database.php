<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = "quartz_chem";
$active_record = TRUE;

$db['quartz_chem']['hostname'] = "ovid.u.washington.edu:23457";
$db['quartz_chem']['username'] = "root";
$db['quartz_chem']['password'] = "password";
$db['quartz_chem']['database'] = "dev_al_be_quartz_chem";
$db['quartz_chem']['dbdriver'] = "mysql";
$db['quartz_chem']['dbprefix'] = "";
$db['quartz_chem']['pconnect'] = TRUE;
$db['quartz_chem']['db_debug'] = TRUE;
$db['quartz_chem']['cache_on'] = FALSE;
$db['quartz_chem']['cachedir'] = "";
$db['quartz_chem']['char_set'] = "latin1";
$db['quartz_chem']['dbcollat'] = "latin1_general_ci";

$db['chem']['hostname'] = "ovid.u.washington.edu:23457";
$db['chem']['username'] = "root";
$db['chem']['password'] = "password";
$db['chem']['database'] = "base_chem";
$db['chem']['dbdriver'] = "mysql";
$db['chem']['dbprefix'] = "";
$db['chem']['pconnect'] = TRUE;
$db['chem']['db_debug'] = TRUE;
$db['chem']['cache_on'] = FALSE;
$db['chem']['cachedir'] = "";
$db['chem']['char_set'] = "latin1";
$db['chem']['dbcollat'] = "latin1_general_ci";

/* End of file database.php */
/* Location: ./system/application/config/database.php */
