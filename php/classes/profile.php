<?php

	class Profile implements \JsonSerializable {
		use ValidateDate;
		private $profileId;
		private $profileHash;
		private $profileSalt;
		private $profileUsername;

		public function getProfileId() {
			return ($this->profileId);
		}

		public function _construct(?int $newProfileId, string $newProfileHash, string $newProfileSalt, string $newProfileUsername) {
			try {
				$this->setProfileId($newProfileId);
				$this->setProfileHash($newProfileHash);
				$this->setProfileSalt($newProfileSalt);
				$this->SetProfileUserName($newProfileUsername);
			} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exceptionType($exception->getMessage(), 0, $exception)));

			}


		}
	}
	public function
