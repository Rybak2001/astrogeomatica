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
 * Strings for component 'readaloud', language 'es_mx', version '3.10'.
 *
 * @package     readaloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accadjust'] = 'Ajuste fijado.';
$string['accadjust_details'] = 'Este es el número de errores de lectura con el cual se compensarán los puntajes de PPM. Si el ajuste de PPM se configura a "Fijo" entonces este valor será usado para compensar los puntajes de PPM. Este es  un método para mitigar los errores de transcripción de máquina.';
$string['accadjust_help'] = 'Esta tasa debería de corresponder tan cercanamente tanto como sea posible a la tasa de error de transcripción estimado por máquina para un pasaje.';
$string['accadjustmethod'] = 'Ajuste PPM (IA)';
$string['accadjustmethod_details'] = 'Ajustar los puntajes de PPM al ignorarlos, o descontar algunos, de los errores encontrados por IA. El ajuste por defecto de \'Sin ajuste\' resta todos los errores de lectura del puntaje de PPM final.';
$string['accadjustmethod_help'] = 'Para ajustes de Palabras Por Minuto, nosotros podemos: nunca ajustar, ajustar por una cantidad fija, o ignorar errores al calcular las PPM';
$string['accmethod_auto'] = 'Auto ajuste';
$string['accmethod_fixed'] = 'Ajustar por cantidad fija';
$string['accmethod_noerrors'] = 'Ignorar todos los errores';
$string['accmethod_none'] = 'Sin ajuste';
$string['accuracy'] = 'Precisión';
$string['accuracy_p'] = 'Exact(%)';
$string['activitylink'] = 'Enlace hacia actividad siguiente';
$string['activitylink_help'] = 'Para proporcionar un enlace después del intento hacia otra actividad en el curso, seleccione la actividad desde la lista desplegable.';
$string['activitylinkname'] = 'Continuar a siguiente actividad: {$a}';
$string['addpassage'] = 'Configurar Actividad';
$string['adjustedaccuracy_p'] = 'Exact. Ajust(%)';
$string['adjustedgrade_p'] = 'Calif. Ajust(%)';
$string['adjustedwpm'] = 'PPM Ajust';
$string['aigradenow'] = 'Calificación IA';
$string['allowearlyexit'] = 'Puede salir tempranamente';
$string['allowearlyexit_defaultdetails'] = 'Ajustar la configuración por defecto para allow_early_exit. Puede ser anulada al nivel de la actividad. Si es verdadera, allow_early_exit significa que los estudiantes pueden terminar antes del límite de tiempo, al presionar un botón para terminar. Las PPM son calculadas usando sus tiempos de grabación.';
$string['allowearlyexit_details'] = 'Si se activa, los estudiantes pueden terminar antes del tiempo límite, al presionar un botón para terminar. Las Palabras Por Minuto son calculadas usando su tiempo de grabación.';
$string['alternatives'] = 'Alternativas';
$string['alternatives_descr'] = 'Especificar opciones de concordancia para palabras de párrafo específicas. 1 conjunto de palabra por línea. Por ejemplo their|there|they\'re. Vea <a href="https://support.poodll.com/support/solutions/articles/19000096937-tuning-your-read-aloud-activity">docs</a> para más detalles.';
$string['apisecret'] = 'Secreto API Poodll';
$string['apisecret_details'] = 'El secreto API Poodl. Vea <a href= "https://support.poodll.com/support/solutions/articles/19000083076-cloud-poodll-api-secret">aquí</a> para más detalles';
$string['apiuser'] = 'Usuario API Poodll';
$string['apiuser_details'] = 'El nombre_de_usuario de cuenta Poodll que autoriza Poodlll en este sitio.';
$string['appauthorised'] = 'Poodll Read Aloud está autorizado para este sitio.';
$string['appnotauthorised'] = 'Poodll Read Aloud NO está autorizado para este sitio.';
$string['ar-ae'] = 'Arábigo (Golfo)';
$string['ar-sa'] = 'Arábigo (estándar Moderno)';
$string['attemptno'] = 'Intento {$a}';
$string['attemptsbyuserheading'] = 'Reporte de Intentos de Usuario';
$string['attemptsheading'] = 'Reporte de Intentos';
$string['attemptsperpage'] = 'Intentos a mostrar por página';
$string['attemptsreport'] = 'Reporte de Intentos';
$string['attemptssummaryheading'] = 'Reporte de Resumen de Intentos';
$string['attemptssummaryreport'] = 'Reporte de Resumen de Intentos';
$string['audiofile'] = 'Audio';
$string['av_accuracy_p'] = 'Prome. Exac(%)';
$string['av_grade_p'] = 'Prome. Calif(%)';
$string['av_wpm'] = 'Promedio PPM';
$string['averages'] = 'Promedio';
$string['awsregion'] = 'Región AWS';
$string['backtotop'] = 'Revisar Resultados';
$string['basicheading'] = 'Reporte Básico';
$string['basicreport'] = 'Reporte Básico';
$string['beginreading'] = 'Comenzar lectura';
$string['cannotgradenow'] = '-';
$string['chartexplainer'] = 'La gráfica inferior muestra su progreso con el paso del tiempo al leer este pasaje.';
$string['close'] = 'Cerrar';
$string['credentialsinvalid'] = 'El secreto y usuario API ingresados no pudieron ser usados para obtener acceso. Por favor, revíselos.';
$string['currenterrorestimate'] = 'Estimado de error actual: {$a}';
$string['da-dk'] = 'Danés (DK)';
$string['de-ch'] = 'Alemán (Suiza)';
$string['de-de'] = 'Alemán (DE)';
$string['defaultfeedback'] = 'Gracias por leer.';
$string['defaultrecorder'] = 'Grabadora predeterminada';
$string['defaultrecorder_details'] = 'Elegir la grabadora predeterminada a ser mostrada a los estudiantes.';
$string['defaultsettings'] = 'Configuraciones por defecto';
$string['defaultwelcome'] = 'Para comenzar la actividad, primeramente pruebe su micrófono. Cuando nosotros podamos oír sonido de su micrófono, aparecerá un botón de Inicio. Después de que Usted presione el botón para Iniciar, aparecerá un pasaje para leer. Lea el pasaje en voz alta tan claramente como pueda.';
$string['deletealluserdata'] = 'Eliminar todos los datos de usuario';
$string['deleteattemptconfirm'] = '¿Está seguro de querer eliminar este intento?';
$string['deletenow'] = '';
$string['displaysubs'] = '{$a->subscriptionname} : expira {$a->expiredate}';
$string['doaigrade'] = 'Calificación IA';
$string['doclear'] = 'Borrar todos los evaluadores';
$string['done'] = 'Hecho';
$string['dospotcheck'] = 'Revisión Puntual';
$string['dublin'] = 'Dublin, Irlanda';
$string['en-ab'] = 'Inglés (Escocia)';
$string['en-au'] = 'Inglés (Aus.)';
$string['en-gb'] = 'Inglés (GB)';
$string['en-ie'] = 'Inglés (Irlanda)';
$string['en-in'] = 'Inglés (IN)';
$string['en-us'] = 'Inglés (US)';
$string['en-wl'] = 'Inglés (Gales)';
$string['enableai'] = 'Habilitar IA';
$string['enableai_details'] = 'Read Aloud puede evaluar resultados de un intento de estudiante usando Inteligencia Artificial (IA). Seleccionar para habilitar.';
$string['enablelandr'] = 'Habilitar modo de Práctica (Escuchar y Repetir)';
$string['enablelandr_details'] = 'Habilitar el modo de escuchar y repetir. Linea a linea, el estudiante escucha y lee alternativamente.';
$string['enablepreview'] = 'Habilitar Modo Escucha';
$string['enablepreview_details'] = 'El modo de previsualización muestra la lectura y audio modelo a los estudiantes antes de que comience la actividad. Usted probablemente debería marcar modelar audio en la pestaña para modelar audio para usar esta característica.';
$string['enablesetuptab'] = 'Habilitar pestaña de configuración';
$string['enablesetuptab_details'] = 'Mostrar una pestaña que contiene las configuraciones de la instancia para administradores. En la mayoría de los casos NO es super útil.';
$string['enableshadow'] = 'Habilitar Modo Práctica (Sombreado)';
$string['enableshadow_details'] = 'Habilitar modo Sombreado. Esto reproduce el audio modelo conforme los estudiantes leen en voz alta.';
$string['enabletts'] = 'Habilitar TTS (Experimental)';
$string['enabletts_details'] = 'Actualmente TTS no está implementado';
$string['errorheader'] = 'Error';
$string['es-es'] = 'Español (ES)';
$string['es-us'] = 'Español (US)';
$string['evaluatedmessage'] = 'Su último intento ha sido recibido y la evaluación es mostrada debajo.';
$string['evaluationview'] = 'Visualización de evaluación';
$string['evaluationview_details'] = 'Qué mostrar a los estudiantes después de que ellos hayan intentado  y recibido una evaluación';
$string['exceededattempts'] = 'Usted ha completado el máximo de {$a} intentos.';
$string['expiredays'] = 'Días a conservar el archivo';
$string['exportexcel'] = 'Exportar a CSV';
$string['extraslowspeed'] = 'Extra Lento';
$string['feedbackheader'] = 'Terminado';
$string['feedbacklabel'] = 'Instrucciones posteriores al intento';
$string['feedbacklabel_details'] = 'El texto por defecto a mostrar en el campo de retroalimentación cuando se crea una nueva actividad de Read Aloud.';
$string['forever'] = 'Nunca expira';
$string['fr-ca'] = 'Francés (Can.)';
$string['fr-fr'] = 'Francés (FR)';
$string['frankfurt'] = 'Frankfurt, Alemania';
$string['fullreport'] = 'Ver Reporte Completo';
$string['gotnosound'] = 'No pudimos oirle. Por favor revise los  permisos y las configuraciones para el micrófono e inténtelo nuevamente.';
$string['grade'] = 'Calificación';
$string['grade_p'] = 'Calificación(%)';
$string['gradeaverage'] = 'puntaje promedio de todos los intentos';
$string['gradehighest'] = 'puntaje más alto de intento';
$string['gradelatest'] = 'puntaje del último intento';
$string['gradelowest'] = 'puntaje más bajo de intento';
$string['gradenone'] = 'Sin calificación';
$string['gradenow'] = 'Calificar ahora';
$string['gradenowtitle'] = 'Calificando: {$a}';
$string['gradeoptions'] = 'Opciones de calificación';
$string['gradeoptions_help'] = 'Cuando hay intentos múltiples por un usuario en una lectura, esta configuración determina cual intento usar al calificar';
$string['grader'] = 'Calificado por';
$string['grader_ai'] = 'IA';
$string['grader_human'] = 'Humano';
$string['grader_ungraded'] = 'Sin calificar';
$string['gradesadmin'] = 'Admin Alternativas';
$string['gradesadmininstructions'] = 'En esta página Usted puede editar las alternativas para el pasaje mientras observa un resumen de las transcripciones. Cuando Usted guarde, todos los intentos serán re-evaluados. Si Usted ha habilitado la calificación por máquina, Usted puede empujar las calificaciones ajustadas al Libro de calificaciones.';
$string['gradesadmintitle'] = 'Administración de Alternativas';
$string['gradethisattempt'] = 'Calificar este intento';
$string['grading'] = 'Calificando';
$string['gradingbutton'] = 'Modo de Calificación';
$string['gradingbyuserheading'] = 'Calificando todos los intentos para: {$a}';
$string['gradingheading'] = 'Calificando los últimos intentos para cada usuario.';
$string['h_accuracy_p'] = 'Máx Exac(%)';
$string['h_grade_p'] = 'Calif Máx (%)';
$string['h_wpm'] = 'Máx PPM';
$string['he-il'] = 'Hebreo';
$string['hi-in'] = 'Hindi';
$string['highest'] = 'La más alta';
$string['humanpostattempt'] = 'Mostrar evaluación (humano)';
$string['humanpostattempt_details'] = 'Qué mostrar a los estudiantes después de que hayan intentado y recibido una evaluación humana';
$string['id'] = 'ID';
$string['id-id'] = 'Indonesio';
$string['it-it'] = 'Italiano (IT)';
$string['itemsperpage'] = 'Ítems por página';
$string['itemsperpage_details'] = 'Esto configura el número de filas a mostrar en reportes o listas de intentos.';
$string['ja-jp'] = 'Japonés';
$string['ko-kr'] = 'Coreano';
$string['landrreading'] = 'Practicar';
$string['london'] = 'Londres, U.K';
$string['machinegradehybrid'] = 'Usar eval. por humano o máquina para calificar';
$string['machinegrademachineonly'] = 'Siempre usar calificación de evaluación de máquina';
$string['machinegrademethod'] = 'Calificación por Humano/Máquina';
$string['machinegrademethod_details'] = 'Usar evaluación de máquina o evaluaciones humanas como calificaciones en Libro de calificaciones.';
$string['machinegrademethod_help'] = 'Usar evaluaciones por máquina o por humano como calificaciones en el libro de calificaciones.';
$string['machinegradenone'] = 'Nunca usar evaluacioón de máquina para calificación';
$string['machinegradespushed'] = 'Se empujaron exitosamente las calificaciones al Libro de calificaciones';
$string['machinegrading'] = 'Evaluaciones de Máquina';
$string['machinegradingbyuserheading'] = 'Intentos evalusados por máquina para: {$a}';
$string['machinegradingheading'] = 'Último intento evaluado por máquina para cada usuario';
$string['machinepostattempt'] = 'Mostrar evaluación (máquina)';
$string['machinepostattempt_details'] = 'Qué mostrarles a estudiantes después de que hayan hecho un intento y recibido una evaluación de máquina.';
$string['machineregradeall'] = 'Guardar y re-evaluar todos los intentos';
$string['machineregraded'] = 'Exitosamente re-calificó {$a->done} intentos. Saltados {$a->skipped} intentos.';
$string['maxattempts'] = 'Máx. Intentos';
$string['mediumspeed'] = 'Medio';
$string['mingrade'] = 'Calificación Mínima';
$string['mingradedetails'] = 'La calificación (%) mínima necesaria Read Aloud para \'completar\' esta actividad.';
$string['mistakes'] = 'errores';
$string['mistrans_count'] = 'Número';
$string['mistranscriptions'] = 'MalasTranscripciones';
$string['mistranscriptions_summary'] = 'Resumen de malastranscripciones';
$string['modelaudio_playerinstructions'] = 'El audio modelo actual puede ser reproducido usando el reproductor inferior.';
$string['modelaudio_playertitle'] = 'Reproducir Audio Modelo';
$string['modelaudioclear'] = 'Borrar Audio';
$string['modulename'] = 'Read Aloud (Lectura en Voz Alta)';
$string['modulename_help'] = 'ReadAloud es una actividad diseñada para ayudarle a los profesores a evaluar la fluidez de lectura de los estudiantes que leen un pasaje, configurado por el profesor, a un micrófono. Más tarde, el profesor puede marcar las palabras como incorrectas y obtener los puntajes de  PCPM (Palabras Correctas por Minuto).';
$string['modulenameplural'] = 'Read Alouds';
$string['ms-my'] = 'Malayo';
$string['myattemptssummary'] = 'resumen de Intentos ({$a} intentos)';
$string['name'] = 'Nombre';
$string['ng'] = 'Malo, malo';
$string['nl-nl'] = 'Holandés';
$string['noapisecret'] = 'No se ingresó secreto API. Read Aloud no funcionará correctamente.';
$string['noapiuser'] = 'No se ingresó usuario API. Read Aloud no funcionará correctamente.';
$string['noattemptsregrade'] = 'Sin intentos para recalificar';
$string['nocredentials'] = 'Secreto y usuario API no ingresados. Por favor ingréselos en <a href="{$a}">la página de configuraciones.</a> Usted puede obtenerlos de <a href="https://poodll.com/member">Poodll.com.</a>';
$string['nodataavailable'] = 'Aun no hay Datos Disponibles';
$string['nomistranscriptions'] = 'Sin malastranscripciones';
$string['nosubscriptions'] = 'No hay suscripción actual para este sitio/plugin.';
$string['notgradedyet'] = 'Su envío ha sido recibido, pero aun no ha sido calificado. Podría tomar algunos minutos.';
$string['notimelimit'] = 'Sin límite de tiempo';
$string['notok'] = 'Malo, malo';
$string['notokenincache'] = 'Refrescar para ver información de licencia. Póngase en contacto con soporte de Poodll si hubiera un problema.';
$string['novalidcredentials'] = 'Secreto y usuario API fueron rechazados y no se pudo obtener acceso. Por favor revíselos en <a href="{$a}">la página de configuraciones.</a> Usted puede obtenerlos de <a href="https://poodll.com/member">Poodll.com.</a>';
$string['ok'] = 'OK';
$string['onemin'] = '1 minuto';
$string['oneminxsecs'] = '1 minuto {$a} segundos';
$string['ottawa'] = 'Ottawa, Canadá';
$string['overview'] = 'Vista general';
$string['overview_help'] = 'Ayuda de Vista General';
$string['passageindex'] = 'Índice del pasaje';
$string['passagelabel'] = 'Leyendo Pasaje';
$string['passageword'] = 'Palabra del pasaje';
$string['playbutton'] = 'Reproducir';
$string['pluginadministration'] = 'Administración de Read Aloud';
$string['pluginname'] = 'Actividad de Read Aloud';
$string['postattempt_eval'] = 'Mostrar el pasaje, y la evaluación (PalabrasPorMinuto, Precisión, Calificación)';
$string['postattempt_evalerrors'] = 'Mostrar el pasaje, la evaluación (PalabrasPorMinuto, Precisión, Calificación) y errores';
$string['postattempt_none'] = 'Mostrar el pasaje. No mostrar evaluaciones o errores.';
$string['postattemptheader'] = 'Opciones posteriores al intento';
$string['preview'] = 'Previsualización';
$string['previewreading'] = 'Escuchar';
$string['privacy:metadata'] = 'El plugin Poodll Read Aloud no almacena ningún dato personal.';
$string['privacy:metadata:accuracy'] = 'El puntaje de exactitud para el intento';
$string['privacy:metadata:aitable'] = 'Almacena los puntajes y otros datos del usuario asociados con un intento de una lectura en voz alta que son evaluados por máquina.';
$string['privacy:metadata:attemptid'] = 'El identificador único de un intento de usuario de Read Aloud.';
$string['privacy:metadata:attempttable'] = 'Almacena los puntajes y otros datos del usuario asociados con un intento de Read Aloud.';
$string['privacy:metadata:cloudpoodllcom'] = 'El plugin Read Aloud almacena grabaciones en buckets AWS S3 vía cloud.poodll.com';
$string['privacy:metadata:cloudpoodllcom:userid'] = 'El plugin ReadAloud incluye el userid de Moodle en los URLs de las grabaciones y las transcripciones';
$string['privacy:metadata:errorcount'] = 'El número de errores de lectura para el intento';
$string['privacy:metadata:filename'] = 'URLs de archivo de grabaciones enviadas.';
$string['privacy:metadata:fulltranscriptpurpose'] = 'Las transcripciones completas de las grabaciones.';
$string['privacy:metadata:readaloudid'] = 'El identificado único de una instancia de Read Aloud.';
$string['privacy:metadata:sessionendword'] = 'La posición de la última palabra para el intento';
$string['privacy:metadata:sessionerrors'] = 'Los errores de lectura para el intento';
$string['privacy:metadata:sessionscore'] = 'El puntaje de la sesión para el intento';
$string['privacy:metadata:sessiontime'] = 'El tiempo de sesión (tiempo de grabación) para el intento';
$string['privacy:metadata:timemodified'] = 'La última vez que el intento fue modificado';
$string['privacy:metadata:transcriptpurpose'] = 'Las transcripciones cortas de la grabación';
$string['privacy:metadata:userid'] = 'La ID del usuario para el intento de Read Aloud';
$string['privacy:metadata:wpm'] = 'El puntaje de Palabras por Minuto para el intento';
$string['processing'] = 'Procesando';
$string['progresschart'] = 'Gráfica del Progreso';
$string['pt-br'] = 'Portugués (BR)';
$string['pt-pt'] = 'Portugués (PT)';
$string['pushmachinegrades'] = 'Empujar evaluaciones de máquina al Libro de calificaciones';
$string['quickgrade'] = 'Calificación Rápida';
$string['rawaccuracy_p'] = 'Exact(%)';
$string['rawgrade_p'] = 'Calif(%)';
$string['rawwpm'] = 'PPM';
$string['readaloud'] = 'readaloud';
$string['readaloud:addinstance'] = 'Añadir un nuevo Read Aloud';
$string['readaloud:itemedit'] = 'Editar ítems';
$string['readaloud:itemview'] = 'Ver ítems';
$string['readaloud:manage'] = 'Puede gestionar instancias de Read Aloud';
$string['readaloud:manageattempts'] = 'Puede gestionar intentos de Read Aloud';
$string['readaloud:preview'] = 'Puede previsualizar actividades Read Aloud';
$string['readaloud:submit'] = 'Puede enviar intentos de Read Aloud';
$string['readaloud:tts'] = 'Puede usar Texto A Hablado (tts)';
$string['readaloud:view'] = 'Previsualizar Read Aloud';
$string['readaloudfieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['readaloudname'] = 'Read Aloud';
$string['readaloudname_help'] = 'Este es el contenido de la herramientita de ayuda asociada con el campo readaloudname. La sintaxis Markdown está soportada.';
$string['readaloudsettings'] = 'configuraciones readaloud';
$string['readaloudtask'] = 'Trabajo Read Aloud';
$string['reattempt'] = 'Intentar nuevamente';
$string['rec_once'] = 'Solo iniciar';
$string['rec_readaloud'] = 'Probar micrófono y después iniciar';
$string['recorder'] = 'Tipo de grabadora de audio';
$string['recordingaiheader'] = 'Opciones de Grabación y de IA';
$string['refreshtoken'] = 'Refrescar Información de licencia';
$string['region'] = 'Región AWS';
$string['regrade'] = 'Recalificar';
$string['reports'] = 'Reportes';
$string['returnmenu'] = 'Regresar al Menú';
$string['returntogradinghome'] = 'Regresar a Superior de Calificación';
$string['returntomachinegradinghome'] = 'Regresar a Superior de Evaluaciones de Máquina';
$string['returntomenu'] = 'Regresar al Menú';
$string['returntoreports'] = 'Regresar a reportes';
$string['review'] = 'Revisar';
$string['ru-ru'] = 'Ruso';
$string['saopaulo'] = 'Sao Paulo, Brasil';
$string['saveandnext'] = 'Guardar ... y siguiente';
$string['savemodelaudio'] = 'Guardar Grabación';
$string['secs_till_check'] = 'Revisando los resultados en:';
$string['sessionscoremethod'] = 'Cálculo de Calificación';
$string['setup'] = 'Configuración';
$string['showingattempt'] = 'Mostrando intento para: {$a}';
$string['showingmachinegradedattempt'] = 'Intento evaluado por máquina para: {$a}';
$string['singapore'] = 'Singapur';
$string['slowspeed'] = 'Lento';
$string['someadminsetting'] = 'Algunas Configuraciones Admin';
$string['someadminsetting_details'] = 'Más información sobre Algunas Configuraciones Admin';
$string['someinstancesetting'] = 'Algunas Configuraciones de instancia';
$string['someinstancesetting_details'] = 'Más información sobre Algunas Configuraciones de Instancia';
$string['spotcheckbutton'] = 'Modo de Revisión Puntual';
$string['startreading'] = 'Leer';
$string['startshadowreading'] = 'Práctica Sombra';
$string['stopbutton'] = 'Detener';
$string['stricttranscribe'] = 'Transcripción Estricta';
$string['submitrawaudio'] = 'Enviar audio sin compresión';
$string['submitrawaudio_details'] = 'El enviar audio sin comprimir puede aumentar la exactitud de la transcripción, pero al costo de la velocidad de subida y la confiabilidad.';
$string['submitted'] = 'enviado';
$string['summaryexplainer'] = 'La tabla inferior muestra su promedio y sus puntajes más altos para esta actividad.';
$string['sydney'] = 'Sydney, Australia';
$string['targetwpm'] = 'PPM meta';
$string['targetwpm_details'] = 'Las Palabras Por Minuto meta por defecto. Una calificación del estudiante es calculada para el Libro de calificaciones usando este valor como el puntaje máximo. Si su puntaje de PPM es igual a, o mayor que las PPM meta, obtendrá un puntaje de 100%. Las PPM meta también pueden ser configuradas al nivel de la instancia de la actividad.';
$string['targetwpm_help'] = 'El puntaje de PPM meta. Una calificación del estudiante es calculada para el Libro de calificaciones usando este valor como el puntaje máximo. Si su puntaje de PPM  es igual a, o mayor que las PPM meta, obtendrá puntaje de 100%.';
$string['timecreated'] = 'Hora de creado';
$string['timelimit'] = 'Límite de Tiempo';
$string['tokyo'] = 'Tokio, Japón';
$string['total_mistranscriptions'] = 'Total de malastranscripciones: {$a}';
$string['totalattempts'] = 'Intentos';
$string['tr-tr'] = 'Turco';
$string['transcriber'] = 'Transcriptor';
$string['transcriber_amazontranscribe'] = 'Transcripción Regular (AWS); recomendada';
$string['transcriber_details'] = 'El motor de transcripción a usar.AWS funciona mejor con ReadAloud.';
$string['transcriber_googlecloud'] = 'Transcripción Rápida (Google)(audio length < 60s solamente)';
$string['transcriber_none'] = 'sin transcripción';
$string['transcript'] = 'Transcripción';
$string['transcriptcheckbutton'] = 'Modo de Revisión de Transcripción';
$string['ttslanguage'] = 'Idioma del Pasaje';
$string['ttslanguage_details'] = 'Este valor es usado para reconocimiento de voz y voz sintetizada.';
$string['ttsspeed'] = 'Velocidad TTS';
$string['ttsvoice'] = 'Voz TTS';
$string['unlimited'] = 'ilimitado';
$string['uploadconverterror'] = 'Ocurrió un error al publicar su archivo al servidor. Su envío NO HA SIDO recibido. Por favor refresque la página e inténtelo nuevamente.';
$string['uploadmodelaudio'] = 'Subir archivo de audio';
$string['useast1'] = 'Este de Estados Unidos';
$string['username'] = 'Usuario';
$string['view'] = 'Vista';
$string['viewgradesadmin'] = 'Admin Calificaciones';
$string['viewgrading'] = 'Ver Calificaciones';
$string['viewmachinegrading'] = 'Evaluación por Máquina';
$string['viewmodeltranscript'] = 'Ver Transcripción Modelo';
$string['viewreports'] = 'Ver Reportes';
$string['welcomelabel'] = 'Instrucciones previas al intento';
$string['welcomelabel_details'] = 'Las instrucciones predeterminadas. Pueeden ser editadas al crear una nueva actividad Read Aloud.';
$string['welcomemenu'] = 'Elija entre las opciones inferiores';
$string['wpm'] = 'PPM';
$string['xmins'] = '{$a} minutos';
$string['xminsecs'] = '{$a->minutes} minutos {$a->seconds} segundos';
$string['xsecs'] = '{$a} segundos';
$string['zh-cn'] = 'Chino (Mandarín-Continental)';
