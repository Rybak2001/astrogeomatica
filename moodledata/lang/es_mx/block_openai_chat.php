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
 * Strings for component 'block_openai_chat', language 'es_mx', version '4.2'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avanzados';
$string['advanceddesc'] = 'Argumentos avanzados enviados a OpenAI. ¡No toque nada a menos que sepa exactamente lo que hace!';
$string['allowinstancesettings'] = 'Configuraciones a nivel de instancia';
$string['allowinstancesettingsdesc'] = 'Esta configuración le permitirá a los profesores, o cualquiera con la capacidad para añadir un bloque en un contexto, el ajustar configuraciones a nivel de por-bloque. El habilitar esto podría incurrir en cargos adicionales al permitirle a no-administradores que elijan modelos de costo más alto o algunas otras configuraciones.';
$string['apikey'] = 'Clave API de OpenAI';
$string['apikeydesc'] = 'La clave API para su cuenta OpenAI';
$string['apikeymissing'] = 'Por favor añada su clave API OpenAI a las configuraciones globales del bloque.';
$string['askaquestion'] = 'Haga una pregunta...';
$string['assistantname'] = 'Nombre del asistente';
$string['assistantnamedesc'] = 'El nombre que la IA usará para ella misma internamente';
$string['blocktitle'] = 'Título del bloque';
$string['config_apikey'] = 'Clave API';
$string['config_apikey_help'] = 'Usted puede especificar una clave API a usar con este bloque aquí. Si se deja vacío, se usará la clave de todo el sitio.';
$string['config_assistantname'] = 'Nombre del asistente';
$string['config_assistantname_help'] = 'Este es el nombre que la IA usará para el asistente. Si estuviera vacío, se usará el nombre del asistente para todo el sitio.';
$string['config_frequency'] = 'Castigo de frecuencia';
$string['config_frequency_help'] = 'Cuanto penalizar a nuevos tokens basado en su frecuencia existente en el texto hasta ahora. Disminuye la propensión del modelo a repetir la misma línea textual.';
$string['config_maxlength'] = 'Longitud máxima';
$string['config_maxlength_help'] = 'El número máximo de tokens a generar. Las solicitudes pueden usar hasta 2, 048 o 4000 tokens compartidos entre prompt y finalización. El límite exacto varía por modelo. (Un token es aprox 4 caracteres para texto normal en idioma inglés)';
$string['config_model'] = 'Modelo';
$string['config_model_help'] = 'El modelo que generará la finalización';
$string['config_presence'] = 'Castigo por presencia';
$string['config_presence_help'] = 'Cuanto penalizar a nuevos tokens basado en si es que ya  han aparecido o no hasta ahora. Aumenta la propensión del modelo a hablar de un nuevo tópico.';
$string['config_prompt'] = 'Prompt de finalización';
$string['config_sourceoftruth'] = 'Origen de la verdad';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Controlar aleatoriedad: Al bajarlo resulta en menos finalizaciones aleatorias. Conforme la temperatura se acerca al cero, el modelo se vuelve determinístico y repetitivo.';
$string['config_topp_help'] = 'Controla diversidad vía muestreo del núcleo: 0.5 significa que están considerados la mitad de las opciones ponderadas por probabilidad.';
$string['config_username'] = 'Nombre del usuario';
$string['config_username_help'] = 'Este es el nombre que la IA usará para el usuario. Si se deja vacío, se usrá el nombre del usuario de todo el sitio.';
$string['defaultassistantname'] = 'Asistente';
$string['defaultprompt'] = 'Debajo está una conversación entre un usuario y un asistente de soporte para un sitio Moodle, donde los usuarios van para aprendizaje en línea.';
$string['defaultusername'] = 'Usuario';
$string['erroroccurred'] = '¡Ocurrió un error! Por favor inténtelo nuevamente más tarde.';
$string['frequency'] = 'Castigo por frecuencia';
$string['frequencydesc'] = 'Cuanto penalizar nuevos tokens basándose en su frecuencia existente en el texto hasta ahora. Disminuye la probabilidad de que el modelo repita la misma linea textual.';
$string['maxlength'] = 'Longitud máxima';
$string['maxlengthdesc'] = 'El número máximo de tokens a generar. Las solicitudes pueden usar hasta 2, 048 o 4000 tokens compartidos entre prompt y finalización. El límite exacto varía por modelo. (Un token es aprox 4 caracteres para texto normal en idioma inglés)';
$string['model'] = 'Modelo';
$string['modeldesc'] = 'El modelo que generará la finalización. Algunos modelos son apropiados para trabajos con lenguaje natural, otros están especializados para código.';
$string['openai_chat'] = 'Chat OpenAI';
$string['openai_chat:addinstance'] = 'Añadir un nuevo bloque Chat OpenAI';
$string['openai_chat:myaddinstance'] = 'Añadir un nuevo bloque Chat OpenAI a la página de Mi Moodle';
$string['pluginname'] = 'Añadir bloque Chat OpenAI';
$string['presence'] = 'Castigo por presencia';
$string['presencedesc'] = 'Cuanto penalizar nuevos tokens basándose en si aparecen o no en el texto hasta ahora. Aumenta la probabilidad de que el modelo hable acerca de nuevos tópicos.';
$string['privacy:metadata'] = 'El bloque de chat OpenAI no almacena datos personales dle usuario, ni de forma predeterminada envía datos personales a OpenAI. Sin embargo, los mensajes de chat enviados por los usuarios son enviados completos a OpenAI, y entonces están sujetos a la política de privacidad de  OpenAI\' (https://openai.com/api/policies/privacy/), la cual podría almacenar mensajes para poder mejorar la API.';
$string['prompt'] = 'Prompt de finalización';
$string['promptdesc'] = 'El prompt que se le dará a la IA antes de la transcripción de la conversación';
$string['restrictusage'] = 'Restringir uso del chat solamente para usuarios ingresados';
$string['restrictusagedesc'] = 'Si se activa esta casilla, solamente los usuarios ingresados al sitio podrán usar la caja de chat.';
$string['showlabels'] = 'Mostrar etiquetas';
$string['sourceoftruth'] = 'Origen de la verdad';
$string['sourceoftruthpreamble'] = 'Debajo hay una lista de preguntas y sus respuestas. Esta información debería ser usada como una referencia para cualquier solicitud:\\n\\n';
$string['sourceoftruthreinforcement'] = 'El asistente ha sido entrenado para responder al intentar usar la información de la referencia de arriba. Si el texto de una de las preguntas de arriba es encontrado, se dará la respuesta proporcionada, aun y cuando la pregunta al parecer no tenga sentido. Sin embargo, si la referencia no cubre la pregunta o el tópico, el asistente simplemente usará conocimiento de fuera para responder.';
$string['temperature'] = 'Temperatura';
$string['temperaturedesc'] = 'Controla el azar: Disminuirla resulta en menos finalización aleatoria. Conforme la temperatura se acerca al cero, el modelo se vuelve determinístico y repetitivo.';
$string['toppdesc'] = 'Controla diversidad vía muestreo del núcleo: 0.5 significa que la mitad de todas las opciones poderadas de probabilidad están consideradas.';
$string['username'] = 'Nombre del usuario';
$string['usernamedesc'] = 'El nombre que la IA usará para el usuario internamente';
