
CREATE TABLE profile (
profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
profileUserName VARCHAR(128) NOT NULL,
profileSalt CHAR(64) NOT NULL,
profileHash CHAR(128) NOT NULL,
UNIQUE(profileUserName),
PRIMARY KEY (profileId)

);

CREATE TABLE shop (
shopId INT UNSIGNED AUTO_INCREMENT NOT NULL,
shopProfileId INT UNSIGNED NOT NULL,
shopName VARCHAR(128) NOT NULL,
shopEmail VARCHAR(128) NOT NULL,
UNIQUE(shopEmail),
FOREIGN KEY(shopProfileId) REFERENCES profile(profileId),
PRIMARY KEY(shopId)

);

CREATE TABLE item(
itemShopId INT UNSIGNED NOT NULL,
itemProfileId INT UNSIGNED NOT NULL,
itemDescription VARCHAR(128) NOT NULL,
itemPrice DECIMAL(12,2),
FOREIGN KEY (itemShopId) REFERENCES shop(shopId),
FOREIGN KEY (itemProfileId) REFERENCES profile(profileId),
PRIMARY KEY (itemShopId, itemProfileId)

);

INSERT profile(`profileId`,`profileUserName`, `profileSalt`,`profileHash`)
VALUES(2,"godfrey","artrenai", "cool");

UPDATE profile SET profileUserName



