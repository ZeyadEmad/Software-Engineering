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
	`type id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Add extra` (
	`id` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Courses` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`cousre name` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`course code` varchar NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Group` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Group name` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`course code id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Group details` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Group number` INT NOT NULL AUTO_INCREMENT,
	`From time` TIME NOT NULL AUTO_INCREMENT,
	`To time` TIME NOT NULL AUTO_INCREMENT,
	`year` INT NOT NULL AUTO_INCREMENT,
	`Group name id` INT NOT NULL,
	`room no` INT NOT NULL,
	`calendar id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `message` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`message title` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	`text id` INT NOT NULL,
	`page no` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Add message` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`text message` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pages` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`page no` INT NOT NULL AUTO_INCREMENT,
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
	`type translate id` INT NOT NULL,
	`words description id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Translate type` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Type translation` VARCHAR(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Word` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`word description` varchar NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Grades` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`value` varchar NOT NULL AUTO_INCREMENT,
	`percentage` FLOAT NOT NULL AUTO_INCREMENT,
	`course name id` INT NOT NULL,
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
	`user type id` INT NOT NULL,
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
	`courses id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `User` ADD CONSTRAINT `User_fk0` FOREIGN KEY (`type id`) REFERENCES `Usertype`(`id`);

ALTER TABLE `User extra details` ADD CONSTRAINT `User extra details_fk0` FOREIGN KEY (`type id`) REFERENCES `Usertype`(`id`);

ALTER TABLE `Group` ADD CONSTRAINT `Group_fk0` FOREIGN KEY (`course code id`) REFERENCES `Courses`(`id`);

ALTER TABLE `Group details` ADD CONSTRAINT `Group details_fk0` FOREIGN KEY (`Group name id`) REFERENCES `Group`(`id`);

ALTER TABLE `Group details` ADD CONSTRAINT `Group details_fk1` FOREIGN KEY (`calendar id`) REFERENCES `Calender`(`id`);

ALTER TABLE `message` ADD CONSTRAINT `message_fk0` FOREIGN KEY (`text id`) REFERENCES `Add message`(`id`);

ALTER TABLE `message` ADD CONSTRAINT `message_fk1` FOREIGN KEY (`page no`) REFERENCES `pages`(`id`);

ALTER TABLE `Translate` ADD CONSTRAINT `Translate_fk0` FOREIGN KEY (`type translate id`) REFERENCES `Translate type`(`id`);

ALTER TABLE `Translate` ADD CONSTRAINT `Translate_fk1` FOREIGN KEY (`words description id`) REFERENCES `Word`(`id`);

ALTER TABLE `Grades` ADD CONSTRAINT `Grades_fk0` FOREIGN KEY (`course name id`) REFERENCES `Courses`(`id`);

ALTER TABLE `News` ADD CONSTRAINT `News_fk0` FOREIGN KEY (`type id`) REFERENCES `News type`(`id`);

ALTER TABLE `Attendence` ADD CONSTRAINT `Attendence_fk0` FOREIGN KEY (`user type id`) REFERENCES `Usertype`(`id`);

ALTER TABLE `Timetable` ADD CONSTRAINT `Timetable_fk0` FOREIGN KEY (`user type id`) REFERENCES `Timetable user type`(`id`);

ALTER TABLE `Payment` ADD CONSTRAINT `Payment_fk0` FOREIGN KEY (`courses id`) REFERENCES `Courses`(`id`);

