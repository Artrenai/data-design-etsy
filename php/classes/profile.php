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
			 * trys varibles by putting them in place holders defined in construct magic method testing to see if they meet the coditions of the place holder assigned
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

		public function getProfileId():int {
			return ($this->profileId);
		}

		public function setProfileId(?int $newProfileId): void {
			if($newProfileId === null) {
				$this->profileId = null;
				return;
			}
			if($newProfileId <= 0) {
				throw(new \RangeException("this profile is not positive"));
			}
			$this->profileId = $newProfileId;
		}


		}
	Class Shop implements \JsonSerializable{
		use ValidateDate;
		private $shopId;
		private $shopEmail;
		private $shopName;
		private $shopProfileId;

		public function __construct(?int newShopId, string newShopEmail, string newShopName, string newShopProfileId){
			try{
			$this->setShopId;
			$this->setShopEmail;
			$this->setShopName;
			$this->setShopProfileId;
			}
			catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));
			}
		}
		public function getShowId(): int{
			return ($this->shopId);
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

				}
			}
		}





