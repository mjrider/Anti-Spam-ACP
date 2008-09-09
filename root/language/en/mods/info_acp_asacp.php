<?php
/**
*
* @package Anti-Spam ACP
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'ANTISPAM'					=> 'Anti-Spam',
	'ASACP_SETTINGS'			=> 'Anti-Spam ACP Settings',
	'ASACP_SPAM_LOG'			=> 'Spam Log',
	'ASACP_IP_SEARCH' => 'IP Search',
	'LOG_ASACP_SETTINGS'		=> 'Updated Anti-Spam ACP Settings',
	'LOG_CLEAR_SPAM_LOG'		=> 'Cleared Spam Log',
	'LOG_INCORRECT_CODE'		=> 'Entered in wrong confirm code.',
	'LOG_INCORRECT_CODE_DATA'	=> 'Code Shown: "%s"<br />Code Entered: "%s"',
));

?>