
SET NAMES utf8;
SET
time_zone = '+00:00';
SET
foreign_key_checks = 0;
SET
sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `test_app`;
CREATE TABLE `test_app`
(
    `id`       int(11) NOT NULL AUTO_INCREMENT,
    `email`    varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `country`  varchar(10) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `district` varchar(50) COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
    `thana`    varchar(50) COLLATE utf8mb4_unicode_ci  DEFAULT NULL,
    `state`    varbinary(100) DEFAULT NULL,
    `province` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `name`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `address`  varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `status`   tinyint(4) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `test_app`(`id`, `email`, `country`, `district`, `thana`, `state`, `province`, `name`, `address`, `status`)
VALUES ('1', 'test@hotmail.com', 'Bangladesh', 'test District', 'test Thana', NULL, NULL, 'test Name', 'test Address',
        NULL);
