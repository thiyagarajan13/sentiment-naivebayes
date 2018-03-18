<?php
	define('IN_PHPBB', true);
	$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './forums/';
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	include($phpbb_root_path . 'common.' . $phpEx);

	// Start session management
	$user->session_begin();
	$auth->acl($user->data);
	$user->setup();

	//$user->data['username_clean']
?>
<?php
	if ($user->data['user_id'] == ANONYMOUS) {
		//not logged in
	} else {
		//logged in
	}
?>