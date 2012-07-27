<?php

// This file is part of the Moodle block "EJSApp Collab Session"
//
// EJSApp Collab Session is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// EJSApp Collab Session is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// The GNU General Public License is available on <http://www.gnu.org/licenses/>
//
// EJSApp Collab Session has been developed by:
//  - Luis de la Torre (1): ldelatorre@dia.uned.es
//	- Ruben Heradio (1): rheradio@issi.uned.es
//  - Carlos Jara (2): carlos.jara@ua.es
//
//  (1): Computer Science and Automatic Control, Spanish Open University (UNED),
//       Madrid, Spain
//  (2): Physics, Systems Engineering and Signal Theory Department, University
//       of Alicante, Spain


/**
 *    
 * @package    block
 * @subpackage ejsapp_collab_session
 * @copyright  2012 Luis de la Torre, Ruben Heradio and Carlos Jara
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
require_once('../../config.php');
require_login();
require_once('manage_collaborative_db.php');

$page_caller = get_string('navBarMasterUser', 'block_ejsapp_collab_session');
require('init_page.php');

create_non_existing_tables();

if (is_the_user_participating_in_any_session()) {
  echo "<center>" . get_string(cantJoinSessionErr1, block_ejsapp_collab_session) . "</center>";
} else {
  $collaborative_lab_names = get_all_collaborative_lab_names($courseid);
  $show_participants_url = $CFG->wwwroot .
  '/blocks/ejsapp_collab_session/show_participants.php';
  echo '<form action="' . $show_participants_url . '" method="get" >
  <p align="center">' . get_string('selectColLab', 'block_ejsapp_collab_session') . '</p>';
  $i = 1;
  $number_of_collaborative_labs = count($collaborative_lab_names);
  foreach ($collaborative_lab_names as $lab) {
    if ($i < $number_of_collaborative_labs) {
      echo '<input type=radio name="lab_id" value="' . $lab->id .
      '">' . $lab->name . '<br>';
    } else {
      echo '<input type=radio name="lab_id" value="' . $lab->id .
      '" checked>' . $lab->name . '<br>';
    }
    $i++;
  }
  echo '<input type="hidden" name="courseid" value="' . $courseid . '">
  <input type="hidden" name="contextid" value="' . $context->id . '">
	<br><p align="center"><input type=submit value="' . get_string('selectLabBut', 'block_ejsapp_collab_session') . '"></p></form>';
  echo $OUTPUT->footer();
} // if (is_the_user_participating_in_any_session())

?>