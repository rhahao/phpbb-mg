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
	'ABOUT_USER'			=> 'Mombamomba anao',
	'ACTIVE_IN_FORUM'		=> 'Forum nandraisanao anjara betsaka',
	'ACTIVE_IN_TOPIC'		=> 'Lohahevitra nandraisanao anjara betsaka',
	'ADD_FOE'				=> 'Hanampy ireo tsy horaharahaina',
	'ADD_FRIEND'			=> 'Hanampy ireo namana',
	'AFTER'					=> 'Aorian’ny',

	'ALL'					=> 'Izy rehetra',

	'BEFORE'				=> 'Alohan’ny',

	'CC_SENDER'				=> 'Handefa kopian’ny email aminao koa.',
	'CONTACT_ADMIN'			=> 'Hifandray amin’ny Mpandrindra ny forum',

	'DEST_LANG'				=> 'Fiteny',
	'DEST_LANG_EXPLAIN'		=> 'Safidio ny fiteny tokony ho izy (raha ohatra ka misy) ho an’ity hafatra ity.',

	'EDIT_PROFILE'			=> 'Hanova ny mombamomba anao',

	'EMAIL_BODY_EXPLAIN'	=> 'Ho alefa ho toy ny soratra fotsiny ity hafatra ity, fa tsy misy HTML na BBCode. Ny adiresy hamaliana ity hafatra dia ny adiresy email ampiasainao.',
	'EMAIL_DISABLED'		=> 'Tsy mbola mandeha izao ny resaka fandefasana email.',
	'EMAIL_SENT'			=> 'Lasa ny email.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Ho alefa ho toy ny soratra fotsiny ity hafatra ity, fa tsy misy HTML na BBCode. Efa tafiditra amin’ity ny fanazavana ilaina momba ny lohahevitra. Ny adiresy hamaliana ity hafatra dia ny adiresy email ampiasainao.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Tokony adiresy email mandeha no ampidirinao eo amin’ny olona andefasana.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Tokony hisy hafatra ny email alefanao.',
	'EMPTY_MESSAGE_IM'		=> 'Mila manoratra hafatra ianao.',
	'EMPTY_NAME_EMAIL'		=> 'Tokony ho ilay tena anaran’olona no ampidirinao.',
	'EMPTY_SENDER_EMAIL'	=> 'Mila manoratra adiresy email mandeha ianao.',
	'EMPTY_SENDER_NAME'		=> 'Mila manoratra anarana ianao.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Mila misy antony ny hafatra alefanao.',
	'EQUAL_TO'				=> 'Mitovy amin’ny',

	'FIND_USERNAME_EXPLAIN'	=> 'Ampiasao ity raha te hitady mpikambana voafaritra tsara ianao. Tsy voatery hofenoina daholo izy rehetra. Azonao atao ny mampiasa * rehefa hanao ny fikarohana. Rehefa hampiditra daty dia ampiasao ny endrika <kbd>TTTT-VV-DD</kbd>, e.g. <samp>2004-02-29</samp>. Ampiasao ny boaty azo marihana raha te hisafidy mpikambana iray na maromaro dia avy tsindrio ilay hoe Hisafidy ireo nomarihana mba hiverenana amin’ny teo aloha.',
	'FLOOD_EMAIL_LIMIT'		=> 'Tsy afaka mandefa email intsony aloha ianao izao. Andramo indray rehefa afaka kelikely.',

	'GROUP_LEADER'			=> 'Mpitarika ny vondrona',

	'HIDE_MEMBER_SEARCH'	=> 'Hanafina ny fikarohana mpikambana',

	'IM_ADD_CONTACT'		=> 'Hanampy ny olona hifandraisana',
	'IM_DOWNLOAD_APP'		=> 'Haka ny application',
	'IM_JABBER'				=> 'Please note that users may have selected to not receive unsolicited instant messages.',
	'IM_JABBER_SUBJECT'		=> 'This is an automated message please do not reply! Message from user %1$s at %2$s.',
	'IM_MESSAGE'			=> 'Ny Hafatrao',
	'IM_NAME'				=> 'Ny Anaranao',
	'IM_NO_DATA'			=> 'Tsy misy fanazavana momba ny fomba hifandraisana amin’io mpikambana io.',
	'IM_NO_JABBER'			=> 'Sorry, direct messaging of Jabber users is not supported on this board. You will need a Jabber client installed on your system to contact the recipient above.',
	'IM_RECIPIENT'			=> 'Olona handefasana',
	'IM_SEND'				=> 'Handefa hafatra',
	'IM_SEND_MESSAGE'		=> 'Handefa hafatra',
	'IM_SENT_JABBER'		=> 'Lasa soa aman-tsara ny hafatra nalefanao any amin’i %1$s.',
	'IM_USER'				=> 'Send an instant message',

	'LAST_ACTIVE'				=> 'Tato farany',
	'LESS_THAN'					=> 'Latsaky ny',
	'LIST_USERS'				=> array(
		1	=> 'Mpikambana %d',
		2	=> 'Mpikambana %d',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Mila mamorona kaonty sy miditra aloha ianao vao afaka mahita ny lisitry ny ekipa.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Mila mamorona kaonty sy miditra aloha ianao vao afaka mahita ny lisitry ny mpikambana.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Mila mamorona kaonty sy miditra aloha ianao vao afaka mikaroka mpikambana.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Mila mamorona kaonty sy miditra aloha ianao vao afaka mahita ny mombamomba ny mpikambana.',

	'MANAGE_GROUP'			=> 'Handrindra ny vondrona',
	'MORE_THAN'				=> 'Maro noho ny',

	'NO_CONTACT_FORM'		=> 'Tsy mandeha ny fangatahana hifandray amin’ny mpandrindra ny forum.',
	'NO_CONTACT_PAGE'		=> 'Tsy mandeha ny pejy hifandraisana amin’ny mpandrindra ny forum.',
	'NO_EMAIL'				=> 'Tsy azonao atao ny mandefa email amin’io mpikambana io.',
	'NO_VIEW_USERS'			=> 'Tsy nahazo alalana hijery ny lisitry ny mpikambana na ny mombamomba azy ireo ianao.',

	'ORDER'					=> 'Filaharany',
	'OTHER'					=> 'Hafa',

	'POST_IP'				=> 'Nalefa tamin’ny domaine/IP',

	'REAL_NAME'				=> 'Anaran’ny olona andefasana',
	'RECIPIENT'				=> 'Olona andefasana',
	'REMOVE_FOE'			=> 'Esorina amin’ireo tsy horaharahaina',
	'REMOVE_FRIEND'			=> 'Esorina amin’ireo namana',

	'SELECT_MARKED'			=> 'Hisafidy ireo nomarihina',
	'SELECT_SORT_METHOD'	=> 'Hisafidy ny sivana',
	'SENDER_EMAIL_ADDRESS'	=> 'Ny adiresy email-nao',
	'SENDER_NAME'			=> 'Ny anaranao',
	'SEND_ICQ_MESSAGE'		=> 'Handefa hafatra ICQ',
	'SEND_IM'				=> 'Instant messaging',
	'SEND_JABBER_MESSAGE'	=> 'Send Jabber message',
	'SEND_MESSAGE'			=> 'Hafatra',
	'SEND_YIM_MESSAGE'		=> 'Handefa hafatra YIM',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Tato farany',
	'SORT_POST_COUNT'		=> 'Isan’ny hafatra',

	'USERNAME_BEGINS_WITH'	=> 'Solon’anarana manomboka amin’ny',
	'USER_ADMIN'			=> 'Administer user',
	'USER_BAN'				=> 'Banning',
	'USER_FORUM'			=> 'User statistics',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Ato izao',
	'USER_PRESENCE'			=> 'Maha eo ato amin’ny forum',
	'USERS_PER_PAGE'		=> 'Mpikambana isaky ny pejy',

	'VIEWING_PROFILE'		=> 'Mijery ny mombamomba an’i %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'View Facebook Profile',
	'VIEW_SKYPE_PROFILE'	=> 'View Skype Profile',
	'VIEW_TWITTER_PROFILE'	=> 'View Twitter Profile',
	'VIEW_YOUTUBE_CHANNEL'	=> 'View YouTube Channel',
	'VIEW_GOOGLEPLUS_PROFILE' => 'View Google+ Profile',
));
