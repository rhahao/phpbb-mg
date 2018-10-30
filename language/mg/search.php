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
	'ALL_AVAILABLE'			=> 'Izay misy rehetra',
	'ALL_RESULTS'			=> 'Ny valiny rehetra',

	'DISPLAY_RESULTS'		=> 'Hampiseho ny valiny toy ny hoe',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Valiny %d no hita tamin’ny fikarohana',
		2	=> 'Valiny %d no hita tamin’ny fikarohana',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Valiny mihoatra ny %d no hita tamin’ny fikarohana',
		2	=> 'Valiny mihoatra ny %d no hita tamin’ny fikarohana',
	),

	'GLOBAL'				=> 'Fampandrenesana ankapobeny',

	'IGNORED_TERMS'			=> 'tsy noraharahaina',
	'IGNORED_TERMS_EXPLAIN'	=> 'Tsy noraharahaina ireto teny manaraka ireto satria teny fampiasa matetika loatra: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Hankany amin’ny hafatra',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Mila miditra aloha ianao vao afaka mahita ny hafatra nalefanao.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Mila miditra aloha ianao vao afaka mahita ny hafatra tsy mbola novakianao.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Mila miditra aloha ianao vao afaka mahita ny hafatra vaovao taorian’ny nidiranao farany.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Teny maro loatra no nampiasainao tamin’ny fikarohana. Aza mampiasa teny mihoatra ny %1$d.',
		2	=> 'Teny maro loatra no nampiasainao tamin’ny fikarohana. Aza mampiasa teny mihoatra ny %1$d.',
	),

	'NO_KEYWORDS'			=> 'Mila mampiditra teny hokarohana iray ianao fara fahakeliny. Ny teny tsirairay dia tokony misy litera %s fara fahakeliny ary tsy mihoatra ny %s, anisan’izany ny mpamaritra fikarohana *.',
	'NO_RECENT_SEARCHES'	=> 'Tsy nisy fikarohana natao vao haingana.',
	'NO_SEARCH'				=> 'Miala tsiny fa tsy afaka manao fikarohana ianao.',
	'NO_SEARCH_RESULTS'		=> 'Tsy misy valiny hita avy amin’ireo teny hokarohana ireo.',
	'NO_SEARCH_LOAD'		=> 'Miala tsiny fa tsy mbola afaka manao fikarohana ianao izao fa mbola misy olana ny serveur. Andramo indray rehefa afaka kelikely.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Miala tsiny fa tsy mbola afaka manao fikarohana ianao izao. Andramo indray rehefa afaka %d segondra.',
		2	=> 'Miala tsiny fa tsy mbola afaka manao fikarohana ianao izao. Andramo indray rehefa afaka %d segondra.',
	),
	'NO_SEARCH_UNREADS'		=> 'Miala tsiny fa tsy mandeha ny fikarohana ny hafatra tsy mbola voavaky ato amin’ity tranonkala ity.',
	'WORD_IN_NO_POST'		=> 'Tsy misy hafatra hita satria tsy hita n’aiza n’aiza ny teny <strong>%s</strong>.',
	'WORDS_IN_NO_POST'		=> 'Tsy misy hafatra hita satria tsy hita n’aiza n’aiza ireto teny ireto: <strong>%s</strong>.',

	'POST_CHARACTERS'		=> 'litera amin’ny hafatra',
	'PHRASE_SEARCH_DISABLED'	=> 'Tsy mety amin’ity tranonkala ity ny fikarohana amin’ny alalan’ny fehezanteny feno.',

	'RECENT_SEARCHES'		=> 'Fikarohana natao vao haingana',
	'RESULT_DAYS'			=> 'Hametra ny fikarohana arakaraka ny maha ela azy',
	'RESULT_SORT'			=> 'Handahatra ny valiny arakaraka ny',
	'RETURN_FIRST'			=> 'Hampiseho ny voalohany',
	'GO_TO_SEARCH_ADV'	=> 'Hankany amin’ny fikarohana lalina kokoa',

	'SEARCHED_FOR'				=> 'Hikaroka ny teny nampiasaina',
	'SEARCHED_TOPIC'			=> 'Lohahevitra notadiavina',
	'SEARCHED_QUERY'			=> 'Fangatahana notadiavina',
	'SEARCH_ALL_TERMS'			=> 'Hikaroka ny teny rehetra na hampiasa fangatahana',
	'SEARCH_ANY_TERMS'			=> 'Hikaroka ny teny rehetra',
	'SEARCH_AUTHOR'				=> 'Hikaroka ny mpanoratra',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Hampiasa * mba hanaovana fikarohana tsy feno.',
	'SEARCH_FIRST_POST'			=> 'Hafatra voalohany ao amin’ny lohahevitra ihany',
	'SEARCH_FORUMS'				=> 'Hikaroka ao amin’ny forum',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Safidio ny forum tianao hanaovana ny fikarohana. Hanaovana fikarohana koa ny forums ao anatiny raha navelanao handeha ilay hoe “hikaroka amin’ny forums ao anatiny“ eto ambany.',
	'SEARCH_IN_RESULTS'			=> 'Hikaroka amin’ireo valiny ireo',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Asio <strong>+</strong> eo alohan’ny teny tokony hotadiavina ary <strong>-</strong> eo alohan’ny teny tsy hotadiavina. Raha hampiasa lisitra teny ianao dia elanelano amin’ny <strong>|</strong> ao anaty fononteny, raha teny iray ihany no hotadiavina. Azo ampiasaina ny * raha te hanao fikarohana tsy feno.',
	'SEARCH_MSG_ONLY'			=> 'Soratra ao amin’ny hafatra ihany',
	'SEARCH_OPTIONS'			=> 'Fanamboarana ny fikarohana',
	'SEARCH_QUERY'				=> 'Fangatahana amin’ny fikarohana',
	'SEARCH_SUBFORUMS'			=> 'Hikaroka amin’ny forums ao anatiny',
	'SEARCH_TITLE_MSG'			=> 'Antony sy soratra ao amin’ny hafatra',
	'SEARCH_TITLE_ONLY'			=> 'Lohatenina lohahevitra ihany',
	'SEARCH_WITHIN'				=> 'Hikaroka ao amin’ny',
	'SORT_ASCENDING'			=> 'Miakatra',
	'SORT_AUTHOR'				=> 'Mpanoratra',
	'SORT_DESCENDING'			=> 'Midina',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Anton’ny hafatra',
	'SORT_TIME'					=> 'Datin’ny hafatra',
	'SPHINX_SEARCH_FAILED'		=> 'Olana nandritra ny fikarohana: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Miala tsiny fa tsy nety nandeha ny fikarohana. Nisy fanazavana misimisy kokoa momba ity olana ity voatahiry ao amin’ny lisitry ny olana.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Tsy maintsy manoratra litera %d fara fahakeliny amin’ny anaran’ny mpanoratra ianao.',
		2	=> 'Tsy maintsy manoratra litera %d fara fahakeliny amin’ny anaran’ny mpanoratra ianao.',
	),
));
