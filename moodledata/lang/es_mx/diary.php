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
 * Strings for component 'diary', language 'es_mx', version '3.10'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso denegado';
$string['alias'] = 'Palabra clave';
$string['aliases'] = 'Palabra(s) clave';
$string['aliases_help'] = 'Cada entrada del Diario puede tener una lista asociada de palabras clave ( o alias).

Ingrese cada palabra clave en una línea nueva (no separadas por comas).';
$string['alwaysopen'] = 'Siempre abierto';
$string['and'] = 'y';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Opcionalmente Usted puede anexar uno o más archivos a una entrada del Diario.';
$string['blankentry'] = 'Entrada vacía';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['configdateformat'] = 'Esto define como son mostradas la fechas en los reportes de Diario. El valor predeterminado  "M d, Y G:i" es Mes, día, año y formato de hora de 24 horas. Refiérase a Fecha (Date) en el manual de PHP para más ejemplos y constantes predeterminadas de fecha.';
$string['created'] = 'Creatdo hace {$a->one} días y {$a->two} horas.';
$string['csvexport'] = 'Exportar a .CVS';
$string['currententry'] = 'Entradas actuales del Diario';
$string['dateformat'] = 'Formato predeterminado de fecha';
$string['daysavailable'] = 'Días disponible';
$string['daysavailable_help'] = 'Si se usa el formato Semanal, Usted puede configurar cuantos días está abierto el Diario para su uso.';
$string['deadline'] = 'Días abierto';
$string['details'] = 'Detalles:';
$string['diary:addentries'] = 'Añadir entradas al Diario';
$string['diary:addinstance'] = 'Añadir instancias del Diario';
$string['diary:manageentries'] = 'Gestionar entradas del Diario';
$string['diary:rate'] = 'Valorar entradas del Diario';
$string['diaryclosetime'] = 'Hora de cierre';
$string['diaryclosetime_help'] = 'Si se habilita, Usted puede configurar una fecha para que el diario se cierre y ya no se vuelva a abrir para usarlo.';
$string['diarydescription'] = 'Descripción del Diario';
$string['diaryentrydate'] = 'Configurar fecha para esta entrada';
$string['diarymail'] = 'Saludos {$a->user},
{$a->teacher} ha publicado algo de retroalimentación en su
entrada del Diario para \'{$a->diary}\'.

Usted puede verla anexada a su entrada del Diario:

    {$a->url}';
$string['diarymailhtml'] = 'Saludos {$a->user},
{$a->teacher} ha publicado algo de retroalimentación en su
entrada del Diario para \'<i>{$a->diary}</i>\'.<br /><br />
Usted puede verla anexada a su <a href="{$a->url}">entrada delDiario</a>.';
$string['diaryname'] = 'Nombre del diario';
$string['diaryopentime'] = 'Hora de apertura';
$string['diaryopentime_help'] = 'Si se habilita, Usted puede configurar una fecha para que el diario se abra para usarlo.';
$string['editall'] = 'Editar todas las entradas';
$string['editall_help'] = 'Cuando se habilita, los usuarios pueden editar cualquier entrada.';
$string['editdates'] = 'Editar fechas de entradas';
$string['editdates_help'] = 'Cuando se habilita, los usuarios pueden editar la fecha de cualquier entrada.';
$string['editingended'] = 'El período de edición ha terminado';
$string['editingends'] = 'El período de edición termina';
$string['editthisentry'] = 'Editar esta entrada';
$string['edittopoflist'] = 'Editar parte superior de la lista';
$string['entries'] = 'Entradas';
$string['entry'] = 'Entrada';
$string['entrybgc_colour'] = '#93FC84';
$string['entrybgc_descr'] = 'Esto configura el color del fondo de una entrada/retroalimentación del diario.';
$string['entrybgc_title'] = 'Color de entrada/retroalimentación del diario.';
$string['entrycomment'] = 'Comentario de la entrada';
$string['entrytextbgc_colour'] = '#EEFC84';
$string['entrytextbgc_descr'] = 'Esto configura el color del fondo del texto en una entrada del diario.';
$string['entrytextbgc_title'] = 'Color del fondo del texto del diario.';
$string['eventdiarycreated'] = 'Diario creado';
$string['eventdiarydeleted'] = 'Diario eliminado';
$string['eventdiaryviewed'] = 'Diario visto';
$string['eventdownloadentriess'] = 'Descargar entradas';
$string['evententriesviewed'] = 'Entradas de Diario vistas';
$string['evententrycreated'] = 'Entrada de Diario creada';
$string['evententryupdated'] = 'Entrada de Diario actualizada';
$string['eventfeedbackupdated'] = 'Retroalimentación de Diario actualizada';
$string['exportfilename'] = 'entradas.csv';
$string['exportfilenamep1'] = 'Todo_el_Sitio';
$string['exportfilenamep2'] = '_Entradas_de_Diario_Exportadas_En_';
$string['feedbackupdated'] = 'Retroalimentación actualizada para {$a} entradas';
$string['firstentry'] = 'Primeras entradas del diario:';
$string['format'] = 'Formato';
$string['generalerror'] = 'Hubo un error.';
$string['generalerrorinsert'] = 'No se pudo insertar una nueva entrada del diario.';
$string['generalerrorupdate'] = 'No se pudo actualizar su diario.';
$string['gradeingradebook'] = 'Valoración actual en Libro de Calificaciones';
$string['highestgradeentry'] = 'Entrada más valorada';
$string['incorrectcourseid'] = 'La ID del curso es incorrecta';
$string['incorrectmodule'] = 'La ID del módulo del curso es incorrecta';
$string['invalidaccess'] = 'acceso inválido';
$string['invalidaccessexp'] = '¡Usted no tiene permiso para ver la página a la que intentó acceder! ¡El acceso se guardó en bitácoras!';
$string['lastnameasc'] = 'Apellido(s) ascendentes';
$string['lastnamedesc'] = 'Apellido(s) descendientes';
$string['latestmodifiedentry'] = 'Entradas modificadas más recientemente:';
$string['lowestgradeentry'] = 'Entradas menos valoradas';
$string['mailed'] = 'Enviado';
$string['mailsubject'] = 'Retroalimentación diaria';
$string['modulename'] = 'Diario';
$string['modulename_help'] = 'La actividad Diario le permite a los profesores obtener retroalimentación de sus estudiantes en un período de tiempo.';
$string['modulenameplural'] = 'Diarios';
$string['needsgrading'] = 'Esta entrada no ha sido valorada ni retroalimentada aun.';
$string['needsregrade'] = 'Esta entrada ha cambiado desde que se dio retroalimentación o una valoración.';
$string['newdiaryentries'] = 'Nuevas entradas del Diario';
$string['nextentry'] = 'Entrada siguiente';
$string['nodeadline'] = 'Siempre abierto';
$string['noentriesmanagers'] = 'No hay profesores';
$string['noentry'] = 'Sin entradas';
$string['noratinggiven'] = 'Sin valoración dada';
$string['notopenuntil'] = 'Este diario no será abierto hasta después de';
$string['notstarted'] = 'Usted aun no ha iniciado este diario';
$string['numwordscln'] = '{$a->one} palabras de texto limpio incluyendo {$a->two} caracteres, NO incluyendo {$a->three} espacios.';
$string['numwordsraw'] = '{$a->one} palabras de texto crudo usando  {$a->two} caracteres, includingyendo {$a->three} espacios';
$string['numwordsstd'] = '{$a->one} palabras estandarizadas usando {$a->two} caracteres, incluyendo {$a->three} espacios.';
$string['outof'] = 'de un total de {$a} entradas.';
$string['overallrating'] = 'Valoración general';
$string['pagesize'] = 'Entradas por página';
$string['pluginadministration'] = 'Administración de módulo Diario';
$string['pluginname'] = 'Diario';
$string['previousentry'] = 'Entrada anterior';
$string['rate'] = 'Valorar';
$string['rating'] = 'Valoración para esta entrada';
$string['reload'] = 'Recargar y mostrar entradas del Diario desde actuales hasta más antiguas';
$string['removeentries'] = 'Quitar todas las entradas';
$string['removemessages'] = 'Quitar todas las entradas del Diario';
$string['reportsingle'] = 'Obtener todas las entradas del Diario para este usuario.';
$string['reportsingleallentries'] = 'Todas las entradas del Diario para este usuario.';
$string['returnto'] = 'Regresar a {$a}';
$string['returntoreport'] = 'Regresar a la página del reporte para - {$a}';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['savesettings'] = 'Guardar configuraciones';
$string['search'] = 'Buscar';
$string['search:activity'] = 'Diario - información de actividad';
$string['search:entry'] = 'Diario - entradas';
$string['search:entrycomment'] = 'Diario - comentario de entrada';
$string['selectentry'] = 'Seleccionar entrada para marcarla';
$string['showoverview'] = 'Mostrar vista global de diarios en mi moodle';
$string['showrecentactivity'] = 'Mostrar actividad reciente';
$string['sortcurrententry'] = 'Desde la entrada actual del diario a la primera entrada.';
$string['sortfirstentry'] = 'Desde la primera entrada del diario hasta la más reciente.';
$string['sorthighestentry'] = 'Desde la entrada más valorada del diario hasta la menos valorada.';
$string['sortlastentry'] = 'Desde la entrada modificada más reciente del diario hasta la más antigua.';
$string['sortlowestentry'] = 'Desde la entrada menos valorada del diario hasta la más valorada.';
$string['sortoptions'] = 'Opciones para ordenar:';
$string['sortorder'] = 'El orden de ordenamiento es:';
$string['startnewentry'] = 'Comenzar nueva entrada';
$string['startoredit'] = 'Iniciar nueva entrada o editar la de hoy';
$string['teacher'] = 'Profesor';
$string['text'] = 'Texto';
$string['timecreated'] = 'Hora de creada';
$string['timemarked'] = 'Hora de marcada';
$string['timemodified'] = 'Hora de modificada';
$string['toolbar'] = 'Barra de herramientas:';
$string['userid'] = 'ID del usuario';
$string['usertoolbar'] = 'Barra de herramientas del usuario:';
$string['viewalldiaries'] = 'Ver todos los diarios del curso';
$string['viewallentries'] = 'Ver {$a} entradas de diario';
$string['viewentries'] = 'Ver entradas';
