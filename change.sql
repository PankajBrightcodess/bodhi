ALTER TABLE `tmp_donation` ADD `last` VARCHAR(255) NOT NULL AFTER `name`;
ALTER TABLE `tmp_donation` ADD `added_on` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `checkvalue`;
CREATE TABLE `db_bodhiwire`.`tmp_payment` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `full_name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `phone` VARCHAR(20) NOT NULL , `amount` FLOAT(14,2) NOT NULL , `currency` VARCHAR(100) NOT NULL , `payment_id` TEXT NOT NULL , `error_desc` TEXT NOT NULL , `payment_status` VARCHAR(200) NOT NULL , `tranid` TEXT NOT NULL , `pay_token_id` TEXT NOT NULL , `added_on` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `tmp_payment` ADD `vpa` TEXT NOT NULL AFTER `pay_token_id`;
ALTER TABLE `tmp_donation` ADD `tranid` VARCHAR(255) NOT NULL AFTER `pan`;



-------not done---------
ALTER TABLE `tmp_donation` CHANGE `pan` `pan` VARCHAR(255) NOT NULL;



INSERT INTO `tmp_donation` (`tranid`, `amount`, `name`, `last`, `email`, `type`, `phone`, `pan`, `checkvalue`) VALUES ('230204-5954', '500', 'Brightcode', 'Tiwari', 'brightcodesoftware@gmail.com', 'Monthly', '07808360437', 'PG45354K', '1')