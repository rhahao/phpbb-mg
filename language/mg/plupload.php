<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES'		=> 'Hanampy rakitra',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Hanampy ny rakitra eo amin’ny lisitra ny mbola hampiakarina, ary tsindrio ilay bokotra fampiakarana azy ireo.',
	'PLUPLOAD_ALREADY_QUEUED'	=> 'Efa misy ao amin’ny lisitra ity: %s.',
	'PLUPLOAD_CLOSE'			=> 'Hanidy',
	'PLUPLOAD_DRAG'				=> 'Batao eto ireo rakitra.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Misy rakitra roa mitovy.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Azonao atao koa ny mibata ilay rakitra mankeo amin’ny toerana fanoratana.',
	'PLUPLOAD_ERR_INPUT'		=> 'Nisy olana teo amin’ny fanokafana ny "flux d’entrée".',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Nisy olana teo amin’ny famindrana ny rakitra.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nisy olana teo amin’ny fanokana ny "flux de sortie".',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Mavesatra loatra ny rakitra:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Olana eo amin’ny isan’ny rakitra.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Tsy mety ny extension ampiasain’ny rakitra:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Tsy ampy intsony ny toerana malalaka.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Misy diso na tsy hita ny rohy hakana ny rakitra.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Olana eo amin’ny extension ampiasain’ny rakitra.',
	'PLUPLOAD_FILE'				=> 'Rakitra: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Rakitra: %s, havesany: %d, havesany farany azo ekena: %d',
	'PLUPLOAD_FILENAME'			=> 'Anaran’ny rakitra',
	'PLUPLOAD_FILES_QUEUED'		=> 'Rakitra %d no eo amin’ny lisitra',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Olana générique.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Olana HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Diso ny karazana sary na tsy zaka.',
	'PLUPLOAD_INIT_ERROR'		=> 'Olana eo amin’ny "initialisation".',
	'PLUPLOAD_IO_ERROR'			=> 'Olana IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Olana eo amin’ny fiarovana.',
	'PLUPLOAD_SELECT_FILES'		=> 'Hisafidy rakitra',
	'PLUPLOAD_SIZE'				=> 'Havesany',
	'PLUPLOAD_SIZE_ERROR'		=> 'Olana eo amin’ny vesatry ny rakitra.',
	'PLUPLOAD_STATUS'			=> 'Amin’izao',
	'PLUPLOAD_START_UPLOAD'		=> 'Handefa ny fampiakarana',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Handefa ny lisitry ny fampiakarana',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Hanajanona ny fampiakarana',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Hanajanona ny fampiakarana mandeha izao',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Rakitra %d/%d izao no tafakatra',
));
