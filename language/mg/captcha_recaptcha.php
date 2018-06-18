<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'RECAPTCHA_LANG'				=> 'mg',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Tsy maintsy mamorona kaonty ao amin’ny <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> ianao raha te hampiasa ny reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Diso ny zavatra nampidirinao',
	'RECAPTCHA_NOSCRIPT'			=> 'Alefaso ny JavaScript ao amin’ity fijerenao internet ity mba hisokatra ny fanamrinana hentitra.',

	'RECAPTCHA_PUBLIC'				=> 'Fanalahidy reCaptcha hitan’ny rehetra',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ny fanalahidinao reCaptcha hitan’ny rehetra. Afaka alaina ao amin’ny <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> ny fanalahidy.',
	'RECAPTCHA_PRIVATE'				=> 'Fanalahidy reCaptcha miafina',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ny fanalahidinao reCaptcha miafina. Afaka alaina ao amin’ny <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>  ny fanalahidy.',

	'RECAPTCHA_EXPLAIN'				=> 'Raha tianao ny hisakana ireo fangatahana mandeha ho azy, dia iangavianay ianao mba hameno ity fanamarinana hentitra ity..',
));
