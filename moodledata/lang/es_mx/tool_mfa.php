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
 * Strings for component 'tool_mfa', language 'es_mx', version '4.2'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Ponderación lograda';
$string['alltime'] = 'Todo el tiempo';
$string['areyousure'] = '¿Está seguro de querer revocar el factor?';
$string['combination'] = 'Combinación';
$string['connector'] = 'Y';
$string['created'] = 'Creado';
$string['createdfromip'] = 'Creado desde IP';
$string['debugmode:currentweight'] = 'Ponderación actual: {$a}';
$string['debugmode:heading'] = 'Modo depuración';
$string['devicename'] = 'Dispositivo';
$string['email:subject'] = 'No es posible ingresar a {$a}';
$string['enablefactor'] = 'Habilitar factor';
$string['error:actionnotfound'] = 'Acción \'{$a}\' no soportada';
$string['error:directaccess'] = 'Esta página no debería ser accesada directamente';
$string['error:factornotenabled'] = 'Factor MFA \'{$a}\' no habilitado';
$string['error:factornotfound'] = 'Factor MFA \'{$a}\' no encontrado';
$string['error:home'] = 'Clic aquí para regresar al Inicio.';
$string['error:notenoughfactors'] = 'No es posible autenticar';
$string['error:reauth'] = 'No pudimos confirmar suficientemente su identidad para cumplir con la política de seguridad de autenticación.<br>Esto podría deberse a: <br> 1) Pasos que se están bloqueando - por favor espere unos minutos e inténtelo de nuevo.
     <br> 2) Pasos que están fallando - por favor compruebe dos veces los detalles para cada paso. <br> 3) Pasos que se están saltando - por favor cargue nuevamente esta página o intente volver a ingresar.';
$string['error:revoke'] = 'No se puede revocar factor';
$string['error:setupfactor'] = 'No se puede configurar factor';
$string['error:support'] = 'Si usted aun no puede ingresar al sitio, o si cree que está viendo esto por error, por favor envíe un E-mal a la dirección siguiente para soporte.';
$string['error:wrongfactorid'] = 'Factor id \'{$a}\' es incorrecto';
$string['event:failfactor'] = 'Autenticación MFA falló debido a un factor que falló.';
$string['event:faillockout'] = 'Autenticación MFA falló debido a demasiados intentos.';
$string['event:failnotenoughfactors'] = 'Autenticación MFA falló debido a insuficientes factores satisfechos.';
$string['event:userdeletedfactor'] = 'Factor Eliminado';
$string['event:userfailedmfa'] = 'Usuario falló autenticación MFA';
$string['event:userpassedmfa'] = 'Verificación aprobada';
$string['event:userrevokedfactor'] = 'Revocación de factor';
$string['event:usersetupfactor'] = 'Configuración de factor';
$string['factor'] = 'Factor';
$string['factorlocked'] = 'Factor \'{$a}\' ha sido bloqueado debido a intentos fallidos excedidos.';
$string['factorreport'] = 'Reporte de todos los factores';
$string['factorreset'] = 'Su MFA \'{$a->factor}\' ha sido reiniciado por un administrador del sitio. Usted podría necesitar configurar nuevamente este factor. {$a->url}';
$string['factorresetall'] = 'Todos sus factores MFA han sido reiniciados por un administrador del sitio. Usted podría necesitar configurar nuevamente estos factores. {$a->url}';
$string['factorrevoked'] = 'Factor \'{$a}\' exitosamente revocado.';
$string['factorsetup'] = 'Factor \'{$a}\' exitosamente configurado.';
$string['fallback'] = 'Factor "plan B"';
$string['fallback_info'] = 'Este factor es un "plan B", en caso de que no estén configurados otros factores. Este factor siempre fallará.';
$string['gotourl'] = 'Ir a su URL original:';
$string['guidance'] = 'Guía del usuario MFA';
$string['inputrequired'] = 'Entrada del usuario';
$string['ipatcreation'] = 'Dirección IP de cuando el factor fue creado';
$string['lastverified'] = 'Última verificación';
$string['lockedusersforallfactors'] = 'Usuarios bloqueados: Todos los factores';
$string['lockedusersforfactor'] = 'Usuarios bloqueados: {$a}';
$string['lockoutnotification'] = 'Usted tiene {$a} intentos de verificación restantes para este factor.';
$string['lookbackperiod'] = 'Mostrando información de Autenticación multi-factor {$a} en adelante.';
$string['mfa'] = 'MFA';
$string['mfa:mfaaccess'] = 'Interactuar con MFA';
$string['mfareports'] = 'Reportes MFA';
$string['mfasettings'] = 'Gestionar MFA';
$string['na'] = 'n/d';
$string['needhelp'] = '¿Necesita ayuda?';
$string['nologinusers'] = 'No ingresado';
$string['nonauthusers'] = 'MFA pendiente';
$string['overall'] = 'General';
$string['pending'] = 'Pendiente';
$string['performbulk'] = 'Acción masiva';
$string['pluginname'] = 'Autenticación de múltiples factores';
$string['preferences:activefactors'] = 'Factores activos';
$string['preferences:availablefactors'] = 'Factores disponibles';
$string['preferences:header'] = 'Preferencias de Autenticación de múltiples factores';
$string['preferenceslink'] = 'Elegir aquí para ir a preferencias del usuario.';
$string['privacy:metadata:tool_mfa'] = 'Datos con factores MFA configurados';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP desde la cual fue configurado el factor';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipo de factor';
$string['privacy:metadata:tool_mfa:id'] = 'ID del registro';
$string['privacy:metadata:tool_mfa:label'] = 'Etiqueta para instancia del factor; por ejemplo dispositivo o E-mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Hora de cuando fue verificado por última vez con este factor';
$string['privacy:metadata:tool_mfa:secret'] = 'Cualquier dato secreto para factor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Hora de cuando la instancia del factor fue configurada';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Hora de cuando el factor fue modificado por última vez';
$string['privacy:metadata:tool_mfa:userid'] = 'La ID del usuario a quien pertenece el factor';
$string['privacy:metadata:tool_mfa_auth'] = 'Esta tabla de la base de datos almacena la última vez que fue registrada una autenticación MFA para una ID de usuario.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Hora de cuando el usuario fue autenticado por última vez';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'El usuario con quien está asociado este sello de tiempo';
$string['privacy:metadata:tool_mfa_secrets'] = 'Esta tabla de la base de datos almacena secretos temporales para autenticación del usuario.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'El factor con el cual está asociado este secreto.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'El código de seguridad del secreto.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'La sessionid con la cual está asociada este secreto.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'El usuario con quien está asociado este secreto.';
$string['redirecterrordetected'] = 'Redirección no soportada detectada; ejecución del script terminada. Ocurrió error de redirección entre MFA y {$a}.';
$string['resetconfirm'] = 'Reiniciar factor del usuario';
$string['resetfactor'] = 'Reiniciar factores de autenticación del usuario';
$string['resetfactorconfirm'] = '¿Está seguro de querer reiniciar este factor para {$a}?';
$string['resetfactorplaceholder'] = 'Nombre_de_usuario o E-mail';
$string['resetsuccess'] = 'Factor \'{$a->factor}\' reiniciado exitosamente para usuario \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Factor \'{$a}\' reiniciado exitosamente para usuarios proporcionados.';
$string['resetuser'] = 'Usuario:';
$string['revoke'] = 'Revocar';
$string['revokefactor'] = 'Revocar factor';
$string['selectfactor'] = 'Seleccionar factor a reiniciar:';
$string['selectperiod'] = 'Seleccionar un período de búsqueda atrás para el reporte:';
$string['settings:combinations'] = 'Resumen de buenas condiciones para ingresar';
$string['settings:debugmode'] = 'Habilitar modo de depuración';
$string['settings:debugmode_help'] = 'Modo de depuración mostrará un pequeño banner de notificación en las páginas de admin de MFA, además de la página de preferencias del usuario, con información de los factores actualmente habilitados.';
$string['settings:duration'] = 'Duración de validez del secreto';
$string['settings:duration_help'] = 'La duración que serán válidos los secretos generados.';
$string['settings:enabled'] = 'Plugin MFA habilitado';
$string['settings:enabled_help'] = '';
$string['settings:enablefactor'] = 'Habilitar factor';
$string['settings:enablefactor_help'] = 'Activar este control para permitir que el factor sea usado para autenticación MFA.';
$string['settings:general'] = 'Configuraciones generales de MFA';
$string['settings:guidancecheck'] = 'Página de guía del usuario';
$string['settings:guidancecheck_help'] = 'Añadir un enlace a la página de Guía en las páginas de autenticación MFA, y página de preferencias MFA.';
$string['settings:guidancefiles'] = 'Archivos de página de Guía';
$string['settings:guidancefiles_help'] = 'Añada cualquier archivo aquí para usarlo en la página de Guía, e incrústelo dentro de la página usando {{filename}} (ruta resuelta) o {{{filename}}} (enlace HTML) en el editor';
$string['settings:guidancepage'] = 'Contenido de página de Guía';
$string['settings:guidancepage_help'] = 'HTML aquí será mostrado en la página de Guía. Ingrese nombres de archivo desde el área de archivo para incrustar el archivo con la ruta resuelta {{filename}} o como un enlace HTL uando {{{filename}}}.';
$string['settings:lockout'] = 'Umbral de cierre';
$string['settings:lockout_help'] = 'Cantidad de intentos que un usuario tiene para contestar los factores de entrada antes de que NO le sea permitido ingresar.';
$string['settings:redir_exclusions'] = 'Usuarios que no deberían re-direccionar la comprobación MFA';
$string['settings:redir_exclusions_help'] = 'Cada nueva línea es una URL relativo de la raíz del sitio desde la cual la comprobación multi-factor NO re-direccionará, como por ejemplo. /admin/tool/securityquestions/set_responses.php';
$string['settings:weight'] = 'Ponderación del factor';
$string['settings:weight_help'] = 'La ponderación del factor si es pasado. Un usuario necesita al menos 100 puntos para ingresar.';
$string['setup'] = 'Configuración';
$string['setupfactor'] = 'Configurar factor';
$string['setuprequired'] = 'Configuración del usuario';
$string['state:fail'] = 'Fallar';
$string['state:locked'] = 'Bloqueado';
$string['state:neutral'] = 'Neutral';
$string['state:pass'] = 'Pasar';
$string['state:unknown'] = 'Desconocido';
$string['totalusers'] = 'Total de usuarios';
$string['totalweight'] = 'Ponderación total';
$string['userempty'] = 'El usuario no puede estar vacío.';
$string['userlogs'] = 'Usuario ingresa';
$string['usernotfound'] = 'No se puede localizar usuario.';
$string['usersauthedinperiod'] = 'Ingresado';
$string['verificationcode'] = 'Ingresar código de verificación para confirmación.';
$string['verificationcode_help'] = 'El código de verificación proporcionado por el factor de autenticación actual';
$string['viewlockedusers'] = 'Ver usuarios bloqueados';
$string['weight'] = 'Ponderación';
