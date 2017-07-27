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
		public function getProfileUsername():string{
			return $this->profileUsername;
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
		}





