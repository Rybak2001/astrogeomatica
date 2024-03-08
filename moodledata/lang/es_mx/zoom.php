<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'zoom', language 'es_mx', version '4.2'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'ID de cuenta Zoom';
$string['actions'] = 'Acciones';
$string['activitydate:ended'] = 'Terminó:';
$string['activitydate:started'] = 'Inició:';
$string['activitydate:starts'] = 'Inicia:';
$string['addparticipant'] = 'Añadir un participante';
$string['addparticipantgroup'] = 'Añadir un grupo de participantes';
$string['addroom'] = 'Añadir una sala';
$string['addroomalert'] = 'Añadir una sala al hacer clic';
$string['addtocalendar'] = 'Añadir al calendario';
$string['allmeetings'] = 'Todas las reuniones';
$string['allmeetings_desc'] = 'Con esta configuración, usted puede controlar si será mostrado o no un enlace hacia la página del índice de la actividad Zoom al fondo de cada instancia la página de vista general de de actividad . esta configuración solamente afecta la presentación del enlace en las páginas de vista general del la actividad Zoom. Aun y cuand usted decidiera no mostrar aquí el enlace, el usuario aun podría acceder a la página del índice de la actividad Zoom mediante otros enlaces dentro del curso.';
$string['allmeetings_disable'] = 'Deshabilitar enlace a todas las reuniones';
$string['allmeetings_enable'] = 'Habilitar enlace a todas las reuniones';
$string['alternative_hosts'] = 'Anfitriones Alternos';
$string['alternative_hosts_disable'] = 'Deshabilitar opción de anfitriones alternos';
$string['alternative_hosts_help'] = 'La opción de anfitrión alterno le permite agendar reuniones y designar otro usuario Pro en la misma cuenta para que inicie la reunión o webinar si Usted no puede hacerlo. El usuario recibirá un Email notificándole que ha sido añadido como un anfitrión alterno, con un enlace para iniciar la reunión. Separe varios emails con coma (sin espacios).';
$string['alternative_hosts_inputfield'] = 'Mostrar opción de anfitriones alternos como un campo de entrada de texto simple';
$string['alternative_hosts_picker'] = 'Mostrar opción de anfitriones alternos como un selector de usuario con auto-llenado';
$string['alternative_hosts_picker_noneselected'] = 'No se seleccionó anfitrión alterno';
$string['alternative_hosts_picker_placeholder'] = 'Seleccionar usuario(s)';
$string['apiendpoint'] = 'PuntoFinal API ZOOM';
$string['apiendpoint_eu'] = 'PuntoFinal API EU';
$string['apiendpoint_global'] = 'PuntoFinal API Global';
$string['apiidentifier'] = 'Identificador API de ZOOM';
$string['apiidentifier_desc'] = 'El campo identificador a usar al hacer una llamada a la API ZOOM';
$string['apiurl'] = 'URL API Zoom';
$string['apiurl_desc'] = '';
$string['audio_both'] = 'Teléfono y audio de computadora';
$string['audio_telephony'] = 'Solamente teléfono';
$string['audio_voip'] = 'Solamente audio de computadora';
$string['audiodefault'] = 'Audio predeterminado';
$string['authentication'] = 'Autenticación';
$string['autorecording_cloud'] = 'Nube';
$string['autorecording_local'] = 'Local';
$string['autorecording_none'] = 'Ninguna';
$string['autorecording_userdefault'] = 'Usar configuraciones predeterminadas de usuario Zoom';
$string['autorecordingoptionsupdate'] = 'Actualizar opciones de auto grabación';
$string['breakoutrooms'] = 'Salas de descanso';
$string['cachedef_oauth'] = 'Caché de token Zoom OAuth';
$string['cachedef_zoomid'] = 'Mapeos de la iD del usuario Zoom';
$string['cachedef_zoommeetingsecurity'] = 'Configuraciones de seguridad de reuniones Zoom, incluyendo requisitos de la cuenta de contraseña de reunión.';
$string['calendardescriptionURL'] = 'URL para unirse a reunión: {$a}.';
$string['calendardescriptionintro'] = '\\nDescripción:\\n{\\$a}';
$string['calendariconalt'] = 'Ícono del Calendario';
$string['changehost'] = 'Cambiaranfitrión';
$string['clickjoin'] = 'Hizo click en botón para unirse a reunión';
$string['clientid'] = 'ID del ciente Zoom';
$string['clientsecret'] = 'Secreto del cliente Zoom';
$string['connectionfailed'] = 'Conexión falló:';
$string['connectionok'] = 'Conexión funcionando';
$string['connectionsettings'] = 'Configuraciones de la conexión';
$string['connectionsettings_desc'] = 'Estas configuraciones definen como Moodle se conecta a Zoom.';
$string['connectionstatus'] = 'Estatus de conexión';
$string['day'] = 'Día(s)';
$string['defaultsettings'] = 'Configuraciones por defecto de Zoom';
$string['defaultsettings_help'] = 'Estas configuraciones definen los valores por defecto para todas las reuniones Zoom y webinars.';
$string['deletemeetingrecordings'] = 'Eliminar grabaciones de reuniones de Moodle';
$string['deleteroom'] = 'Eliminar sala';
$string['displayleadtime'] = 'Mostrar tiempo pre-junta';
$string['displayleadtime_desc'] = 'Si se habilita, el tiempo que falta antes de la reunión será mostrado a los usuarios. De esta forma, los usuarios son informados si / cuando pueden unirse a la reunión antes de la hora de inicio agendada. Esto podría evitar que los usuarios estén recargando constantemente la página hasta que puedan unirse.';
$string['displayleadtime_nohideif'] = 'Por favor tenga en cuenta que esta configuración solamente es procesada si la configuración \'{$a}\' está configurada a un valor mayor de cero..';
$string['displaypassword'] = 'Mostrar contraseña de acceso';
$string['displaypassword_help'] = 'Si se habilita, el código para ingresar a la reunión siempre será mostrado a los que no sean hosts.';
$string['downloadical'] = 'Descargar iCal';
$string['downloadical_desc'] = 'Con esta configuración usted puede controlar si será mostrado o no un enlace para descargar un archivo iCal para la reunión en la página de la vista general de la instancia de la actividad. Esta configuración solamente afecta la posibilidad de descargar un archivo de iCal para herramientas de calendario de terceros. Sin importar esta configuración, la actividad de Zoom añadirá una entrada de calendario dentro del calendario de Moodle tan pronto como se configure el inicio de una reunión.';
$string['downloadical_disable'] = 'Deshabilitar enlace para descargar iCal';
$string['downloadical_enable'] = 'Habilitar enlace para descargar iCal';
$string['duration'] = 'Duración (minutos)';
$string['encryptiontype'] = 'Tipo de encriptación';
$string['encryptiontype_alwaysshow'] = 'Siempre mostrar selector de tipo de encriptación sin importar si el usuario pueda o no usar encriptación de fin-a-a-fin';
$string['encryptiontype_disable'] = 'Deshabilitar selector de tipo de encriptación';
$string['encryptiontype_showonlyife2epossible'] = 'Mostrar selector de tipo de encriptación solamente si el usuario puede usar encriptación de fin-a-a-fin';
$string['end_date_option_after'] = 'Después de';
$string['end_date_option_by'] = 'Por';
$string['end_date_option_occurrences'] = 'ocurrencias';
$string['enddate'] = 'Fecha final';
$string['endtime'] = 'Hora de término';
$string['err_downloadicaldisabled'] = 'El descargar archivos iCal de reunión Zoom fue deshabilitado.';
$string['err_downloadicalrecurringempty'] = 'No es posible descargar el archivo iCal de reuniones ZOOM para esta reunión porque no contiene al menos una ocurrencia.';
$string['err_downloadicalrecurringnofixed'] = 'No es posible descargar el archivo iCal de reuniones ZOOM para esta reunión porque es una reunión recurrente sin horario fijo.';
$string['err_duration_nonpositive'] = 'La duración debe ser positiva.';
$string['err_duration_too_long'] = 'La duración no puede exceder 150 horas.';
$string['err_end_date'] = 'La fecha de fin de recurrencia no puede estar en el pasado';
$string['err_end_date_before_start'] = 'La fecha de fin de recurrencia no puede ser anterior a la fecha de inicio';
$string['err_invalid_password'] = 'La contraseña contiene caracteres inválidos.';
$string['err_long_timeframe'] = 'Marco de hora (time frame) demasiado largo, mostrando resultados del último mes dentro del rango.';
$string['err_password'] = 'La contraseña solamente puede contener los caracteres siguientes: [a-z A-Z 0-9 @ - _ *]. Máximo 10 caracteres.';
$string['err_password_required'] = 'Se requiere contraseña';
$string['err_repeat_monthly_interval'] = 'El intervalo máximo para reuniones mensuales es de 3 meses';
$string['err_repeat_weekly_interval'] = 'El intervalo máximo para reuniones semanales es de 12 semanas';
$string['err_start_time_past'] = 'La fecha de inicio no puede estar en el pasado.';
$string['err_start_time_past_recurring'] = 'Para reuniones recurrentes, la porción de fecha de este campo es la fecha más temprana posible para la siguiente reunión. La fecha debe ser hoy o en el futuro.';
$string['err_weekly_days'] = 'Seleccionar días para la reunión recurrente semanal';
$string['erroraddinstance'] = 'No se pudo crear nueva reunión ZOOM. Opciones inválidas seleccionadas para una reunión recurrente.';
$string['errorwebservice'] = 'Error del servidor web zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom recibió una mala solicitud: {$a}';
$string['errorwebservice_notfound'] = 'El recurso no existe';
$string['export'] = 'Exportar';
$string['externaluser'] = 'Usuario externo';
$string['firstjoin'] = 'El primero que pueda unirse';
$string['firstjoin_desc'] = 'Lo más temprano que un usuario pueda unirse a una reunión agendada (minutos antes del inicio).';
$string['getmeetingrecordings'] = 'Obtener grabaciones de reuniones de Zoom';
$string['getmeetingreports'] = 'Obtener reporte de reunión de Zoom';
$string['globalsettings'] = 'Configuraciones globales';
$string['globalsettings_desc'] = 'Estas configuraciones aplican al plugin Zoom como un todo.';
$string['host'] = 'Anfitrión';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">Los Hosts Alternos</a> pueden iniciar la reunión ZOOM y gestionar la Sala de Espera.';
$string['indicator:cognitivedepth'] = 'Zoom cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Zoom.';
$string['indicator:socialbreadth'] = 'Zoom social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Zoom.';
$string['instanceusers'] = 'Comprobar usuarios de instancia';
$string['instanceusers_desc'] = 'Si estuviera habilitado redefinir licencias, solamente checar usuarios licenciados en esta instancia de Moodle. Útil para configuraciones donde instancias separadas están dividiéndose un solo conjunto de licencias de Zoom.';
$string['invalid_status'] = 'Estatus inválido; revisar la Basededatos.';
$string['invalidscheduleuser'] = 'Usted no puede agendar para el usuario especificado.';
$string['invitation_dialin'] = 'Patrón para marcado';
$string['invitation_dialin_help'] = 'El patrón regex para encontrar los números de marcado de la reunión Zoom';
$string['invitation_h323'] = 'Patrón de mensaje H.323';
$string['invitation_icallink'] = 'Patrón del mensaje de enlace de iCal';
$string['invitation_icallink_help'] = 'El patrón regex para encontrar el enlace iCal de la reunión Zoom';
$string['invitation_invite'] = 'Patrón de mensaje inválido';
$string['invitation_invite_help'] = 'El patrón regex para encontrar el mensaje de introducción a la reunión Zoom';
$string['invitation_joinurl'] = 'Patrón para unirse a la reunión';
$string['invitation_joinurl_help'] = 'El patrón regex para encontrarla URL para reunirse a Zoom';
$string['invitation_onetapmobile'] = 'Patrón móvil de un toque';
$string['invitation_onetapmobile_help'] = 'El patrón regex para encontrar los detalles para móvil con un toque de la reunión Zoom';
$string['invitation_sip'] = 'Patrón SIP';
$string['invitationmatchnotfound'] = 'No se encontraron coincidencias en invitaciones ZOOM para elemento : "{$a->element}" con patrón: "{$a->pattern}".';
$string['invitationmodificationfailed'] = 'Error en regex para elemento de invitación ZOOM: "{$a->element}" con patrón: "{$a->pattern}".';
$string['invitationregex'] = 'Regex y capacidades de invitación Zoom';
$string['invitationregex_help'] = 'Definir los patrones regex para aislar cada parte de una invitación zoom de forma tal que la información pueda ser controlada por capacidades.';
$string['invitationregex_nohideif'] = 'Por favor tome en cuenta: Los patrones regex solamente serán usados si la configuración \'{$a}\' está habilitada.';
$string['invitationregexenabled'] = 'Habilitar regex y capacidades de invitación a Zoom';
$string['invitationremoveicallink'] = 'Quitar enlace a invitación iCal a Zoom';
$string['invitationremoveicallink_help'] = 'Si se habilita el enlace iCal que podría ser incluido en el mensaje Email de reunión Zoom será quitado usando el patrón regex invitation_icallink.';
$string['invitationremoveinvite'] = 'Quitar mensaje de invitación de invitación zoom';
$string['invitationremoveinvite_help'] = 'Si se habilita, la oración de introducción en el mensaje Email de reunión Zoom será quitada usando el patrón regex invitation_invite.';
$string['join'] = 'Unirse';
$string['join_meeting'] = 'Unirse a la reunión';
$string['joinbeforehost'] = 'Unirse a la reunión antes del anfitrión';
$string['joinbeforehostenable'] = 'Permitirle a participantes unirse en cualquier momento';
$string['joinlink'] = 'Enlace para unirse';
$string['jointime'] = 'Hora de unión';
$string['leavetime'] = 'Hora de partida';
$string['licenseonjoin'] = 'Seleccionar esta opción si le gustaría que el anfitrión recibiera una licencia al iniciar la reunión, <i>además de</i> al crearla.';
$string['licensesettings'] = 'Configuraciones de licencia';
$string['licensesettings_desc'] = 'Estas configuraciones definen la manera en la que Moodle maneja su licencia de Zoom.';
$string['licensesnumber'] = 'Número de licencias';
$string['lowlicenses'] = 'Si el número de sus licencias excede las necesarias, entonces cuando Usted cree cada nueva actividad por el usuario, le será asignada una licencia PRO al disminuir el estatus de otro usuario. La opción es efectiva cuando el número de licencias PRO es mayor de 5.';
$string['maskparticipantdata'] = 'Enmascarar datos del participante';
$string['maskparticipantdata_help'] = 'Impide que los datos del particiante aparezcan en reportes (útil para sitios que enmascaran los datos de participantes, como por ejemplo HIPAA).';
$string['media'] = 'Medio';
$string['meeting_finished'] = 'Terminada';
$string['meeting_invite'] = 'Información para teléfono a marcar';
$string['meeting_invite_hide'] = 'Ocultar invitación a reunión';
$string['meeting_invite_show'] = 'Mostrar invitación a reunión';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente en Zoom';
$string['meeting_not_started'] = 'No iniciada';
$string['meeting_started'] = 'En progreso';
$string['meeting_time'] = 'Hora de inicio';
$string['meetingcapacitywarning'] = 'Advertencia de capacidad de reunión';
$string['meetingcapacitywarning_desc'] = 'Con esta configuración, usted puede mostrar una notificación de advertencia si hubieran más participantes activos e inscritos en el curso de los que la capacidad de reuniones de la licencia ZOOM del host tiene. La notificación será mostrada al host (y hosts alternos) en la página de vista general de actividad ZOOM. Se recomienda que el host acuda con el propietario de la cuenta ZOOM para obtener una licencia ZOOM más grande. Usted puede cambiar este mensaje por medio de la personalización del idioma de Moodle.';
$string['meetingcapacitywarning_disable'] = 'Deshabilitar Advertencia de capacidad de reunión';
$string['meetingcapacitywarning_enable'] = 'Habilitar Advertencia de capacidad de reunión';
$string['meetingcapacitywarningbodyalthost'] = 'La licencia ZOOM de este host de reunión, {$a->hostname}, tiene una capacidad de <strong>{$a->meetingcapacity} participantes en la reunión</strong>, pero este curso tiene <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participantes inscritos y activos</a></strong>.';
$string['meetingcapacitywarningbodyrealhost'] = 'Su licencia ZOOM tiene una capacidad de <strong><a href="{$a->zoomprofileurl}" target="_blank">{$a->meetingcapacity} participantes en la reunión</a></strong>, pero este curso tiene <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} participantes inscritos y activos</a></strong>.';
$string['meetingcapacitywarningcontactalthost'] = 'Por favor dígale al host (anfitrión) que vaya a la cuenta de Zoom para obtener una licencia Zoom más grande si es que todos estos participantes del curso necesitan unirse a la reunión Zoom.';
$string['meetingcapacitywarningcontactrealhost'] = 'Por favor acuda con el propietario de la cuenta ZOOM para obtener una licencia Zoom más grande si es que todos estos participantes del curso necesitan unirse a la reunión.';
$string['meetingcapacitywarningheading'] = 'Advertencia de capacidad de reunión:';
$string['meetingparticipantsdeleted'] = 'Datos de usuario de participantes de reunión eliminados.';
$string['meetingrecordingviewsdeleted'] = 'Datos de usuario de vistas de reunión eliminados.';
$string['modulename'] = 'Reunión Zoom';
$string['modulename_help'] = 'Zoom es una plataforma de web y videoconferencia que le proporciona a los usuarios autorizados la habilidad para alojar reuniones en-línea.';
$string['modulenameplural'] = 'Reuniones Zoom';
$string['month'] = 'Mes(es)';
$string['month_day_text'] = 'del mes';
$string['newmeetings'] = 'Nuevas Reuniones';
$string['nextoccurrence'] = 'Siguiente ocurrencia';
$string['nomeetinginstances'] = 'No se encontraron sesiones para esta reunión';
$string['nooccurrenceleft'] = 'La última ocurrencia ya pasó';
$string['noparticipants'] = 'No se encontraron participantes para esta sesión en este instante.';
$string['norecordings'] = 'No se encontraron grabaciones para esta reunión en este momento.';
$string['norooms'] = 'Sin Salas';
$string['nosessions'] = 'No se encontraron sesiones para el rango especificado.';
$string['nozooms'] = 'Sin reuniones';
$string['nozoomsfound'] = 'No se encontraron reuniones para el curso dado.';
$string['occurson'] = 'Ocurre En';
$string['off'] = 'Desconectado';
$string['oldmeetings'] = 'Reuniones Concluídas';
$string['on'] = 'Activo';
$string['option_allow_recording_change'] = 'Permitir cambiar grabación';
$string['option_allow_recording_change_help'] = 'Permitirle al usuario cambiar configuración de grabación al momento de crear la actividad';
$string['option_audio'] = 'Opciones de Audio';
$string['option_audio_help'] = 'Con esta opción, usted puede permitirle a los usuarios llamar usando solamente Teléfono, Solamente audio de computadora, o ambos.';
$string['option_authenticated_users'] = 'Requerir autenticación para unirse';
$string['option_authenticated_users_help'] = 'Habilitar esta opción requiere que todos los asistentes se apunten con su cuenta Zoom autorizada para poder unirse a la reunión. Esto  <em>NO</em> se relaciona con el ingreso a Moodle de ninguna manera.';
$string['option_auto_recording'] = 'Grabación automática';
$string['option_auto_recording_help'] = 'Habilitar esta opción grabará automáticamente la reunión';
$string['option_encryption_type'] = 'Encriptación';
$string['option_encryption_type_endtoendencryption'] = 'Encriptación fin-a-fin';
$string['option_encryption_type_enhancedencryption'] = 'Encriptación mejorada';
$string['option_host_video'] = 'Video del anfitrión';
$string['option_host_video_help'] = 'Habilitar esta opción habilitará el video del host al unirse a la reunión. Aunque usted elija desactivarlo, el host tendrá la opción de activar su video.';
$string['option_jbh'] = 'Reunirse antes que el anfitrión';
$string['option_mute_upon_entry'] = 'Enmudecer  a participantes al entrar';
$string['option_mute_upon_entry_help'] = 'Al habilitar esta opción automáticamente se enmudecerá a todos los participantes cuando se unan a la reunión. Los participantes pueden activar su micrófono ellos mismos después de unirse a la reunión.';
$string['option_participants_video'] = 'Video de participantes';
$string['option_proxyhost'] = 'Usar proxy';
$string['option_proxyhost_desc'] = 'El proxy aquí configurado como \'<code><hostname>:<port></code>\' solamente es usado para comunicarse con Zoom. Déjelo vacío para usas las configuraciones predeterminadas del proxy de Moodle. Usted solamente necesita configurar esto si desea configurar un proxy global en Moodle.';
$string['option_view_recordings'] = 'Permitir que sean vistas las grabaciones';
$string['option_waiting_room'] = 'Sala de espera';
$string['participantdatanotavailable'] = 'Detalles no disponibles';
$string['participantdatanotavailable_help'] = 'Los datos de los participantes no están disponibles para esta sesión Zoom (por ejemplo, por cumplimiento con HIPAA).';
$string['participantgroups'] = 'Grupos participantes';
$string['participants'] = 'Participantes';
$string['password'] = 'Contraseña';
$string['password_allowed_char'] = 'El código de acceso solamente puede contener los siguientes caracteres: [a-z A-Z 0-9 @ - _ *].';
$string['password_consecutive'] = 'Máximo de {$a} caracteres consecutivos (abcd, 1111, 1234, etc.).';
$string['password_length'] = 'Mínimo de {$a} caracter(s).';
$string['password_letter'] = 'El código de acceso debe contener al menos 1 letra.';
$string['password_lower_upper'] = 'El código de acceso debe incluir tanto caracteres en minúsculas como en MAYÚSCULAS.';
$string['password_max_length'] = 'Máximo de 10 caracteres.';
$string['password_number'] = 'El código de acceso debe contener al menos 1 número.';
$string['password_only_numeric'] = 'El código de acceso solamente debe contener números y ningún otro caracter.';
$string['password_special'] = 'El código de acceso debe tener al menos 1 caracter especial (@-_*).';
$string['passwordprotected'] = 'Protegido por contraseña';
$string['pluginadministration'] = 'Gestionar Reuniones Zoom';
$string['pluginname'] = 'Reunión Zoom';
$string['privacy:metadata:zoom_breakout_participants'] = 'La tabla de la base de datos para almacenar una lista de las salas de descanso de los participantes de la reunión.';
$string['privacy:metadata:zoom_breakout_participants:userid'] = 'La ID del usuario participante';
$string['privacy:metadata:zoom_meeting_details'] = 'La tabla de la base de datos que almacena información acerca de cada instancia de reunión.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'El nombre de la reunión a a la cual asistió el usuario.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La tabla de la base de datos que almacena información acerca de participantes reunidos.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Por cuanto tiempo estuvo en la reunión el participante';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'La hora cuando el participante se unió a la reunión';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'La hora cuando el participante dejó la reunión';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'El nombre del participante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'El email del participante';
$string['privacy:metadata:zoom_meeting_view'] = 'La tabla de la base de datos para monitorear usuarios que vean las grabaciones de reuniones';
$string['privacy:metadata:zoom_meeting_view:userid'] = 'La ID del usuario que vio la grabación';
$string['recording'] = 'Grabación';
$string['recordingadd'] = 'Añadir Grabación';
$string['recordingdate'] = 'Fecha de Grabación';
$string['recordingdelete'] = '¿Está seguro de querer eliminar la grabación "{$a}"?';
$string['recordinghide'] = 'Ocultar Grabación (Actualmente Visible)';
$string['recordinglink'] = 'Enlace a Grabación';
$string['recordingname'] = 'Título';
$string['recordingnotfound'] = 'No se pudo encontrar grabación';
$string['recordingnotvisible'] = 'La grabación no es visible. Por favor póngase en contacto con su Administrador del Sistema si usted cree que esto es un error.';
$string['recordingpasscode'] = 'Contraseña de grabación';
$string['recordings'] = 'Grabaciones';
$string['recordingshow'] = 'Mostrar Grabación (Actualmente Oculta)';
$string['recordingshowtoggle'] = 'Alternar Mostrar Grabación';
$string['recordingtypeaudio'] = 'Solo Audio';
$string['recordingtypevideo'] = 'Video y Audio';
$string['recordingurl'] = 'URL de Grabación';
$string['recordingview'] = 'Ver Grabaciones';
$string['recordingvisibility'] = '¿Las grabaciones para esta reunión son visibles de forma predeterminada?';
$string['recordingvisibility_help'] = 'Cuando se buscan nuevas grabaciones para esta reunión, ¿deberán ellas ser visibles en Moodle de forma predeterminada?';
$string['recreatesuccessful'] = 'Reunión creada exitosamente';
$string['recurrence_option_daily'] = 'Diariamente';
$string['recurrence_option_monthly'] = 'Mensualmente';
$string['recurrence_option_no_time'] = 'Sin Hora Fija';
$string['recurrence_option_weekly'] = 'Semanalmente';
$string['recurrencetype'] = 'Recurrencia';
$string['recurringmeeting'] = 'Reunión recurrente';
$string['recurringmeeting_help'] = 'Habilitar esta opción hará a la reunión una reunión recurrente sin una fecha ni hora de terminación. Podrá entonces ser accesada en cualquier momento.';
$string['recurringmeetingexplanation'] = 'La reunión no tiene una fecha o una hora de terminación';
$string['recurringmeetinglong'] = 'Reunión recurrente (reunión sin fecha ni hora de término)';
$string['recurringmeetingthisis'] = 'Esta es una reunión recurrente';
$string['recycleonjoin'] = 'Reciclar licencia al unirse';
$string['redefinelicenses'] = 'Redefinir licencias';
$string['refreshreports'] = 'Refrescar reportes de sesión';
$string['register'] = 'Registrar';
$string['registration'] = 'Requerir registro';
$string['registration_help'] = 'Habilitar esta opción forzará a los participantes a registrse para la reunión/webinar Zoom antes de unirse.';
$string['registration_text'] = 'Forzar a participantes a registrase para la reunión/webinar';
$string['repeatinterval'] = 'Repetir Cada';
$string['report'] = 'Reportes';
$string['reportapicalls'] = 'LLamadas API reporte agotadas';
$string['requirepasscode'] = 'Requerir contraseña para pasar a reunión';
$string['requirepasscode_help'] = 'Habilitar esta opción requerirá que el anfitrión (host) configure un código de acceso para la reunión. A los participantes que se unan se les pedirá esto antes de unirse ala reunión. Los participantes que ingresen a esta reunión dentro dela actividad Moodle no necesitan ingresar esta contraseña de acceso.';
$string['resetapicalls'] = 'Reiniciar el número de llamadas API disponibles';
$string['resetzoomsall'] = 'Eliminar todas las calificaciones de usuarios, datos de vista de grabación de usuarios y datos de usuario de participantes en reunión.';
$string['room'] = 'Sala';
$string['roomname'] = 'Nombre de la sala';
$string['rooms'] = 'Salas';
$string['schedule'] = 'Agendar';
$string['schedulefor'] = 'Agendar reunión para';
$string['schedulefor_help'] = 'Usted puede agendar reuniones a nombre de otro usuario. Como un pre-requisito, este usuario debe haberle asignado a usted privilegios de agendado en Zoom. El usuario seleccionado será el anfitrión (host) de la reunión y será su licencia de Zoom la que se usará para la reunión.';
$string['scheduleforself'] = 'Usted mismo';
$string['schedulingprivilege'] = 'Privilegio para agendar';
$string['schedulingprivilege_desc'] = 'Con esta configuración, usted puede controlar si es que la opción de privilegio de agendado es mostrada o no a usuarios en la configuración de la instancia de actividad. Esta configuración solamente afecta las configuraciones de la instancia de actividad Moodle. Aunque usted decidiera mostrar la opción, el usuario aun necesitará obtener el privilegio para agendado otorgado por otro usuario en ZOOM para finalmente agendar una reunión para el otro usuario.';
$string['schedulingprivilege_disable'] = 'Opción para deshabilitar privilegio para agendar';
$string['schedulingprivilege_enable'] = 'Opción para habilitar privilegio para agendar';
$string['search:activity'] = 'Zoom - información de actividad';
$string['security'] = 'Seguridad';
$string['selectionarea'] = 'Sin selección';
$string['sessions'] = 'Sesiones';
$string['sessionsreport'] = 'Reporte de sesiones';
$string['sesskeyinvalid'] = 'Sesión inválida detectada. No sepuede avanzar más.';
$string['setpasscode'] = 'Configurar código para pasar';
$string['showmedia'] = 'Sección Mostrar Medio';
$string['showmedia_help'] = 'Habilitar esta opción mostrará la sección Medio en la página de actividad de reunión.';
$string['showmediaonview'] = 'Sección Mostrar Medio en página de reunión';
$string['showschedule'] = 'Mostrar sección Agendar';
$string['showschedule_help'] = 'Habilitar esta opción mostrará la sección Agendar en la página de actividad de reunión.';
$string['showscheduleonview'] = 'Sección Mostrar Agendar en página de reunión';
$string['showsecurity'] = 'Sección Mostrar Seguridad';
$string['showsecurity_help'] = 'Habilitar esta opción mostrará la sección Seguridad en la página de actividad de reunión.';
$string['showsecurityonview'] = 'Mostrar sección Seguridad en la página de actividad de reunión.';
$string['start'] = 'Inicio';
$string['start_meeting'] = 'Iniciar Reunión';
$string['start_time'] = 'Cuando';
$string['starthostjoins'] = 'Iniciar video en cuanto se una el anfitrión';
$string['startpartjoins'] = 'Iniciar video en cuanto los parcipantes se reunan';
$string['starttime'] = 'Hora de inicio';
$string['status'] = 'Estatus';
$string['supplementaryfeaturessettings'] = 'Configuración de características suplementarias';
$string['supplementaryfeaturessettings_desc'] = 'Estas configuraciones controlan si es que, y el como, las características suplementarias de Zooom son proporcionadas a los usuarios.';
$string['title'] = 'Título';
$string['topic'] = 'Tópico/Tema';
$string['trackingfields'] = 'Campos de monitoreo';
$string['trackingfields_help'] = 'Ingresar los nombres/etiquetas de campo de monitoreo, separados por comas, para habilitar para actividades Zoom.';
$string['trackingfields_recommendedvalues'] = 'Valores recomendados:';
$string['unavailable'] = 'Usted no puede unirse en este momento.';
$string['unavailablefinished'] = 'La reunión ya ha terminado.';
$string['unavailablefirstjoin'] = 'Usted puede unirse, lo más pronto, {$a->mins} minutos antes de la hora de inicio agendada.';
$string['unavailablenotstartedyet'] = 'La reunión aun no ha comenzado.';
$string['updatemeetings'] = 'Actualizar configuraciones de reunión de Zoom';
$string['updatetrackingfields'] = 'Actualizar configuraciones de campo de monitoreo de Zoom';
$string['usepersonalmeeting'] = 'Usar ID {$a} personalizada de reunión';
$string['waitingroom'] = 'Sala de espera';
$string['waitingroomenable'] = 'Habilitar sala de espera';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Este módulo ya estaba configurado como una reunión, no como un webinar. Usted no puede alternar esta configuración después de crear la reunión.</b></p>';
$string['webinar_already_true'] = '<p><b>Este módulo ya estaba onfigurado como un webinar, no como reunión. Usted no puede alternar esta configuración después de crear el webinar.</b></p>';
$string['webinar_alwaysshow'] = 'Siempre mostrar opción de webinar sin importar si el usuario tiene o no una licencia para alojar webinars.';
$string['webinar_by_default'] = 'Webinar predeterminado';
$string['webinar_by_default_desc'] = 'Crear instancia Zoom como un webinar de forma predeterminada.';
$string['webinar_desc'] = 'Con esta configuración, usted puede controlar si la opción para crear un webinar es mostrada o no a los usuarios durante la creación de una reunión. Esta configuración solamente afecta las configuraciones de la instancia de actividad Moodle. Aunque usted decidiera siempre mostrar la opción, el usuario aun necesitaría una licencia válida para webinars para finalmente alojar un webinar.';
$string['webinar_disable'] = 'Deshabilitar webinars';
$string['webinar_help'] = 'Webinars le dan a los anfitriones control y flexibilidad  mejorados para alojar reuniones con audiencias más grandes.\\n\\n Esta opción solamente está disponible para cuentas Zoom pre-autorizadas.';
$string['webinar_showonlyiflicense'] = 'Mostrar opción de webinar solamente si el usuario tiene una licencia para alojar webinars.';
$string['webinarthisis'] = 'Este es un webinar';
$string['week'] = 'Semana(s)';
$string['weekoption_first'] = 'Primer(a)';
$string['weekoption_fourth'] = 'Cuarto/a';
$string['weekoption_last'] = 'Último/a';
$string['weekoption_second'] = 'Segundo/a';
$string['weekoption_third'] = 'Tercero/a';
$string['zoom:addinstance'] = 'Añadir una nueva reunión Zoom';
$string['zoom:eligiblealternativehost'] = 'Seleccionable como host alternativo dentro de reuniones Zoom';
$string['zoom:refreshsessions'] = 'Refrescar reportes de reunión Zoom';
$string['zoom:view'] = 'Ver reuniones Zoom';
$string['zoom:viewdialin'] = 'Ver información para marcar a Zoom';
$string['zoom:viewjoinurl'] = 'Ver URL para unirse a Zoom';
$string['zoomerr'] = 'Ocurrió un error con Zoom';
$string['zoomerr_alternativehostusernotfound'] = 'Usuario {$a} no fue encontrado en Zoom.';
$string['zoomerr_apilimit'] = 'Se alcanzó la tasa máxima límite diaria para este API. Reinténtelo en  {$a}';
$string['zoomerr_field_missing'] = '{$a} no encontrado';
$string['zoomerr_id_missing'] = 'Usted debe especificar una ID de curso_módulo o una ID de instancia';
$string['zoomerr_licensesnumber_missing'] = 'La configuración más alta de Zoom fue encontrada, pero no se encontró la configuración del número de licencia';
$string['zoomerr_maxretries'] = 'Reinentó {$a->maxretries} veces el hacer la llamada, pero falló: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Esta reunión no pudo ser encontrada en Zoom. Usted puede <a href="{$a->recreate}">recrearla aquí</a> o <a href="{$a->delete}">eliminarla completamente</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunión no pudo ser encontrada en Zoom. Por favor contacte al anfitrión  de la reunión si tiene preguntas.';
$string['zoomerr_no_access_token'] = 'No se regresó token de acceso';
$string['zoomerr_scopes'] = 'A la configuración de Zoom OAuth le faltan estos scopes requeridos: {$a}';
$string['zoomerr_usernotfound'] = 'No se pudo encontrar su cuenta en Zoom. Si Usted está usando Zoom por primera vez, Usted debe de habilitar su cuenta al ingresar a <a href="{$a}" target="_blank">{$a}</a> con sus credenciales para ingreso. Una vez que haya activado su cuenta Zoom, re-cargue esta página y continúe configurando su reunión. En caso contrario, asegúrese de que su cuenta de correo en Zoom coincida con su cuenta de correo en este sistema.';
$string['zoomerr_viewrecordings_off'] = 'Ver Grabaciones está desactivado, el trabajo no puede ejecutarse';
$string['zoomurl'] = 'URL de página inicial de Zoom';
$string['zoomurl_desc'] = '';
