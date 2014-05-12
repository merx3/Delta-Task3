START TRANSACTION;

CREATE DATABASE menu_access;
Use menu_access;

CREATE TABLE `users`(
	`user_id` INT UNSIGNED NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`password` VARCHAR(50) NOT NULL,
	`is_admin` TINYINT(1),
	PRIMARY KEY(`user_id`)
);

CREATE TABLE `groups`(
	`group_id` INT UNSIGNED NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY(`group_id`)	
);

CREATE TABLE `menus`(
	`menu_id` INT UNSIGNED NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`group_id` INT UNSIGNED NOT NULL,
	`parent_menu_id` INT UNSIGNED NULL,
	`action` VARCHAR(255) NULL,
	PRIMARY KEY(`menu_id`),
	FOREIGN KEY(`group_id`) REFERENCES groups(`group_id`),
	FOREIGN KEY(`parent_menu_id`) REFERENCES `menus`(`menu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
);

CREATE TABLE `users_groups`(
	`user_id` INT UNSIGNED NOT NULL,
	`group_id`INT UNSIGNED NOT NULL,
	PRIMARY KEY(`user_id`, `group_id`),
	FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON UPDATE CASCADE,
	FOREIGN KEY (`group_id`) REFERENCES `groups`(`group_id`) ON UPDATE CASCADE
);

COMMIT;