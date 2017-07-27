<?php
/**
 * Creates variables for table Profile to be updated  from end user input to database
 */
	class Profile implements \JsonSerializable {
		use ValidateDate;
		private $profileId;
		private $profileHash;
		private $profileSalt;
		private $profileUsername;

		public function __construct(?int $newProfileId, string $newProfileHash, string $newProfileSalt, string $newProfileUsername) {
			try {
				$this->setProfileId($newProfileId);
				$this->setProfileHash($newProfileHash);
				$this->setProfileSalt($newProfileSalt);
				$this->setProfileUserName($newProfileUsername);
			}
			catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));
			}
		}

		public function getProfileId() {
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

		Class Item implements \JsonSerializable {
			use ValidateDate;
			private $itemId;
			private $itemShopId;
			private $itemDescription;
			private $itemPrice;

			public function __construct(?int $newItemId, int $itemShopId, string $itemDescription, float $itemPrice)
				try{
				$this->setItemId($newItemId);
				$this->setItemShopId($newItemShopId);
				$this->setItemDescription($newItemDescription);
				$this->setItemPrice;($newItemPrice);
				}
				catch(\InvalidArgumentException | \RangeException | \Exception |\TypeError $exception){
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));

				}
			}
			public function get ProfileId




