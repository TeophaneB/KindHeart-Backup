<?php
defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot.'/lib/formslib.php');
$PAGE->requires->css(new moodle_url('/local/customprofileedit/styles.css'));
$PAGE->requires->js(new moodle_url('/local/customprofileedit/script.js'));

class custom_profile_edit_form extends moodleform {
    protected function definition() {
      global $DB, $USER;
        $mform = $this->_form;

        // Add some basic inline styles
        $styleArray = array('style' => 'border-radius: 15px; padding: 10px; font-size: 18px; margin-bottom: 15px; border: 2px solid #4DD0E1;');

        // First name field with placeholder and style
        $mform->addElement('text', 'firstname', get_string('firstname'), array_merge($styleArray, array('placeholder' => 'Enter your fun name!')));
        $mform->setType('firstname', PARAM_TEXT);
        $mform->addRule('firstname', 'Oops! You forgot your first name!', 'required', null, 'client');

        // Description field with placeholder and style
        $mform->addElement('textarea', 'description', get_string('description'), array_merge($styleArray, array('placeholder' => 'Share your favorite adventure!')));
        $mform->setType('description', PARAM_TEXT);



        // Avatar selection
       $avatars = array(
           'avatar_1' => new moodle_url('/local/customprofileedit/images/avatar_1.png'),
           'avatar_2' => new moodle_url('/local/customprofileedit/images/avatar_2.png'),
           'avatar_3' => new moodle_url('/local/customprofileedit/images/avatar_3.png'),
           'avatar_4' => new moodle_url('/local/customprofileedit/images/avatar_4.png'),
           'avatar_5' => new moodle_url('/local/customprofileedit/images/avatar_5.png'),
           'avatar_6' => new moodle_url('/local/customprofileedit/images/avatar_6.png'),
           'avatar_7' => new moodle_url('/local/customprofileedit/images/avatar_7.png'),
           'avatar_8' => new moodle_url('/local/customprofileedit/images/avatar_8.png'),
           'avatar_9' => new moodle_url('/local/customprofileedit/images/avatar_9.png'),
           'avatar10' => new moodle_url('/local/customprofileedit/images/avatar_10.png'),
       );



       $radioarray = [];
        foreach ($avatars as $key => $avatar_url) {
            $radioarray[] = $mform->createElement('radio', 'avatar', '', '<img src="'.$avatar_url.'" alt="'.$key.'" width="150" height="150">', $key);
        }
        $mform->addGroup($radioarray, 'avatar_group', get_string('chooseavatar', 'local_customprofileedit'), array(' '), false);

        // Add a styled submit button
        $this->add_action_buttons(false, 'Go Adventure!', array('style' => 'background-color: #FFC107; color: black; padding: 15px 25px; border: none; border-radius: 8px; cursor: pointer; font-size: 18px;'));


    }
}

// Display the user's original profile picture
// $user = $DB->get_record('user', array('id' => $USER->id));
// $userpicture = new user_picture($user);
// $userpictureurl = $userpicture->get_url($GLOBALS['PAGE'])->out();
// $mform->addElement('html', '<div class="avatar-container">');
// $mform->addElement('html', '<img src="' . $userpictureurl . '" id="current-avatar" alt="Current Avatar" width="100" height="100" />');
// $mform->addElement('html', '<div class="avatar-hover-prompt">Change Avatar</div>');

// Open a Dropdown with Avatars on Click
// $mform->addElement('html', '<div class="avatar-dropdown">');
// foreach ($avatars as $key => $avatar_url) {
//     $mform->addElement('html', '<div class="avatar-option">');
//     $mform->addElement('html', '<img src="' . $avatar_url . '" alt="' . $key . '" width="100" height="100" />');
//     $mform->addElement('html', '</div>');
// }
// $mform->addElement('html', '</div>');  // end of avatar-dropdown
// $mform->addElement('html', '</div>');  // end of avatar-container
?>
