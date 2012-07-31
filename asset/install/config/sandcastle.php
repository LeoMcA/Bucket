<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * SandCastle
	 *
	 * An opensource set of tools for making a basic community site.
	 *
	 * @package 	SandCastle
	 * @author 		William Duyck <wduyck@gmail.com>
	 * @copyright 	Copyleft 2012, William Duyck
	 * @license 	https://www.mozilla.org/MPL/2.0/ MPL v2.0
	 * @link 		http://www.wduyck.com/ wduyck.com
	 * @filesource
	 */
	
	// -------------------------------------------------------------------------
	
	$config['sandcastle'] = array();
	
	/**
	 * SandCastle Core Config
	 * 
	 * Provides the configuration settings for SandCastle's core components.
	 *
	 * @package 	SandCastle
	 * @subpackage 	Config
	 * @category 	Core
	 * @author 		William Duyck <wduyck@gmail.com>
	 * @copyright 	Copyleft 2012, William Duyck
	 * @license 	https://www.mozilla.org/MPL/2.0/ MPL v2.0
	 * @link 		http://www.wduyck.com/ wduyck.com
	 */
	$config['sandcastle']['core'] = array();
	
	// -------------------------------------------------------------------------
	
	/**
	 * SandCastle Planet Config
	 * 
	 * Provides the configuration settings for the SandCastle planet.
	 *
	 * @package 	SandCastle
	 * @subpackage 	Config
	 * @category 	Planet
	 * @author 		William Duyck <wduyck@gmail.com>
	 * @copyright 	Copyleft 2012, William Duyck
	 * @license 	https://www.mozilla.org/MPL/2.0/ MPL v2.0
	 * @link 		http://www.wduyck.com/ wduyck.com
	 */
	$config['sandcastle']['planet'] = array(
		// the prefix to use on cache id's in CodeIgniters cache driver
		'cache_prefix' 	=> 'sc_',
		// the number of minutes to keep the cache
		'cache_expires' => 60
	);
	
	// -------------------------------------------------------------------------
	
	/**
	 * SandCastle User Management Config
	 * 
	 * Provides the configuration settings for the SandCastle user management
	 * system.
	 *
	 * @package 	SandCastle
	 * @subpackage 	Config
	 * @category 	User Management
	 * @author 		William Duyck <wduyck@gmail.com>
	 * @copyright 	Copyleft 2012, William Duyck
	 * @license 	https://www.mozilla.org/MPL/2.0/ MPL v2.0
	 * @link 		http://www.wduyck.com/ wduyck.com
	 */
	$config['sandcastle']['user'] = array(
		// user statuses
		'status'		=> array(
			// status code => human readable
			0 => 'admin',
			1 => 'full access',
			2 => 'feeds only',
			3 => 'events only'
		),
		// this is used to hash user passwords.... you should probably change this
		'secret_salt'	=> '%SECRETSALT%'
	);