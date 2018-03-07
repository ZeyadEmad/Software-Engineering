CREATE TABLE `User` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`First name` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`last name` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`age` INT NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`password` varchar NOT NULL AUTO_INCREMENT,
	`address` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`telephppone` varchar NOT NULL AUTO_INCREMENT,
	`gender` varchar NOT NULL AUTO_INCREMENT,
	`type id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Usertype` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `User extra details` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Add extra` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`usertype id ` INT NOT NULL,
	`extradetails id` INT NOT NULL,
	`value` varchar NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Courses` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`cousre name` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`Level` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Group` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`userid` INT NOT NULL,
	`groupdetailsid` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Group details` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Group code` INT NOT NULL AUTO_INCREMENT,
	`From time` TIME NOT NULL AUTO_INCREMENT,
	`To time` TIME NOT NULL AUTO_INCREMENT,
	`year` INT NOT NULL AUTO_INCREMENT,
	`room no` INT NOT NULL,
	`calendar id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `message` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`message title` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Add message` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`messageid` INT NOT NULL,
	`pageid` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pages` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`html` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(255),
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Calender` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`day` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`month` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`year` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Translate` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`word` BINARY NOT NULL,
	`translate` BINARY NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `language` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Type translation` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Word` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`word description` varchar NOT NULL AUTO_INCREMENT,
	`Languageid` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Grades` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`value` varchar NOT NULL AUTO_INCREMENT,
	`percentage` FLOAT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `News` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`news title` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`news description` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`type id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `News type` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Attendence` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`value` BOOLEAN NOT NULL AUTO_INCREMENT,
	`attendance date ` DATETIME NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Timetable` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`start date` DATETIME NOT NULL AUTO_INCREMENT,
	`end date` DATETIME NOT NULL AUTO_INCREMENT,
	`user type id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Timetable user type` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Payment` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`payment type` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`amount` FLOAT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Usertypepages` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`pageid` INT NOT NULL,
	`usertypeid` INT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `User` ADD CONSTRAINT `User_fk0` FOREIGN KEY (`type id`) REFERENCES `Usertype`(`id`);

ALTER TABLE `Add extra` ADD CONSTRAINT `Add extra_fk0` FOREIGN KEY (`usertype id `) REFERENCES `Usertype`(`id`);

ALTER TABLE `Add extra` ADD CONSTRAINT `Add extra_fk1` FOREIGN KEY (`extradetails id`) REFERENCES `User extra details`(`id`);

ALTER TABLE `Group` ADD CONSTRAINT `Group_fk0` FOREIGN KEY (`userid`) REFERENCES `User`(`id`);

ALTER TABLE `Group` ADD CONSTRAINT `Group_fk1` FOREIGN KEY (`groupdetailsid`) REFERENCES `Group details`(`id`);

ALTER TABLE `Group details` ADD CONSTRAINT `Group details_fk0` FOREIGN KEY (`calendar id`) REFERENCES `Calender`(`id`);

ALTER TABLE `Add message` ADD CONSTRAINT `Add message_fk0` FOREIGN KEY (`messageid`) REFERENCES `pages`(`id`);

ALTER TABLE `Add message` ADD CONSTRAINT `Add message_fk1` FOREIGN KEY (`pageid`) REFERENCES `message`(`id`);

ALTER TABLE `Translate` ADD CONSTRAINT `Translate_fk0` FOREIGN KEY (`word`) REFERENCES `Word`(`id`);

ALTER TABLE `Translate` ADD CONSTRAINT `Translate_fk1` FOREIGN KEY (`translate`) REFERENCES `Word`(`id`);

ALTER TABLE `Word` ADD CONSTRAINT `Word_fk0` FOREIGN KEY (`Languageid`) REFERENCES `language`(`id`);

ALTER TABLE `News` ADD CONSTRAINT `News_fk0` FOREIGN KEY (`type id`) REFERENCES `News type`(`id`);

ALTER TABLE `Timetable` ADD CONSTRAINT `Timetable_fk0` FOREIGN KEY (`user type id`) REFERENCES `Timetable user type`(`id`);

ALTER TABLE `Usertypepages` ADD CONSTRAINT `Usertypepages_fk0` FOREIGN KEY (`pageid`) REFERENCES `pages`(`id`);

ALTER TABLE `Usertypepages` ADD CONSTRAINT `Usertypepages_fk1` FOREIGN KEY (`usertypeid`) REFERENCES `Usertype`(`id`);

