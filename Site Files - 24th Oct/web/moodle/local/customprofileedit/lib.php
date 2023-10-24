<?php
function local_customprofileedit_before_http_headers() {
    global $PAGE;

    if ($PAGE->url->compare(new moodle_url('/user/edit.php'), URL_MATCH_BASE)) {
        redirect(new moodle_url('/local/customprofileedit/edit.php'));
    }
}
?>
