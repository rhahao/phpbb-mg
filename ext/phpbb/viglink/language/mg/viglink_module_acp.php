<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Rohy VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'Ny VigLink dia manao asa fanampiny ho anay. Manao izay ahazoana vola amin’ny alalan’ireo rohy apetraky ny olona ato amin’ity tranonkala ity izy io. Tsy misy fiantraikany amin’ny fomba ampiasan’ny olona ity tranonkala ity anefa izany. Mandoa vola amin’ny VigLink ny mpivarotra, rehefa mametraka rohy ato amin’ity tranonkala ity ny olona, ary mitondra mankany amin’ny zavatra amidiny ilay rohy, ary misy mividy izany. Lasa fanomezana ho an’ny phpBB ny ampahany amin’io vola io. Manampy ny fikambanana ampiasainay sy manohana ara-bola azy io ianao, rehefa avelanao handeha ny VigLink sy ny fanohanana ara-bolana ny phpBB.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Afaka amboarina amin’ny fotoana rehetra any amin’ny “<a href="%1$s">Fanamboarana ny VigLink</a>” ireo fanazavana ireo.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Rehefa avy manindry ny hoe Handefa ianao ka mandefa ireo fanazavana eo ambany ireo, dia tsy hosokafanay ho anao intsony ity pejy ity.',
	'ACP_VIGLINK_ENABLE'			=> 'Alefa ny VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Mamela ny fampiasana ny VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Hitaky ny tombony ho anao (tsy voatery atao)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Afaka mitaky ny tombony ho anao ianao rehefa manokatra kaonty VigLink Convert.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Tsy navelan’ny phpBB handeha ny VigLink.',
	'ACP_VIGLINK_CLAIM'				=> 'Hitaky ny tombony ho anao',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Afaka mitaky ny vola azo avy amin’ny alalan’ireo rohy ampiasain’ny VigLink ianao, raha tsy tianao ho atao fanomezana ho an’ny phpBB izany. Raha tianao ho amboarina ny kaontinao, dia mamoròna kaonty “VigLink Convert” ka tsindrio ilay hoe “Hamadika ny kaonty”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Hamadika ny kaonty',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Nisy olana ny rohy amin’ny kaonty VigLink convert.',
));
