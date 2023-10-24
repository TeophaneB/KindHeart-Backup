<?php
require_once('../../config.php');
require_once('edit_form.php');
require_login();
global $USER, $DB, $CFG;

$PAGE->set_url(new moodle_url('/local/customprofileedit/edit.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_customprofileedit'));

$mform = new custom_profile_edit_form();

if ($mform->is_cancelled()) {
    // Handle form cancellation
    redirect(new moodle_url('/my/'));
} else if ($data = $mform->get_data()) {
    // Handle form submission
    $context = context_user::instance($USER->id);
    $updateuser = new stdClass();
    $updateuser->id = $USER->id;
    $updateuser->firstname = $data->firstname;
    $updateuser->description = $data->description;

    $DB->update_record('user', $updateuser);

    // Determine the path of the selected avatar image
    $selected_avatar_key = $data->avatar;
    $avatar_path = $CFG->dirroot . '/local/customprofileedit/images/' . $selected_avatar_key . '.png';
    // Update the user's profile picture
    if (file_exists($avatar_path)) {
        // Load the user
        $user = $DB->get_record('user', array('id' => $USER->id));

        require_once($CFG->libdir . '/gdlib.php');
        $newpicture = (int)process_new_icon($context, 'user', 'icon', 0, $avatar_path);

        if ($newpicture !== $user->picture) {
            $DB->set_field('user', 'picture', $newpicture, array('id' => $user->id));
        }
    }

    // Redirect after all processing is done
    redirect(new moodle_url('/my/'));
}

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'local_customprofileedit'));

$mform->display();

echo $OUTPUT->footer();
?>
