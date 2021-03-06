<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org> (2003-2009)
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    \Froxlor\Settings
 *
 */
return array(
	'groups' => array(
		'dkim' => array(
			'title' => $lng['admin']['dkimsettings'],
			'fields' => array(
				'dkim_enabled' => array(
					'label' => $lng['dkim']['use_dkim'],
					'settinggroup' => 'dkim',
					'varname' => 'use_dkim',
					'type' => 'bool',
					'default' => false,
					'save_method' => 'storeSettingFieldInsertBindTask',
					'overview_option' => true
				),
				'dkim_prefix' => array(
					'label' => $lng['dkim']['dkim_prefix'],
					'settinggroup' => 'dkim',
					'varname' => 'dkim_prefix',
					'type' => 'string',
					'string_type' => 'dir',
					'default' => '/etc/postfix/dkim/', # das hier ist von Froxlor
					'save_method' => 'storeSettingField'
				),
				'dkim_privkeysuffix' => array(
					'label' => $lng['dkim']['privkeysuffix'],
					'settinggroup' => 'dkim',
					'varname' => 'privkeysuffix',
					'type' => 'string',
					'string_regexp' => '/^[a-z0-9\._]+$/i',
					'default' => '.priv',
					'save_method' => 'storeSettingField'
				),
				'dkim_domains' => array(
					'label' => $lng['dkim']['dkim_domains'],
					'settinggroup' => 'dkim',
					'varname' => 'dkim_domains',
					'type' => 'string',
					'string_regexp' => '/^[a-z0-9\._]+$/i',
					'default' => 'domains',
					'save_method' => 'storeSettingField'
				),
				'dkim_dkimkeys' => array(
					'label' => $lng['dkim']['dkim_dkimkeys'],
					'settinggroup' => 'dkim',
					'varname' => 'dkim_dkimkeys',
					'type' => 'string',
					'string_type' => 'dir',
					'default' => '/etc/dkim_keys_froxlor/',
					'save_method' => 'storeSettingField'
				),
				'dkim_algorithm' => array(
					'label' => $lng['dkim']['dkim_algorithm'],
					'settinggroup' => 'dkim',
					'varname' => 'dkim_algorithm',
					'type' => 'option',
					'default' => 'all',
					'option_mode' => 'multiple',
					'option_options' => array(
						'all' => 'All',
						'sha1' => 'SHA1',
						'sha256' => 'SHA256'
					),
					'save_method' => 'storeSettingFieldInsertBindTask'
				),
				'dkim_servicetype' => array(
					'label' => $lng['dkim']['dkim_servicetype'],
					'settinggroup' => 'dkim',
					'varname' => 'dkim_servicetype',
					'type' => 'option',
					'default' => '0',
					'option_mode' => 'one',
					'option_options' => array(
						'0' => 'Amavis',
						'1' => 'OpenDKIM'
					),
					'save_method' => 'storeSettingField'
				),
				'dkim_keylength' => array(
					'label' => array(
						'title' => $lng['dkim']['dkim_keylength']['title'],
						'description' => sprintf($lng['dkim']['dkim_keylength']['description'], \Froxlor\Settings::Get('dkim.dkim_prefix'))
					),
					'settinggroup' => 'dkim',
					'varname' => 'dkim_keylength',
					'type' => 'option',
					'default' => '2048',
					'option_mode' => 'one',
					'option_options' => array(
						'1024' => '1024 Bit',
						'2048' => '2048 Bit',
						'4096' => '4096 Bit'
					),
					'save_method' => 'storeSettingFieldInsertBindTask'
				),
				'dkim_notes' => array(
					'label' => $lng['dkim']['dkim_notes'],
					'settinggroup' => 'dkim',
					'varname' => 'dkim_notes',
					'type' => 'string',
					'string_regexp' => '/^[a-z0-9\._]+$/i',
					'default' => '',
					'save_method' => 'storeSettingFieldInsertBindTask'
				),
				'dkimrestart_command' => array(
					'label' => $lng['dkim']['dkimrestart_command'],
					'settinggroup' => 'dkim',
					'varname' => 'dkimrestart_command',
					'type' => 'string',
					'default' => '/etc/init.d/amavis restart',
					'save_method' => 'storeSettingField'
				)
			)
		)
	)
);

?>
