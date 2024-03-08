<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_3139364bed';
$CFG->dbuser    = 'moodle_3139364bed';
$CFG->dbpass    = '3139364bed';
$CFG->prefix    = 'mdlhm_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);
$CFG->dboptions['dbcollation'] = 'utf8mb4_general_ci';

$CFG->wwwroot   = 'https://capacitacion.astrogeomatics.com';
$CFG->dataroot  = '/www/wwwroot/capacitacion.astrogeomatics.com/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->debug = 32767;
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
