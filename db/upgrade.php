<?php
// This file is part of the Moodle block "EJSApp File Browser"
//
// EJSApp File Browser is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// EJSApp File Browser is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.
//
// EJSApp File Browser has been developed by:
// - Luis de la Torre: ldelatorre@dia.uned.es
// - Ruben Heradio: rheradio@issi.uned.es
//
// at the Computer Science and Automatic Control, Spanish Open University
// (UNED), Madrid, Spain.

/**
 * EJSApp Collab Session upgrade file.
 *
 * @since Moodle 2.0
 * @package block_ejsapp_collab_session
 * @copyright  2012 Luis de la Torre, Ruben Heradio and Carlos Jara
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade function for the EJSApp Collab Session block
 *
 * @param string $oldversion
 * @return true
 * @throws
 */
function xmldb_block_ejsapp_collab_session_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager(); // Loads ddl manager and xmldb classes.

    if ($oldversion < 2021041800) {
        // Define table block_ejsapp_shared_files to be created.
        $dbman = $DB->get_manager();
        $table = new xmldb_table('ejsapp_collab_sessions');
        $field = new xmldb_field('creationtime', XMLDB_TYPE_INTEGER, '20', null, XMLDB_NOTNULL, null, '0', 'master_user');
        $dbman->add_field($table, $field);
    }

    return true;
}
