DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;
USE dolphin_crm;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    `id` INT unsigned AUTO_INCREMENT,
    `firstname` VARCHAR(255) NOT NULL ,
    `lastname` VARCHAR(255) NOT NULL ,
    `password` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(50) NOT NULL ,
    `role` VARCHAR(255) NOT NULL ,
    `created_at` DATETIME NOT NULL ,
    PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8;
 
INSERT INTO `user` VALUES('id','testuserfname', 'testuserlname', 'password123', 'admin@project2.com','Admin', SYSDATE()),
(1,'Gabrielle ', 'Scott', MD5('password123'), 'gabriellescott@project2.com', 'Admin',SYSDATE());


DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(25) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL ,
    `lastname` VARCHAR(255) NOT NULL ,
    `telephone` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(50) NOT NULL ,
    `company` varchar(20) NOT NULL default '',
    `type` VARCHAR(25) NOT NULL,
    `assigned_to` INT(25) NOT NULL,
    `created_by` INT(25) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8;

INSERT INTO `contacts` VALUES('200','Ms', 'Gabrielle ', 'Scott','8767854632','gabriellescott@project2.com',
 'Apple','SalesLead', 1, 0, SYSDATE(), SYSDATE());

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `contact_id` INT(25) NOT NULL,
    `comment` TEXT(555) NOT NULL,
    `created_by` INT(25) NOT NULL,
    `created_at` DATETIME NOT NULL,
    PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4080 DEFAULT CHARSET=utf8;



INSERT INTO `notes` VALUES('200','11', 'Customer has been added', 0,SYSDATE()),
('201','12', 'Customer was not added', 0,SYSDATE())


/* GRANT ALL PRIVILEGES ON dolphin_crm.* TO 'new_user'@'localhost'IDENTIFIED BY 'password123';*/