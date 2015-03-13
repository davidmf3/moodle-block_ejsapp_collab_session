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
 * File for configuring the block instances (selecting the Sarlab server in charge o routing for collaborative sessions)
 *
 * @package    block
 * @subpackage ejsapp_collab_session
 * @copyright  2012 Luis de la Torre, Ruben Heradio and Carlos Jara
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_ejsapp_collab_session_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        if (get_config('ejsapp_collab_session', 'Use_Sarlab') == 1) {
            $mform->addElement('header', 'sarlab_header', get_string('sarlab_header', 'block_ejsapp_collab_session'));

            $mform->addElement('selectyesno', 'config_use_sarlab', get_string('use_sarlab', 'block_ejsapp_collab_session'));
            $mform->setDefault('config_use_sarlab', '0');
            $mform->setType('config_use_sarlab', PARAM_INT);

            $list_sarlab_IPs = explode(";", get_config('ejsapp_collab_session', 'Collab_Sarlab_IP'));
            if(is_array($list_sarlab_IPs)) $sarlab_IP = $list_sarlab_IPs[0];
            else  $sarlab_IP = get_config('ejsapp_collab_session', 'Collab_Sarlab_IP');
            $init_pos = strpos($sarlab_IP, "'");
            $end_pos = strrpos($sarlab_IP, "'");
            if(($init_pos === false) || ($init_pos === $end_pos)) {
                $sarlab_instance_options = array('Sarlab server 1');
            } else {
                $sarlab_instance_options = array(substr($sarlab_IP,$init_pos+1,$end_pos-$init_pos-1));
            }
            for ($i = 1; $i < count($list_sarlab_IPs); $i++) {
                $sarlab_instance_options_temp = $list_sarlab_IPs[$i];
                $init_pos = strpos($sarlab_instance_options_temp, "'");
                $end_pos = strrpos($sarlab_instance_options_temp, "'");
                if(($init_pos === false) || ($init_pos === $end_pos)) {
                    array_push($sarlab_instance_options, 'Sarlab server ' . ($i+1));
                } else {
                    array_push($sarlab_instance_options, substr($sarlab_instance_options_temp,$init_pos+1,$end_pos-$init_pos-1));
                }
            }

            $mform->addElement('select', 'config_sarlab_instance', get_string('sarlab_instance', 'mod_ejsapp'), $sarlab_instance_options);
            $mform->disabledIf('config_sarlab_instance', 'config_use_sarlab', 'eq', 0);
            $mform->setDefault('config_sarlab_instance', '0');
        }

    }

}