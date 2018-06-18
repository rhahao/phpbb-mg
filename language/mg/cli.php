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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Amboary ny option eto raha miova matetika ny configuration. Handeha tsara kokoa ny fanaovana mise en cache amin’izay.',
	'CLI_CONFIG_CURRENT'				=> 'Ny configuration ampiasainao izao, ampiasao ny 0 sy 1 mba hamaritana ny valinteny eny sy tsia',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Voafafa soa aman-tsara ny config %s.',
	'CLI_CONFIG_NEW'					=> 'Ny configuration vaovao, ampiasao ny 0 sy 1 mba hamaritana ny valinteny eny sy tsia',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Tsy mbola misy ny Config %s',
	'CLI_CONFIG_OPTION_NAME'			=> 'Ny anaran’ny option de configuration',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Alefaso ity raha tianao tsy hisy andalana vaovao any amin’ny farany rehefa atao aseho ny valeur.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Ny salan’isan’ny fampiakarana',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Vita ny fampiakarana ny config %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Tsy vita ny fanamboarana ny config %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Vita ny fanamboarana ny config %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Hampiseho ny lisitra ny asa cron vonona sy tsy vonona.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Hanao ny asa cron rehetra vonona.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Anaran’ny asa ho atao',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Lisitry ny famindrana rehetra voapetraka sy azo afindra.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Hanavao ny database ka hanao ireo famindrana.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Hanafoana famindrana.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Mamafa option de configuration',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Manajonana ny extension voafaritra.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Mandefa ny extension voafaritra.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Hikaroka ireo famindrana mahaleo tena.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Manamboatra ny endriky ny tranonkala sy ireo modules.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Maka ny valeur-n’ny option de configuration',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Mampiakatra ny valeur-n’ny option de configuration izay miendrika tarehimarika.',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Hampiseho ny lisitry ny extension rehetra ao amin’ny database sy ao amin’ny système de fichiers.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Anaran’ny Environnement.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Handefa amin’ny endrika Sans Échec  (tsy misy extension).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Handefa ny console.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Hanadio ny extension voafaritra.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Hampiseho ny lisitry ny kazarana soratra izay azo averina dinihina.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Mpandinika karazana soratra azo ampiasaina:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Mamerina mandinika ireo soratra voatahiry amin’ny alalan’ny text_formatter, izay miasa amin’izao.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Karazana soratra averina dinihina. Aza asiana n’inona n’inona raha averina dinihina  daholo izy rehetra.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Aza tehirizina izay fanovana misy rehetra; izay zava-miseho rehetra kosa no asehoy',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Kely loatra ny famaritana ny tahiry ka tsy afaka dinihina',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Ambony be ny famaritana ny tahiry ka tsy afaka dinihina',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Isan’ny tahiry hodinihina indray miaraka amin’ny ankapobeny',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Handefa ny fandinihana soratra manomboka eo amin’ny nijanonany farany',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Hanao kajy indray mandeha ny tsanganana user_email_hash column ao amin’ny table-n’ny olona mpampiasa rehetra.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Hametraka ny valeur-na option de configuration raha toa ka mitovy amin’ny valeur amin’izao ny valeur teo aloha',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Hametraka ny valeur-na option de configuration',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Hamafa ny vignette misy rehetra.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Hanamboatra ny vignette rehetra izay tsy mbola misy.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Hanamboatra ny vignette rehetra.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Hanamarina raha mila fanavaozana ny tranonkala.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Anaran’ny extension hohamarinina(raha all no nosafidiana, dia hohamarinina daholo ny extension)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Handefa ny fanamarinana miaraka amin’ny cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Handefa ny fanamarinana ka hijery ireo version stable sy instable.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Havaozy ny tenimiafina taloha mba ho vita encoding amin’ny bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => 'Tokony ho atao "stable" na "instable" ny "%s".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Hampandeha (na hanajanona) ny kaontin’ny mpampiasa.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Ny solon’anaran’ny kaonty ho alefa.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Hanajona kaontin’ny mpampiasa',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Efa mandeha ny kaontin’io mpampiasa io.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Efa najanona ny kaontin’io mpampiasa io.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Hampiditra mpampiasa vaovao.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Solon’anaran’ny mpampiasa vaovao',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Tenimiafin’ny mpampiasa vaovao',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Adiresy E-mail-n’ny mpampiasa vaovao',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Handefa email fanamarinana kaonty any amin’ny mpampiasa vaovao (tsy tonga dia mandefa ho azy)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Hamafa kaontin’ny mpampiasa.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Solon’anaran’ny mpampiasa hofafana',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Hamafa ny hafatra rehetra nalefan’ny mpampiasa. Mbola ho voatahiry ny hafatra rehetra nalefan’ny mpampiasa, raha tsy alefa ity option ity.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Hamerina hanadio ny solon’anarana rehetra.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Tsy afaka najanona ny extension %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Vita ny fanajonana ny extension %s',
	'CLI_EXTENSION_DISABLED'			=> 'Tsy mandeha ny extension %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Tsy afaka nalefa ny extension %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Vita ny fampandehanana ny extension %s',
	'CLI_EXTENSION_ENABLED'				=> 'Efa mandeha ny extension %s',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Tsy mbola misy ny extension %s',
	'CLI_EXTENSION_NAME'				=> 'Anaran’ny extension',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Tsy afaka natao ny fanadiovana ny extension %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Vita ny fanadiovana ny extension %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Tsy afaka natao ny fanavaozana ny extension %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Vita ny fanavaozana ny extension %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Tsy mbola misy mihitsy extensions.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Tsy afaka alefa ny extension %s.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Azo ampiasaina',
	'CLI_EXTENSIONS_DISABLED'			=> 'Najanona',
	'CLI_EXTENSIONS_ENABLED'			=> 'Nalefa',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Vita ny fanamboarana ny endriky ny tranonkala sy ireo modules.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Vita ny famerenanan kajy ny encoding-na email rehetra.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Vita ny fanavaozana ny tenimiafina taloha ho encoding bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Anaran’ny famindrana, tafiditra koa ny elanelan’ireo anarana (mampiasà barre tsotra (/) fa tsy barre mivadika (\) mba hisorohana ny olana izay mety hitranga).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Famindrana azo ampiasaina',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Famindrana efa voapetraka',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Hampiseho ny lisitry ny famindrana azo ampiasaina ihany',
	'CLI_MIGRATIONS_EMPTY'                  => 'Tsy misy famindrana.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Mamerina mandinika ny %1$s (karazany %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Mamerina mandinika ny %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Vita soa aman-tsara ny famerenena ny fandinihana',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> 'Vofafa ny %1$s (%2$s).',
	'CLI_THUMBNAIL_DELETING'	=> 'Mamafa ny vignette',
	'CLI_THUMBNAIL_SKIPPED'		=> 'Nodinganina ny %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATED'	=> 'Vita ny fanamboarana ny %1$s (%2$s).',
	'CLI_THUMBNAIL_GENERATING'	=> 'Manamboatra vignette',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Vita ny fanamboarana ny vignette rehetra.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Nofafana daholo ny vignette rehetra.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Tsy misy vignette ho amboarina.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Tsy misy vignette ho fafana.',

	'CLI_USER_ADD_SUCCESS'		=> 'Vita ny fampidirana ny mpampiasa %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Tianao ho hofafana ve i ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Mamerina manadio ny solon’anarana',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Vita ny famerenana fanadiovana. Tsy misy solon’anarana nila nodiovina.',
		1	=> 'Vita ny famerenana fanadiovana. Nodiovina ny solon’anarana %d.',
		2	=> 'Vita ny famerenana fanadiovana. Nodiovina ireo solon’anarana %d.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Afaka mamaritra anarana asa cron iray ianao mba handefa ny asa cron voafaritra.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Ny option <info>--deactivate</info> no ahafahanao mandefa na manajanona ny kaontin’ny mpampiasa.
Raha tianao ny handefa email fanamarinana kaonty any amin’ny mpampiasa, dia ampiasao ny option <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Afaka manampy mpampiasa vaovao ianao amin’ny alalan’ny commande <info>%command.name%</info>:
Raha tsy misy option hampidirina rehefa mandefa io commande io ianao, dia ho hangatahana aminao izany.
Raha tianao ny handefa email fanamarinana kaonty any amin’ny mpampiasa vaovao, dia ampiasao ny option <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Rehefa hamerina hanadio ny solon’anarana ianao, dia hohamarinina daholo ny solon’anarana voatahiry rehetra, ary ho atao azo antoka hoe misy version vaovao madio ho tehirizina. Ny solon’anarana madio dia tsy mitaky ny maha renitsoratra na zanatsoratra, namboarina tamin’ny NFC izy ireo, ary navadika ho ASCII.',
));
