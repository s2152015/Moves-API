ALTER TABLE  `users` ADD  `mobileno` VARCHAR( 255 ) NULL


CREATE TABLE `alsalama`.`newsletters` ( 
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NULL ,
`job` VARCHAR( 255 ) NULL ,
`desc` TEXT NULL
) ENGINE = INNODB