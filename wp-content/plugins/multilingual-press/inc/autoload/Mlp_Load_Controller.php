<?php # -*- coding: utf-8 -*-
/**
 * Set up auto-loader or load all available files immediately for PHP < 5.3.
 *
 * @author     toscho
 * @since      2013.08.18
 * @version    2014.03.26
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @package    MultilingualPress
 * @subpackage Autoload
 */
class Mlp_Load_Controller {

	/**
	 * Path to plugin files
	 *
	 * @var string
	 */
	private $plugin_dir;

	/**
	 * Instance of Inpsyde_Autoload
	 *
	 * @var Inpsyde_Autoload
	 */
	private $loader;

	/**
	 * Constructor
	 *
	 * @param string $plugin_dir
	 */
	public function __construct( $plugin_dir ) {

		$this->plugin_dir = $plugin_dir;

		// Can be turned off in PHP 5.2. We ignore that.
		$this->setup_autoloader();
	}

	/**
	 * Return current instance of autoloader.
	 *
	 * @return Inpsyde_Autoload
	 */
	public function get_loader()
	{
		return $this->loader;
	}

	/**
	 * Real auto-loader for modern PHP installations.
	 *
	 * @return void
	 */
	private function setup_autoloader()
	{

		$dir = dirname( __FILE__ );

		// We need these classes in exactly this order
		if ( ! interface_exists( 'Inpsyde_Autoload_Rule_Interface' ) )
			require "$dir/Inpsyde_Autoload_Rule_Interface.php";

		if ( ! class_exists( 'Mlp_Autoload_Rule' ) )
			require "$dir/Mlp_Autoload_Rule.php";

		if ( ! class_exists( 'Inpsyde_Autoload' ) )
			require "$dir/Inpsyde_Autoload.php";

		$this->loader = new Inpsyde_Autoload;
		$rule         = new Mlp_Autoload_Rule( $this->plugin_dir );
		$this->loader->add_rule( $rule );
	}
}