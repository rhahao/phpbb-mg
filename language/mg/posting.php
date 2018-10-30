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
	'ADD_ATTACHMENT'			=> 'Hampiditra rakitra',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Fenoy ny fanazavana eto ambany raha te mbola te hampiditra rakitra iray na maromaro ianao.',
	'ADD_FILE'					=> 'Hampiditra ny rakitra',
	'ADD_POLL'					=> 'Poll creation',
	'ADD_POLL_EXPLAIN'			=> 'If you do not want to add a poll to your topic leave the fields blank.',
	'ALREADY_DELETED'			=> 'Miala tsiny fa efa voafafa io hafatra io.',
	'ATTACH_DISK_FULL'			=> 'There is not enough free disk space to post this attachment.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, the board attachment quota has been reached.',
	'ATTACH_SIG'				=> 'Hampiditra sonia (azo amboarina ao amin’ny UCP)',

	'BBCODE_A_HELP'				=> 'Hampiditra ny rakitra amin’ny andalana: [attachment=]rakitra.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Sora-matevina: [b]soratra[/b]',
	'BBCODE_C_HELP'				=> 'Endrika kaody: [code]kaody[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=halavany,haavony]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Haben’ny soratra: [size=85]soratra madinika[/size]',
	'BBCODE_IS_OFF'				=> '<em>TSY MANDEHA</em> ny %sBBCode%s',
	'BBCODE_IS_ON'				=> '<em>MANDEHA</em> ny %sBBCode%s',
	'BBCODE_I_HELP'				=> 'Sora-mandry: [i]soratra[/i]',
	'BBCODE_L_HELP'				=> 'Lisitra: [list][*]soratra[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Andalana ao amin’ny lisitra: [*]soratra',
	'BBCODE_O_HELP'				=> 'Lisitra misy filaharany: oh. [list=1][*]Teboka voalohany[/list] na [list=a][*]Teboka a[/list]',
	'BBCODE_P_HELP'				=> 'Hampiditra sary: [img]http://rohy_sary[/img]',
	'BBCODE_Q_HELP'				=> 'Hanamarika soratra: [quote]soratra[/quote]',
	'BBCODE_S_HELP'				=> 'Lokon’ny soratra: [color=red]soratra[/color] na [color=#FF0000]soratra[/color]',
	'BBCODE_U_HELP'				=> 'Hanipika soratra: [u]soratra[/u]',
	'BBCODE_W_HELP'				=> 'Hampiditra sary: [url]http://rohy[/url] na [url=http://rohy]Soratra ho an’ny rohy[/url]',
	'BBCODE_Y_HELP'				=> 'Lisitra: Hanampy lisitra misy zavatra maromaro ao anatiny',
	'BUMP_ERROR'				=> 'Mila miandry kely aloha ianao vao afaka mampiakatra indray ity lohahevitra ity.',

	'CANNOT_DELETE_REPLIED'		=> 'Miala tsiny fa hafatra mbola tsy nisy namaly ihany no azonao fafana.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Nohidiana ity hafatra ity. Tsy azonao atao intsony ny manova azy io.',
	'CANNOT_EDIT_TIME'			=> 'Tsy azonao atao intsony ny manova na mamafa io hafatra io.',
	'CANNOT_POST_ANNOUNCE'		=> 'Miala tsiny fa tsy afaka mandefa fampandrenesana ianao.',
	'CANNOT_POST_STICKY'		=> 'Miala tsiny fa tsy afaka mandefa hafatra amin’ny endrika naoty ianao.',
	'CHANGE_TOPIC_TO'			=> 'Hanova ny karazana lohahevitra ho',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Misy litera %1$d ao amin’ny hafatrao.',
		2	=> 'Misy litera %1$d ao amin’ny hafatrao.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Misy litera %1$d ny sonianao.',
		2	=> 'Misy litera %1$d ny sonianao.',
	),
	'CLOSE_TAGS'				=> 'Hanidy ny tenifototra',
	'CURRENT_TOPIC'				=> 'Lohahevitra amin’izao',

	'DELETE_FILE'				=> 'Hamafa ny rakitra',
	'DELETE_MESSAGE'			=> 'Hamafa ny hafatra',
	'DELETE_MESSAGE_CONFIRM'	=> 'Tianao hofafana ve ity hafatra ity?',
	'DELETE_OWN_POSTS'			=> 'Miala tsiny fa ny hafatrao ihany no azonao fafana.',
	'DELETE_PERMANENTLY'		=> 'Hamafa tanteraka',
	'DELETE_POST_CONFIRM'		=> 'Tianao hofafana ve ity lohahevitra ity?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Tianao hofafana <strong>tanteraka</strong> ve ity hafatra ity?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Hamafa tanteraka ity hafatra ity mba tsy ho azo averina intsony',
		2	=> 'Hamafa tanteraka ireo hafatra %1$d ireo mba tsy ho azo averina intsony',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Tianao hofafana ve ireo hafatra ireo?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Tianao hofafana <strong>tanteraka</strong> ve ireo hafatra ireo?',
	'DELETE_REASON'				=> 'Antony hamafana',
	'DELETE_REASON_EXPLAIN'		=> 'Ho hitan’ny mpandrindra ny antony hamafana.',
	'DELETE_POST_WARN'			=> 'Hamafa ny hafatra',
	'DELETE_TOPIC_CONFIRM'		=> 'Tianao hofafana ve ity lohahevitra ity?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Hamafa tanteraka ity lohahevitra ity mba tsy ho azo averina intsony',
		2	=> 'Hamafa tanteraka ireo lohahevitra %1$d ireo mba tsy ho azo averina intsony',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Tianao hofafana <strong>tanteraka</strong> ve ity lohahevitra ity?',
	'DELETE_TOPICS_CONFIRM'		=> 'Tianao hofafana ve ireo lohahevitra ireo?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Tianao hofafana <strong>tanteraka</strong> ve ireo lohahevitra ireo?',
	'DISABLE_BBCODE'			=> 'Hanajanona ny BBCode',
	'DISABLE_MAGIC_URL'			=> 'Tsy avadika ho azy ny rohy',
	'DISABLE_SMILIES'			=> 'Hanajanona ny émoticônes',
	'DISALLOWED_CONTENT'		=> 'Tsy nekena ny fampiakarana nataonao satria mety ho rakitra mampiahiahy io rakitra tianao alaina io.',
	'DISALLOWED_EXTENSION'		=> 'The extension %s is not allowed.',
	'DRAFT_LOADED'				=> 'Nalaina ho eo amin’ny fandefasana hafatra ny vakiraoka, azonao faranana amin’izay ny hafatrao izao.<br />Ho voafafa ny vakiraokanao rehefa lasa ity hafatra ity.',
	'DRAFT_LOADED_PM'			=> 'Nalaina ho eo amin’ny fandefasana hafatra manokana ny vakiraoka, azona faranana amin’izay ny hafatrao manokana izao.<br />Ho voafafa ny vakiraokanao rehefa lasa ity hafatra manokana ity.',
	'DRAFT_SAVED'				=> 'Voatahiry soa aman-tsara ny vakiraoka.',
	'DRAFT_TITLE'				=> 'Lohatenin’ny vakiraoka',

	'EDIT_REASON'				=> 'Antony hanovana ity hafatra ity',
	'EMPTY_FILEUPLOAD'			=> 'Tsy misy n’inona n’inona ny rakitra nampiakarina.',
	'EMPTY_MESSAGE'				=> 'Tsy maintsy manoratra hafatra ianao.',
	'EMPTY_REMOTE_DATA'			=> 'File could not be uploaded, please try uploading the file manually.',

	'FLASH_IS_OFF'				=> '<em>TSY MANDEHA</em> ny [flash]',
	'FLASH_IS_ON'				=> '<em>MANDEHA</em> ny [flash]',
	'FLOOD_ERROR'				=> 'Vao haingana ianao no nandefa hafatra farany ka tsy mbola afaka mandefa izao.',
	'FONT_COLOR'				=> 'Lokon’ny soratra',
	'FONT_COLOR_HIDE'			=> 'Hanafina ny lokon’ny soratra',
	'FONT_HUGE'					=> 'Lehibe indrindra',
	'FONT_LARGE'				=> 'Lehibe',
	'FONT_NORMAL'				=> 'Antonony',
	'FONT_SIZE'					=> 'Haben’ny soratra',
	'FONT_SMALL'				=> 'Kely',
	'FONT_TINY'					=> 'Kely indrindra',

	'GENERAL_UPLOAD_ERROR'		=> 'Tsy vita ny famindrana ny rakitra ho any amin’ny %s.',

	'IMAGES_ARE_OFF'			=> '<em>TSY MANDEHA</em> ny [img]',
	'IMAGES_ARE_ON'				=> '<em>MANDEHA</em> ny [img]',
	'INVALID_FILENAME'			=> 'Tsy mety ny anaran’ny rakitra %s.',

	'LOAD'						=> 'Haka',
	'LOAD_DRAFT'				=> 'Haka ny vakiraoka',
	'LOAD_DRAFT_EXPLAIN'		=> 'Afaka misafidy ny vakiraoka izay tianao hotohizana soratana ianao eto. Ho voafafa ny hafatra soratanao izao, ho voafafa koa ny zavatra rehetra ao anatin’ny hafatra soratanao izao. Azonao jerena, ovana ary fafana ao amin’ny Fanamboarana ataon’ny Mpikambana ny vakiraoka.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Mila miditra aloha ianao vao afaka mampiakatra lohahevitra ato amin’ity forum ity.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Mila miditra aloha ianao vao afaka mamafa hafatra ato amin’ity forum ity.',
	'LOGIN_EXPLAIN_POST'		=> 'Mila miditra aloha ianao vao afaka mandefa hafatra ato amin’ity forum ity.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Mila miditra aloha ianao vao afaka manamarika hafatra ato amin’ity forum ity.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Mila miditra aloha ianao vao afaka mamaly ny hafatra ny lohahevitra ato amin’ity forum ity.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Tsy afaka mampiasa haben’ny soratra mihoatra ny %d ianao.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Tsy mahazo mihoatra ny %d pixel ny haavon’ny rakitra flash.',
		2	=> 'Tsy mahazo mihoatra ny %d pixel ny haavon’ny rakitra flash.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Tsy mahazo mihoatra ny %d pixel ny halavan’ny rakitra flash.',
		2	=> 'Tsy mahazo mihoatra ny %d pixel ny halavan’ny rakitra flash.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Tsy mahazo mihoatra ny %1$d pixel ny haavon’ny sary.',
		2	=> 'Tsy mahazo mihoatra ny %1$d pixel ny haavon’ny sary.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Tsy mahazo mihoatra ny %d pixel ny halavan’ny sary.',
		2	=> 'Tsy mahazo mihoatra ny %d pixel ny halavan’ny sary.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Ampidiro eto ny hafatrao, tsy mahazo mihoatra ny <strong>%d</strong> litera izany.',
		2	=> 'Ampidiro eto ny hafatrao, tsy mahazo mihoatra ny <strong>%d</strong> litera izany.',
	),
	'MESSAGE_DELETED'			=> 'Voafafa soa aman-tsara ity hafatra ity.',
	'MORE_SMILIES'				=> 'Hijery émoticônes betsaka kokoa',

	'NOTIFY_REPLY'				=> 'Hampahafantatra ahy rehefa misy valiny voaray',
	'NOT_UPLOADED'				=> 'Tsy afaka nampiakarina ny rakitra.',
	'NO_DELETE_POLL_OPTIONS'	=> 'You cannot delete existing poll options.',
	'NO_PM_ICON'				=> 'Tsy misy kisary',
	'NO_POLL_TITLE'				=> 'You have to enter a poll title.',
	'NO_POST'					=> 'Tsy misy intsony io hafatra io.',
	'NO_POST_MODE'				=> 'Tsy nisy endrika hafatra nosafidiana.',
	'NO_TEMP_DIR'				=> 'Temporary folder could not be found or is not writable.',

	'PARTIAL_UPLOAD'			=> 'The uploaded file was only partially uploaded.',
	'PHP_UPLOAD_STOPPED'		=> 'A PHP extension has stopped the file upload.',
	'PHP_SIZE_NA'				=> 'Mavesatra loatra io rakitra io.<br />Tsy voafaritra ao amin’ny php.ini ao amin’ny PHP ny fetra farany azo ekena.',
	'PHP_SIZE_OVERRUN'			=> 'Mavesatra loatra io rakitra io, ny fetra farany azo ekena dia %1$d %2$s.<br />Voafaritra ao amin’ny php.ini io ary tsy azo hihoarana.',
	'PLACE_INLINE'				=> 'Apetraka eo amin’ny andalana',
	'POLL_DELETE'				=> 'Delete poll',
	'POLL_FOR'					=> 'Run poll for',
	'POLL_FOR_EXPLAIN'			=> 'Enter 0 for a never ending poll.',
	'POLL_MAX_OPTIONS'			=> 'Options per user',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'This is the number of options each user may select when voting.',
	'POLL_OPTIONS'				=> 'Poll options',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Place each option on a new line. You may enter <strong>%d</strong> option. If you remove or add options all previous votes will be reset.',
		2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	),
	'POLL_QUESTION'				=> 'Poll question',
	'POLL_TITLE_TOO_LONG'		=> 'The poll title must contain fewer than 100 characters.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'The parsed size of your poll title is too large, consider removing BBCodes or smilies.',
	'POLL_VOTE_CHANGE'			=> 'Allow re-voting',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'If enabled users are able to change their vote.',
	'POSTED_ATTACHMENTS'		=> 'Rakitra nalefa',
	'POST_APPROVAL_NOTIFY'		=> 'You will be notified when your post has been approved.',
	'POST_CONFIRMATION'			=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'				=> 'Voafafa soa aman-tsara ity hafatra ity.',
	'POST_EDITED'				=> 'Vita ny fanovana ity hafatra ity.',
	'POST_EDITED_MOD'			=> 'This post has been edited successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_GLOBAL'				=> 'Fampandrenesana ankapobeny',
	'POST_ICON'					=> 'Kisary hafatra',
	'POST_NORMAL'				=> 'Mahazatra',
	'POST_REVIEW'				=> 'Hijery ny hafatra',
	'POST_REVIEW_EDIT'			=> 'Hijery ny hafatra',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Nisy mpikambana hafa nanova koa ity hafatra ity nandritra ny fotoana nanovanao azy. Azonao jerena io fanovana io, ka azonao amboarina mifanaraka amin’izy io ny hafatra alefanao.',
	'POST_REVIEW_EXPLAIN'		=> 'Nisy hafatra vaovao iray fara fahakeliny voaray ho an’ity lohahevitra ity. Azonao jerena sy amboarina mifanaraka amin’izy io ny hafatra alefanao.',
	'POST_STORED'				=> 'Lasa soa aman-tsara ity hafatra ity.',
	'POST_STORED_MOD'			=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'				=> 'Handefa ny lohahevitra toy ny hoe',
	'PROGRESS_BAR'				=> 'Fandrosoana',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Tsy afaka manamarika afa-tsy hafatra %d ianao.',
		2	=> 'Tsy afaka manamarika afa-tsy hafatra %d ianao.',
	),
	'QUOTE_NO_NESTING'			=> 'Tsy afaka manamarika hafatra ianao.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Tsy vita ny fampiakarana ny rakitra fa tapitra ny fotoana.',
	'SAVE'						=> 'Hitahiry',
	'SAVE_DATE'					=> 'Votahiry tamin’ny',
	'SAVE_DRAFT'				=> 'Hitahiry ny vakiraoka',
	'SAVE_DRAFT_CONFIRM'		=> 'Ny antony sy ny hafatra ihany no ho voatahiry ao amin’ny vakiraoka, ho esorina daholo ny zavatra hafa ankoatra izay. Tiano hotehirizina ve ny vakiraoka izao?',
	'SMILIES'					=> 'Émoticônes',
	'SMILIES_ARE_OFF'			=> '<em>TSY MANDEHA</em> ny émoticônes',
	'SMILIES_ARE_ON'			=> '<em>MANDEHA</em> ny émoticônes',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Fotoana haharetan’ny Naoty/Fampandrenesana/Fampandrenesana ankapobeny',
	'STICK_TOPIC_FOR'			=> 'Fotoana haharetan’ny Naoty',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Raha tianao haharitra ny Naoty/Fampandrenesana/Fampandrenesana ankapobeny, dia 0 ampidirina. Ity tarehimarika dia isaina manomboka amin’ny fotoana handefasana ity hafatra ity.',
	'STYLES_TIP'				=> 'Torohevitra: Mora kokoa ny manisy endrika ny soratra raha safidiana aloha ilay izy.',

	'TOO_FEW_CHARS'				=> 'Vitsy kely ireo litera ao amin’ny hafatrao.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Mila mampiditra litera %1$d ianao fara fahakeliny.',
		2	=> 'Mila mampiditra litera %1$d ianao fara fahakeliny.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options.',
	'TOO_MANY_ATTACHMENTS'		=> 'Tsy afaka manampy rakitra intsony, %d ny fetra azo ekena.',
	'TOO_MANY_CHARS'			=> 'Maro loatra ireo litera ao amin’ny hafatra.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Ny fetra betsaka indrindra amin’ny litera azo ekena dia %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'Betsaka loatra ny émoticônes ao amin’ny hafatrao. Ny fetra farany azo ekena dia %d.',
	'TOO_MANY_URLS'				=> 'Betsaka loatra ny rohy ao amin’ny hafatrao. Ny fetra farany azo ekena dia %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'Vita soa aman-tsara ny fampiakarana ity lohahevitra ity.',

	'UNAUTHORISED_BBCODE'		=> 'Tsy afaka mampiasa ireto BBCodes ireto ianao: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Mila misafidy ny forum hisehoan’ity lohahevitra ity ianao, raha tianao ny hanova azy avy amin’ny fampandrenesana ankapobeny ho lohahevitra tsotra.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Misy an’ireto litera ireto ao amin’ny hafatra nefa tsy zakan’ny tranonkala:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Misy an’ireto litera ireto ao amin’ny anton’ny hafatra nefa tsy zakan’ny tranonkala:<br />%s',
	'UPDATE_COMMENT'			=> 'Hanavao ny fanamarihana',
	'URL_INVALID'				=> 'Tsy mety io rohy nampidirina io.',
	'URL_NOT_FOUND'				=> 'Tsy hita ny rakitra ao amin’io rohy io.',
	'URL_IS_OFF'				=> '<em>TSY MANDEHA</em> ny [url]',
	'URL_IS_ON'					=> '<em>MANDEHA</em> ny [url]',
	'USER_CANNOT_BUMP'			=> 'Tsy afaka mampiakatra lohahevitra ato amin’ity forum ity ianao.',
	'USER_CANNOT_DELETE'		=> 'Tsy afaka mamafa hafatra ato amin’ity forum ity ianao.',
	'USER_CANNOT_EDIT'			=> 'Tsy afaka manova hafatra ato amin’ity forum ity ianao.',
	'USER_CANNOT_REPLY'			=> 'Tsy afaka mamaly hafatra ato amin’ity forum ity ianao.',
	'USER_CANNOT_FORUM_POST'	=> 'Tsy afaka mandefa hafatra ato amin’ity karazana forum ity ianao.',

	'VIEW_MESSAGE'				=> '%sHijery ny hafatra nalefanao%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sHijery ny hafatra manokana nalefanao%s',

	'WRONG_FILESIZE'			=> 'Mavesatra loatra ny rakitra, ny fetra amin’ny habe azo ekena dia %1$d %2$s.',
	'WRONG_SIZE'				=> 'Tokony ho %1$s fara fahakeliny ny halavan’ny sary, %2$s ny haavony ary tsy tokony hihoatra ny %3$s halavany ary %4$s ny haavony. Ny sary nalefa dia %5$s ny halavany ary %6$s ny haavony.',
));
