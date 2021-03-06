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
 * File for configuring the block instances (selecting the ENLARGE server in charge o routing for collaborative sessions)
 *
 * @package    block
 * @subpackage ejsapp_collab_session
 * @copyright  2012 Luis de la Torre, Ruben Heradio and Carlos Jara
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_heading(
        'default_options_config',
        get_string('default_options_config', 'block_ejsapp_collab_session'),
        ''
    ));

    $settings->add(new admin_setting_configtext(
        'block_ejsapp_collab_session/collaborative_port',
        get_string('collaborative_port', 'block_ejsapp_collab_session'),
        get_string('collaborative_port_description', 'block_ejsapp_collab_session'),
        50000,
        PARAM_INT,
        '2'
    ));

    $settings->add(new admin_setting_heading(
        'block_enlarge_header_config',
        get_string('enlarge_header_config', 'block_ejsapp_collab_session'),
        ''
    ));

    $settings->add(new admin_setting_configselect(
        'block_ejsapp_collab_session/Use_Enlarge',
        get_string('using_enlarge', 'block_ejsapp_collab_session'),
        get_string('using_enlarge_help', 'block_ejsapp_collab_session'),
        0,
        array('No', 'Yes')
    ));
}