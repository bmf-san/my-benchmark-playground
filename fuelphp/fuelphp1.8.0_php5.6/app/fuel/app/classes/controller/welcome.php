<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		set_time_limit(120);
		$start_date  = microtime(true);
		echo("Start[Memory Usage]：" . memory_get_usage() / (1024 * 1024) . "MB" . PHP_EOL);
		echo("Start[Memory Peak Usage]：". memory_get_peak_usage() / 1024 ."KB\n" . PHP_EOL);
		print fib(40);
		echo("Finish[Memory Usage]：" . memory_get_usage() / (1024 * 1024) . "MB\n" . PHP_EOL);
		echo("Finish[Memory Peak Usage]：". memory_get_peak_usage() / 1024 ."KB\n" . PHP_EOL);
		$end_date = microtime(true);
		echo("[Elapsed Time]：" . ($end_date - $start_date) . "秒\n");
	}

	public function action_blackfire()
	{
		set_time_limit(120);

		print fib(40);
	}
}

function fib($n)
{
	if ($n <= 1) {
		return $n;
	}
	return fib($n - 1) + fib($n - 2);
}
