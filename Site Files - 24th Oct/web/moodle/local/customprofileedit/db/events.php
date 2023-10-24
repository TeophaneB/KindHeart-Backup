<?php
defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(
        'eventname'   => '\core\event\before_http_headers',
        'callback'    => 'local_customprofileedit_before_http_headers',
    ),
);
?>
