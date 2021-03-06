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
 
//block_ejsapp_collab_session.php:
$string['pluginname'] = 'EJSApp colaborativo';
$string['block_title'] = 'Sesion Colaborativa EJSApp';
$string['start_collaborative_session:view'] = 'Ver Bloque para Sesiones Colaborativo';
$string['goToMasSessBut'] = 'Ir a mi sesion activa';
$string['goToStudSessBut'] = 'Ver mis sesiones activas';
$string['closeMasSessBut'] = 'Cerrar mi sesión activa'; //'Cerrar mi sesi&oacute;n activa';
$string['closeStudSessBut'] = 'Abandonar esta sesi&oacute;n'; //'Abandonar esta sesi&oacute;n';
$string['createBut'] = 'Crear sesi&oacute;n colaborativa'; //'Crear sesi&oacute;n colaborativa';
$string['navBarCollaborativeSession'] = 'Sesi&oacute;n colaborativa';

//close_collab_session.php:
$string['close1'] = 'La sesi&oacute;n colaborativa del laboratorio ';
$string['close2'] = ' ha sido cerrada.';
$string['goodbyeStudent'] = 'Ha abandonado la sesi&oacute;n colaborativa.';
$string['backToCourse'] = 'Volver al curso';

//join_collab_session.php:
$string['navBarNonMasterUser'] = 'Aceptando invitaci&oacute;n';
$string['selectInvitation'] = 'Seleccione una de las invitaciones pendientes:';
$string['invitationMsg1'] = ' le ha invitado a una sessi&oacute;n colaborativa con este laboratorio: ';
$string['acceptInvitation'] = 'Aceptar invitaci&oacute;n';
$string['cantJoinSessionErr2'] = 'Error: Actualmente no tiene invitaciones activas para ninguna sesi&oacute;n colaborativa.';

//send_messages.php:
$string['invitationMsg2'] = 'Unirse a esta sesi&oacute;n.';

//invite_participants.php:
$string['cantJoinSessionErr1'] = 'Error: Ya tiene una sesi&oacute;n colaborativa activa. Ci&eacute;rrela antes para poder iniciar o unirse a una nueva.';
$string['inviteParticipants'] = 'Invitar participantes';
$string['navBarShowParticipants'] = 'Selecionando invitados';
$string['selectLabBut'] = 'Seleccione un laboratorio';
//DMF-I
$string['selectGroupBut'] = 'Seleccione un grupo';
$string['selectBookingBut'] = 'Seleccione una reserva';
$string['noParticipantsErr'] = 'Error: Debe seleccionar algún participante';
//DMF-F

//generate_embedding_code.php and many others:
$string['pageTitle']='Sesi&oacute;n Colaborativa de Laboratorio';

//settings.php:
$string['default_options_config'] = 'Configurar la opciones de comunicaci&oacute;n por defecto (sin usar ENLARGE) para las sesiones colaborativas';
$string['collaborative_port'] = 'Puerto para las sesiones colaborativas';
$string['collaborative_port_description'] = 'Puerto usado para establecer la comunicacis&oacute;n en las sesiones colaborativas cuando no se usa ENLARGE';
$string['enlarge_header_config'] = 'Configurar las opciones de ENLARGE para todas las instancias del bloque';
$string['using_enlarge'] = 'Permitir usar ENLARGE en las sesiones colaborativas?';
$string['using_enlarge_help'] = 'Esta opci&oacute;n permite usar ENLARGE para enrutar las comunicaciones en las sesiones colaborativas.';

//edit_form.php:
$string['enlarge_header'] = 'Configurar ENLARGE para esta instancia del bloque';
$string['use_enlarge'] = 'Usar ENLARGE en sesiones colaborativas?';
$string['enlarge_instance'] = "Servidor ENLARGE para las sesiones colaborativas";
$string['enlarge_instance_help'] = "El orden se corresponde con aquel usado para los valores en las variables myFrontier_IP en la p&aacute;gina de configuraci&oacute;n del bloque Remlab Manager";

//Capabilities
$string['ejsapp_collab_session:addinstance'] = 'Añadir un nuevo bloque EJSApp para sesiones colaborativas';
$string['ejsapp_collab_session:myaddinstance'] = 'Añadir un nuevo bloque EJSApp para sesiones colaborativas al &Aacute;rea personal';

//Privacy
$string['privacy:metadata'] = 'El bloque EJSApp Collab Session sesiones colaborativas entre usuarios.';