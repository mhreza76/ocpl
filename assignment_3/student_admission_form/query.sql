CREATE TABLE `ocpl`.`admission`
(
    `id`                 INT(20)      NOT NULL AUTO_INCREMENT,
    `department`         VARCHAR(100) NOT NULL,
    `program`            VARCHAR(100) NOT NULL,
    `firstname`          VARCHAR(100) NOT NULL,
    `lastname`           VARCHAR(100) NOT NULL,
    `fathersName`        VARCHAR(100) NOT NULL,
    `mothersName`        VARCHAR(100) NOT NULL,
    `email`              VARCHAR(100) NOT NULL,
    `contactNumber`      VARCHAR(30)  NOT NULL,
    `gender`             VARCHAR(20)  NOT NULL,
    `birthDate`          DATE         NOT NULL,
    `nationality`        VARCHAR(30)  NOT NULL,
    `addressline`        VARCHAR(100) NOT NULL,
    `district`           VARCHAR(30)  NOT NULL,
    `state`              VARCHAR(30)  NOT NULL,
    `postCode`           INT(20)      NOT NULL,
    `registrationNumber` INT(30)      NOT NULL,
    `sscExam`            VARCHAR(30)  NOT NULL,
    `sscRollNumber`      INT(30)      NOT NULL,
    `sscBoard`           VARCHAR(30)  NOT NULL,
    `sscGpa`             DOUBLE(3, 2) NOT NULL,
    `sscGroup`           VARCHAR(30)  NOT NULL,
    `sscPassingYear`     INT(10)      NOT NULL,
    `hscExam`            VARCHAR(30)  NOT NULL,
    `hscRollNumber`      INT(30)      NOT NULL,
    `hscBoard`           VARCHAR(30)  NOT NULL,
    `hscGpa`             DOUBLE(3, 2) NOT NULL,
    `hscGroup`           VARCHAR(30)  NOT NULL,
    `hscPassingYear`     INT(10)      NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


INSERT INTO `admission` (`id`, `department`, `program`, `firstname`, `lastname`, `fathersName`, `mothersName`, `email`,
                         `contactNumber`, `gender`, `birthDate`, `nationality`, `addressline`, `district`, `state`,
                         `postCode`, `registrationNumber`, `sscExam`, `sscRollNumber`, `sscBoard`, `sscGpa`, `sscGroup`,
                         `sscPassingYear`, `hscExam`, `hscRollNumber`, `hscBoard`, `hscGpa`, `hscGroup`,
                         `hscPassingYear`)
VALUES (NULL, 'cse', 'cse', 'Md. Mahmudul Hasan', 'Reza', 'test', 'test', 'test@@gmail.com', '+8801633613553', 'male',
        '2021-04-18', 'BANGLADESHI', 'Sector 11, Read 16, House 123, Uttara ', 'Dhaka', 'Dhaka', '1230', '124544454',
        'SSC/Equivalent', '45345', 'rajshahi', '5.00', 'science', '2014', 'HSC/Equivalent', '4545', 'dhaka', '5.00',
        'science', '2021');