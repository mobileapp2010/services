<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @api
 * @package services\core\log\
 * @source 5  
 * @author Arnold Sameroff
 * @email ast@mobileappz.in 
 * @timestamp March/20/2014 10:01AM
 * @copyright nosave
 * @class log
 * @version 1.0
 * This Class Added for Detailed logging for all REST API calls
 */
class log {

	public $log_path;
	public $_threshold	= 1;
	public $_date_fmt	= 'D M j G:i:s T Y';
	public $_enabled	= 1;
	public $_levels	= array('ERROR' => '1', 'DEBUG' => '2',  'INFO' => '3', 'ALL' => '4');

	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	string	the log file path
	 * @param	string	the error threshold
	 * @param	string	the date formatting codes
	 */
	function __construct()
	{
		$config =&get_config();
		$this->log_path = ($config['log_path'] != '') ? $config['log_path'] : BASEPATH.DS.'logs/';
		if (!is_dir($this->log_path))
		{
				$this->_enabled = 0;
		}
		if (is_numeric($config['log_threshold']))
		{
			$this->_threshold = $config['log_threshold'];
		}

		if ($config['log_date_format'] != '')
		{
			$this->_date_fmt = $config['log_date_format'];
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Write Log File
	 *
	 * Generally this function will be called using the global log_message() function
	 *
	 * @access	public
	 * @param	string	the error level
	 * @param	string	the error message
	 * @param	bool	whether the error is a native PHP error
	 * @return	bool
	 */
	function write_log($level = 'error', $msg, $php_error = FALSE)
	{
		if ($this->_enabled == 0)
		{
			return false;
		}
		$level = strtoupper($level);
		if ( ! isset($this->_levels[$level]) || ($this->_levels[$level] > $this->_threshold))
		{
			return false;
		}

		$filepath = $this->log_path.'log-'.date('Y-m-d').EXT;
		$message  = '';
		if ( !file_exists($filepath))
		{
			$message .= "<"."?php  if (!defined('BASEPATH')) exit('No direct script access allowed'); ?".">\n\n";
		}

		if ( !$fp = @fopen($filepath, "a"))
		{
			return false;
		}
		$message .= $level.' '.(($level == 'INFO') ? ' -' : '-').' '.date($this->_date_fmt). ' --> '.$msg."\n";

		flock($fp, LOCK_EX);
		fwrite($fp, $message);
		flock($fp, LOCK_UN);
		fclose($fp);
		chmod($filepath, 0666);
		return false;
	}

}
// END Log Class
?>
