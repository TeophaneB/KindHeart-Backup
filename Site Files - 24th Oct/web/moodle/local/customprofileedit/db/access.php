<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    'local/customprofileedit:editownprofile' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user' => CAP_ALLOW
        )
    )
);
?>
