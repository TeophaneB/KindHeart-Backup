<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'db_KindHearts05';
$CFG->dbuser    = 'KindHearts05';
$CFG->dbpass    = 'WgCdJPs7';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 21,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_520_ci',
);

$CFG->wwwroot   = 'https://sfs-webdev.massey.ac.nz/site2562/moodle';
$CFG->dataroot  = '/home/students/home/KindHearts05/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
