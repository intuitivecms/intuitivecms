<?php
require __DIR__.'/../vendor/autoload.php';

/**
 * The main class for IntuitiveCMS
 */
class IntuitiveCMS {
	private $cms;

	private $users;
	private $prefs;
	private $pages;

	/**
	 * SquareCMS - Constructor
	 * @param  {string} $file = null Path to CMS file or pure JSON
	 */
	function IntuitiveCMS($file = null) {
		if ($file)
			$this->loadConfig($file);
	}

	/**
	 * loadConfig - Load CMS file sepparate from constructor
	 * @param  {string} $file Path to file or JSON
	 */
	public function loadConfig($file) {
		
		$this->cms = json_decode(
									(file_exists($file)?
									file_get_contents($file):
									$file), true);

		foreach ($this->cms["users"] as $value) {
			$this->users[] = new IntUser($value);
		}
	}

	public function authorize($uid) {

	}

	public function load() {
		echo "<pre>";
		print_r($this->cms);
		print_r($this->users);
		echo "</pre>";
	}
}
