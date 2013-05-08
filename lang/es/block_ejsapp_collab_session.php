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
 * Spanish strings
 *
 * @package    block
 * @subpackage ejsapp_collab_session
 * @copyright  2012 Luis de la Torre, Ruben Heradio and Carlos Jara
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
//block_start_collaborative_session.php:
$string['pluginname'] = 'EJSApp colaborativo';
$string['block_title'] = 'Sesion Colaborativa EJSApp';
$string['start_collaborative_session:view'] = 'Ver Bloque para Sesiones Colaborativo';
$string['goToMasSessBut'] = 'Ir a mi sesi&oacute;n activa';
$string['goToStudSessBut'] = 'Ver mis sesiones activas';
$string['closeMasSessBut'] = 'Cerrar mi sesi&oacute;n activa';
$string['closeStudSessBut'] = 'Abandonar esta sesi&oacute;n';
$string['createBut'] = 'Crear sesi&oacute;n colaborativa';
$string['navBarCollaborativeSession'] = 'Sesi&oacute;n colaborativa';

//close_collaborative_session.php:
$string['close1'] = 'La sesi&oacute;n colaborativa del laboratorio ';
$string['close2'] = ' ha sido cerrada.';
$string['goodbyeStudent'] = 'Ha abandonado la sesi&oacute;n colaborativa.';
$string['backToCourse'] = 'Volver al curso';

//master_user.php:
$string['navBarMasterUser'] = 'Seleccionando laboratorio';
$string['cantJoinSessionErr1'] = 'Error: Ya tiene una sesi&oacute;n colaborativa activa. Ci�rrela antes para poder iniciar o unirse a una nueva.';
$string['selectLabBut'] = 'Seleccionar este laboratorio';
$string['selectColLab'] = 'Seleccione uno de los laboratorios colaborativos s&iacute;ncronos:';

//non_master_user.php:
$string['navBarNonMasterUser'] = 'Aceptando invitaci&oacute;n';
$string['selectInvitation'] = 'Seleccione una de las invitaciones pendientes:';
$string['invitationMsg1'] = ' le ha invitado al siguiente laboratorio: ';
$string['acceptInvitation'] = 'Aceptar invitaci&oacute;n';
$string['cantJoinSessionErr2'] = 'Error: Actualmente no tiene invitaciones activas para ninguna sesi&oacute;n colaborativa.';

//Send_messages.php:
$string['invitationMsg2'] = 'Le invit&oacute; a una sesi&oacute;n colaborativa.';

//Show_participants.php:
$string['inviteParticipants'] = 'Invitar participantes';
$string['navBarShowParticipants'] = 'Selecionando invitados';

//generate_applet_embedding_code.php and many others:
$string['pageTitle']='Sesi&oacute;n Colaborativa de Laboratorio';

?>