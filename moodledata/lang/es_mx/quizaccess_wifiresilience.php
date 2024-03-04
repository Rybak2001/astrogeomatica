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
 * Strings for component 'quizaccess_wifiresilience', language 'es_mx', version '4.2'.
 *
 * @package     quizaccess_wifiresilience
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Respuesta cambiada';
$string['attempt'] = 'Intento';
$string['backtothequiz'] = 'Regresar al examen';
$string['changesmadereallygoaway'] = 'Sus respuestas no han sido guardadas en el servidor. ¿Está seguro de querer abandonar este intento?';
$string['countrealofflinetime'] = 'Restar el tiempo fuera-de-línea (si estuviera disponible)';
$string['createasnewattempt'] = 'Crear como un nuevo intento.';
$string['createasnewattempt_help'] = '***Precaución*** Crear un nuevo intento';
$string['createnewattempt'] = 'Crear nuevo intento';
$string['dangeryes'] = 'Si (<font color="red">!!Danger!!</font>)';
$string['dataprocessedsuccessfully'] = 'Datos procesados exitosamente ({$a}).';
$string['decryptingcomplete'] = 'Des-encriptación de archivo completada';
$string['decryptingfile'] = 'Des-encriptando archivo {$a}';
$string['delete'] = 'Eliminar';
$string['description'] = 'El examen está en modo <strong>Wifi Resiliente</strong>.';
$string['descriptionlink'] = 'Subir respuestas exportadas';
$string['download'] = 'Descargar';
$string['downloadedecryptedfile'] = 'Descargar Archivo des-encriptado';
$string['downloadfile'] = 'Descargar como un archivo';
$string['excludelist'] = 'Excluir archivos';
$string['extraroutes'] = 'Rutas extra';
$string['fetchandlog'] = 'Cacheo de archivos incrustados (anexos)';
$string['filearraystyle'] = '<br><h3>Estilo de Arreglo</h3>';
$string['fileencryptedinitvaluenobase64'] = 'El valor inicial de encriptación no está codificado base-64 apropiadamente.';
$string['fileencryptedkeynobase64'] = 'La clave AES encriptada no está codificado base-64 apropiadamente.';
$string['fileinitvaluenobase64'] = 'El valor inicial no está codificado base-64 apropiadamente.';
$string['filejsondecodeerror'] = 'Error JSON : {$a}';
$string['filekeynobase64'] = 'Clave AES no está codificada base-64 apropiadamente.';
$string['filenoattemptid'] = 'Los datos subidos no incluyen una ID del intento.';
$string['filenodecryptionkey'] = 'Se obtuvieron respuestas aparentemente codificadas, pero no hay clave para des-encriptación.';
$string['filenoresponses'] = 'El archivo al parecer no contiene respuestas.';
$string['filenoturlencoded'] = 'El Archivo de Datos NO está URL-ENCODED. Use datos como están.';
$string['filetype'] = 'Tipo';
$string['fileunabledecrypt'] = 'No se pudieron des-encriptar las respuestas: {$a}';
$string['fileunabledecryptkey'] = 'No se pudo des-encriptar la clave AES: {$a}';
$string['fileurlencoded'] = 'El archivo de datos está URL-ENCODED. Use datos URL-DECODED.';
$string['filewithkeyandiv'] = '<br><h3>Estilo Original (Con CLAVE y IV)</h3>"';
$string['filewithoutkeyandiv'] = '<br><h3>Estilo Original (Sin CLAVE o IV) - Bueno para usar en otras instancias Moodle o cuando las claves Pública y Privada están Dañadas.</h3>';
$string['filewrongquiz'] = 'Los datos subidos no pertenecen a este examen.';
$string['finishattemptsafterupload'] = '¿Enviar y terminar el intento contenido en el archivo de respuesta?';
$string['fromfile'] = 'Hora de envío en archivo subido';
$string['inspect'] = 'Inspeccionar archivos de respuesta';
$string['inspectingfile'] = 'Inspeccionando archivo {$a}';
$string['inspectionprocessedsuccessfully'] = 'Datos cargados exitosamente';
$string['lastsaved'] = 'Último guardado: {$a}';
$string['lastsavedtotheserver'] = 'Último guardado al servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Último guardado a esta computadora: {$a}';
$string['lastseen'] = 'Último visto';
$string['lastsync'] = 'Último sincronizado';
$string['livedevices'] = 'Dispositivos vivos';
$string['loadingstep1'] = 'Configurando {$a}';
$string['loadingstep10'] = 'Examen iniciando...';
$string['loadingstep2'] = 'Preparando estructura del examen...';
$string['loadingstep3'] = 'Preparando rutas estáticas y dinámicas de trabajador del servicio.';
$string['loadingstep4'] = 'Preparando base de datos del examen...';
$string['loadingstep5'] = 'Preparando preguntas del examen...';
$string['loadingstep6'] = 'Preparando navegación del examen...';
$string['loadingstep7'] = 'Encriptando datos del examen...';
$string['loadingstep8'] = 'Verificando estado de la red...';
$string['localconfirmdeletelocal'] = '¿Está seguro de querer eliminar registro de Respuesta local: {$a}?';
$string['localconfirmdeletestatus'] = '¿Está seguro de querer eliminar registro de Estado: {$a}?';
$string['localnorecordsfound'] = 'No se encontraron registros locales';
$string['localresponsesfor'] = 'Respuestas almacenadas en esta máquina local para {$a}';
$string['localstorage'] = '<br>Almacenamiento Local :';
$string['localtabledelete'] = 'Eliminar';
$string['localtabledownload'] = 'Descargar';
$string['localtablelastchangelocal'] = 'Último Cambiado Localmente';
$string['localtablelastsavedserver'] = 'Último Guardado en Servidor';
$string['localtablerecord'] = 'Registro';
$string['logindialogueheader'] = 'Usted podría necesitar ingresar de nuevo al sitio';
$string['loginokagain'] = 'Su ingreso está OK ahora.';
$string['navdetails'] = 'Mostrar estado de dispositivo y servidor';
$string['now'] = 'Ahora';
$string['or'] = 'o';
$string['pluginname'] = 'Modo Examen Wifi Resiliente';
$string['precachefiles'] = 'Pre-cachear archivos';
$string['prechecks'] = 'Mostrar comprobaciones técnicas';
$string['privatekey'] = 'Clave privada de encriptación';
$string['processingcomplete'] = 'Procesamiento completado';
$string['processingfile'] = 'Procesando archivo {$a}';
$string['publickey'] = 'Clave pública de encriptación';
$string['publickey_desc'] = 'Esto debe corresponder con la clave privada. Usted puede generarla  desde la clave privada usando <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> y después pegar los contenidos de  rsa_1024_pub.pem aquí.';
$string['quizfinishtime'] = 'Límite de tiempo del examen (tiempo máximo permitido del examen)';
