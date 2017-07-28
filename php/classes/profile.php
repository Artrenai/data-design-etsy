<?php
/**
 * Creates Class for Profile table
 */
	class Profile implements \JsonSerializable {
		/**
		 * use ValidateDate to record date
		 */
		use ValidateDate;
		/**
		 * @var profileId  is created giving it a classification of private
		 */
		private $profileId;
		/**
		 * @var profileHash is created giving it a classification of private
		 */
		private $profileHash;
		/**
		 * @var profileSalt is created giving it a classification of private
		 */
		private $profileSalt;
		/**
		 * @var profileUsername is created giving it a classification of private
		 */
		private $profileUsername;

		/**
		 * Profile constructor.
		 * @param int|null $newProfileId place holder created with interger or null conditions
		 * @param string $newProfileHash place holder created with integer conditions
		 * @param string $newProfileSalt place holder created with integer conditions
		 * @param string $newProfileUsername place holder created with string conditions
		 */
		public function __construct(?int $newProfileId, string $newProfileHash, string $newProfileSalt, string $newProfileUsername) {
			/**
			 * tries varibles by putting them in place holders defined in construct magic method testing to see if they meet the coditions of the place holder assigned
			 * to them
			 */
			try {
				$this->setProfileId($newProfileId);
				$this->setProfileHash($newProfileHash);
				$this->setProfileSalt($newProfileSalt);
				$this->setProfileUserName($newProfileUsername);
			} /**
			 * @throws \InvalidArgumentException if data type is invalid
			 * @throws \RangeException if data type is out of bounds
			 * @throws \TypeError if data type  violate type hints
			 * @throws \Exception if some other exception occurs
			 */
			catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
				/**
				 * assigns the name of the type of error that was caught to the variable, "exception Type"
				 */
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));
			}
		}

		/**
		 * this accessor calls/gets/grabs/accesses  varible 'profileId' by creating a function which @return int  profileId
		 */
		public function getProfileId():int {
			return ($this->profileId);
		}

		/**
		 * @param int|null $newProfileId this function test profile id to see if it has a null value if it does it assigns the varible to the
		 * value "null"
		 */
		public function setProfileId(?int $newProfileId): void {
			if($newProfileId === null) {
				$this->profileId = null;
				return;
			}
			/**
			 * sets the range condition for the \RangeException returning a message
			 */
			if($newProfileId <= 0) {
				throw(new \RangeException("this profile is not positive"));
			}
			/**
			 * assigns value of if condition in mutator  to the profile id variable
			 */
			$this->profileId = $newProfileId;
		}
		public function getProfileHash(): string{
			return $this->profileHash;
		}
		public function setProfileHash(string $newProfileHash): void{
			$newProfileHash = trim($newProfileHash);
			$newProfileHash = strtolower($newProfileHash);
			if(empty($newProfileHash)===true){
				throw(new \InvalidArgumentException("profile password hash is empty"));
			}
			if(ctype_xdigit($newProfileHash)){
				throw(new\InvalidArgumentException("profile hash is insecure"));
			}
			if(strlen($newProfileHash) !==128) {
				throw(new \RangeException("profile must be 128 characters"));
			}
				$this->profileHash = $newProfileHash;

		}

		public function getProfileSalt(): string{
			return $this->profileSalt;
		}
		public function setProfileSalt(string $newProfileSalt): void{
			$newProfileSalt = trim($newProfileSalt);
			$newProfileSalt = strtolower($newProfileSalt);
			if(!ctype_xdigit($newProfileSalt)){
				throw(new\InvalidArgumentException("profile password salt is insecure"));
			}
			if(strlen($newProfileSalt) !== 64){
				throw(new \InvalidArgumentException("profile password salt must be 128 characters"));
			}
			$this->profileSalt = $newProfileSalt;
		}

		public function getProfileUsername():string{
			return $this->profileUsername;
			}
		public function setProfileUsername(string $newProfileUsername): void{
			$newProfileUsername = trim($newProfileUsername);
			$newProfileUsername = filter_var($newProfileUsername, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES );
			if(empty($newProfileUsername) === true){
				throw(new\InvalidArgumentException("Username is empty"));
			}
			if(strlen($newProfileUsername)> 32){
				throw(new\RangeException("Username too big"));
			}
			$this->profileUsername;

		}


		}
	Class Shop implements \JsonSerializable{
		use ValidateDate;
		/**
		 * @var ShopId  is created giving it a classification of private
		 */
		private $shopId;
		/**
		 * @var shopEmail  is created giving it a classification of private
		 */
		private $shopEmail;
		/**
		 * @var shopName  is created giving it a classification of private
		 */
		private $shopName;
		/**
		 * @var shopProfileId  is created giving it a classification of private
		 */
		private $shopProfileId;
		/**
		 * Profile constructor.
		 * @param int|null $newShopId place holder created with interger or null conditions
		 * @param string $newShopEmail place holder created with integer conditions
		 * @param string $newShopName place holder created with integer conditions
		 * @param string $newShopProfileId place holder created with string conditions
		 */

		public function __construct(?int newShopId, string newShopEmail, string newShopName, string newShopProfileId){
			try{
			$this->setShopId;
			$this->setShopEmail;
			$this->setShopName;
			$this->setShopProfileId;
			}

			catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
				/**
				 * assigns the name of the type of error that was caught to the variable, "exception Type"
				 */
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));
			}
		}
		public function getShopId(): int{
			return ($this->shopId);
		}
		public function setShopId(?int $newShopId ):void {
			if ($newShopId === null){
				$this->shopId = null;
				return;
				}
			if ($newShopId <= 0){
			throw(new \RangeException("this shop is not positve"));
			}
			$this->shopId = $newShopId;
		}
		public function getShopEmail(): string{
			return $this->shopEmail;
		}

		public function setShopEmail(string $newShopEmail): void{
			$newShopEmail = trim ($newShopEmail);
			$newShopEmail = filter_var($newShopEmail, FILTER_VALIDATE_EMAIL);
			if(empty($newShopEmail)===true){
				throw(new \InvalidArgumentException("email is empty"));
			}
			if(strlen($newShopEmail) > 128)){
				throw(new\RangeException(" email is too large"));
			}
			$this->shopEmail = $newShopEmail;
		}

		public function getShopName(): string{
			return $this->shopName;
			}
		public function setShopName($newShopName): void {
			$newShopName = trim($newShopName);
			$newShopName= filter_var($newShopName, FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newShopName)=== true){
				throw(new \InvalidArgumentException("shop name is empty"));
			}
			if(strlen($newShopName) > 32){
				throw(new \RangeException("Shop Name too large"));
			}
			$this->shopName=$newShopName;
		}
		public function getShopProfileId(): int{
			return $this->shopProfileId;
		}
		public function setShopProfileId(intShopProfileId) : void{
			if($newShopProfileId = 0){
				throw(new \RangeException("shopProfileId is not positive"));
			}
			$this->shopProfileId = $newShopProfileId;
		}
	}


	Class Item implements \JsonSerializable {
		use ValidateDate;
		private $itemId;
		private $itemShopId;
		private $itemDescription;
		private $itemPrice;

		public function __construct(?int $newItemId, int $newitemShopId, string $newitemDescription, float $newitemPrice) {
			try {
				$this->setItemId($newItemId);
				$this->setItemShopId($newItemShopId);
				$this->setItemDescription($newItemDescription);
				$this->setItemPrice($newItemPrice);

			} catch(\InvalidArgumentException | \RangeException | \Exception |\TypeError $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));
			}
		}
		public function getItemId(): int {
		return ($this->itemId);
			}
		public function setItemId(?int $newItemId): void {
			if ($newItemid === null){
				$this->itemId = null;
				return;
		}
		if($newItemId<=0 ){
				throw(new \RangeException("this item is not positive");


				}
				$this->itemId = $newItemId;
			}
		public function getItemDescription(){
			return $this->itemDescription;
		}
		public function setItemDescription( string $newItemDescription): void{
			$newItemDescription = trim($newItemDescription);
			$newItemDescription = filter_var($newItemDescription, FILTER_SANITIZE_EMAIL,FILTER_FLAG_NO_ENCODE_QUOTES);

			if ($newItemDescription===null){
				$this->itemDescription = null
					return;
			}
			if (empty($newitemDescription)=== true){
				throw(new \InvalidArgumentException(" the item description is empty"))
			}
			if (strlen($newShopName) > 268 ){
				throw(new \RangeException("the description is too large");
			}
		}

		public function getItemPrice(){
			return $this->itemPrice;
		}
		public function setItemPrice(float $newItemPrice): void {
		$newItemPrice=filter_var($newItemPrice, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_NO_ENCODE_QUOTES);

		if ($newItemPrice===null){
			$this->itemPrice =null
				return;
		}

		if (empty($newItemPrice) === true){
			throw(new \InvalidArgumentException(("this Item is empty"));
		}

		if ($newItemPrice<=0){
			throw(new \RangeException("this price is not positive"));
		if( strlen($newItemPrice)>12){
			throw(new \RangeException("itemPrice is too much"))
		}
		$this->itemPrice = $newItemPrice;
		}

		}

		public function getItemShopId{
			return $this->itemShopId;
		}
		public function setItemShopId(?int $newItemShopId): void{
			if ($newItemShopId=== null){
				$this->itemId = null
					return;
			}
			if($newItemShopId<=0){
				throw(new \RangeException("this shop Id is not positive"));

			}
			$this->itemShopId = $newItemShopId;
		}

		}






