<?php
namespace home\public_html\datadesignetsy\epic\php\classes;
require_once("autoload.php");

/**
 * This is the profile table , creating a class for it
 **/
class  Profile implements \JsonSerializable{
	use ValidateDate;
}
