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
	'ALREADY_DEFAULT_GROUP'		=> 'The selected group is already your default group.',
	'ALREADY_IN_GROUP'			=> 'You are already a member of the selected group.',
	'ALREADY_IN_GROUP_PENDING'	=> 'You already requested joining the selected group.',

	'CANNOT_JOIN_GROUP'			=> 'You are not able to join this group. You are only able to join open and freely open groups.',
	'CANNOT_RESIGN_GROUP'		=> 'You are not able to resign from this group. You are only able to resign from open and freely open groups.',
	'CHANGED_DEFAULT_GROUP'		=> 'Successfully changed default group.',

	'GROUP_AVATAR'						=> 'Group avatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Are you sure you want to change your default membership to the group “%s”?',
	'GROUP_CLOSED'						=> 'Closed',
	'GROUP_DESC'						=> 'Fanazavana momba ny vondrona',
	'GROUP_HIDDEN'						=> 'Hidden',
	'GROUP_INFORMATION'					=> 'Fanazavana momba ny vondrona misy ny mpikambana',
	'GROUP_IS_CLOSED'					=> 'This is a closed group, new members can only join upon invitation of a group leader.',
	'GROUP_IS_FREE'						=> 'This is a freely open group, all new members are welcome.',
	'GROUP_IS_HIDDEN'					=> 'Miafina ity vondrona ity, izay mpikambana ao amin’ny vondrona ihany no afaka mahita ny mpikambana rehetra ao.',
	'GROUP_IS_OPEN'						=> 'This is an open group, members can apply to join.',
	'GROUP_IS_SPECIAL'					=> 'Manokana ity vondrona ity, ny mpandrindra no mandrindra ny vondrona manokana.',
	'GROUP_JOIN'						=> 'Hiditra ao amin’ny vondrona',
	'GROUP_JOIN_CONFIRM'				=> 'Tianao ve ny hiditra ao amin’io vondrona io?',
	'GROUP_JOIN_PENDING'				=> 'Hangataka hiditra ao amin’ny vondrona',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Tianao ve ny hiditra ao amin’io vondrona io?',
	'GROUP_JOINED'						=> 'Tafiditra soa aman-tsara ao amin’io vondrona io ianao izao.',
	'GROUP_JOINED_PENDING'				=> 'Lasa ny fangatahana hiditra ao amin’ny vondrona. Mila miandry ny mpitarika ny vondrona hanaiky izany anefa ianao.',
	'GROUP_LIST'						=> 'Handrindra ny mpikambana',
	'GROUP_MEMBERS'						=> 'Mpikambana ao amin’ny vondrona',
	'GROUP_NAME'						=> 'Anaran’ny vondrona',
	'GROUP_OPEN'						=> 'Open',
	'GROUP_RANK'						=> 'Laharan’ny vondrona',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Hiala tsy ho mpikambana ao amin’ny vondrona',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Tianao ve ny hiala tsy ho mpikambana ao amin’io vondrona io?',
	'GROUP_RESIGN_PENDING'				=> 'Hiala tsy ho mpikambana ao amin’ny vondrona nangatahana',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Tianao ve ny hiala tsy ho mpikambana ao amin’io vondrona nangatahanao io?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Tsy ao amin’io vondrona io intsony ianao izao.',
	'GROUP_RESIGNED_PENDING'			=> 'Nofoanana ny fangatahanao hiditra ao amin’io vondrona io.',
	'GROUP_TYPE'						=> 'Group type',
	'GROUP_UNDISCLOSED'					=> 'Hidden group',
	'FORUM_UNDISCLOSED'					=> 'Mandrindra forum miafina',

	'LOGIN_EXPLAIN_GROUP'	=> 'Mila miditra aloha ianao vao afaka mahita ny mombamomba ny vondrona.',

	'NO_LEADERS'					=> 'Tsy mpitarika amina vondrona mihitsy ianao.',
	'NOT_LEADER_OF_GROUP'			=> 'Tsy tontosa ny fangatahanao satria tsy ianao no mpitarika an’io vondrona io.',
	'NOT_MEMBER_OF_GROUP'			=> 'Tsy tontosa ny fangatahanao satria tsy mpikambana ao amin’io vondrona io ianao na tsy mbola nekena ny fangatahanao hiditra ao.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Tsy azonao atao ny miala ao amin’io vondrona tokony hisy anao io.',

	'PRIMARY_GROUP'		=> 'Vondrona voalohany',

	'REMOVE_SELECTED'		=> 'Hamafa ny nosafidiana',

	'USER_GROUP_CHANGE'			=> 'Avy amin’ny vondrona “%1$s” mankany amin’ny “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Hiala tsy ho mpitarika',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Tianao ve ny hiala tsy ho mpitarika an’io vondrona io intsony?',
	'USER_GROUP_DEMOTED'		=> 'Tsy mpitarika an’io vondrona io intsony ianao.',
));
