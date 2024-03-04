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
 * Strings for component 'block_xp', language 'es_mx', version '4.2'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activityoresourceis'] = 'La actividad o recurso es {$a}';
$string['addacondition'] = 'Añadir una condición';
$string['addarule'] = 'Añadir una regla';
$string['addinstructions'] = 'Añadir más información';
$string['additionalresources'] = 'Recursos adicionales';
$string['addlevel'] = 'Añadir nivel';
$string['addoninstallationerror'] = 'Estamos detectando un problema con el plugin (local_xp), que al parecer no está instalado apropiadamente. Se necesita que un administrador finalice la instalación.';
$string['addonnotactivated'] = 'El añadido no está activado.';
$string['addrulesformhelp'] = 'La última columna define la cantidad de puntos de experiencia  ganados cuando se cumple el criterio.';
$string['admindefaultrulesintro'] = 'Las reglas siguientes serán usadas como opciones por defecto para cursos en los que se añada el bloque.';
$string['admindefaultsettingsintro'] = 'Las configuraciones inferiores se usarán como predeterminadas cuando el bloque sea recién añadido a un curso. Algunas configuraciones pueden ser bloqueadas, en cuyo caso sus valores son obligatorios en todas las instancias del plugin.';
$string['admindefaultvisualsintro'] = 'Lo siguiente será usado como opciones por defecto cuando el bloque sea recién añadido a un curso.';
$string['adminscanearnxp'] = 'Admins pueden ganar puntos';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuración controla si es que los participantes pueden verse mutuamente sus nombres y avatares.';
$string['apply'] = 'Aplicar';
$string['awardaxpwhen'] = '<strong>{$a}</strong> puntos de experiencia son ganados cuando:';
$string['badgeaward'] = 'Insignia a otorgar';
$string['badgeawarddesc'] = 'Una Insignia a otorgar cuando el usuario alcanza el nivel.';
$string['basepoints'] = 'Puntos base';
$string['basepointslineardesc'] = 'el incremento mínimo entre niveles.';
$string['basepointsrelativedesc'] = 'El número de puntos con cuales comenzar.';
$string['basexp'] = 'Base del algoritmo';
$string['blockappearance'] = 'Apariencia del bloque';
$string['blockappearancemovedtopluginsettings'] = 'Las configuraciones de apariencia del bloque fueron movidas a la página de configuraciones del plugin.';
$string['cachedef_filters'] = 'Filtros de Niveles';
$string['cachedef_ruleevent_eventslist'] = 'Lista de algunos eventos';
$string['cannotbesetindefaults'] = 'Esto no puede ser configurado en los valores predeterminados.';
$string['cannotearnpoints'] = 'No puede ganar puntos.';
$string['cannotshowblockconfig'] = 'Usualmente yo mostraría aquí las configuraciones de la apariencia, pero no pude encontrar el bloque de Usted. Para cambiar la apariencia del bloque, regrésese [aquí]({$a}) (o en donde Usted haya añadido el bloque), active el modo de edición, y siga la opción para "Configurar"en el menú desplegable del bloque. Si Usted no puede encontrar el bloque, añádalo nuevamente a su curso.';
$string['cannotshowblockconfigsys'] = 'Usualmente yo mostraría aquí las configuraciones de apariencia, pero no pude encontrar su bloque. Podría ser que faltara de la  [Portada]({$a->fp}) y del [Tablero por defecto]({$a->mysys}) de sus usuarios, o podría estar presente en ambos. Para editar estas configuraciones desde aquí, asegúrese de que solamente aparezca en una de elllas.';
$string['changelevelformhelp'] = 'Si Usted cambia el número de niveles, las insignias de nivel personalizadas estarán deshabilitadas temporalmente a fin de evitar niveles sin insignias. Si Usted cambia el número de niveles vaya a la página de \'Visuales\' para rehabilitar las insignias personalizadas una vez que Usted haya guardado este formato.';
$string['cheatguard'] = 'Guarda contra Trampas';
$string['clicktoselectcm'] = 'Hacer clic para seleccionar una actividad o un recurso';
$string['cmselector'] = 'Selector de módulo de curso';
$string['coefxp'] = 'Coeficiente del algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Comprobación de compatibilidad';
$string['configblockrankingsnapshot'] = 'Mostrar instantánea de tablero de puntajes';
$string['configblockrankingsnapshot_help'] = 'El tablero de puntajes muestra el ranking del usuario. También intenta mostrar a las dos personas cercanas al usuario. Esta característica requiere que esté habilitado el tablero de puntaje, y que se muestren sus rankings.';
$string['configdescription'] = 'Introducción';
$string['configdescription_help'] = 'Una breve introducción mostrada en el bloque, debajo del nivel del estudiante. Los estudiantes tienen la habilidad para no hacer caso del mensaje, en cuyo caso no lo verán nuevamente.';
$string['configheader'] = 'Ajustes';
$string['configrecentactivity'] = 'Mostrar recompensas recientes';
$string['configrecentactivity_help'] = 'Cuando se habilita, el bloque mostrará una lista corta de eventos recientes que recompensaron al estudiante con puntos.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'El título del bloque.';
$string['congratulationsyouleveledup'] = '¡Felicitaciones!';
$string['coolthanks'] = '¡Bueno, gracias!';
$string['courselog'] = 'Bitácora del curso';
$string['coursereport'] = 'Reporte del curso';
$string['courserules'] = 'Reglas del curso';
$string['courseselectedcolon'] = 'Curso seleccionado:';
$string['coursesettings'] = 'Configuraciones del curso';
$string['coursevisuals'] = 'Visuales del curso';
$string['currencysign'] = 'Símbolo de puntos';
$string['currencysignxp'] = 'Xp (Puntos de Experiencia)';
$string['customizelevels'] = 'Personalizar los niveles';
$string['dangerzone'] = 'Zona de peligro';
$string['defaultlevels'] = 'Niveles por defecto';
$string['defaultrules'] = 'Reglas por defecto';
$string['defaultrulesformhelp'] = 'Esas son las reglas por defecto proporcionadas por el plugin; automáticamente dan puntos  por defecto e ignoran algunos eventos redundantes. Sus propias reglas de Usted tienen precedencia sobre ellas.';
$string['defaultsettings'] = 'Configuraciones por defecto';
$string['defaultvisuals'] = 'Apariencia predeterminada';
$string['deletecondition'] = 'Eliminar condición';
$string['deleterule'] = 'Eliminar regla';
$string['description'] = 'Descripción';
$string['difference'] = 'Difer.';
$string['difficulty'] = 'Método de cálculo d epuntos';
$string['difficultyflat'] = 'Igual';
$string['difficultyflatdesc'] = 'Todos los niveles requieren el mismo número de puntos para alcanzar.';
$string['difficultylinear'] = 'Incrementando';
$string['difficultylineardesc'] = 'Los niveles progresivamente tardan más para lograrse.';
$string['difficultylinearincrdesc'] = 'El número de puntos usados para la dificultad progresiva.';
$string['difficultypointincrease'] = 'Incremento de puntos';
$string['difficultyrelative'] = 'Avalancha';
$string['difficultyrelativedesc'] = 'Los niveles se vuelven exponencialmente más difíciles de lograr.';
$string['difficultyrelativeincrdesc'] = 'el porcentaje de puntos a aumentar desde el nivel previo.';
$string['discoverlevelupplus'] = 'Descubra Sube de Nivel XP+';
$string['dismissnotice'] = 'No considerar aviso';
$string['displayeveryone'] = 'Mostrar todos';
$string['displaynneighbours'] = 'Mostrar {$a} vecinos';
$string['displayoneneigbour'] = 'Mostrar un vecino';
$string['displayparticipantsidentity'] = 'Mostrar identidad de participantes';
$string['displayrank'] = 'Mostrar \'\'ranking\'\'';
$string['displayrelativerank'] = 'Mostrar un \'\'ranking\'\' relativo';
$string['documentation'] = 'Documentación';
$string['drops'] = 'Caídas';
$string['dropsintro'] = 'Las caídas son retazos de código directamente colocados en contenido que otorgan puntos cuando son encontrados por un usuario.';
$string['editinstructions'] = 'Editar información';
$string['enablecheatguard'] = 'Habilitar guardia contra trampas';
$string['enablecheatguard_help'] = 'La guardia contra trampas ofrece un mecanismo simple para prevenir que los estudiantes abusen del sistema al usar técnicas obvias como el refrescar la misma página de forma interminable, o rpetir la misma acción una, y otra, y otra vez.

[Más información](https://levelup.plus/docs/article/level-up-cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Habilitar página de información';
$string['enableinfos_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver la página de información.';
$string['enableladder'] = 'Habilitar la escalera';
$string['enableladder_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver la escalera.';
$string['enablelevelupnotif'] = 'Habilitar notificación de subida de nivel';
$string['enablelevelupnotif_help'] = 'Cuando se configura a \'Si\', a los estudiantes se les mostrará una ventana emergente felicitándolos por el nuevo nivel alcanzado.';
$string['enablelogging'] = 'Habilitar bitácoras';
$string['enablexpgain'] = 'Habilitar ganancia de puntos';
$string['enablexpgain_help'] = 'Cuando se configura como \'NO\', nadie podrá ganar puntos en el curso. Esto es útil para congelar los puntos ganados, o para habilitarlo en un cierto punto en el tiempo.

Por favor tenga en cuenta que esto también puede ser controlado con mayor granularidad al usar la capacidad \'block/xp:earnxp\'.';
$string['entersearchterm'] = 'Ingrese un término de búsqueda';
$string['errorcontextcoursemismatchforwholesite'] = 'La URL de esta página de <em>¡Sube de Nivel!</em> no coincide con la configuración actual del plugin. Su configuración actual declara que <em>¡Sube de Nivel!</em> sea usado \'Para todo el sitio\'; sin embargo, esta página esperaba que fuera usado \'Por curso\'. Por favor <a href="{$a->nexturl}">haga clic aquí</a> para navegar a la página correcta. Busque la configuración de administración \'block_xp_context\' si quiere cambiar su configuración.';
$string['errorcontextcoursemismatchpercourse'] = 'La URL de esta página de <em>¡Sube de Nivel!</em> no coincide con la configuración actual del plugin. Su configuración actual declara que <em>¡Sube de Nivel!</em> sea usado \'Por curso\', pero esta página espera que sea usado \'Para todo el sitio\'. Lo más probable es que se origine por un <em>bloque</em> que fue añadido a la página de su Tablero mientras estaba en una configuración diferente. Usted debería quitar el bloque de las últimas páginas, y usar solamente el bloque desde adentro de cursos individuales.';
$string['errorformvalues'] = 'Hay algunos problemillas en los valores del formato, por favor, arréglelos.';
$string['errorlevelsincorrect'] = 'El número mínimo de niveles es 2';
$string['errornotalllevelsbadgesprovided'] = 'No se han proporcionado todas las insignias. Faltantes: {$a}';
$string['errorunknownevent'] = 'Error: evento desconocido';
$string['errorunknownmodule'] = 'Error: módulo desconocido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Los puntos requeridos es menor o igual al nivel anterior.';
$string['event_user_leveledup'] = 'Usuario subido de nivel';
$string['eventis'] = 'El evento es {$a}';
$string['eventname'] = 'Nombre del evento';
$string['eventproperty'] = 'Propiedad del evento';
$string['eventsrules'] = 'Reglas de eventos';
$string['eventsrules_help'] = 'Este plugin está haciendo uso de los eventos para atribuirle puntos a acciones realizadas por alos estudiantes.
Usted puede usar el formato inferior para añadir sus propias reglas y modificar las predeterminadas.

Se le recomienda comprobar la página del plugin _Log_  para identificar cuales eventos son disparados cuando los estudiantes realizan acciones en el curso.

Recursos adicionales:

- [¿Cómo son calculados los puntos de experiencia = How are experience points calculated?](https://levelup.plus/docs/article/how-are-experience-points-calculated?ref=blockxp_help)
- [Reglas para depuración = Troubleshooting rules](https://levelup.plus/docs/article/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Observar acciones y atribuir puntos a estudiantes conforme se desempeñen.';
$string['eventtime'] = 'Hora del evento';
$string['filterbyuser'] = 'Filtrar por usuario';
$string['filtermodules'] = 'Filtrar módulos';
$string['for1day'] = 'Por 1 día';
$string['for1month'] = 'Por 1 mes';
$string['for1week'] = 'Por 1 semana';
$string['for3days'] = 'Por 3 días';
$string['forever'] = 'Para siempre';
$string['forthewholesite'] = 'para todo el sitio';
$string['give'] = 'dar';
$string['gotofullladder'] = 'Ir a escalera completa';
$string['graderules'] = 'Reglas de calificaciones';
$string['graderulesintro'] = 'Las reglas de calificación le permiten a los usuarios recibir puntos iguales a las calificaciones que reciban.';
$string['grid'] = 'Rejilla';
$string['hasbadgeaward'] = 'Configuración de insignia a otorgar';
$string['hasdescription'] = 'Configuración de descripción';
$string['hasname'] = 'Configuración de nombre';
$string['hasnobadgeaward'] = 'Sin insignia para otorgar';
$string['hasnodescription'] = 'Sin descripción';
$string['hasnoname'] = 'Sin nombre';
$string['hasnopopupmessage'] = 'Sin mensajes emergentes';
$string['haspopupmessage'] = 'Mensaje emergente configurado';
$string['hideparticipantsidentity'] = 'Ocultar identidad de participantes';
$string['hiderank'] = 'Ocultar \'\'ranking\'\'';
$string['importpoints'] = 'Importar puntos';
$string['importpointsintro'] = 'Importar puntos desde un archivo CSV, y opcionalmente enviar un mensaje al destinatario.';
$string['incourses'] = 'en cursos.';
$string['ineffective'] = 'No efectivo';
$string['infos'] = 'información';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Más información';
$string['invalidxp'] = 'Valor de puntos inválido';
$string['keeplogs'] = 'Mantener bitácoras';
$string['ladder'] = 'Escalera';
$string['ladderadditionalcols'] = 'Columnas adicionales';
$string['ladderadditionalcols_help'] = 'Esta configuración determina cuales columnas adicionales son mostradas en la escalera. Presione la tecla CTRL o CMD al mismo tiempo que hace click para seleccionar más de una columna, o para des-seleccionar una columna seleccionada.';
$string['ladderempty'] = '¡ Actualmente la escalera está vacía; asegúrese de regresar después !';
$string['learnmore'] = 'Aprender más';
$string['level'] = 'Nivel';
$string['levelbadges'] = 'Insignias del nivel';
$string['levelbadgesformhelp'] = 'Nombre los archivos [nivel].[extensión del archivo],por ejemplo: 1.png, 2.jpg, etc... El tamaño recomendado de imagen es 100x100.';
$string['levelcount'] = 'Número de niveles';
$string['leveldesc'] = 'Descripción del nivel';
$string['leveldesc_help'] = 'Una descripción breve del nivel, la cual es mostrada en la página de información junto con el nivel mismo. Usted puede usar esto para describir una recompensa para los estudiantes que logren el nivel, o para incluir instrucciones sobre como trabajar para alcanzar el nivel, o para describir el nivel en forma divertida (por ejemplo, se ha sabido que solo las almas más valientes han conquistado este nivel), etc.';
$string['leveldescriptiondesc'] = 'Una descripción breve del nivel, mostrada a estudiantes en la página de información.';
$string['levelname'] = 'Nombre del nivel';
$string['levelname_help'] = 'Un nombre corto a usar en lugar del prederminado _Level #1_, _Level #2_, etc. que a veces es mostrado. ¡ Si Usted le pone nombres a algunos niveles, nosotros recomendamos que le de nombre a todos los niveles !';
$string['levelpointslength'] = 'Largo';
$string['levelpointsstart'] = 'Inicio';
$string['levels'] = 'Niveles';
$string['levelsappearance'] = 'Apariencia de niveles';
$string['levelssaved'] = 'Los niveles han sido guardados';
$string['levelswillbereset'] = '¡Advertencia! Al guardar este formato se recalcularán los niveles para todos!';
$string['levelup'] = '¡Sube de nivel!';
$string['levelupoptionsunavailableforlevelone'] = 'Las opciones relacionadas con lograr el nivel no están disponibles para el primer nivel.';
$string['levelupplus'] = 'Sube de Nivel  XP+';
$string['levelx'] = 'Nivel #{$a}';
$string['likenotice'] = '<strong>¿Le agrada el plugin?</strong> Por favor, tómese un momentopara  <a href="{$a->moodleorg}" target="_blank">añadirlo a sus favoritos</a> en Moodle.org y <a href="{$a->github}" target="_blank">poenrle estrella en GitHub</a>.';
$string['limitparticipants'] = 'Limitar participantes';
$string['limitparticipants_help'] = 'Esta configuración controla quien es mostrado en el tablero-de-clasificación. Los vecinos son los participantes rankeados por arriba y por abajo del usuario actual. Por ejemplo, al elegir \'Mostrar dos vecinos\', solamente los dos participantes rankeados directamente arribita y abajito del usuario actual serán mostrados.';
$string['list'] = 'Lista';
$string['logging'] = 'Ingresando';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Máx acciones en lapso de tiempo';
$string['maxactionspertime_help'] = 'El número máximo de acciones que contarán para puntos durante el lapso de tiempo dado. Cualquier acción subsecuente será ignorada. Cuando este valor está vacío, o es igual a cero, no aplica.';
$string['maxlevelexcl'] = '¡máx nivel!';
$string['menu'] = 'Menú';
$string['missing'] = 'Faltante';
$string['movecondition'] = 'Mover condición';
$string['moverule'] = 'Mover regla';
$string['name'] = 'Nombre';
$string['navbardisplay'] = 'Mostrar en Barra de Navegación';
$string['navdrops'] = 'Caídas';
$string['naveventrules'] = 'Reglas de eventos';
$string['navgraderules'] = 'Reglas de calificación';
$string['navimport'] = 'Importar';
$string['navinfos'] = 'Info';
$string['navladder'] = 'Escalera';
$string['navlevels'] = 'Niveles';
$string['navlevelssetup'] = 'Configuración';
$string['navlog'] = 'Bitácora';
$string['navpoints'] = 'Puntos';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Reporte';
$string['navrules'] = 'Reglas';
$string['navsettings'] = 'Configuraciones';
$string['navvisuals'] = 'Apariencia';
$string['nextlevelin'] = 'nivel siguiente en';
$string['nodescription'] = 'Sin descripción';
$string['noissuesidentified'] = 'Sin problemas identificados';
$string['nologsrecordedyet'] = 'Aun no se han grabado bitácoras.';
$string['noname'] = 'Sin nombre';
$string['notecompatibilityissues'] = 'Por favor tenga en cuenta los problemas de compatibilidad debajo:';
$string['notesomesettingslocked'] = 'Tenga en cuenta que algunas configuraciones pueden ser no editables cuando están siendo bloqueadas por un administrador.';
$string['numberoflevels'] = 'Número de niveles';
$string['occasionally'] = 'Ocasionalmente';
$string['outofsync'] = 'Des-sincronizado';
$string['outofsyncexcessive'] = 'Excesivamente des-sincronizado';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatetolevelup'] = '¡Participe en el curso para ganar puntos de experiencia y subir de nivel!';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Elegir un tipo de condición';
$string['pluginavailabilityxpdesc'] = 'Este plugin le permite a los instructores restringir el acceso a actividades basándose en los niveles de los estudiantes.';
$string['pluginenrolxpdesc'] = 'Este plugin habilita la inscripción automática a cursos basándose en el nivel de un estudiante en otro curso.';
$string['pluginname'] = 'Sube de nivel XP';
$string['pluginshortcodesdesc'] = 'Este plugin le permite a los instructores personalizar su material al incluir elementos relacionados con la Experiencia del Usuario (puntos, nivel, tablero, ...) en el contenido, además de ocultar o mostrar contenido basándose en el nivel de un estudiante.';
$string['pluginsoutofsync'] = '__¡Los plugins están fuera de sincronización!__

Esto significa que Usted ha actualizado _Level up!_ pero no así _Level up! Plus_. Aunque nosotros hacemos nuestro mejor esfuerzo para intentar impedir cualquier problema, algunas características podrían ya no funcionar adecuadamente, incluyendo el mismo  in _Level up!_ . Le recomendamos que actualice _Level up! Plus_ a su versión más reciente. [Lea más]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versión de {$a->name} ({$a->component}) podría ser incompatible con Moodle {$a->version}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Puntos por nivel';
$string['pointsrequired'] = 'Puntos requeridos';
$string['popupnotificationmessage'] = 'Mensaje emergente de notificación';
$string['popupnotificationmessagedesc'] = 'Mensaje opcional a mostrar dentro de la notificación emergente que felicita al usuario por lograr el nivel.';
$string['potentialmoodleincompatibility'] = 'Incompatibilidad potencial con Moodle';
$string['privacy:metadata:log'] = 'Almacena una bitácora de ventos';
$string['privacy:metadata:log:eventname'] = 'El nombre del evento';
$string['privacy:metadata:log:time'] = 'La fecha en la que sucedió';
$string['privacy:metadata:log:userid'] = 'El usuario que ganó los puntos';
$string['privacy:metadata:log:xp'] = 'Los puntos otorgados por el evento';
$string['privacy:metadata:prefintro'] = 'Registra si es que el usurio se saltó la introducción del bloque';
$string['privacy:metadata:prefladderpagesize'] = 'El tamaño de página preferido por el usuario al ver la escalera';
$string['privacy:metadata:preflevelup'] = 'Registra si es que el usuario debería de ver notificación de subida de nivel';
$string['privacy:metadata:prefnotices'] = 'Registra si es que el usuario cerró el aviso de soporte';
$string['privacy:metadata:prefseenpromo'] = 'Registra si es que el usuario vió la página promocional';
$string['privacy:metadata:xp'] = 'Almacena los puntos y niveles de usuarios';
$string['privacy:metadata:xp:lvl'] = 'El nivel del usuario';
$string['privacy:metadata:xp:userid'] = 'El usuario';
$string['privacy:metadata:xp:xp'] = 'Los puntos del usuario';
$string['privacy:path:addon'] = 'Añadido';
$string['privacy:path:level'] = 'Nivel';
$string['privacy:path:logs'] = 'Bitácoras';
$string['progress'] = 'Progreso';
$string['progressbar'] = 'Barra de progreso';
$string['promocheatguard'] = 'Esta guardia contra trampas no está diseñada para cubrir períodos largos de tiempo. Por favor considere actualizar a <em>Level up! Plus</em> para desbloquear mayores períodos de tiempo y otras características. <a href="{$a->url}">Lea más aquí</a>.';
$string['promocontactintro'] = 'Contáctenos para más información. ¡No mordemos y contestamos rápidamente!';
$string['promocontactus'] = 'Póngase en contacto';
$string['promoemailusat'] = 'Mándenos un Email a _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = '¡Órale! No pudimos enviar el mensaje... por favor mándenos un Email directamente a : {$a}. ¡Gracias!';
$string['promogetnow'] = '¡Obtener XP+ ahora!';
$string['promoifpreferemailusat'] = 'Psst! Si Usted lo prefiere, mándenos directamente un Email a _{$a}_.';
$string['promointro'] = '¡El complemento adicional para  _¡Sube de Nivel!_ que motiva a sus estudiantes para que alcancen su potencial completo !';
$string['promointroinstalled'] = 'El plugin _Level up! Plus_ está instalado en su sitema y todas sus características han sido habilitadas.';
$string['promorulesdidyouknow'] = '¿Sabía Usted que con <em>¡Sube de nivel! Plus</em> los estudiantes pueden recibir puntos por <em>completar cursos</em> y <em>actividades</em>, o inclusive pueden recibir puntos de acuerdo a sus <em>calificaciones</em>? <a href="{$a->url}">Descubra más aquí</a>.';
$string['promoyourmessagewassent'] = 'Gracias; su mensaje fue enviado. Le contestaremos muy pronto.';
$string['property:action'] = 'Acción del evento';
$string['property:component'] = 'Componente del evento';
$string['property:crud'] = 'Evento CRUD';
$string['property:eventname'] = 'Nombre del evento';
$string['property:target'] = 'Meta del evento';
$string['questreleasenotice'] = '🎉 Estamos muy emocionados de anunciar nuestro  **nuevo plugin de ludificación** llamado **Level Up Quest** 🥳. Convierta sus cursos en  **excitantes aventuras**, llenas de **estrategias de re-motivación** y **celebraciones** 🤯! Conozca [Quest\'s website]({$a->questurl}) y nuestra [launch post here]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Editar punto srápido';
$string['rank'] = 'Ranking';
$string['ranking'] = '\'\'Ranking\'\'';
$string['ranking_help'] = 'El \'\'ranking\'\' es la posición absoluta del usuario actual en la escalera. El \'\'ranking\'\' relativo es la diferencia en puntos de experiencia entre un usuario y sus vecinos.';
$string['reallydeleteuserstate'] = 'Eliminar un usuario solamente es útil para quitarlos de la escalera. Para cualquier otra razón, nosotros recomendamos configurarles los puntos a 0. Tenga en cuenta que eliminarlos no les afecta su habilidad para ganar puntos en el futuro.

¡Importante al usar _ Level up!_ para todo el sitio, al eliminarlos hará que desaparezcan del reporte, en cuyo caso Usted no podrá re-asignarles puntos. Sin embargo, si Usted está usando  _Level up!_ por curso, el estudiante todavía podría aparecer en el reporte si estuviera inscrito en el curso..


¿Realmente desea eliminar los puntos de este usuario?';
$string['reallydeleteuserstateandlogs'] = 'Eliminar un usuario lo quita de la escalera y quita todas sus bitácoras asociadas.

Eliminar bitácoras puede habilitar que un usuario vuelva a ganar puntos por acciones previas. Si la intención de usted es solamente reiniciarle los puntos, le recomendamos mejor configurarle los puntos  a 0. Tenga en cuenta que eliminar un usuario no le afecta su habilidad para ganar puntos en el futuro.

Es importante, al usar _Level Up XP_ para todo el sitio, saber que al eliminarlos hará que desaparezcan del reporte, en cuyo caso usted no podrá re-asignarles puntos. Sin embargo, si usted está usando _Level Up_ por curso, el estudiante podría seguir apareciendo en el reporte si es que estuviera inscrito en el curso.

¿Realmente desea eliminar los puntos y bitácoras de este usuario?';
$string['reallyresetallcoursestodefaults'] = '¿Realmente reiniciar todas las reglas del curso a las reglas por defecto? Esta acción no puede deshacerse.';
$string['reallyresetcourselevelstodefaults'] = '¿Realmente reiniciar los niveles del curso a los niveles predeterminados? Esta acción no se puede revertir.';
$string['reallyresetcourserulestodefaults'] = '¿Realmente reiniciar las reglas del curso a las reglas por defecto? Esta acción no puede deshacerse.';
$string['reallyresetcoursevisualstodefaults'] = '¿Realmente reiniciar la apariencia de niveles del curso a la apariencia predeterminada? Esta acción no se puede revertir.';
$string['reallyresetdata'] = '¿Realmente desea reiniciar los niveles y puntos de todos en este curso?';
$string['reallyresetgroupdata'] = '¿Realmente reiniciar los niveles y puntos de todos en este grupo?';
$string['reallyreverttopluginsdefaults'] = '¿Realmente reiniciar las reglas por defecto a los valores por defecto sugeridos por el plugin? Esta acción no es reversible.';
$string['recentrewards'] = 'Recompensas recientes';
$string['recommended'] = 'Recomendado';
$string['recommendedplugins'] = 'Plugins recomendados';
$string['releasenotes'] = 'Notas de la versión';
$string['remaining'] = 'restantes';
$string['removefilter'] = 'Quitar filtro';
$string['reportisempty'] = 'El reporte está vacío, los estudiantes necesitan ganar puntos.';
$string['reportisemptyenrolstudents'] = 'El reporte está vacío, ¿se han inscrito estudiantes en este curso?';
$string['requires'] = 'Requiere';
$string['resetallcoursestodefaults'] = 'Reiniciar todos los cursos a los valores por defecto';
$string['resetallcoursestodefaultsintro'] = 'Hacer clic en el botón inferior para reiniciar todos los cursos a los valores por defecto de arriba.';
$string['resetcoursedata'] = 'Reiniciar datos del curso';
$string['resetcourserulestodefaults'] = 'Reiniciar reglas del curso a los valores por defecto';
$string['resetgroupdata'] = 'Reiniciar datos del grupo';
$string['resetlevelstodefaults'] = 'Reiniciar niveles a predeterminados';
$string['resetvisualstodefaults'] = 'Reiniciar Apariencia a predeterminada';
$string['resultsfilteredforn'] = 'Resultados filtrados por{$a}.';
$string['reverttopluginsdefaults'] = 'Revertir a valores por defecto del plugin';
$string['reverttopluginsdefaultsintro'] = 'Use el botón inferior si le gustaría revertir los valores por defecto de ariba  a los valores por defecto del plugin. Esto no afecta las reglas en cursos existentes.';
$string['reward'] = 'Recompensa';
$string['rule'] = 'Regla';
$string['rule:contains'] = 'contiene';
$string['rule:eq'] = 'es igual a';
$string['rule:eqs'] = 'es estrictamente igual a';
$string['rule:gt'] = 'es mayor que';
$string['rule:gte'] = 'es mayor o igual a';
$string['rule:lt'] = 'es menor que';
$string['rule:lte'] = 'es menor o igual a';
$string['rule:regex'] = 'coincide con el regex';
$string['rulecm'] = 'Actividad o recurso';
$string['rulecm_help'] = 'Esta condición es alcanzada cuando el evento ocurre en la actividad o el recurso especificado.';
$string['rulecmdesc'] = 'La actividad o recurso es \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'La actividad o recurso es: \'{$a->contextname}\' en \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Esta condici';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'El evento es \'{$a->eventname}\'';
$string['ruleeventinfo'] = 'Elegir la acción que los usuarios deben realizar dentro de una lista aprobada de eventos.';
$string['ruleproperty'] = 'Propiedad del evento';
$string['rulepropertydesc'] = 'La propiedad \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Esta condición es para usuarios poderoso con una comprensión técnica de los eventos y sus propiedades.';
$string['ruleset'] = 'Conjuneto de condiciones';
$string['ruleset:all'] = 'TODAS las condiciones son verdaderas';
$string['ruleset:any'] = 'CUALQUIERA de las condiciones es verdadera';
$string['ruleset:none'] = 'NINGUNA de las condiciones es verdadera';
$string['rulesetinfo'] = 'Combinar varias condiciones en una';
$string['rulesformhelp'] = '<p>Este plugin hace uso de EVENTOS para otorgar puntos para acciones llevadas a cabo por los estudiantes. Puede utilizar el formato siguiente para agregar sus propias reglas y ver las que vienen por defecto.</p>
<p>Se aconseja que revise la <a href="{$a->log}">bitácora</a> del plugin para identificar qué eventos se disparan cuando se llevan a cabo ciertas acciones en el curso y también para leer más sobre eventos: <a href="{$a->list}">lista de todos los eventos</a>, <a href="{$a->doc}">Documentos del desarrollador</a>.</p>
<p>Finalmente, queremos hacer notar que el plugin ignora:
<ul>
<li>Las acciones llevadas a cabo por el administrador, invitados y usuarios no ingresados al sitio.</li>
<li>Las acciones llevadas a cabo por usuarios sin la capacidad <em>block/xp:earnxp</em>.</li>
<li>Acciones repetidas en breves intervalos de tiempo, a fin de prevenir trampas.</li>
 <li>Eventos que sean marcados como <em>anónimos</em>, comopor ejemoplo, en una Retroalimentación anónima.</li>
<li>Y los eventos de nivel educativo que no sean  <em>Participativos</em>.</li>
</ul>
</p';
$string['searchandselectcourse'] = 'Buscar y seleccionar un curso';
$string['searchandselectmodule'] = 'Buscar y seleccionar una actividad o recurso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Configurar puntos';
$string['shortcode:xpbadge'] = 'La insignia que concuerda con el nivel actual del usuario.';
$string['shortcode:xpiflevel'] = 'Mostrar el contenido cuando coincide con el nivel actual del usuario.';
$string['shortcode:xpiflevel_help'] = 'Refiérase a los ejemplos debajo para formatear este código-corto. Cuando un nivel es especificado estrictamente, el contenido será mostrado sin importar las otras reglas.
Las reglas  mayor que y menor que deben todas de coincidir para que se muestre el contenido. ¡Tenga cuidado, ya que esto a veces resulta en que el contenido no se muestre nunca!
Tenga en cuenta que los profesores, u otros usuarios con la capacidad de edición, siempre verán todo.

```
[xpiflevel 1 3 5]
Mostrado si el el nivel del usuario es exactamente 1, 3 o 5.
[/xpiflevel]

[xpiflevel >3]
Mostrado si el el nivel del usuario es mayor de 3.
[/xpiflevel]

[xpiflevel >=3]
Mostrado si el el nivel del usuario es  mayor que o igual a 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
Mostrado si el el nivel del usuario es  mayor que o igual a 10 Y ADEMÁS es estrictamente menos que  20
O QUE es exactamente igual a 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
Nunca mostrado porque el nivel del usuario nunca puede ser menor o igual a 10 Y ADEMÁS ser mayor o igual a 20.
[/xpiflevel]
```

Tenga en cuanta que estos códigos_cortos NO SE PUEDEN anidar uno adentro del otro.';
$string['shortcode:xpladder'] = 'Mostrar una porción de la escalera.';
$string['shortcode:xpladder_help'] = 'Por defecto, una porción de la escalera que rodea al usuario actual será mostrada.
```
[xpladder]
```

Para mostrar los 10 estudiantes superiores en lugar de los vecinos del usuario actual, configure el parámetro `top`. Opcionalmente Usted puede configurar el número de usuarios a mostrar de forma tal que sean `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Un enlace hacia la escalera completa será automáticamente mostrado debajo de la tabla. Si Usted no quiere mostrar tal enlace, añada el argumento `hidelink`.

```
[xpladder hidelink]
```

Por defecto, la tabla no incluye la columna del progreso, que muestra la barra de progreso. Si dicha columna ha sido seleccionada en las columnas adicionales en las configuraciones de la escalera, Usted puede usar el argumento `withprogress` para mostrarla.

```
[xpladder withprogress]
```

Tenga en cuenta que cuando un curso está usando grupos, la escalera adivinará lo mejor que pueda de cual grupo  se mostrará la escalera.';
$string['shortcode:xplevelname'] = 'Mostrar el nombre del nivel.';
$string['shortcode:xplevelname_help'] = 'Por defecto la marca muestra el nombre del nivel actual del usuario.
Alternativamente, Usted puede usar el argumento \'level\' para mostrar el nombre de un nivel específico.

```
[xplevelname]
[xplevelname level=5]
```
Si el argumento `level` es proporcionado y el nivel no existe, no se mostrará nada.';
$string['shortcode:xppoints'] = 'Mostrar un número de puntos formateado como puntos de experiencia.';
$string['shortcode:xpprogressbar'] = 'La barra de progreso hacia el siguiente nivel del usuario actual.';
$string['somefeaturesrequireotherplugins'] = 'Algunas características requieren que sean instalados plugins adicionales,';
$string['someoneelse'] = 'Alguien más';
$string['somethinghappened'] = 'Algo pasó';
$string['taskcollectionloggerpurge'] = 'Purgar bitácoras de colección';
$string['taskusagereport'] = 'Reporte de uso';
$string['thankyou'] = '¡Gracias!';
$string['timebetweensameactions'] = 'Tiempo requerido entre acciones idénticas';
$string['timebetweensameactions_help'] = 'El tiempo mínimo requerido antes de que una acción que ya ha sucedido previamente sea aceptada nuevamente. Una acción es considerada idéntica si fue puesta en el mismo contexto y objeto; el leer una publicación de foro será considerada idéntica si se lee nuevamente la misma publicación. Cuando el valor está vacío, o es igual a cero, no aplica.';
$string['timeformaxactions'] = 'Lapso de tiempo para acciones máx.';
$string['timeformaxactions_help'] = 'El lapso de tiempo (en segundos) durante el cual el usuario no debería exceder el número máximo de acciones.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'ahora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}sem';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['unknownbadgea'] = 'Insignia desconocida ({$a})';
$string['unknowneventa'] = 'Evento desconocido ({$a})';
$string['unlockfeaturewithxpplus'] = 'Des-bloquear esta característica con XP+. <a href="{$a}">Saber más</a>';
$string['updateandpreview'] = 'Subir y previsualizar';
$string['upgradingplugins'] = 'Actualizando los plugins';
$string['urlaccessdeprecated'] = 'El acceso vía esta URL está obsoleto; por favor actualice sus enlaces.';
$string['usagereport'] = 'Compartir reporte de uso';
$string['usagereport_desc'] = 'Periódicamente compartir información anónima del uso con los desarrolladores del plugin. Esta información ayudará a comprender mejor como está siendo usado el plugin y además influirá en su desarrollo. La información compartida contiene información básica acerca del sitio Moodle (URL, versión), y además información del uso del plugin (número de usuarios, puntos ganados, vista de configuraciones, reglas usadas, ...)';
$string['usealgo'] = 'Usar el algoritmo';
$string['usecustomlevelbadges'] = 'Usar insignias de nivel personalizadas';
$string['usecustomlevelbadges_help'] = 'Cuando Usted configura a Si, debe proporcionar una imagen para cada nivel.';
$string['usingalgo'] = 'Usando algoritmo';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Los valores se han guardado exitosamente.';
$string['viewas'] = 'Ver como';
$string['viewlogs'] = 'Ver bitácoras';
$string['viewtheladder'] = 'Ver la escalera';
$string['visualsintro'] = 'Personalizar la apariencia de los niveles, y el significado de los puntos.';
$string['wewillreplyat'] = 'Le contestaremos a: _{$a}_.';
$string['when'] = 'Cuando';
$string['wherearexpused'] = '¿Donde se usan los puntos?';
$string['wherearexpused_desc'] = 'Cuando se configura a \'En cursos\', los puntos ganados solamente contarán para el curso en donde se añadió el bloque. Cuando se configura a \'Para todo el sitio\', un usuario se \'subirá de nivel\' en el sitio en lugar de selectivamente por curso; se usarán todos los puntos ganados en todo el sitio.';
$string['whoops'] = '¡ Ups !';
$string['xp'] = 'Puntos de experiencia';
$string['xp:addinstance'] = 'Añadir un nuevo bloque';
$string['xp:earnxp'] = 'Ganar puntos';
$string['xp:manage'] = 'Gestionar todos los aspectos de los puntos de experiencia';
$string['xp:myaddinstance'] = 'Añadir el bloque a mi Tablero';
$string['xp:view'] = 'Ver el bloque y sus páginas relacionadas';
$string['xp:viewlogs'] = 'Ver las bitácoras';
$string['xp:viewreport'] = 'Ver el reporte';
$string['xpgaindisabled'] = 'Ganancia depuntos deshabilitada';
$string['xpplusrequired'] = 'XP+ requrido';
$string['xprequired'] = 'XP requerida';
$string['xptogo'] = '[[{$a}]] que faltan';
$string['youleveledupexcl'] = '¡Usted subió de nivel!';
$string['youreachedlevel'] = 'Usted ha alcanzado el nivel:';
$string['youreachedlevela'] = '¡ Usted ha alcanzado el nivel {$a} !';
$string['yourmessage'] = 'Su mensaje';
$string['yourownrules'] = 'Sus propias reglas de Usted';
