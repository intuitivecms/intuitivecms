<?php
require __DIR__.'/../vendor/autoload.php';


/**
 * The user class for SquareCMS
 */
class IntUser {
	private $id;
	private $admin;
	private $name;

	/**
	* SQUser - Constructor
	* @param  {array} $usr Array of user object
	*/
	function IntUser($usr) {
			$this->id 		= $usr["id"];
			$this->admin 	= (isset($usr["admin"])?true:false);
			$this->name		= $usr["name"];
	}

	/**
	* admin - Get or set admin
	*
	* @param  {bool} $a = null Set or disable admin
	* @return {bool}           Returns true if admin, false if not.
	*/
	public function admin($a = null) {
		if ($a) $this->admin = $a;
		return $this->admin;
	}

	/**
	* name - Get or set name of user
	*
	* @param  {string} $n = null The new user name
	* @return {string}           Returns user name
	*/
	public function name($n = null) {
		if ($n)	$this->name = $n;
		return $this->name;
	}

	/**
	* addUser - Creates a new user
	*
	* @param  {int}	 	$id          User id (local system)
	* @param  {string} $name        User name
	* @param  {bool} 	$adm = false Set to true if this user is admin
	* @return {SQUser}              Retrns a new user object
	*/
	public static function addUser($id, $name, $adm = false) {

		$usr = array(	"id" => $id,
									"name" => $name);

		if ($adm) $usr["admin"] = $adm;

		return new SQUser($usr);
	}
}
