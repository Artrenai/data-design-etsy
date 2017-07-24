<?php
namespace home\public_html\datadesignetsy\epic\php\classes;
require_once("autoload.php");

/**
 * This is the profile table , creating a class for it
 **/
class  Profile implements \JsonSerializable{
	use ValidateDate;
/**
 * primary key for Profile It has to be private
 */
	private $profileId;
/**
 * profile hash and salt has to be set to private
 */
	private $profileHash;
	private $profilSalt;
	/**
	 * @param int\null $profileId Id of profile
	 * @param varchar\(128)  $profileHash the password of user
	 * @param var $profileSalt
	 */
